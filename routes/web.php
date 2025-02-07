<?php


use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CouponCodeController;
use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\LoginRegister;
use App\Http\Controllers\TicketController;
use App\Http\Middleware\AuthCheck;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
Route::get('/', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/speaker', function () {
    return view('speaker');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contacts');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/promotion', function () {
    return view('promotion');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::post('/contact_us', [ContactUsController::class, 'sendMessage']);

Route::get('/reset-password/{token}', function () {
    return view('reset-password');
})->name('reset.password.get');

Route::post('/reset-password', [ForgotPassword::class, 'resetPassword']);

Route::post('/forgot-password', [ForgotPassword::class, 'submitForgotPasswordForm']);

Route::post('/check-promocode', [CouponCodeController::class, 'check_promo_code']);


// Tems and conditions

Route::get('/tems-and-condition', function () {
    return view('terms_and_condtion');
});
Route::get('/privacy-policy', function () {
    return view('privacyPolicy');
});
Route::get('/refund-and-cancelation-policy', function () {
    return view('refund-and-cancelation-policy');
});

//kkdkhdhdhdjdhfdf 


Route::middleware([AuthCheck::class])->group(function () {
    Route::get('booked_ticket_details/{ticket_code}', [TicketController::class, 'get_ticket_details_user']);

    Route::get('/profile', function () {
        return view('profile');
    });

    Route::get('/ticket-details', function () {
        return view('ticket_details');
    })->middleware('initData');
    ;

    Route::get('/ticket-booking', function () {

        return view('ticket-booking');
    });

    // Payment
    Route::get('payment', function () {
        return view('payment');
    });

    // login
    Route::get('/login', function () {
        return view('login');
    });

    Route::post('/login', [LoginRegister::class, 'login']);

    // Register
    Route::post('/register', [LoginRegister::class, 'register']);

    Route::get('/register', function () {
        return view('register');
    });

    Route::post('/ticket-booking', [TicketController::class, 'addTicket']);
    Route::post('/checked_in', [TicketController::class, 'checked_in']);

    /*************************************** ADMIN ROUTES *********************************************/

    Route::prefix('admin')->group(function () {

        Route::get('login', function () {
            return view('admin.login');
        });
        Route::get('/', function () {
            return view('admin.index');
        });
        Route::get('sidebar/sidebar-style-2', function () {
            return view('admin.sidebar-style-2');
        });


        // Tables
        Route::get('ticket/{ticket_code}', [TicketController::class, 'get_ticket_details']);
        Route::get('tables/tables', function () {
            return view('admin.tables');
        });

        // Forms
        Route::get('forms/forms', function () {
            return view('admin.basicForm');
        });


        // Maps
        Route::get('maps/google-map', function () {
            return view('admin.googleMap');
        });
        Route::get('maps/jsvectormap', function () {
            return view('admin.jsvectorMap');
        });

        // Charts
        Route::get('charts/chart', function () {
            return view('admin.charts');
        });
        Route::get('charts/sparkline', function () {
            return view('admin.sparkline');
        });

        // Base
        Route::get('base/avatar', function () {
            return view('admin.base.avatar');
        });
        Route::get('base/buttons', function () {
            return view('admin.base.buttons');
        });
        Route::get('base/gridsystem', function () {
            return view('admin.base.gridsystem');
        });
        Route::get('base/panels', function () {
            return view('admin.base.panels');
        });
        Route::get('base/notification', function () {
            return view('admin.base.notification');
        });
        Route::get('base/sweetalert', function () {
            return view('admin.base.sweetalert');
        });
        Route::get('base/font-awesome-icons', function () {
            return view('admin.base.fontAwesomeIcon');
        });
        Route::get('base/simple-line-icons', function () {
            return view('admin.base.simpleLineIcons');
        });
        Route::get('base/typography', function () {
            return view('admin.base.typography');
        });

        // Route::get('avatar',function () {
        //     return view('admin.avatar');
        // });
        Route::get('widgets', function () {
            return view('admin.widgets');
        });



    });
});




Route::get('logout', [LoginRegister::class, 'logout']);





// qrcode
// https://qr-code-styling.com/

// Route::get('qrcode', function () {


//     return QrCode::phoneNumber('111-222-6666');
// });





// https://www.makemytrip.com/bus/review?from=Delhi&to=Kanpur&date=2024-12-11T18%3A30%3A00.000Z&tripKey=39_MMTCC1199_MMTCC2140_12-12-2024_1001653250943461184&bpId=18920976&dpId=18921514&selectedSeats=7B&isSponsored=false

// php artisan storage:link
