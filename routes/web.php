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




Route::get('/', 'User\PageController@getHome')->name('index');

Route::group([
    'prefix' => 'job'
], function() {
    Route::get('/list', 'User\Job\ListController@main')->name('job.list');
    Route::get('/detail/{id}', 'User\Job\DetailController@main')->name('job.detail');
});

Route::group([
    'middleware' => ['auth']
], function() {

    Route::group([
        'prefix' => 'profile',
    ], function() {
        Route::group([
            'prefix' => 'job-profile'
        ], function() {
            Route::get('/list', 'User\Profile\ListController@main')->name('user.profile.list');
            Route::get('/detail/{id}', 'User\Profile\DetailController@main')->name('user.profile.detail');
        });
    });

    Route::group([
        'prefix' => 'application',
    ], function() {
        Route::post('/store', 'User\Application\CreateController@main')->name('user.application.store');
    });
});

Route::group([
    'middleware' => ['auth']
], function() {

    Route::group([
        'prefix' => 'admin',
    ], function() {
        Route::group([
            'prefix' => 'career'
        ], function() {
            Route::get('/list', 'Admin\Career\ListController@main')->name('admin.career.list');
        });
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
