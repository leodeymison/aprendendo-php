<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('home', ['events' => $events]);
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

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!')->with('type', 'success');;
    }
    public function events(){
        return view('events.listall');
    }
    public function event($id){
        $event = Event::findOrFail(1);
        $event = $event::where('id', $id)->first();
        return view('events.one', ['event' => $event]);
    }
}
