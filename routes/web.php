<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes – sitio público (Front)
|--------------------------------------------------------------------------
*/
Route::controller(FrontController::class)->group(function () {
    // Home & páginas estáticas
    Route::get('/', 'index')->name('front.home');
    Route::get('nosotros', 'nosotros')->name('front.nosotros');
    Route::get('servicios', 'servicios')->name('front.servicios');
    Route::get('amenidades', 'amenidades')->name('front.amenidades');
    Route::get('contacto', 'contacto')->name('front.contacto');

    // Secciones principales
    Route::get('hospedaje', 'hospedaje')->name('front.hospedaje');
    Route::get('paquetes',  'paquetes')->name('front.paquetes');
    Route::get('spa',       'spa')->name('front.spa');
    Route::get('eventos-empresariales', 'eventosEmpresariales')->name('front.eventosEmpresariales');
    Route::get('jardines-boda',         'jardinesBoda')->name('front.jardinesBoda');

    // Paquetes individuales
    Route::get('paquete-premium',    'paquetePremium')->name('front.paquetePremium');
    Route::get('paquete-express',    'paqueteExpress')->name('front.paqueteExpress');
    Route::get('paquete-villa-spa',  'paqueteVillaSpa')->name('front.paqueteVillaSpa');
    Route::get('paquete-plus',       'paquetePlus')->name('front.paquetePlus');

    // Admisión & pruebas
    Route::get('admision/{id}', 'admision')->name('front.admision');
    Route::get('test',          'test')->name('front.test');

    /*
    |--------------------------------------------------------------------------
    |  Reservaciones
    |--------------------------------------------------------------------------
    */
    Route::get('reservacion-ikaan', 'reservacion_ikaan')->name('reservas.inicio');

    Route::get('reservacion-ikaan-selecciona-habitacion',
        'reservacion_ikaan_selecciona_habitacion')->name('reservas.seleccionHabitacion');

    // Confirmación de pago (GET muestra formulario / POST procesa)
    Route::get('reservacion-ikaan-confirma-tu-pago',
        'reservacion_ikaan')->name('reservas.confirmacionForm');

    Route::post('reservacion-ikaan-confirma-tu-pago',
        'reservacion_ikaan_confirma_tu_pago')->name('reservas.confirmacionStore');

    // Utilidades
    Route::get('reservacion-ikaan-lista', 'index')->name('reservas.lista');     // (confirma si la necesitas)
    Route::post('validate_fields',  'validate_fields')->name('reservas.validaCampos');
    Route::post('process_payment',  'process_payment')->name('reservas.procesaPago');

    // Platillos
    Route::get('platillos/{sku}', 'platillos')->name('reservas.platillos');
    Route::post('save_food',      'save_food')->name('reservas.guardaPlatillos');
});

