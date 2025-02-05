<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function GoAcceuil(){
        return view('acceuil');
    }
    //function go to acceuilClient
    public function goAcceuilClient()
    {
        return view('acceuilClient');

    }
    //function go to registreclient
    public function goRegisterClient(){
     //  return 'te5dem';
         return view('RegisterClient');
    }
    /*
     * function store data in data base (user + client same time )
     */
    public function storeClient(Request $request){
        // Créer un nouvel utilisateur dans la table "users"
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'client', // Rôle par défaut
        ]);
        Client::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'telephone'=>$request->telephone,
            'role'=>'client',
            'user_id' => $user->id,
        ]);
        return 'Ajout client terminée ';

    }
    public function getAllMember(){
        $Clients = Client::all();
        return view('Membre.afficherMembre', compact('Clients'));
    }
    public function goAddAdmin()
    {
        return view('Admin.AddAdmin');

    }
    public function getAllAdmin() {
        $admins = User::where('role', 'admin')->get(); // Remplacez 'role' par le nom de votre colonne indiquant le rôle de l'utilisateur administrateur

        return view('Admin.consulterAdmin', compact('admins'));
    }

}
