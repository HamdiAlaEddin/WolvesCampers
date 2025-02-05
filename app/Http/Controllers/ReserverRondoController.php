<?php

namespace App\Http\Controllers;

use App\Models\AchatMateriel;
use App\Models\Materiel;
use App\Models\ReserverRondo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ReserverRondoController extends Controller
{
  public function ReservRondo($id){
           //  Récupérer l'utilisateur connecté
            $user = auth()->user();
            $client = $user->client;

           //  Récupérer la date d'aujourd'hui
        $datetoday = Carbon::now()->toDateString();
      ReserverRondo::create([
          'client_id' => $client->id,
          'rondo_id' => $id, // Utilisation de la variable rondo_id
          'type_reservation' => 'null',
          'date' =>$datetoday,
      ]);
           // return 'Reservation terminé avec succés';
       return redirect()->back();

       }
    public function annulerReservation(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $client = $user->client;
        $reservations = ReserverRondo::where('client_id', $client->id)->get();

        foreach ($reservations as $reservation) {
            $reservation->delete();
        }
        return redirect()->back();
    }
    public function consultReserv(){
        $reservation = ReserverRondo::all();
        return view('rondo.reservation',compact('reservation'));
    }
}
