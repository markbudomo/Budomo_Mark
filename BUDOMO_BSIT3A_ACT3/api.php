<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Haircut;
use App\Models\Admin;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('haircut', function() {
    $haircuts = Haircut::with('admins')->get();
    return $haircuts;
});

Route::post('haircut/create', function(Request $request) {
    $haircut = new Haircut;
    //$haircut->name = $request->name;
    //$haircut->is_draft = $request->is_draft;
    $haircut->fill($request->all());
    $haircut->save();

    return $haircut;
});

Route::put('/haircut/{id}', function(Request $request, $id) {

    $haircut = Haircut::find($id);
    $haircut->haircut_name = 'Shagy';
    $haircut->save();

    return $haircut;
});

Route::delete('/haircut/{id}', function(Request $request, $id) {

    $haircut = Haircut::find($id);
    $haircut->delete();

    return $haircut;
});