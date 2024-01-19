<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();
        $events = $user->events;
        $eventsAsParticipants = $user->eventsAsParticipants;
        return view('dashboard', ['events' => $events, 'eventsAsParticipants'=> $eventsAsParticipants]);
    }
    public function destroy($id) {
        Event::findOrFail($id)->delete();
        
        return redirect('/dashboard')->with('msg', 'Evento deletado com sucesso!')->with('type', 'success');
    }
    public function edit($id) {
        $user = auth()->user();
        $infra = ['Cadeiras', 'Palco', 'Bebidas', 'Espaço infantil', 'Open food', 'Brindes'];
        $event = Event::findOrFail($id);
        if($user->id != $event->user->id) {
            return redirect('/dashboard');
        }
        return view('events.edit', ['event' => $event, 'infra' => $infra]);
    }
    public function update(Request $request) {
        $data = $request->all();

        // image
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $extension = $request->image->extension();
            $imageName = md5($request->image->getClientOriginalName().strtotime('now')).".".$extension;
            $request->image->move(public_path('images/events'), $imageName);
            $data['image'] = $imageName;
        }
        Event::findOrFail($request->id)->update($data);
        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!')->with('type', 'success');
    }
}
