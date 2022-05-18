<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
<<<<<<< HEAD
use App\Http\Controllers\PostController;
=======
use App\Http\Controllers\PostsController;
>>>>>>> d9a58528b49f903808445762182ebad212744fe2
use App\Http\Controllers\ServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
|


Route::get('/', function () {
    return view('welcome');
});
*/
//public pages
Route::get('/', [PagesController::class, 'index']);
Route::get('/pages/archeologisch-onderzoek', [PagesController::class, 'onderzoek']);

//Diensten
Route::get('/diensten/aardewerk-uit-de-middeleeuwen-en-de-nieuwe-tijd', [ServicesController::class, 'aardewerkuitdemiddeleeuwenendenieuwetijd']);
Route::get('/diensten/advies-en-projectbegeleiding', [ServicesController::class, 'adviesenprojectbegeleiding']);
Route::get('/diensten/archeobotanie', [ServicesController::class, 'archeobotanie']);
Route::get('/diensten/archeologisch-leer', [ServicesController::class, 'archeologischleer']);
Route::get('/diensten/bureau-onderzoek', [ServicesController::class, 'bureauonderzoek']);
Route::get('/diensten/deponeren', [ServicesController::class, 'deponeren']);
Route::get('/diensten/dierlijk-botmateriaal', [ServicesController::class, 'dierlijkbotmateriaal']);
Route::get('/diensten/digitaliseren', [ServicesController::class, 'digitaliseren']);
Route::get('/diensten/directievoering-of-projectleiding-bij-een-opgraving', [ServicesController::class, 'directievoeringofprojectleidingbijeenopgraving']);
Route::get('/diensten/expositie-en-restauratie', [ServicesController::class, 'expositieenrestauratie']);
Route::get('/diensten/fysisch-geografisch-onderzoek', [ServicesController::class, 'fysischgeografischonderzoek']);
Route::get('/diensten/fysische-antropologie', [ServicesController::class, 'fysischeantropologie']);
Route::get('/diensten/glas-bouwmateriaal-pijpaarde-metaal', [ServicesController::class, 'glasbouwmateriaalpijpaardemetaal']);
Route::get('/diensten/historisch-onderzoek', [ServicesController::class, 'historischonderzoek']);
Route::get('/diensten/inventariserend-booronderzoek', [ServicesController::class, 'inventariserendbooronderzoek']);
Route::get('/diensten/karterend-booronderzoek', [ServicesController::class, 'karterendbooronderzoek']);
Route::get('/diensten/natuursteen', [ServicesController::class, 'natuursteen']);
Route::get('/diensten/object-fotografie', [ServicesController::class, 'objectfotografie']);
Route::get('/diensten/opstellen-pva', [ServicesController::class, 'opstellenpva']);
Route::get('/diensten/opstellen-pve', [ServicesController::class, 'opstellenpve']);
Route::get('/diensten/prehistorisch-aardewerk', [ServicesController::class, 'prehistorischaardewerk']);
Route::get('/diensten/proefsleuvenonderzoek', [ServicesController::class, 'proefsleuvenonderzoek']);
Route::get('/diensten/projectleiding-veldwerk', [ServicesController::class, 'projectleidingveldwerk']);
Route::get('/diensten/sporen-structuren-en-synthese', [ServicesController::class, 'sporenstructurenensynthese']);
Route::get('/diensten/verkennend-booronderzoek', [ServicesController::class, 'verkennendbooronderzoek']);
Route::get('/diensten/vondstverwerking', [ServicesController::class, 'vondstverwerking']);
Route::get('/diensten/voorwerptekenen', [ServicesController::class, 'voorwerptekenen']);
Route::get('/diensten/vuursteen', [ServicesController::class, 'vuursteen']);
Route::get('/diensten/waarderend-booronderzoek', [ServicesController::class, 'waarderendbooronderzoek']);
Route::get('/diensten/', [ServicesController::class, '']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//post resource route(!auth)
<<<<<<< HEAD
Route::resource('posts', \App\Http\Controllers\PostController::class);
=======
Route::resource('posts', PostsController::class);
>>>>>>> d9a58528b49f903808445762182ebad212744fe2
