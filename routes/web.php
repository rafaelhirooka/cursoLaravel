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

Route::get('/', function () {
    return view('welcome');
});

/*
 * Nesse caso nessa rota o id é obrigatório ser passado na url
 */

/*
Route::get('/contato/{id}', function ($id) {
    return "Contato " . $id;
});
*/


/*
 * Nesse caso nessa rota o id não é obrigatório
 */
Route::get('/contato/{id?}', function ($id = NULL) {
    if ($id != NULL) {
        return "Tem o id e ele vale " . $id;
    } else {
        return "O id não foi passado";
    }
});

Route::post('/contato', function () {
    dd($_POST);
});

Route::put('/contato', function () {
    return "PUT";
});