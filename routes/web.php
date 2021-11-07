<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer',function(){
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});






