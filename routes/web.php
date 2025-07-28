<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\easycookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route::get('/', function () {
    return view('index');
});	
	SELECT resep.id_resep,resep.title,ayam FROM resep, 
	( SELECT id_resep,ayam FROM model ) AS models 
	WHERE resep.id_resep = models.id_resep 
	ORDER BY `models`.`ayam` DESC

*/


route::get('/',[EasycookController::class,'index']);

route::get('/search',[EasycookController::class,'search']);

Route::get('/testdb', function () {
    return view('testdb');
});