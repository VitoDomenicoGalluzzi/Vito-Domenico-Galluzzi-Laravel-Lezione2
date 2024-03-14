<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home'])-> name('homePage');

Route::get('/Chi-Siamo', [PublicController::class, 'chiSiamo'])-> name('chiSiamoPage');

Route:: get('/Servizi', [PublicController::class, 'servizi'])-> name('serviziPage');

Route::get('/Pagine-Articoli', [PublicController::class, 'pagineArticoli'])-> name('paginaArticoliPage');

route::get('/Pagina-Dettagli/{id}', [PublicController::class, 'paginaDettagli'])-> name('paginaDettagliPage'); 