/*
|--------------------------------------------------------------------------
|  CMS / Back-office  (se mantiene con cadenas, pero agregamos namespace)
|--------------------------------------------------------------------------
|  Al incluir "namespace" => 'App\Http\Controllers' evitamos convertir
|  cientos de rutas de golpe.  Podrás migrarlas poco a poco si lo deseas.
*/
Route::group([
    'prefix'     => 'cms',
    'namespace'  => 'App\Http\Controllers',
], function () {

    /* ---------- Cuenta & autenticación ---------- */
    Route::get('/', 'Back\AccountController@getHome')->name('login');     // login por defecto
    Route::get('/', 'Back\AccountController@getHome')->name('register');  // evita 404 en register

    Route::group(['prefix' => 'account'], function () {
        Route::get('/', fn () => redirect('cms'))->name('login');
        Route::get('logout',           'Back\AccountController@getLogout')->name('admin_logout');
        Route::post('login',           'Back\AccountController@postLogin')->name('admin_login');
        Route::get('password-recovery','Back\AccountController@getRecovery');
        Route::post('password-recovery','Back\AccountController@postRecovery');
        Route::get('password/reset/{token}', 'Back\AccountController@getReset')->name('password.request');
        Route::post('password/reset',  'Back\AccountController@postReset')->name('password.reset');
    });

    /* ---------- Área protegida ---------- */
    Route::group(['middleware' => ['auth']], function () {

        /* ===== Dashboard ===== */
        Route::group(['prefix' => 'dashboard'], function () {
            Route::view('/', 'back.dashboard.dashboard');

            /* === Sistema === */
            Route::group(['prefix' => 'system'], function () {

                /* Usuarios */
                Route::group(['prefix' => 'user'], function () {
                    Route::get('/',           'Back\Dashboard\System\UserController@index')->name('user_index');
                    Route::get('create',      'Back\Dashboard\System\UserController@create')->name('user_create_get');
                    Route::post('store',      'Back\Dashboard\System\UserController@store')->name('user_create');
                    Route::get('edit/{id}',   'Back\Dashboard\System\UserController@edit')->name('user.edit');
                    Route::post('update/{id}','Back\Dashboard\System\UserController@update')->name('user_update');
                    Route::get('delete/{id}', 'Back\Dashboard\System\UserController@destroy')->name('user_delete');
                });

                /* Perfiles */
                Route::group(['prefix' => 'profile'], function () {
                    Route::get('/',           'Back\Dashboard\System\ProfileController@index')->name('profile_index');
                    Route::get('create',      'Back\Dashboard\System\ProfileController@create')->name('profile_create');
                    Route::post('store',      'Back\Dashboard\System\ProfileController@store')->name('profile.store');
                    Route::get('edit/{id}',   'Back\Dashboard\System\ProfileController@edit')->name('profile.edit');
                    Route::post('update',     'Back\Dashboard\System\ProfileController@update')->name('profile.update');
                    Route::get('getData',     'Back\Dashboard\System\ProfileController@getData')->name('profile.data');
                    Route::get('view/{id}',   'Back\Dashboard\System\ProfileController@show')->name('profile.view');
                    Route::get('delete/{id}', 'Back\Dashboard\System\ProfileController@destroy')->name('profile.delete');
                });
            });

            /* === Cuestionarios === */
            Route::group(['prefix' => 'cuestionario'], function () {

                Route::group(['prefix' => 'admision'], function () {
                    Route::get('/',        'Back\Dashboard\Catalog\CuestionarioController@admision');
                    Route::get('create',   'Back\Dashboard\Catalog\CuestionarioController@create');
                    Route::post('store',   'Back\Dashboard\Catalog\CuestionarioController@store');
                    Route::get('ver/{id}', 'Back\Dashboard\Catalog\CuestionarioController@Ver');
                    Route::post('update/{id}', 'Back\Dashboard\Catalog\CuestionarioController@update');
                });

                Route::group(['prefix' => 'servicio'], function () {
                    Route::get('/',        'Back\Dashboard\Catalog\CuestionarioController@servicio');
                    Route::get('create',   'Back\Dashboard\Catalog\CuestionarioController@createServ');
                    Route::post('store',   'Back\Dashboard\Catalog\CuestionarioController@storeServ');
                    Route::get('evaluacion/{id}',   'Back\Dashboard\Catalog\CuestionarioController@evaluacion');
                    Route::get('ver/{id}',           'Back\Dashboard\Catalog\CuestionarioController@verEvaluacion');
                    Route::get('descargar/{id}',     'Back\Dashboard\Catalog\CuestionarioController@decargarEvaluacion');

                    Route::post('evaluacion', 'Back\Dashboard\Catalog\CuestionarioController@decargarPdf');
                    Route::get('pdf_otro',    'Back\Dashboard\Catalog\CuestionarioController@pdfOtro');
                });
            });

            /* === Catálogo === */
            Route::group(['prefix' => 'catalogo'], function () {

                /* Habitaciones */
                Route::group(['prefix' => 'habitaciones'], function () {
                    Route::get('/',        'Back\Dashboard\Catalog\RoomsController@index');
                    Route::get('create',   'Back\Dashboard\Catalog\RoomsController@create');
                    Route::post('store',   'Back\Dashboard\Catalog\RoomsController@store');
                    Route::get('edit/{id}','Back\Dashboard\Catalog\RoomsController@edit');
                    Route::post('update/{id}', 'Back\Dashboard\Catalog\RoomsController@update');
                    Route::get('getData',  'Back\Dashboard\Catalog\RoomsController@getData');
                    Route::get('view/{id}','Back\Dashboard\Catalog\RoomsController@show');
                    Route::get('delete/{id}', 'Back\Dashboard\Catalog\RoomsController@destroy');
                    Route::get('remove_image/{image_id}', 'Back\Dashboard\Catalog\RoomsController@remove_image');
                    Route::get('remove_caracteristica/{caracteristica_id}', 'Back\Dashboard\Catalog\RoomsController@remove_caracteristica');
                });

                /* Paquetes */
                Route::group(['prefix' => 'paquetes'], function () {
                    Route::get('/',        'Back\Dashboard\Catalog\PackController@index');
                    Route::get('create',   'Back\Dashboard\Catalog\PackController@create');
                    Route::post('store',   'Back\Dashboard\Catalog\PackController@store');
                    Route::get('edit/{id}','Back\Dashboard\Catalog\PackController@edit');
                    Route::post('update/{id}', 'Back\Dashboard\Catalog\PackController@update');
                    Route::get('getData',  'Back\Dashboard\Catalog\PackController@getData');
                    Route::get('view/{id}','Back\Dashboard\Catalog\PackController@show');
                    Route::get('delete/{id}', 'Back\Dashboard\Catalog\PackController@destroy');
                    Route::get('remove_image/{image_id}', 'Back\Dashboard\Catalog\PackController@remove_image');
                    Route::get('remove_caracteristica/{caracteristica_id}', 'Back\Dashboard\Catalog\PackController@remove_caracteristica');
                });

                /* Ofertas */
                Route::group(['prefix' => 'ofertas'], function () {
                    Route::get('/',        'Back\Dashboard\Catalog\OffersController@index');
                    Route::get('create',   'Back\Dashboard\Catalog\OffersController@create');
                    Route::post('store',   'Back\Dashboard\Catalog\OffersController@store');
                    Route::get('edit/{id}','Back\Dashboard\Catalog\OffersController@edit');
                    Route::post('update/{id}', 'Back\Dashboard\Catalog\OffersController@update');
                    Route::get('getData',  'Back\Dashboard\Catalog\OffersController@getData');
                    Route::get('view/{id}','Back\Dashboard\Catalog\OffersController@show');
                    Route::get('delete/{id}', 'Back\Dashboard\Catalog\OffersController@destroy');
                });

                /* Reservaciones */
                Route::group(['prefix' => 'reservaciones'], function () {
                    Route::get('/', 'Back\Dashboard\Catalog\ReservationsController@index');

                    // Estancia
                    Route::get('estancia/{id}', 'Back\Dashboard\Catalog\ReservationsController@estancia');
                    Route::post('estancia/{id}', 'Back\Dashboard\Catalog\ReservationsController@estanciaGuardar');
                    Route::get('descargar-estancia/{id}', 'Back\Dashboard\Catalog\ReservationsController@estanciaPdf')
                         ->name('reservas.estancia.pdf');

                    // Admisión
                    Route::get('admision/{id}', 'Back\Dashboard\Catalog\ReservationsController@admision');
                    Route::get('descargar-admision/{id}', 'Back\Dashboard\Catalog\ReservationsController@admisionPdf')
                         ->name('reservas.admision.pdf');

                    // Folio
                    Route::get('folio/{id}',        'Back\Dashboard\Catalog\ReservationsController@folio');
                    Route::post('editarEval/{id}',  'Back\Dashboard\Catalog\ReservationsController@editarEval');
                });

                /* Lealtad */
                Route::group(['prefix' => 'lealtad'], function () {
                    Route::get('/',       'Back\Dashboard\Catalog\LealtadController@index');
                    Route::get('create',  'Back\Dashboard\Catalog\LealtadController@create');
                    Route::post('store',  'Back\Dashboard\Catalog\LealtadController@store');
                });
            });

            /* === Prospectos === */
            Route::group(['prefix' => 'prospectos'], function () {
                Route::get('/',        'Back\Dashboard\Prospectos\ProspectosController@index');
                Route::get('create',   'Back\Dashboard\Prospectos\ProspectosController@create');
                Route::post('store',   'Back\Dashboard\Prospectos\ProspectosController@store');
                Route::get('edit/{id}','Back\Dashboard\Prospectos\ProspectosController@edit');
                Route::post('update/{id}', 'Back\Dashboard\Prospectos\ProspectosController@update');
                Route::get('delete/{id}', 'Back\Dashboard\Prospectos\ProspectosController@destroy');
            });

            /* === Alimentación (usa controlador Front) === */
            Route::group(['prefix' => 'alimentacion'], function () {
                Route::get('/',        'Back\Dashboard\Alimentacion\HomeController@index');
                Route::get('ver/{id}', 'Back\Dashboard\Alimentacion\HomeController@ver');
                Route::post('save_food', 'Front\FrontController@save_food');
            });
        });
    });
});
