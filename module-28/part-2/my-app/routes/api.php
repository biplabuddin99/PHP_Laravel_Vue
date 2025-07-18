<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationAPIMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// user
Route::post('/user-registration', [UserController::class, 'userRegistration'])->name('userRegistration');
Route::post('/user-login', [UserController::class, 'userLogin'])->name('userLogin');
Route::post('/send-otp', [UserController::class, 'SendOTPCode'])->name('SendOTPCode');
Route::post('/verify-otp', [UserController::class, 'VerifyOTP'])->name('VerifyOTP');
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware([TokenVerificationAPIMiddleware::class]);


// Category
Route::post("/create-category",[CategoryController::class,'CategoryCreate'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::get("/list-category",[CategoryController::class,'CategoryList'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post("/delete-category",[CategoryController::class,'CategoryDelete'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post("/update-category",[CategoryController::class,'CategoryUpdate'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post("/category-by-id",[CategoryController::class,'CategoryByID'])->middleware([TokenVerificationAPIMiddleware::class]);


Route::post("/create-customer",[CustomerController::class,'CustomerCreate'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::get("/list-customer",[CustomerController::class,'CustomerList'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post("/delete-customer",[CustomerController::class,'CustomerDelete'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post("/update-customer",[CustomerController::class,'CustomerUpdate'])->middleware([TokenVerificationAPIMiddleware::class]);
Route::post("/customer-by-id",[CustomerController::class,'CustomerByID'])->middleware([TokenVerificationAPIMiddleware::class]);

