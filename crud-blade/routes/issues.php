<?php

use App\Http\Controllers\Issues\IssueController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/issues', [IssueController::class, 'index'])->name('issue.index');
    Route::post('/issues', [IssueController::class, 'store'])->name('issue.store');
    Route::get('/issues/{issue}', [IssueController::class, 'show'])->name('issue.show');
    Route::put('/issues/{issue}', [IssueController::class, 'update'])->name('issue.update');
    Route::delete('/issues/{issue}', [IssueController::class, 'destroy'])->name('issue.destroy');

});