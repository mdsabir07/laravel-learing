<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Page Routes
|--------------------------------------------------------------------------
*/
Route::get("/",[HomeController::class,"page"]);
Route::get("/contracts",[ContactController::class,"page"]);
Route::get("/projects",[ProjectController::class,"page"]);
Route::get("/resume",[ResumeController::class,"page"]);

/*
|--------------------------------------------------------------------------
| Ajax Call Routes
|--------------------------------------------------------------------------
*/
Route::get("/heroData",[HomeController::class,"heroData"]);
Route::get("/aboutData",[HomeController::class,"aboutData"]);
Route::get("/socialData",[HomeController::class,"socialData"]);
Route::get("/projectData",[ProjectController::class,"projectData"]);
Route::get("/resumeLink",[ResumeController::class,"resumeLink"]);
Route::get("/experiencesData",[ResumeController::class,"experiencesData"]);
Route::get("/educationData",[ResumeController::class,"educationData"]);
Route::get("/skillsData",[ResumeController::class,"skillsData"]);
Route::get("/languageData",[ResumeController::class,"languageData"]);
Route::post("/ContactRequest",[ContactController::class,"ContactRequest"]);
