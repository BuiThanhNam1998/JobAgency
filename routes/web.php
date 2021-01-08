<?php

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

Route::group([
    'middleware' => ['auth'],
    'as' => 'quantri.',
    'prefix' => 'quantri',
], function () {
    Route::resource('dashboard', 'quantri\DashboardController');
    Route::group([
        'middleware' => ['auth', 'isAdmin'],
    ], function () {
        Route::group([
            'middleware' => ['isQuanTriVien']
        ], function () {
            Route::resource('settings', 'quantri\SettingsController');
            Route::resource('users', 'quantri\UserController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index', 'show']);
            Route::resource('hosos','quantri\HosoController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index','show']);
            Route::resource('tintuyendungs','quantri\TintuyendungController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index', 'show']);
            Route::resource('lichhens','quantri\LichhenController')
                 ->only(['create', 'store', 'edit', 'update', 'destroy']);
            Route::resource('trangthai_hosos','quantri\Trangthai_hosoController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index','show']);
            Route::resource('trangthai_tintuyendungs','quantri\Trangthai_tintuyendungController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index','show']);
            Route::resource('trangthai_lichhens','quantri\Trangthai_lichhenController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index', 'show']);
            Route::resource('nganhs','quantri\NganhController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index', 'show']);
            Route::resource('vaitros','quantri\VaitroController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index','show']);
            Route::resource('thanhphos','quantri\ThanhphoController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index','show']);
            Route::resource('trinhdos','quantri\TrinhdoController')
                ->only(['create', 'store', 'edit', 'update', 'destroy','index', 'show']);
        });
        Route::resource('lichhens','quantri\LichhenController')
             ->only(['index', 'show']);
        Route::resource('danhgias','quantri\DanhgiaController')
            ->only(['create', 'store', 'edit', 'update',]);
    });
});

Route::group([
    'as' => 'ungvien.',
], function () {
    Route::resource('','ungvien\TrangchuController');
    Route::resource('chitiettins','ungvien\ChitiettinController');
    Route::resource('nganhs','ungvien\NganhController');
    Route::resource('gioithieu','ungvien\GioithieuController');

});

Route::group([
    'as' => 'ungvien.',
    'middleware' => ['auth', 'verified','isUngVien'],
    'prefix' => 'ungvien',
], function () {
    Route::resource('dashboard', 'quantri\DashboardController');
    Route::resource('hosos','ungvien\HosoController');
});


//Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('test-gui-ho-so', function () {
    $hososmoi = \App\hoso::query()->inRandomOrder()->first();
    Mail::to($hososmoi)->send(new \App\Mail\CanOnVidaNopHoSo($hososmoi));
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect/{provider}', function (\Illuminate\Http\Request $request, $provider) {
    return Socialite::driver($provider)->redirect();
})->name('social.redirect');
Route::get('/callback/{provider}', function (\Illuminate\Http\Request $request, $provider) {
//   return $request->all();
    /**
     * @var $user \Laravel\Socialite\One\User
     */
    $user = Socialite::driver($provider)->user();

    $vaitros = \App\vaitro::query()->get()->pluck('id', 'ten');

    $user = \App\User::query()->firstOrCreate([
        'email' => $user->getEmail(),
    ], [
        'name' => $user->getName(),
        'password' => rand(11111111,99999999),
        'vaitro_id' => $vaitros['Ứng viên'],
        'email_verified_at' => \Carbon\Carbon::now(),
    ]);

    Auth::login($user);
    return redirect()->route('ungvien.index');
})->name('social.callback');



Route::group([
    'namespace' => 'User'
], function () {
    Route::get('/', 'PageController@getHome')->name('index');
    Route::get('about-us', 'PageController@getAboutUs')->name('about-us');
    Route::get('contact-us', 'PageController@getContactUs')->name('contact-us');
});

Route::group([
    'prefix' => 'job'
], function() {
    Route::get('/list', 'User\Job\ListController@main')->name('job.list');
    Route::get('/detail/{id}', 'User\Job\DetailController@main')->name('job.detail');
});

