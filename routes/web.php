<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FullCalenderController;

use App\Http\Livewire\Web\Home\Home;
use App\Http\Livewire\Web\Vendor\VendorComponent;
use App\Http\Livewire\Web\Aboutus\AboutUsComponent;
use App\Http\Livewire\Web\Contactus\ContactUsComponent;
use App\Http\Livewire\Web\Courses\CoursesComponent;
use App\Http\Livewire\Web\Courses\CourseDetailsComponent;
use App\Http\Livewire\Web\Notice\NoticeBoardComponent;
use App\Http\Livewire\Web\Notice\NoticeDetailsComponent;


//For Admin
use App\Http\Livewire\Admin\Dashboard\AdminDashboard;

use App\Http\Livewire\Admin\Category\AdminCategoryComponent;

use App\Http\Livewire\Admin\Course\AdminCourseComponent;
use App\Http\Livewire\Admin\Course\AdminAddCourseComponent;
use App\Http\Livewire\Admin\Course\AdminEditCourseComponent;

use App\Http\Livewire\Admin\Mentor\AdminMentorComponent;
use App\Http\Livewire\Admin\Mentor\AdminAddMentorComponent;
use App\Http\Livewire\Admin\Mentor\AdminEditMentorComponent;

use App\Http\Livewire\Admin\Vendor\AdminVendorComponent;

use App\Http\Livewire\Admin\Events\AdminEventsComponent;

use App\Http\Livewire\Admin\Notice\AdminNoticeComponent;

use App\Http\Livewire\Admin\Banner\AdminBannerComponent;

use App\Http\Livewire\Admin\Home\PopularCoursesComponent;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('web.home');

Route::get('full-calender', [FullCalenderController::class, 'index'])->name('web.calender');
Route::post('full-calender/action', [FullCalenderController::class, 'action']);


// Route::get('/', Home::class)->name('web.home');
Route::get('/vendors', VendorComponent::class)->name('web.vendors');

Route::get('/aboutus', AboutUsComponent::class)->name('web.aboutus');
Route::get('/contactus', ContactUsComponent::class)->name('web.contactus');

Route::get('/courses/{id}', CoursesComponent::class)->name('web.courses');
Route::get('/course_details/{id}', CourseDetailsComponent::class)->name('web.course_details');

Route::get('/notice', NoticeBoardComponent::class)->name('web.notice');
Route::get('/notice_details/{id}', NoticeDetailsComponent::class)->name('web.notice_details');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     // return view('dashboard');
//     // return redirect()->route('web.home');
// })->name('dashboard');



//For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');

    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');

    Route::get('/admin/courses',AdminCourseComponent::class)->name('admin.courses');
    Route::get('/admin/add_courses',AdminAddCourseComponent::class)->name('admin.add_courses');
    Route::get('/admin/edit_courses/{id}',AdminEditCourseComponent::class)->name('admin.edit_courses');

    Route::get('/admin/mentors',AdminMentorComponent::class)->name('admin.mentors');
    Route::get('/admin/add_mentors',AdminAddMentorComponent::class)->name('admin.add_mentors');
    Route::get('/admin/edit_mentors/{id}',AdminEditMentorComponent::class)->name('admin.edit_mentors');

    Route::get('/admin/vendors',AdminVendorComponent::class)->name('admin.vendors');

    Route::get('/admin/events',AdminEventsComponent::class)->name('admin.events');

    Route::get('/admin/notices',AdminNoticeComponent::class)->name('admin.notices');

    Route::get('/admin/banners',AdminBannerComponent::class)->name('admin.banners');

    Route::get('/admin/popular_courses',PopularCoursesComponent::class)->name('admin.popular_courses');
});


//For instructor
Route::middleware(['auth:sanctum', 'verified','authinstructor'])->group(function(){

    

});


//For User
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    
    

});