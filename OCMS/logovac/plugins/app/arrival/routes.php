<?php
use Illuminate\Support\Facades\Route;
use App\Arrival\Models\Arrival;
Route::get('test', function() {
    return 'test';
});

Route::get('arrivals', function () {
    return Arrival::all();
});

Route::post('post_arrivals', function (){
    $arrival = new Arrival;
    $arrival->name = post('name');
    $arrival->surname = post('surname');
    $arrival->save();
   return "new arrival created";
});




