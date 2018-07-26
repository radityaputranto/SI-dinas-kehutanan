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
Auth::routes();
/*Route::get('/home', 'HomeController@index')->name('home');
*/
Route::group(['middleware' => ['web','auth']],function(){
		return view('welcome');
});

Route::get('/home',function(){
	if (Auth::user()->admin == 0) {
		//return view('user/home');

		return redirect('home_user');
		//Route::get('absensi','user\PegawaiController@index');
	}
	else{
		//admin
		$users['users'] = \App\User::with('dept')->get();
		
		//return $users;
		return view('admin/home',$users);
		


	}
});
Route::get('absensi','UserController@index');

/*
Route::get('','Controller@index');
*/
/*user route*/

Route::get('home_user','user\PegawaiController@index');
/*user route*/
Route::resource('user', 'user\ProfilController');

Route::get('absensi','user\AbsensiController@index');
Route::get('tun_daerah','user\PegawaiController@tun_daerah');
Route::get('tun_pres','user\PegawaiController@tun_prestasi');
Route::get('uang_mkn','user\PegawaiController@uang_mkn');
Route::get('profil','user\ProfilController@index');
Route::get('surat_ijin','user\SuratController@index');
Route::post('import_surat','user\SuratController@store');
Route::get('pdf_daerah','user\TunDaerahController@generatePDF');
Route::get('pdf_prestasi','user\TunPrestasiController@generatePDF');
Route::get('pdf_uang_mkn','user\UangMknController@generatePDF');

//Route::post('edit_profil','user\ProfilController@edit');

/*admin route*/
Route::resource('emp', 'Admin\AdminEmpController');
Route::get('add_emp','Admin\AdminEmpController@create');

/*export excel admin*/
Route::get('export_pegawai','Admin\AdminEmpController@export_excel');
Route::get('export_potongan','Admin\PotonganController@export_excel');
Route::get('export_lembur','Admin\LemburController@export_excel');
Route::get('export_tunjangan','Admin\TunjanganController@export_excel');

Route::resource('absen', 'Admin\AdminAbsensiController');
Route::get('list_absen','Admin\AdminAbsensiController@index');
/*import excel*/
Route::post('import_absen','Admin\AdminAbsensiController@import_excel');

Route::get('export_tunjangan','Admin\TunjanganController@export_excel');
Route::resource('surat', 'Admin\ListSuratController');
Route::get('list_surat','Admin\ListSuratController@index');
Route::get('tes_pdf','Admin\ListSuratController@generatePDF');

Route::resource('tunjangan', 'Admin\TunjanganController');
Route::get('add_tunjangan','Admin\TunjanganController@create');
Route::get('list_tunjangan','Admin\TunjanganController@index');

Route::resource('lembur', 'Admin\LemburController');
Route::get('add_lembur','Admin\LemburController@create');
Route::get('data_lembur','Admin\LemburController@index');

Route::resource('potongan', 'Admin\PotonganController');
Route::get('add_potongan','Admin\PotonganController@create');
Route::get('data_potongan','Admin\PotonganController@index');

Route::get('admin_profil','Admin\AdminProfilController@index');


/*Route::post('add_emp','AdminEmpController@store');*/
Route::get('input_absen',function(){
	return view('admin/input_absensi');
	});
Route::get('add_event','admin\AddEventController@index');
//Route::get('list_lembur','admin\ListLemburController@index');
Route::get('list_telat','admin\ListTelatController@index');
Route::get('list_pul_cpt','admin\ListPulCptController@index');
Route::get('list_tdk_absen','admin\ListTAbsenController@index');
Route::get('list_tdk_senam','admin\ListTSenamController@index');
Route::get('list_tun_daerah','admin\ListTunDaerahController@index');
Route::get('list_tun_prestasi','admin\ListTunPresController@index');
Route::get('list_uang_mkn','admin\ListUangMknController@index');
