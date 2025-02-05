<?php

use App\Http\Controllers\AchatMaterielController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LocationMaterielController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RondoController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserverRondoController;
use App\Http\Controllers\ReserverEventController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    Route::get('/test', [MaterielController::class, 'test'])->name('test');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //route materiel
    Route::get('/GestionProjet/AjouterMateriel', [MaterielController::class, 'goAjouterMateriel'])->name('goAjouterMateriel');
    Route::post('/GestionProjet/storeMateriel', [MaterielController::class, 'storeMateriel'])->name('storeMateriel');
    //consultermateriel
    Route::get('/GestionProjet/MaterielLocation', [MaterielController::class, 'getLocationMateriel'])->name('getLocationMateriel');
    Route::get('/GestionProjet/MaterielVente', [MaterielController::class, 'getVenteMateriel'])->name('getVenteMateriel');
    //ModifierMateriel
    Route::get('/GestionProjet/MaterielModifier/{id}', [MaterielController::class, 'goeditMateriel'])->name('goeditMateriel');
    Route::put('/GestionProjet/MaterielModifier/{id}', [MaterielController::class, 'editMateriel'])->name('editMateriel');

    //supprimermateriel
    Route::delete('/GestionProjet/SupprimerMateriel/{id}', [MaterielController::class, 'deleteMateriel'])->name('deleteMateriel');
    //routeRondo
    Route::get('/GestionProjet/goAjouterRondo', [RondoController::class, 'goAjouterRondo'])->name('goAjouterRondo');
    Route::post('/GestionProjet/storeRondo', [RondoController::class, 'storeRondo'])->name('storeRondo');
    //consulterRondo
    Route::get('/GestionProjet/ConsulterRondo', [RondoController::class, 'getAllRondo'])->name('getAllRondo');
    //ModifierRondo
    Route::get('/GestionProjet/RondoModifier/{id}', [RondoController::class, 'goeditRondo'])->name('goeditRondo');
    Route::put('/GestionProjet/RondoModifier/{id}', [RondoController::class, 'editRondo'])->name('editRondo');

    //supprimerRondo
    Route::delete('/GestionProjet/SupprimerRondo/{id}', [RondoController::class, 'deleteRondo'])->name('deleteRondo');
    //consult-reservation-rondo
    Route::get('/GestionProjet/Rondo/Reservation', [ReserverRondoController::class, 'consultReserv'])->name('consultReserv');
    //affecter-guide-rondo
    Route::get('/GestionProjet/Rondo/AffecterGuide/{id}', [RondoController::class, 'affecterGuide'])->name('affecterGuide');
    Route::post('/GestionProjet/Rondo/AffecterGuide', [RondoController::class, 'affectGid'])->name('affectGid');
    Route::get('/GestionProjet/Rondo/rejeterGuide/{id}', [RondoController::class, 'rejeterGuide'])->name('rejeterGuide');

    //route Evenement
    Route::get('/GestionProjet/AjouterEvenement', [EventController::class, 'goAjouterEvent'])->name('goAjouterEvent');
    Route::post('/GestionProjet/storeEvenement', [EventController::class, 'storeEvent'])->name('storeEvent');
    //consulterEvenement
    Route::get('/GestionProjet/ConsulterEvenement', [EventController::class, 'getAllEvent'])->name('getAllEvent');
    //consulterReservationEvenement
    Route::get('/GestionProjet/Event/Reservation', [ReserverEventController::class, 'consultReserv'])->name('consultReservev');
