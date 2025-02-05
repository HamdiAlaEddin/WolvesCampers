<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use App\Models\ReserverRondo;
use App\Models\Rondo;
use App\Models\User;
use Illuminate\Http\Request;

class RondoController extends Controller
{
    /*
    * fuction to go page ajouter rondo
    */
    public function goAjouterRondo(){
        return view('rondo.ajouterRondo');
    }
    /*
     * function to add randos in database
     */
    public function storeRondo(Request $request){
        Rondo::create([
            'destination'=>$request->destination,
            'description'=>$request->description,
            'date'=>$request->date,
            'duree'=>$request->duree,
            'prixinscription'=>$request->prixinscription,
            'image'=>$request->image,
       ]);
       return redirect()->route('getAllRondo');

    }
    /*
    * function to get all material
    */
    public function getAllRondo(){
        $Rondos = Rondo::all();
        return view('Rondo.consulterRondo',compact('Rondos'));
        //return $rondos;
    }
    public function getAllRondo2(){
        $Rondos = Rondo::all();
        return view('Rondo.consulterClient',compact('Rondos'));

    }
    public function goReserverRondo()
    {
        $Rondos = Rondo::all();
        $reservations = [];

        foreach ($Rondos as $rondo) {
            $reservations[$rondo->id] = ReserverRondo::where('rondo_id', $rondo->id)->get();
        }
        return view('Rondo.reserverClient', compact('Rondos', 'reservations'));
    }
    /*
   * function to delete rondo
   */
    public function deleteRondo($id){
        Rondo::find($id)->delete();
        return redirect()->back();
    }
    public function goeditRondo($id){
        $Rondo = rondo::find($id);
        return view('rondo.modifier',compact('Rondo'));
    }
    public function editRondo(Request $request,$id){
        $Rondo = Rondo::find($id);
        $Rondo->update([
            'destination'=>$request->destination,
            'description'=>$request->description,
            'date'=>$request->date,
            'duree'=>$request->duree,
            'prixinscription'=>$request->prixinscription,
            'image'=>$request->image,
        ]);
        return "modification Randonée terminée avec succes :) ";

    }
    public function affecterGuide($id){
        $id_rondo = $id;
        $admins = User::all()->where('role','=','admin');
        return view('rondo.affecter',compact('admins','id_rondo'));
        //return $admins;
    }
    public function affectGid(Request $request){
        $rondo = Rondo::find($request->rondo_id);
        $rondo->update([
            'guide_id'=>$request->Admin_id,
        ]);
        return redirect()->route('getAllRondo');
    }
    public function rejeterGuide($id){
        $rondo = Rondo::find($id);
        $rondo->update([
            'guide_id'=>null,
        ]);
        return redirect()->route('getAllRondo');
    }
}
