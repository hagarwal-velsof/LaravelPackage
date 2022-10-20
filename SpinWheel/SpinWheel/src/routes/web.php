<?php
   
use SpinWheel\SpinWheel\Http\Controllers\SpinWheelMainController;
use Illuminate\Support\Facades\Route;
   
Route::get('testspin', [SpinWheelMainController::class, 'SpinTheWheel'])->name('testspin');
?>