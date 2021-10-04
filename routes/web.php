<?php

use App\Http\Livewire\Admin\Addaccount;
use App\Http\Livewire\Admin\AdminKategori;
use App\Http\Livewire\Admin\AdminKategoriAdd;
use App\Http\Livewire\Admin\AdminKategoriEdit;
use App\Http\Livewire\Admin\AdminAnggota;
use App\Http\Livewire\Admin\AdminanggotaAdd;
use App\Http\Livewire\Admin\AdminanggotaEdit;
use App\Http\Livewire\Admin\AdminBuku;
use App\Http\Livewire\Admin\AdminBukuadd;
use App\Http\Livewire\Admin\AdminBukuedit;
use App\Http\Livewire\Admin\Admindashboard;
use App\Http\Livewire\Admin\AdminPasok;
use App\Http\Livewire\Admin\AdminPasokadd;
use App\Http\Livewire\Admin\AdminPasokedit;
use App\Http\Livewire\Admin\AdminPinjam;
use App\Http\Livewire\Admin\AdminPinjamadd;
use App\Http\Livewire\Admin\PasokPdf;
use App\Http\Livewire\LandingPage;
use App\Http\Livewire\Login;
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
Route::get('/',LandingPage::class)->name('home');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//Partisi untuk login
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/dashboard',Admindashboard::class)->name('dashboard');
    Route::get('/kategori',AdminKategori::class)->name('kategori');
    Route::get('/kategori/add',AdminKategoriAdd::class)->name('kategoriadd');
    Route::get('/kategori/edit/{kategori_slug}',AdminKategoriEdit::class)->name('kategoriedit');
    Route::get('/anggota',AdminAnggota::class)->name('anggota');
    Route::get('/anggota/add',AdminanggotaAdd::class)->name('anggotaadd');
    Route::get('/anggota/edit/{anggota_slug}',AdminanggotaEdit::class)->name('anggotaedit');
    Route::get('/buku',AdminBuku::class)->name('buku');
    Route::get('/buku/add',AdminBukuadd::class)->name('bukuadd');
    Route::get('/buku/edit/{buku_slug}',AdminBukuedit::class)->name('bukuedit');
    Route::get('/pasok',AdminPasok::class)->name('pasok');
    Route::get('/pasokadd',AdminPasokadd::class)->name('pasokadd');
    Route::get('/pasok/edit/{id}',AdminPasokedit::class)->name('pasokedit');
    Route::get('/laporan-pasok',[AdminPasok::class,'exportPDF']);
    Route::get('/pinjam',AdminPinjam::class)->name('pinjam');
    Route::get('/pinjam/add',AdminPinjamadd::class)->name('pinjamadd');
    Route::get('/register',Login::class)->name('createuser');
    Route::get('/addaccount',Addaccount::class)->name('accountadd');
});
