<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SmarkController;

// end of import

use App\Http\Controllers\UsersController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Users;

// end of import

use App\Http\Controllers\AnnouncementsController;
use App\Models\Announcements;

// end of import

use App\Http\Controllers\EventsController;
use App\Models\Events;

// end of import

use App\Http\Controllers\AnnouncementcommentsController;
use App\Models\Announcementcomments;

// end of import

use App\Http\Controllers\EventcommentsController;
use App\Models\Eventcomments;

// end of import

use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\UserApprovalController;
use App\Http\Middleware\CheckApprovalMiddleware;
use App\Models\Departments;

// end of import

use App\Http\Controllers\ProfilesController;
use App\Models\Profiles;

// end of import

use App\Http\Controllers\AnnouncementreactionsController;
use App\Models\Announcementreactions;

// end of import

use App\Http\Controllers\AnnouncementotherfilesController;
use App\Models\Announcementotherfiles;

// end of import




Route::get('/', function () {
    return view('welcome');
});

Route::get('/admissions', function () {
    return view('site.admissions');
});

Route::get('/admissions', function () {
    return view('site.admissions');
});

Route::get('/academics', function () {
    return view('site.academics');
});

Route::get('/student-affairs', function () {
    return view('site.student-affairs');
});

Route::get('/library', function () {
    return view('site.library');
});

Route::get('/about-us', function () {
    return view('site.about');
});

Route::get('/contact-us', function () {
    return view('site.contact');
});
// custom

