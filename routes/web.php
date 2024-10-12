<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get("/", [EventController::class, "event_page"]);

Route::get("/master/event", [EventController::class, "master_event_page"]);
Route::get("/master/event/add", [EventController::class, "master_event_addpage"]);
Route::post("/master/event/add", [EventController::class, "master_event_add"]);
Route::get("/master/event/edit/{id}", [EventController::class, "master_event_editpage"]);
Route::post("/master/event/edit/{id}", [EventController::class, "master_event_edit"]);
Route::get("/master/event/delete/{id}", [EventController::class, "master_event_delete"]);

Route::get("/master/event_category", [EventController::class, "master_event_category_page"]);
Route::get("/master/event_category/add", [EventController::class, "master_event_category_addpage"]);
Route::post("/master/event_category/add", [EventController::class, "master_event_category_add"]);
Route::get("/master/event_category/delete/{id}", [EventController::class, "master_event_category_delete"]);
Route::get("/master/event_category/edit/{id}", [EventController::class, "master_event_category_editpage"]);
Route::post("/master/event_category/edit/{id}", [EventController::class, "master_event_category_edit"]);


Route::get("/master/organizer", [EventController::class, "master_organizer_page"]);
Route::get("/master/organizer/add", [EventController::class, "master_organizer_addpage"]);
Route::post("/master/organizer/add", [EventController::class, "master_organizer_add"]);
Route::get("/master/organizer/delete/{id}", [EventController::class, "master_organizer_delete"]);
Route::get("/master/organizer/edit/{id}", [EventController::class, "master_organizer_editpage"]);
Route::post("/master/organizer/edit/{id}", [EventController::class, "master_organizer_edit"]);
Route::get("/master/organizer/{id}", [EventController::class, "master_organizer_detailpage"]);



Route::get("/{id}", [EventController::class, "detail_event_page"]);




