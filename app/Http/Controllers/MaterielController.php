<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    /*
     * fuction to go page ajouter materiel
     */
    public function goAjouterMateriel(){
        return view('materiels.ajouterMateriel');
    }
    /*
     * function to add tools in database
     */
    public function storeMateriel(Request $request){
        Materiel::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'quantite'=>$request->quantite,
            'prix'=>$request->prix,
            'etat'=> true,
            'image'=>$request->image,
            'option'=>$request->option,
        ]);
        if ($request->option == 'vente'){
            return redirect()->route('getVenteMateriel');
        }
        else if($request->option == 'location'){
            return redirect()->route('getLocationMateriel');
        }
        return response('ERROR AJOUT!');
    }
    /*
     * function to get all material
     */
    public function getAllMateriel(){
        $materiels = Materiel::all();
        return view('materiels.consulter',compact('materiels'));
        //return $materiels;
        }
    public function getAllMateriel2(){
        $materiels = Materiel::all();
        return view('materiels.consulterClient',compact('materiels'));
        //return $materiels;
    }
        public function getVenteMateriel()
        {
            $materiels = Materiel::where('option', 'vente')->get();

            return view('materiels.consulterVente', compact('materiels'));
        }
    public function getVentMateriel()
    {
       // $materiels = Materiel::all();
        $materiels = Materiel::where('option', 'vente')->get();
       return view('materiels.acheterClient', compact('materiels'));
       // return 'te5dem';
    }
        public function getLocationMateriel()
        {
            $materiels = Materiel::where('option', 'location')->get();

            return view('materiels.consulter', compact('materiels'));
        }
    public function getLocationMateriel2()
    {
        $materiels = Materiel::where('option', 'location')->get();

        return view('materiels.louerclient', compact('materiels'));
    }


    /*
     * function to delete material
     */
    public function deleteMateriel($id){
        Materiel::find($id)->delete();
     //return redirect()->route('getAllMateriel');
        return redirect()->back();
    }
    /*
     *fuction goedit materiel
     */
    public function goeditMateriel($id){
        $materiel = materiel::find($id);
        return view('Materiels.editMateriel',compact('materiel'));
    }
    /*
     *
     */
    public function test(){
        return 'Middleware jawou behi';
    }
    /*
     *function edit
     */
    public function editmateriel(Request $request,$id){
        $materiel = Materiel::find($id);
        $materiel->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'quantite'=>$request->quantite,
            'prix'=>$request->prix,
            'etat'=> true,
            'image'=>$request->image,
            'option'=>$request->option,
        ]);
        return response('Modif avec succes!');
    }
}
