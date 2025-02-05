<?php

namespace App\Http\Controllers;

use App\Models\ReserverEvent;
use App\Models\ReserverRondo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReserverEventController extends Controller
{
    public function ReservEvent($id)
    {
        //  Récupérer l'utilisateur connecté
        $user = auth()->user();
        $client = $user->client;

        //  Récupérer la date d'aujourd'hui
        $datetoday = Carbon::now()->toDateString();
        ReserverEvent::create([
            'client_id' => $client->id,
            'event_id' => $id,
            'date' => $datetoday,
        ]);
        return redirect()->back();
    }
    public function annulerReserva(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $client = $user->client;
        $res = ReserverEvent::where('client_id', $client->id)->get();

        foreach ($res as $res) {
            $res->delete();
        }
        return redirect()->back();
    }
    public function consultReserv(){
        $reservation = ReserverEvent::all();
        return view('Evenement.reservation',compact('reservation'));
    }
}
