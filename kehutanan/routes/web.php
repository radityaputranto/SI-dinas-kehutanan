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
		return view('user/home');
	}
	else{
		//admin
		$users['users'] = \App\User::with('dept')->get();
		/*return $users;*/
		return view('admin/home',$users);
	}
});
Route::get('absensi','UserController@index');
/*
Route::get('','Controller@index');
*/
/*user route*/
/*user route*/
Route::get('absensi','AbsensiController@index');
Route::get('tun_daerah','TunDaerahController@index');
Route::get('tun_pres','TunPrestasiController@index');
Route::get('uang_mkn','UangMknController@index');
Route::get('profil','ProfilController@index');

/*admin route*/
Route::resource('emp', 'AdminEmpController');
Route::get('add_emp','AdminEmpController@create');
/*Route::post('add_emp','AdminEmpController@store');*/
/*Route::get('edit_emp',function(){
	return view('admin/edit_emp');
	});*/
Route::get('add_event','AddEventController@index');
Route::get('list_lembur','ListLemburController@index');
Route::get('list_telat','ListTelatController@index');
Route::get('list_pul_cpt','ListPulCptController@index');
Route::get('list_tdk_absen','ListTAbsenController@index');
Route::get('list_tdk_senam','ListTSenamController@index');
Route::get('list_tun_daerah','ListTunDaerahController@index');
Route::get('list_tun_prestasi','ListTunPresController@index');
Route::get('list_uang_mkn','ListUangMknController@index');