Route::get('/announcement-details/{announcementId}', [AnnouncementsController::class, 'details']);
Route::get('/event-details/{eventId}', [EventsController::class, 'details']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    CheckApprovalMiddleware::class
])->group(function () {

    // custom
    
    Route::get('/approve-user/{userId}', [UserApprovalController::class, 'approveUser']);
    Route::get('/disapprove-user/{userId}', [UserApprovalController::class, 'disapproveUser']);

    Route::get('/user', function () {
        return response()->json(Auth::user());
    });

    // CHAT ROUTES

    Route::get('/initialize-chat/{usersId}/{recieversId}', [SmarkController::class, 'initializeChat']);
    Route::post('/send-chat', [SmarkController::class, 'sendChat']);
    Route::get('/fetch-messages/{chatsId}', [SmarkController::class, 'fetchMessages']);
    Route::get('/chat-history', [SmarkController::class, 'chatHistory']);
    Route::post('/upload-files', [SmarkController::class, 'uploadFiles']);
    Route::post('/delete-chat', [SmarkController::class, 'deleteChat']);
    Route::post('/unsent-message', [SmarkController::class, 'unsentMessage']);
    Route::post('/chat-files', [SmarkController::class, 'chatFiles']);

    // END CHAT ROUTES

    Route::get('/activity-logs', [SmarkController::class, 'activityLogs']);

    // backup

    Route::get('/backups', [SmarkController::class, 'backups']);
    Route::get('/backup-process', [SmarkController::class, 'backupProcess']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::middleware(AdminMiddleware::class)->group(function () {
    //     Route::get('/dashboard', function () {
    //         return view('dashboard');
    //     })->name('dashboard');
    // });

    // MODEL VIEWER

    Route::get('/_database/{model?}', [SmarkController::class, 'modelViewer'])->name('models.index');

    // POSTMAN

    Route::get('/_postman', [SmarkController::class, 'postman']);

    // end...

    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/create-users', [UsersController::class, 'create'])->name('users.create');
    Route::get('/edit-users/{usersId}', [UsersController::class, 'edit'])->name('users.edit');
    Route::get('/show-users/{usersId}', [UsersController::class, 'show'])->name('users.show');
    Route::get('/delete-users/{usersId}', [UsersController::class, 'delete'])->name('users.delete');
    Route::get('/destroy-users/{usersId}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::post('/store-users', [UsersController::class, 'store'])->name('users.store');
    Route::post('/update-users/{usersId}', [UsersController::class, 'update'])->name('users.update');
    Route::post('/users-delete-all-bulk-data', [UsersController::class, 'bulkDelete']);
    Route::post('/users-move-to-trash-all-bulk-data', [UsersController::class, 'bulkMoveToTrash']);
    Route::post('/users-restore-all-bulk-data', [UsersController::class, 'bulkRestore']);
    Route::get('/trash-users', [UsersController::class, 'trash']);
    Route::get('/restore-users/{usersId}', [UsersController::class, 'restore'])->name('users.restore');

    // Users Search
    Route::get('/users-search', [SmarkController::class, 'usersSearch']);

    // Users Paginate
    Route::get('/users-paginate', [SmarkController::class. 'usersPaginate']);

    // Users Filter
    Route::get('/users-filter', [SmarkController::class, 'userFilter']);

    // end...

    Route::get('/announcements', [AnnouncementsController::class, 'index'])->name('announcements.index');
    Route::get('/create-announcements', [AnnouncementsController::class, 'create'])->name('announcements.create');
    Route::get('/edit-announcements/{announcementsId}', [AnnouncementsController::class, 'edit'])->name('announcements.edit');
    Route::get('/show-announcements/{announcementsId}', [AnnouncementsController::class, 'show'])->name('announcements.show');
    Route::get('/delete-announcements/{announcementsId}', [AnnouncementsController::class, 'delete'])->name('announcements.delete');
    Route::get('/destroy-announcements/{announcementsId}', [AnnouncementsController::class, 'destroy'])->name('announcements.destroy');
    Route::post('/store-announcements', [AnnouncementsController::class, 'store'])->name('announcements.store');
    Route::post('/update-announcements/{announcementsId}', [AnnouncementsController::class, 'update'])->name('announcements.update');
    Route::post('/announcements-delete-all-bulk-data', [AnnouncementsController::class, 'bulkDelete']);
    Route::post('/announcements-move-to-trash-all-bulk-data', [AnnouncementsController::class, 'bulkMoveToTrash']);
    Route::post('/announcements-restore-all-bulk-data', [AnnouncementsController::class, 'bulkRestore']);
    Route::get('/trash-announcements', [AnnouncementsController::class, 'trash']);
    Route::get('/restore-announcements/{announcementsId}', [AnnouncementsController::class, 'restore'])->name('announcements.restore');

    // Announcements Search
    Route::get('/announcements-search', [AnnouncementsController::class, 'search']);

    // Announcements Paginate
    Route::get('/announcements-paginate', [AnnouncementsController::class, 'paginate']);

    // Announcements Filter
    Route::get('/announcements-filter', [AnnouncementsController::class, 'filter']);

    // end...

    Route::get('/events', [EventsController::class, 'index'])->name('events.index');
    Route::get('/create-events', [EventsController::class, 'create'])->name('events.create');
    Route::get('/edit-events/{eventsId}', [EventsController::class, 'edit'])->name('events.edit');
    Route::get('/show-events/{eventsId}', [EventsController::class, 'show'])->name('events.show');
    Route::get('/delete-events/{eventsId}', [EventsController::class, 'delete'])->name('events.delete');
    Route::get('/destroy-events/{eventsId}', [EventsController::class, 'destroy'])->name('events.destroy');
    Route::post('/store-events', [EventsController::class, 'store'])->name('events.store');
    Route::post('/update-events/{eventsId}', [EventsController::class, 'update'])->name('events.update');
    Route::post('/events-delete-all-bulk-data', [EventsController::class, 'bulkDelete']);
    Route::post('/events-move-to-trash-all-bulk-data', [EventsController::class, 'bulkMoveToTrash']);
    Route::post('/events-restore-all-bulk-data', [EventsController::class, 'bulkRestore']);
    Route::get('/trash-events', [EventsController::class, 'trash']);
    Route::get('/restore-events/{eventsId}', [EventsController::class, 'restore'])->name('events.restore');

    // Events Search
    Route::get('/events-search', [EventsController::class, 'search']);

    // Events Paginate
    Route::get('/events-paginate', [EventsController::class, 'paginate']);

    // Events Filter
    Route::get('/events-filter', [EventsController::class, 'filter']);

    // end...

    Route::get('/announcementcomments', [AnnouncementcommentsController::class, 'index'])->name('announcementcomments.index');
    Route::get('/create-announcementcomments', [AnnouncementcommentsController::class, 'create'])->name('announcementcomments.create');
    Route::get('/edit-announcementcomments/{announcementcommentsId}', [AnnouncementcommentsController::class, 'edit'])->name('announcementcomments.edit');
    Route::get('/show-announcementcomments/{announcementcommentsId}', [AnnouncementcommentsController::class, 'show'])->name('announcementcomments.show');
    Route::get('/delete-announcementcomments/{announcementcommentsId}', [AnnouncementcommentsController::class, 'delete'])->name('announcementcomments.delete');
    Route::get('/destroy-announcementcomments/{announcementcommentsId}', [AnnouncementcommentsController::class, 'destroy'])->name('announcementcomments.destroy');
    Route::post('/store-announcementcomments/{announcementId}', [AnnouncementcommentsController::class, 'store'])->name('announcementcomments.store');
    Route::post('/update-announcementcomments/{announcementcommentsId}', [AnnouncementcommentsController::class, 'update'])->name('announcementcomments.update');
    Route::post('/announcementcomments-delete-all-bulk-data', [AnnouncementcommentsController::class, 'bulkDelete']);
    Route::post('/announcementcomments-move-to-trash-all-bulk-data', [AnnouncementcommentsController::class, 'bulkMoveToTrash']);
    Route::post('/announcementcomments-restore-all-bulk-data', [AnnouncementcommentsController::class, 'bulkRestore']);
    Route::get('/trash-announcementcomments', [AnnouncementcommentsController::class, 'trash']);
    Route::get('/restore-announcementcomments/{announcementcommentsId}', [AnnouncementcommentsController::class, 'restore'])->name('announcementcomments.restore');

    // Announcementcomments Search
    Route::get('/announcementcomments-search', [AnnouncementcommentsController::class, 'search']);

    // Announcementcomments Paginate
    Route::get('/announcementcomments-paginate', [AnnouncementcommentsController::class, 'paginate']);

    // Announcementcomments Filter
    Route::get('/announcementcomments-filter', [AnnouncementcommentsController::class, 'filter']);

    // end...

    Route::get('/eventcomments', [EventcommentsController::class, 'index'])->name('eventcomments.index');
    Route::get('/create-eventcomments', [EventcommentsController::class, 'create'])->name('eventcomments.create');
    Route::get('/edit-eventcomments/{eventcommentsId}', [EventcommentsController::class, 'edit'])->name('eventcomments.edit');
    Route::get('/show-eventcomments/{eventcommentsId}', [EventcommentsController::class, 'show'])->name('eventcomments.show');
    Route::get('/delete-eventcomments/{eventcommentsId}', [EventcommentsController::class, 'delete'])->name('eventcomments.delete');
    Route::get('/destroy-eventcomments/{eventcommentsId}', [EventcommentsController::class, 'destroy'])->name('eventcomments.destroy');
    Route::post('/store-eventcomments/{eventId}', [EventcommentsController::class, 'store'])->name('eventcomments.store');
    Route::post('/update-eventcomments/{eventcommentsId}', [EventcommentsController::class, 'update'])->name('eventcomments.update');
    Route::post('/eventcomments-delete-all-bulk-data', [EventcommentsController::class, 'bulkDelete']);
    Route::post('/eventcomments-move-to-trash-all-bulk-data', [EventcommentsController::class, 'bulkMoveToTrash']);
    Route::post('/eventcomments-restore-all-bulk-data', [EventcommentsController::class, 'bulkRestore']);
    Route::get('/trash-eventcomments', [EventcommentsController::class, 'trash']);
    Route::get('/restore-eventcomments/{eventcommentsId}', [EventcommentsController::class, 'restore'])->name('eventcomments.restore');

    // Eventcomments Search
    Route::get('/eventcomments-search', [EventcommentsController::class, 'search']);

    // Eventcomments Paginate
    Route::get('/eventcomments-paginate', [EventcommentsController::class, 'paginate']);

    // Eventcomments Filter
    Route::get('/eventcomments-filter', [EventcommentsController::class, 'filter']);

    // end...

    Route::get('/departments', [DepartmentsController::class, 'index'])->name('departments.index');
    Route::get('/create-departments', [DepartmentsController::class, 'create'])->name('departments.create');
    Route::get('/edit-departments/{departmentsId}', [DepartmentsController::class, 'edit'])->name('departments.edit');
    Route::get('/show-departments/{departmentsId}', [DepartmentsController::class, 'show'])->name('departments.show');
    Route::get('/delete-departments/{departmentsId}', [DepartmentsController::class, 'delete'])->name('departments.delete');
    Route::get('/destroy-departments/{departmentsId}', [DepartmentsController::class, 'destroy'])->name('departments.destroy');
    Route::post('/store-departments', [DepartmentsController::class, 'store'])->name('departments.store');
    Route::post('/update-departments/{departmentsId}', [DepartmentsController::class, 'update'])->name('departments.update');
    Route::post('/departments-delete-all-bulk-data', [DepartmentsController::class, 'bulkDelete']);
    Route::post('/departments-move-to-trash-all-bulk-data', [DepartmentsController::class, 'bulkMoveToTrash']);
    Route::post('/departments-restore-all-bulk-data', [DepartmentsController::class, 'bulkRestore']);
    Route::get('/trash-departments', [DepartmentsController::class, 'trash']);
    Route::get('/restore-departments/{departmentsId}', [DepartmentsController::class, 'restore'])->name('departments.restore');

    // Departments Search
    Route::get('/departments-search', [DepartmentsController::class, 'search']);

    // Departments Paginate
    Route::get('/departments-paginate', [DepartmentsController::class, 'paginate']);

    // Departments Filter
    Route::get('/departments-filter', [DepartmentsController::class, 'filter']);

    // end...

    Route::get('/profiles', [ProfilesController::class, 'index'])->name('profiles.index');
    Route::get('/create-profiles', [ProfilesController::class, 'create'])->name('profiles.create');
    Route::get('/edit-profiles/{profilesId}', [ProfilesController::class, 'edit'])->name('profiles.edit');
    Route::get('/show-profiles/{profilesId}', [ProfilesController::class, 'show'])->name('profiles.show');
    Route::get('/delete-profiles/{profilesId}', [ProfilesController::class, 'delete'])->name('profiles.delete');
    Route::get('/destroy-profiles/{profilesId}', [ProfilesController::class, 'destroy'])->name('profiles.destroy');
    Route::post('/store-profiles', [ProfilesController::class, 'store'])->name('profiles.store');
    Route::post('/update-profiles/{profilesId}', [ProfilesController::class, 'update'])->name('profiles.update');
    Route::post('/profiles-delete-all-bulk-data', [ProfilesController::class, 'bulkDelete']);
    Route::post('/profiles-move-to-trash-all-bulk-data', [ProfilesController::class, 'bulkMoveToTrash']);
    Route::post('/profiles-restore-all-bulk-data', [ProfilesController::class, 'bulkRestore']);
    Route::get('/trash-profiles', [ProfilesController::class, 'trash']);
    Route::get('/restore-profiles/{profilesId}', [ProfilesController::class, 'restore'])->name('profiles.restore');

    // Profiles Search
    Route::get('/profiles-search', [ProfilesController::class, 'search']);

    // Profiles Paginate
    Route::get('/profiles-paginate', [ProfilesController::class, 'paginate']);

    // Profiles Filter
    Route::get('/profiles-filter', [ProfilesController::class, 'filter']);

    // end...

    Route::get('/announcementreactions', [AnnouncementreactionsController::class, 'index'])->name('announcementreactions.index');
    Route::get('/create-announcementreactions', [AnnouncementreactionsController::class, 'create'])->name('announcementreactions.create');
    Route::get('/edit-announcementreactions/{announcementreactionsId}', [AnnouncementreactionsController::class, 'edit'])->name('announcementreactions.edit');
    Route::get('/show-announcementreactions/{announcementreactionsId}', [AnnouncementreactionsController::class, 'show'])->name('announcementreactions.show');
    Route::get('/delete-announcementreactions/{announcementreactionsId}', [AnnouncementreactionsController::class, 'delete'])->name('announcementreactions.delete');
    Route::get('/destroy-announcementreactions/{announcementreactionsId}', [AnnouncementreactionsController::class, 'destroy'])->name('announcementreactions.destroy');

    Route::get('/store-announcementreactions/{annoucements_id}', [AnnouncementreactionsController::class, 'store'])->name('announcementreactions.store');
    Route::get('/remove-announcementreactions/{annoucements_id}', [AnnouncementreactionsController::class, 'remove'])->name('announcementreactions.remove');

    Route::post('/update-announcementreactions/{announcementreactionsId}', [AnnouncementreactionsController::class, 'update'])->name('announcementreactions.update');
    Route::post('/announcementreactions-delete-all-bulk-data', [AnnouncementreactionsController::class, 'bulkDelete']);
    Route::post('/announcementreactions-move-to-trash-all-bulk-data', [AnnouncementreactionsController::class, 'bulkMoveToTrash']);
    Route::post('/announcementreactions-restore-all-bulk-data', [AnnouncementreactionsController::class, 'bulkRestore']);
    Route::get('/trash-announcementreactions', [AnnouncementreactionsController::class, 'trash']);
    Route::get('/restore-announcementreactions/{announcementreactionsId}', [AnnouncementreactionsController::class, 'restore'])->name('announcementreactions.restore');

    // Announcementreactions Search
    Route::get('/announcementreactions-search', [AnnouncementreactionsController::class, 'search']);

    // Announcementreactions Paginate
    Route::get('/announcementreactions-paginate', [AnnouncementreactionsController::class, 'paginate']);

    // Announcementreactions Filter
    Route::get('/announcementreactions-filter', [AnnouncementreactionsController::class, 'filter']);

    // end...

    Route::get('/announcementotherfiles', [AnnouncementotherfilesController::class, 'index'])->name('announcementotherfiles.index');
    Route::get('/create-announcementotherfiles', [AnnouncementotherfilesController::class, 'create'])->name('announcementotherfiles.create');
    Route::get('/edit-announcementotherfiles/{announcementotherfilesId}', [AnnouncementotherfilesController::class, 'edit'])->name('announcementotherfiles.edit');
    Route::get('/show-announcementotherfiles/{announcementotherfilesId}', [AnnouncementotherfilesController::class, 'show'])->name('announcementotherfiles.show');
    Route::get('/delete-announcementotherfiles/{announcementotherfilesId}', [AnnouncementotherfilesController::class, 'delete'])->name('announcementotherfiles.delete');

    Route::delete('/destroy-announcementotherfiles/{announcementotherfilesId}', [AnnouncementotherfilesController::class, 'destroy'])->name('announcementotherfiles.destroy');

    Route::post('/store-announcementotherfiles/{announcementsId}', [AnnouncementotherfilesController::class, 'store'])->name('announcementotherfiles.store');

    Route::post('/update-announcementotherfiles/{announcementotherfilesId}', [AnnouncementotherfilesController::class, 'update'])->name('announcementotherfiles.update');
    Route::post('/announcementotherfiles-delete-all-bulk-data', [AnnouncementotherfilesController::class, 'bulkDelete']);
    Route::post('/announcementotherfiles-move-to-trash-all-bulk-data', [AnnouncementotherfilesController::class, 'bulkMoveToTrash']);
    Route::post('/announcementotherfiles-restore-all-bulk-data', [AnnouncementotherfilesController::class, 'bulkRestore']);
    Route::get('/trash-announcementotherfiles', [AnnouncementotherfilesController::class, 'trash']);
    Route::get('/restore-announcementotherfiles/{announcementotherfilesId}', [AnnouncementotherfilesController::class, 'restore'])->name('announcementotherfiles.restore');

    // Announcementotherfiles Search
    Route::get('/announcementotherfiles-search', [AnnouncementotherfilesController::class, 'search']);

    // Announcementotherfiles Paginate
    Route::get('/announcementotherfiles-paginate', [AnnouncementotherfilesController::class, 'paginate']);

    // Announcementotherfiles Filter
    Route::get('/announcementotherfiles-filter', [AnnouncementotherfilesController::class, 'filter']);

    // end...

});