Route::group([
    'middleware' => ['auth', 'role:1']
], function() {

    Route::group([
        'prefix' => 'profile',
    ], function() {
        Route::group([
            'prefix' => 'user-info',
            'namespace' => 'User\Info'
        ], function() {
            Route::get('/', 'IndexController@main')->name('user.info');
            Route::post('/update', 'UpdateController@main')->name('user.info.update');
        });

        Route::group([
            'prefix' => 'job-profile',
            'namespace' => 'User\Profile'
        ], function() {
            Route::get('/list', 'ListController@main')->name('user.profile.list');
            Route::get('/detail/{id}', 'DetailController@main')->name('user.profile.detail');
            Route::get('/create/', 'CreateController@main')->name('user.profile.create');
            Route::post('/insert/', 'InsertController@main')->name('user.profile.insert');
            Route::post('/update/{id}', 'UpdateController@main')->name('user.profile.update');
            Route::post('/destroy/{id}', 'DestroyController@main')->name('user.profile.destroy');
        });

        Route::group([
            'prefix' => 'application',
            'namespace' => 'User\Application'
        ], function() {
            Route::get('/list', 'ListController@main')->name('user.application.list');
            Route::get('/detail', 'DetailController@main')->name('user.application.detail');
            Route::post('/store', 'CreateController@main')->name('user.application.store');
        });

    });
});

Route::group([
    'middleware' => ['auth', 'role:2']
], function() {

    Route::group([
        'prefix' => 'admin',
    ], function() {
        Route::group([
            'prefix' => 'career',
            'namespace' => 'Admin\Career'
        ], function() {
            Route::get('/list', 'ListController@main')->name('admin.career.list');
            Route::get('/detail/{id}', 'DetailController@main')->name('admin.career.detail');
            Route::get('/create/', 'CreateController@main')->name('admin.career.create');
            Route::post('/insert/', 'InsertController@main')->name('admin.career.insert');
            Route::post('/update/{id}', 'UpdateController@main')->name('admin.career.update');
            Route::post('/destroy/{id}', 'DestroyController@main')->name('admin.career.destroy');
        });

        Route::group([
            'prefix' => 'user',
            'namespace' => 'Admin\User'
        ], function() {
            Route::get('/list', 'ListController@main')->name('admin.user.list');
            Route::get('/detail/{id}', 'DetailController@main')->name('admin.user.detail');
            Route::post('/update/{id}', 'UpdateController@main')->name('admin.user.update');
        });
    });
});

Route::group([
    'middleware' => ['auth', 'role:3']
], function() {

    Route::group([
        'prefix' => 'employer',
    ], function() {
        Route::group([
            'prefix' => 'job',
            'namespace' => 'Employer\Job'
        ], function() {
            Route::get('/list', 'ListController@main')->name('employer.job.list');
            Route::get('/detail/{id}', 'DetailController@main')->name('employer.job.detail');
            Route::get('/create/', 'CreateController@main')->name('employer.job.create');
            Route::post('/insert/', 'InsertController@main')->name('employer.job.insert');
            Route::post('/update/{id}', 'UpdateController@main')->name('employer.job.update');
            Route::post('/destroy/{id}', 'DestroyController@main')->name('employer.job.destroy');
        });
        Route::group([
            'prefix' => 'application',
            'namespace' => 'Employer\Application'
        ], function() {
            Route::get('/list', 'ListController@main')->name('employer.application.list');
            Route::get('/detail/{id}', 'DetailController@main')->name('employer.application.detail');
            Route::get('/create/', 'CreateController@main')->name('employer.application.create');
            Route::post('/insert/', 'InsertController@main')->name('employer.application.insert');
            Route::post('/update/{id}', 'UpdateController@main')->name('employer.application.update');
            Route::post('/change-status', 'ChangeStatusController@main')->name('employer.application.change.status');
            Route::post('/destroy/{id}', 'DestroyController@main')->name('employer.application.destroy');
        });
    });
});



Auth::routes(['verify' => false]);

Route::get('/home', 'HomeController@index')->name('home');
