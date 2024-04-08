<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/exemple-service', function () {

  return "Bienvenue sur le service d'exemple!";
});

Route::post('/exemple-service',  [ServiceController::class, 'create']);

// Route::get('/token', function () {
//   return csrf_token();
// });

 