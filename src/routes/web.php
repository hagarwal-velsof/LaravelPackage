<?php
   
use Spinwheel\Spinwheel\Http\Controllers\SpinWheelMainController;
use Illuminate\Support\Facades\Route;
   
Route::get('testspin', [SpinWheelMainController::class, 'SpinTheWheel'])->name('testspin');
?>