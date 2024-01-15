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
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!')->with('type', 'success');;
    }
    public function events(){
        return view('events.listall');
    }
    public function event($id){
        $event = Event::find(1);
        $event = $event::where('id', $id)->first();
        return view('events.one', ['event' => $event]);
    }
}
