<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FreqQuestionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NextEventController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PrevEventController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/dashboard/freqs',[FreqQuestionController::class,'viewFreqs'])->name('admin-freqs');

Route::get('/dashboard/freq-questions/create', [FreqQuestionController::class, 'create'])->name('freq_questions.create');
Route::post('/dashboard/freq-questions', [FreqQuestionController::class, 'store'])->name('freq_questions.store');
Route::get('/dashboard/freq-questions/{id}/edit', [FreqQuestionController::class, 'edit'])->name('freq_questions.edit');
Route::put('/dashboard/freq-questions/{id}', [FreqQuestionController::class, 'update'])->name('freq_questions.update');
Route::delete('/dashboard/freq-questions/{id}', [FreqQuestionController::class, 'destroy'])->name('freq_questions.destroy');

Route::get('/dashboard/home',[AdminController::class,'index'])->name('admin-dashboard');

//Dashboard News
Route::resource('/dashboard/news', NewsController::class);

//Dashboard Prev Events
Route::resource('/dashboard/prev_events', PrevEventController::class);

//Dashboard Next Events
Route::resource('/dashboard/next_events', NextEventController::class);

Route::get('/dashboard/news/{id}/upload-photos',[PhotoController::class,'viewUploadPhotos'])->name('view-upload-photos');
Route::post('/news/{id}/upload-photos', [PhotoController::class, 'uploadNewsPhotos'])->name('photos.upload');



Route::get('/freq-questions',[HomeController::class,'viewFreqs'])->name('freqQuestions');
Route::get('/upcoming-events',[HomeController::class,'viewEvents'])->name('next-events');
Route::get('/event-details/{id}',[EventController::class,'viewEventDetails'])->name('event-details');

Route::get('/event-form/{id}',[EventController::class,'viewEventForm'])->name('event-form');
Route::post('/register-event', [EventController::class, 'registerForEvent'])->name('event.register');

Route::get('/news',[HomeController::class,'viewNews'])->name('news');

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
