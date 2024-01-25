<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\DataAdmin;
use App\Http\Controllers\DataberitaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeWebController;
use App\Http\Controllers\KategoriAdminController;
use App\Http\Controllers\KategoriAnggotaController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\KategoriDokumenController;
use App\Http\Controllers\KategoriKaryawanController;
use App\Http\Controllers\KategoriKegiatanController;
use App\Http\Controllers\KategoriPengurusController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\KategoriSimpananController;
use App\Http\Controllers\KategoriUnitBisnisController;
use App\Http\Controllers\KategoriUserController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubKategoriKegiatanController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\KategoriGarasiController;
use App\Http\Controllers\GarasiController;
use App\Http\Controllers\PusatController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\KategoriIuranController;
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

Route::get('/', [HomeWebController::class, 'index'])->name('home');
Route::get('tentang', [HomeWebController::class, 'tentang']);
Route::get('news', [HomeWebController::class, 'news']);
Route::get('/read/{slug}', [HomeWebController::class, 'read'])->name('read');
Route::get('agenda', [HomeWebController::class, 'agenda']);
Route::get('anggota/cetak-kartu/{id}', [AnggotaController::class, 'print']);
Route::get('lihat-agenda/{slug}', [HomeWebController::class, 'lihatagenda']);
Route::get('lihat-galeri', [HomeWebController::class, 'lihatgaleri']);
Route::get('lihat-team', [HomeWebController::class, 'lihatteam']);
Route::get('kontak', [HomeWebController::class, 'kontak']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');
    Route::resource('kategori_kegiatan', KategoriKegiatanController::class);
    Route::resource('sub_kategori_kegiatan', SubKategoriKegiatanController::class);
    Route::resource('kategori_produk', KategoriProdukController::class);
    Route::resource('kategori_berita', KategoriBeritaController::class);
    Route::resource('kategori_dokumen', KategoriDokumenController::class);
    Route::resource('kategori_simpanan', KategoriSimpananController::class);
    Route::resource('dokumen', DokumenController::class);
    Route::resource('produk', ProdukController::class);
    Route::post('image-upload', [ProdukController::class, 'storeImage'])->name('image.upload');
    Route::resource('galeri', GaleriController::class);
    Route::resource('data_berita', DataberitaController::class);
    Route::resource('kategori_user', KategoriUserController::class);
    Route::resource('provinsi', ProvinsiController::class);
    Route::resource('kota', KotaController::class);
    Route::resource('kategori_admin', KategoriAdminController::class);
    Route::resource('kategori_pengurus', KategoriPengurusController::class);
    Route::resource('kategori_anggota', KategoriAnggotaController::class);
    Route::resource('video', VideoController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('kategori_unit_bisnis', KategoriUnitBisnisController::class);
    Route::resource('kategori_karyawan', KategoriKaryawanController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('anggota', AnggotaController::class);
    Route::resource('kategori_garasi', KategoriGarasiController::class);
    Route::resource('garasi', GarasiController::class);
    Route::resource('data_admin', DataAdmin::class);
    Route::resource('pusat', PusatController::class);
    Route::resource('region', RegionController::class);
    Route::resource('chapter', ChapterController::class);
    Route::resource('community', CommunityController::class);
    Route::post('api/fetch-region', [CommunityController::class, 'fetchRegion']);
    Route::post('api/fetch-chapter', [CommunityController::class, 'fetchChapter']);
    Route::post('api/fetch-kegiatan', [SubKategoriKegiatanController::class, 'fetchKegiatan']);
    Route::resource('visi', VisiController::class);
    Route::resource('misi', MisiController::class);
    Route::resource('iuran', IuranController::class);
    Route::resource('kategori_iuran', KategoriIuranController::class);
    Route::get('bayar/{id}', [IuranController::class, 'bayar']);
    Route::get('pembayaran/{id}', [IuranController::class, 'pembayaran']);
    Route::get('verifikasi/{id}', [IuranController::class, 'verifikasi']);
});
