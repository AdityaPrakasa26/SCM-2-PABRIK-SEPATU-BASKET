<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BiayaProduksiController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\StokProduksiController;
use App\Http\Controllers\TenagaKerjaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/pengguna', [UserController::class, 'index'])->name('admin.index');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/kategori', [KategoriBarangController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriBarangController::class, 'addView'])->name('kategori.create');
Route::post('/kategori', [KategoriBarangController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriBarangController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}', [KategoriBarangController::class, 'update'])->name('kategori.update');
Route::get('/kategori/delete/{id}', [KategoriBarangController::class, 'destroy']);

Route::get('/pdf', [ExportController::class, 'exportPDF'])->name('export.pdf');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/add', [BarangController::class, 'addView'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::get('/barang/delete/{id}', [BarangController::class, 'destroy']);

Route::get('/gudang/index', [GudangController::class, 'index'])->name('gudang.index')->middleware(['auth', 'role:gudang,admin']);
Route::get('/gudang/create', [GudangController::class, 'addView'])->name('gudang.create')->middleware(['role:gudang,admin']);
Route::post('/gudang', [GudangController::class, 'store'])->name('gudang.store')->middleware(['role:gudang,admin']);
Route::get('/gudang/edit/{id}', [GudangController::class, 'edit'])->name('gudang.edit')->middleware(['role:gudang,admin']);
Route::put('/gudang/update/{id}', [GudangController::class, 'update'])->name('gudang.update')->middleware(['role:gudang,admin']);
Route::get('/gudang/delete/{id}', [GudangController::class, 'destroy'])->name('gudang.destroy')->middleware(['role:gudang,admin']);

Route::get('/outlet', [OutletController::class, 'index'])->name('outlet.index');
Route::get('/outlet/create', [OutletController::class, 'addView'])->name('outlet.create');
Route::post('/outlet', [OutletController::class, 'store']);
Route::get('/outlet/edit/{id}', [OutletController::class, 'edit'])->name('outlet.edit');
Route::put('/outlet/update/{id}', [OutletController::class, 'update'])->name('outlet.update');
Route::get('/outlet/delete/{id}', [OutletController::class, 'destroy']);

Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
Route::get('/stok/create', [StokController::class, 'addView'])->name('stok.create');
Route::post('/stok', [StokController::class, 'store']);
Route::get('/stok/edit/{id}', [StokController::class, 'edit'])->name('stok.edit');
Route::put('/stok/update/{id}', [StokController::class, 'update'])->name('stok.update');
Route::get('/stok/delete/{id}', [StokController::class, 'destroy']);

Route::get('/bahan-baku', [BahanBakuController::class, 'index'])->name('bahan_baku.index');
Route::get('/bahan-baku/create', [BahanBakuController::class, 'addView'])->name('bahan_baku.create');
Route::post('/bahan-baku', [BahanBakuController::class, 'store']);
Route::get('/bahan-baku/edit/{id}', [BahanBakuController::class, 'edit'])->name('bahan_baku.edit');
Route::put('/bahan-baku/update/{id}', [BahanBakuController::class, 'update'])->name('bahan_baku.update');
Route::get('/bahan-baku/delete/{id}', [BahanBakuController::class, 'destroy']);

Route::get('/tenaga-kerja', [TenagaKerjaController::class, 'index'])->name('tenaga_kerja.index');
Route::get('/tenaga-kerja/create', [TenagaKerjaController::class, 'addView'])->name('tenaga_kerja.create');
Route::post('/tenaga-kerja', [TenagaKerjaController::class, 'store']);
Route::get('/tenaga-kerja/edit/{id}', [TenagaKerjaController::class, 'edit'])->name('tenaga_kerja.edit');
Route::put('/tenaga-kerja/update/{id}', [TenagaKerjaController::class, 'update'])->name('tenaga_kerja.update');
Route::get('/tenaga-kerja/delete/{id}', [TenagaKerjaController::class, 'destroy']);

Route::get('/produksi/index', [ProduksiController::class, 'index'])->name('produksi.index')->middleware(['auth', 'role:produksi,admin']);
Route::get('/produksi/create', [ProduksiController::class, 'addView'])->name('produksi.create')->middleware(['auth', 'role:produksi,admin']);
Route::post('/produksi', [ProduksiController::class, 'store'])->middleware(['auth', 'role:produksi,admin'])->middleware(['auth', 'role:produksi,admin']);
Route::get('/produksi/edit/{id}', [ProduksiController::class, 'edit'])->name('produksi.edit')->middleware(['auth', 'role:produksi,admin']);
Route::put('/produksi/update/{id}', [ProduksiController::class, 'update'])->name('produksi.update')->middleware(['auth', 'role:produksi,admin']);
Route::get('/produksi/delete/{id}', [ProduksiController::class, 'destroy'])->name('produksi.destroy')->middleware(['auth', 'role:produksi,admin']);

Route::get('/stok-produksi', [StokProduksiController::class, 'index'])->name('stok_produksi.index');
Route::get('/stok-produksi/create', [StokProduksiController::class, 'addView'])->name('stok_produksi.create');
Route::post('/stok-produksi', [StokProduksiController::class, 'store']);
Route::get('/stok-produksi/edit/{id}', [StokProduksiController::class, 'edit'])->name('stok_produksi.edit');
Route::put('/stok-produksi/update/{id}', [StokProduksiController::class, 'update'])->name('stok_produksi.update');
Route::get('/stok-produksi/delete/{id}', [StokProduksiController::class, 'destroy']);

Route::get('/biaya-produksi', [BiayaProduksiController::class, 'index'])->name('biaya-produksi.index');
Route::get('/biaya-produksi/create', [BiayaProduksiController::class, 'addView'])->name('biaya-produksi.create');
Route::post('/biaya-produksi', [BiayaProduksiController::class, 'store']);
Route::get('/biaya-produksi/edit/{id}', [BiayaProduksiController::class, 'edit'])->name('biaya-produksi.edit');
Route::put('/biaya-produksi/update/{id}', [BiayaProduksiController::class, 'update'])->name('biaya-produksi.update');
Route::get('/biaya-produksi/delete/{id}', [BiayaProduksiController::class, 'destroy'])->name('biaya-produksi.destroy');

Route::get('/pengguna', [UserController::class, 'index'])->name('admin.index');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// tambahkan middleware role pada route
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
});

Route::middleware(['auth', 'role:gudang'])->prefix('gudang')->group(function () {
    Route::get('/', [App\Http\Controllers\GudangController::class, 'index'])->name('gudang.home');
});

Route::middleware(['auth', 'role:produksi'])->prefix('produksi')->group(function () {
    Route::get('/', [App\Http\Controllers\ProduksiController::class, 'index'])->name('produksi.home');
});

Route::get('/admin', function () {
    return view('admin.home');
})->middleware(['auth', 'role:admin']);

Route::get('/gudang/home-page', function () {
    return view('gudang.home');
})->middleware(['auth', 'role:gudang']);

Route::get('/produksi', function () {
    return view('produksi.home');
})->middleware(['auth', 'role:produksi']);

Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
