<?php

use App\Document;
use App\Folder;
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

Route::get('/', function () {
    $query = Document::latest();

    if ($searchText = request('search')) {
        $query->search($searchText);
    }

    $documents = $query->paginate(10);

    return view('welcome', [
        'documents' => $documents
    ]);
})->name('main');

Route::resource('boxes', 'BoxController')
    ->only(['index', 'show']);

Route::resource('cells', 'CellController')
    ->only(['index', 'show']);

Route::resource('folders', 'FolderController')
    ->only(['show']);
    
Route::resource('documents', 'DocumentController')
    ->only(['create', 'store', 'destroy']);