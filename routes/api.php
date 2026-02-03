<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/about', function (){
    return response()->json(['message' => 'This is a RESTful Blogging Platform API.']);
});