<?php

namespace App\Http\Controllers;

use App\Models\AchatMateriel;
use App\Models\Materiel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AchatMaterielController extends Controller
{

    public function goAcheterMateriel($id){
        $materiel = Materiel::find($id);
        return view('materiels.commanderClient',compact("materiel"));

    }
    public function Acheter(Request $request){
       //  Récupérer l'utilisateur connecté
        $user = auth()->user();
        $client = $user->client;

       //  Récupérer la date d'aujourd'hui
        $dateAujourdhui = Carbon::now()->toDateString();

        AchatMateriel::create([
            'client_id'=>$client->id,
            'materiel_id'=>$request->materiel_id,
            'materiel_nom'=>$request->materiel_nom,
            'prix'=>$request->prix,
            'prix_total'=>$request->prix * $request->quantite,
            'quantite'=>$request->quantite,
            'date'=>$dateAujourdhui,

        ]);
        //mise ajour quantite
        $materiel = Materiel::find($request->materiel_id);
        $materiel->update([
            'quantite'=>$materiel->quantite-$request->quantite,
        ]);
        return 'Achat terminé avec succés';
     //   return $request;

    }
}
