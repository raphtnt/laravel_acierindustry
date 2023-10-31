<?php

use App\Http\Controllers\InterimController;
use App\Http\Controllers\StatsController;
use App\Models\Run;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

    $user = User::all();
    $t = [];
    foreach ($user as $u) {
        $t = array_merge($t, [$u->firstname[0].'. '.$u->lastname => $u->interim()->where('weeks', now()->format('W'))->where('status', '=', "Terminé")->count()]);
    }
    arsort($t);

//    $firstKey = array_keys($t)[0];

    return view('welcome', [
        "classements" => $t
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'lastruns' => Run::where('user_id_interim', 'LIKE', Auth::id())->orderBy('updated_at', 'DESC')->paginate(5)
        ]);
    })->name('dashboard');
});


Route::prefix('/interim')->controller(InterimController::class)->group(function () {

//    Route::group(['middleware' => ['permission:utilisateurs']], function () {

    Route::group(['middleware' => ['permission:interim']], function () {
        Route::get('/list', 'interimList')->name('interim.list');
        Route::get('/create', 'interimCreate')->name('interim.create');
        Route::post('/create', 'interimCreatePost');
        Route::get('/run', 'interimRun')->name('interim.run');

        Route::get('/vt', function () {
            return view('vt');
        })->name('vt');

    });
});

Route::prefix('/stats')->controller(StatsController::class)->group(function () {
    Route::group(['middleware' => ['permission:stats']], function () {
        Route::get('/', 'stats')->name('stats');
        Route::get('/fs', 'ficheSalary')->name('ficheSalary');
    });

//    Route::group(['middleware' => ['permission:utilisateurs']], function () {

});