//affecter-responsable-event
    Route::get('/GestionProjet/Event/AffecterResponsable/{id}', [EventController::class, 'affecterResponsable'])->name('affecterResponsable');
    Route::post('/GestionProjet/Event/AffectResponsable', [EventController::class, 'affectRes'])->name('affectRes');
    Route::get('/GestionProjet/Event/RejeterResponsable/{id}', [EventController::class, 'rejeterresponsable'])->name('rejeterResponsable');

    //modifierEvent
    Route::get('/GestionProjet/EvenementModifier/{id}', [EventController::class, 'goeditEvent'])->name('goeditEvent');
    Route::put('/GestionProjet/EvenementModifier/{id}', [EventController::class, 'editEvent'])->name('editEvent');
    //deleteEvenement
    Route::delete('/GestionProjet/SupprimerEvenement/{id}', [EventController::class, 'deleteEvent'])->name('deleteEvent');
    //consulterMembre
    Route::get('/GestionProjet/ConsulterMembre', [ClientController::class, 'getAllMember'])->name('getAllMember');

    //AjouterAdmin
    Route::get('/GestionProjet/AjouterAdmin', [ClientController::class, 'goAddAdmin'])->name('goAddAdmin');
    //ConsulterAdmin
    Route::get('/GestionProjet/ConsulterAdmin', [ClientController::class, 'getAllAdmin'])->name('getAllAdmin');

    //route acceuil
    Route::get('/EspaceAdmin/acceuil',[ClientController::class, 'GoAcceuil'])->name('GoAcceuil');


});
Route::middleware(['auth','client'])->prefix('client')->group(function () {
//routeClient
    Route::get('/EspaceClient/Acceuil', [ClientController::class, 'goAcceuilClient'])->name('goAcceuilClient');

//route-Materiel-client
    Route::get('/EspaceClient/ConsulterMateriel', [MaterielController::class, 'getAllMateriel2'])->name('getAllMateriel2');
    Route::get('/EspaceClient/AcheterMateriel', [MaterielController::class, 'getVentMateriel'])->name('getVentMateriel');
    Route::get('/EspaceClient/LouerMateriel', [MaterielController::class, 'getLocationMateriel2'])->name('getLocationMateriel2');
//routeCommande-et-location MaterielClient
    Route::get('/EspaceClient/AcheterMateriel/Commander/{id}', [AchatMaterielController::class, 'goAcheterMateriel'])->name('goAcheterMateriel');
    Route::post('/EspaceClient/AcheterMateriel/Commander', [AchatMaterielController::class, 'Acheter'])->name('Acheter');

    Route::get('/EspaceClient/LouerMateriel/Louer/{id}',[LocationMaterielController::class,'goLouerMateriel'])->name('goLouerMateriel');
    Route::post('/EspaceClient/LouerMateriel/Louer', [LocationMaterielController::class, 'storeLocation'])->name('storeLocation');

    //route-rondo-client
    Route::get('/EspaceClient/ConsulterRondo', [RondoController::class, 'getAllRondo2'])->name('getAllRondo2');
    Route::get('/EspaceClient/ReserverRondo', [RondoController::class, 'goReserverRondo'])->name('goReserverRondo');
    //reserverrondo
    Route::get('/EspaceClient/ReserverRondo/{id}', [ReserverRondoController::class, 'ReservRondo'])->name('ReservRondo');
    //annulerReservation
    Route::delete('/EspaceClient/ReserverRondo/{id}', [ReserverRondoController::class, 'annulerReservation'])->name('annulerReservation');

    //route-evenement-client
    Route::get('/EspaceClient/ReserverEvenement', [EventController::class, 'getAllEvent2'])->name('getAllEvent2');
    Route::get('/EspaceClient/ConsulterEvenement', [EventController::class, 'getAllEvent3'])->name('getAllEvent3');
    //reserverEvent-client
    Route::get('/EspaceClient/ReserverEvent/{id}', [ReserverEventController::class, 'ReservEvent'])->name('ReservEvent');
    //annuler-res-event
    Route::delete('/EspaceClient/ReserverEvent/{id}', [ReserverEventController::class, 'annulerReserva'])->name('annulerReserva');


});


Route::middleware('auth')->group(function () {


});


//ROUTE-REGISTER-CLIENT
Route::get('/RegisterClient', [ClientController::class, 'goRegisterClient'])->name('goRegisterClient');
Route::post('/RegisterClient/storeClient', [ClientController::class, 'storeClient'])->name('storeClient');

require __DIR__ . '/auth.php';

