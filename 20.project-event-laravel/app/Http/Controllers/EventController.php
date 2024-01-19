<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index(){
        $search = request('search');
        if($search){
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $events = Event::all();
        }
        return view('home', ['events' => $events, 'search' => $search]);
    }
    public function create(){
        return view('events.create');
    }
    public function store(Request $request){
        $event = new Event();
        $event->title = $request->title;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->itens = $request->itens;

        // image
        if($request->hasFile('file') && $request->file('file')->isValid()){
            $extension = $request->file->extension();
            $imageName = md5($request->file->getClientOriginalName().strtotime('now')).".".$extension;
            $request->file->move(public_path('images/events'), $imageName);
            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!')->with('type', 'success');
    }
    public function events(){
        return view('events.listall');
    }
    public function event($id){
        $event = Event::findOrFail($id);
        $user = auth()->user();
        $hasUserjoined = false;

        if($user) {
            $userEvents = $user->eventsAsParticipants->toArray();

            foreach($userEvents as $evt){
                if($evt['id'] == $id){
                    $hasUserjoined = true;
                }
            }
        }

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.one', [
            'event' => $event, 
            'eventOwner' => $eventOwner,
            'hasUserjoined' => $hasUserjoined
        ]);
    }
    public function eventJoin($id){
        $user = auth()->user();
        $user->eventsAsParticipants()->attach($id);
        $event = Event::findOrFail($id);
        return redirect('/')->with('msg', 'Sua presença está confirmada no evento '.$event->title)->with('type', 'success');
    }
    public function leaveEvent($id){
        $user = auth()->user();
        $user->eventsAsParticipants()->detach($id);
        $event = Event::findOrFail($id);
        return redirect('/dashboard')->with('msg', 'Sua presença foi desfeita do evento '.$event->title)->with('type', 'success');
    }
}
