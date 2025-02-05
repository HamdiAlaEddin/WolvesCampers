<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\LocationMateriel;
use App\Models\Materiel;
use Illuminate\Http\Request;

class LocationMaterielController extends Controller
{

    public function storeLocation(Request $request){
       //  Récupérer l'utilisateur connecté
        $user = auth()->user();
        $client = $user->client;

        LocationMateriel::create([
            'client_id'=>$client->id,
            'materiel_id'=>$request->materiel_id,
            'prix'=>$request->prix,
            'quantite'=>$request->quantite,
            'date_debut'=>$request->date_debut,
            'date_fin'=>$request->date_fin,
        ]);
        $materiel = Materiel::find($request->materiel_id);
        $materiel->update([
            'quantite' => $materiel->quantite - $request->quantite,
        ]);
        return 'Opération terminée avec succès';


    }

    public function goLouerMateriel($id){
        $materiel = Materiel::find($id);


       return view('materiels.reserverclient',compact("materiel"));

    }

}
