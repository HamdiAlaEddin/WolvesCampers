<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use App\Models\Event;
use App\Models\ReserverEvent;
use App\Models\ReserverRondo;
use App\Models\Rondo;
use App\Models\User;
use Illuminate\Http\Request;
class EventController extends Controller
{
    /*
  * fuction to go page ajouter Event
  */
    public function goAjouterEvent(){
        return view('Evenement.ajouterEvent');
    }
    /*
     * function to add event in data base
     */
    public function storeEvent(Request $request){
        Event::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'date'=>$request->date,
            'prix'=>$request->prix,
            'place'=>$request->place,
            'image'=>$request->image,
        ]);
        return 'Ajout Evénement terminé avec succés';}
        /*
 * function to get all Event
 */
        public function getAllEvent(){
            $Events = Event::all();
            return view('Evenement.consulterEvent', compact('Events'));
        }

    public function getAllEvent3()
    {
        $Events = Event::all();
        return view('Evenement.consulterClient', compact('Events'));
    }

    public function getAllEvent2(){
        $Events = Event::all();
        $res = [];

        foreach ($Events as $e) {
            $res[$e->id] = ReserverEvent::where('event_id', $e->id)->get();
        }
        return view('Evenement.reserverClient', compact('Events','res'));

    }
    public function deleteEvent($id){
        Event::find($id)->delete();
        return redirect()->back();
    }
    public function goeditEvent($id){
        $Event = Event::find($id);
        return view('Evenement.modifier',compact('Event'));
    }

    public function editEvent(Request $request,$id){
        $Event = Event::find($id);
        $Event->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'date'=>$request->date,
            'place'=>$request->place,
            'prix'=>$request->prix,
            'image'=>$request->image,
        ]);
        return "modification évenement terminée avec succes :) ";

    }
    public function affecterResponsable($id){
        $event_id = $id;
        $admins = User::all()->where('role','=','admin');
        return view('evenement.affecter',compact('admins','event_id'));
       // return $admins;
    }
    public function affectRes(Request $request){
        $event = Event::find($request->event_id);
        $event->update([
            'id_Responsable'=>$request->id_Responsable,
        ]);
        return redirect()->route('getAllEvent');
   // return $request;
    }
    public function rejeterresponsable($id){
        $event = Event::find($id);
        $event->update([
            'id_Responsable'=>null,
        ]);
        return redirect()->route('getAllEvent');
    }
}
