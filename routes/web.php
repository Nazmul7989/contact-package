<?php
use Illuminate\Support\Facades\Route;
use Nazmul\Contact\Http\Controllers\ContactController;


Route::resource('contacts',ContactController::class)->names('contacts');
