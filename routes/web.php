<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EducationController;

Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact.store');



Route::get('/', function () {
    return view('page.index');
})->name('index');


        // Auth Management

Route::get('admin/auth/login', [AuthController::class, 'Adminlogin'])->name('admin.auth.login');
Route::post('admin/auth/login', [AuthController::class, 'login'])->name('login.post');
Route::resource('users', UserController::class);
Route::post('/update-last-activity', [ActivityController::class, 'update'])->name('update.lastActivity')->middleware('auth');

Route::post('admin/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/update-last-activity', [ActivityController::class, 'update'])->name('update.lastActivity')->middleware('auth');











Route::middleware(['auth'])->name('admin.')->group(function () {
    Route::prefix('admin')->middleware(['role:Admin'])->group(function () {
        // Dashboard
        Route::get('/', function () {
            return view('admin.pages.index');
        })->name('admin');



        // User Management
        Route::prefix('users')->group(function () {
            Route::get('/add', [UserController::class, 'addUsers'])->name('users.add');
            Route::get('/list', [UserController::class, 'listUsers'])->name('users.list');
            Route::post('/store', [UserController::class, 'store'])->name('users.store');
            Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('users.destroy');
            Route::post('/{user}/deactivate', [UserController::class, 'deactivate'])->name('users.deactivate');
            Route::post('/{user}/activate', [UserController::class, 'activate'])->name('users.activate');
            Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
            Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
        });

        // Skill Management
        Route::prefix('skills')->group(function () {
            Route::get('/create', [SkillController::class, 'create'])->name('skills.add');
            Route::get('/list', [SkillController::class, 'list'])->name('skills.list');
            Route::post('/', [SkillController::class, 'store'])->name('skills.store');
            Route::post('/{id}/activate', [SkillController::class, 'activate'])->name('skills.activate');
            Route::post('/{id}/deactivate', [SkillController::class, 'deactivate'])->name('skills.deactivate');
            Route::delete('/{id}', [SkillController::class, 'destroy'])->name('skills.destroy');
            Route::get('/{id}/edit', [SkillController::class, 'edit'])->name('skills.edit');
            Route::put('/{id}', [SkillController::class, 'update'])->name('skills.update');
        });

        // Job Management
        Route::prefix('jobs')->group(function () {
            Route::get('/create', [JobController::class, 'create'])->name('jobs.create');
            Route::get('/list', [JobController::class, 'list'])->name('jobs.list');
            Route::post('/', [JobController::class, 'store'])->name('jobs.store');
            Route::get('/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
            Route::post('/{id}/deactivate', [JobController::class, 'deactivate'])->name('jobs.deactivate');
            Route::post('/{id}/activate', [JobController::class, 'activate'])->name('jobs.activate');
            Route::delete('/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
            Route::put('/{id}', [JobController::class, 'update'])->name('jobs.update');
        });

        // Project Management
        Route::prefix('projects')->group(function () {
            Route::get('/create', [ProjectController::class, 'create'])->name('projects.create');
            Route::get('/list', [ProjectController::class, 'list'])->name('projects.list');
            Route::post('/store', [ProjectController::class, 'store'])->name('projects.store');
            Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
            Route::delete('/delete/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
            Route::post('/deactivate/{id}', [ProjectController::class, 'deactivate'])->name('projects.deactivate');
            Route::post('/{id}/activate', [ProjectController::class, 'activate'])->name('projects.activate');
            Route::put('/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
        });


        // Invoice Management

        Route::prefix('invoice')->group(function () {
            Route::get('/list', [InvoiceController::class, 'list'])->name('invoice.list');
            Route::get('/view', [InvoiceController::class, 'view'])->name('invoice.view');
            Route::get('/create', [InvoiceController::class, 'create'])->name('invoice.create');
            Route::post('/store', [InvoiceController::class, 'store'])->name('invoices.store');
            Route::get('/show/{id}', [InvoiceController::class, 'show'])->name('invoices.show');
            Route::get('/edit/{id}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');
            Route::get('/download/{id}/download', [InvoiceController::class, 'download'])->name('invoices.download');
            Route::put('/update/{id}/', [InvoiceController::class, 'update'])->name('invoices.update');
            
        });


        // Contract Management
        Route::prefix('contract')->group(function () {
            Route::get('/create', [ContractController::class, 'create'])->name('contract.create');
            Route::get('/list', [ContractController::class, 'list'])->name('contract.list');
            Route::post('/store', [ContractController::class, 'store'])->name('contract.store');
            Route::get('/edit/{id}', [ContractController::class, 'edit'])->name('contract.edit');
            Route::put('/update/{id}/', [ContractController::class, 'update'])->name('contract.update');
            Route::get('/show/{id}', [ContractController::class, 'show'])->name('contract.show');
            Route::delete('/delete/{contract}', [ContractController::class, 'destroy'])->name('contract.destroy');

        });

        // Education Management
        Route::prefix('education')->group(function () {
            Route::get('/create', [EducationController::class, 'create'])->name('education.create');
            Route::get('/list', [EducationController::class, 'list'])->name('education.list');
            Route::post('/store', [EducationController::class, 'store'])->name('education.store');
            Route::get('/{education}/edit', [EducationController::class, 'edit'])->name('educations.edit');
            Route::put('/update/{education}', [EducationController::class, 'update'])->name('education.update');
            Route::delete('/delete/{education}', [EducationController::class, 'destroy'])->name('education.destroy');
    
        });

        // Languages Management
        Route::prefix('languages')->group(function () {
            Route::get('/', [LanguageController::class, 'index'])->name('languages.index');
            Route::get('/create', [LanguageController::class, 'create'])->name('languages.create'); 
            Route::post('', [LanguageController::class, 'store'])->name('languages.store'); 
            Route::get('/{language}/edit', [LanguageController::class, 'edit'])->name('languages.edit'); 
            Route::put('/{language}', [LanguageController::class, 'update'])->name('languages.update'); 
            Route::delete('/{language}', [LanguageController::class, 'destroy'])->name('languages.destroy'); 
        });
        
     
     
     
        Route::prefix('contacts')->group(function () {
            Route::get('/list', [ContactUsController::class, 'list'])->name('contacts.list');
    Route::delete('/delete/{id}', [ContactUsController::class, 'destroy'])->name('contacts.destroy');

        });
        

  
    });
});





Route::prefix('/{username}')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('index');
`


});

Route::get('/contacts_creative', [PagesController::class, 'contactsCreative'])->name('contacts_creative');
Route::get('/contacts_image', [PagesController::class, 'contactsImage'])->name('contacts_image');
Route::get('/contacts_map', [PagesController::class, 'contactsMap'])->name('contacts_map');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');
Route::get('/index_creative', [PagesController::class, 'indexCreative'])->name('index_creative');
Route::get('/index_image', [PagesController::class, 'indexImage'])->name('index_image');
Route::get('/index_onepage', [PagesController::class, 'indexOnePage'])->name('index_onepage');
Route::get('/index_personal', [PagesController::class, 'indexPersonal'])->name('index_personal');
Route::get('/index_slider', [PagesController::class, 'indexSlider'])->name('index_slider');
Route::get('/index_video', [PagesController::class, 'indexVideo'])->name('index_video');
Route::get('/resume_creative', [PagesController::class, 'resumeCreative'])->name('resume_creative');
Route::get('/resume_image', [PagesController::class, 'resumeImage'])->name('resume_image');
Route::get('/resume', [PagesController::class, 'resume'])->name('resume');
Route::get('/work_single_creative', [PagesController::class, 'workSingleCreative'])->name('work_single_creative');
Route::get('/work_single_image', [PagesController::class, 'workSingleImage'])->name('work_single_image');
Route::get('/work_single', [PagesController::class, 'workSingle'])->name('work_single');
Route::get('/works_creative', [PagesController::class, 'worksCreative'])->name('works_creative');
Route::get('/works', [PagesController::class, 'works'])->name('works');
