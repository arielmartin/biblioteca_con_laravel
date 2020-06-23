<?php

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\PermisoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'InicioController@index');
/*
Route::get('admin/permiso', 'Admin\PermisoController@index')->name('permiso');
*/


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    /*Rutas del Menu*/
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');

    Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
    Route::get('menu/{id}/eliminar', 'MenuController@eliminar')->name('eliminar_menu');

    /*Rutas de ROL*/
    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
    /* RUTAS MENU-ROL */
    Route::get('menu-rol','MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol','MenuRolController@guardar')->name('guardar_menu_rol');
});
