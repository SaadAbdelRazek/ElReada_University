<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CollegesController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website.index');
})->name('home');

Route::get('/about-us',[AboutController::class, 'index'])->name('about');
Route::get('/about-us-logo',[AboutController::class, 'slogan'])->name('slogan');
Route::get('/about-us-President',[AboutController::class, 'President'])->name('Presidents');
Route::get('/president-speech',[AboutController::class, 'President_speech'])->name('President_speech');
Route::get('/about-us-study',[AboutController::class, 'study'])->name('study');


Route::get('/colleges',[CollegesController::class, 'index'])->name('colleges');
Route::get('/college-details/{id}',[CollegesController::class, 'college_info'])->name('college_info');
Route::get('/college-details-college_dean/{id}',[CollegesController::class, 'college_dean'])->name('college_dean');

Route::get('/department-details/{id}',[DepartmentController::class, 'index'])->name('department_info');
Route::get('/agent/{id}',[AgentController::class, 'agent'])->name('agent');
Route::get('/deanship-info/{id}',[UniversityController::class, 'deanship'])->name('deanship');

Route::get('/contact-us',[UniversityController::class, 'contacts'])->name('contacts');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
