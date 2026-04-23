<?php

use Illuminate\Support\Facades\Route;
use App\Models\TeamMember;
use App\Http\Controllers\TeamMemberController;

Route::get('/', [TeamMemberController::class, 'index']);
Route::post('/members', [TeamMemberController::class, 'store']);
Route::delete('/members/{teamMember}', [TeamMemberController::class, 'destroy']);
