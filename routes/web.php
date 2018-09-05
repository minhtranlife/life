<?php
Route::get('','HomeController@index');

Route::get('company',function(){
    return view('company.about.index')
    ->with('pageTitle','Đôi nét về công ty');
});

Route::get('support',function(){
    return view('support.index')
        ->with('pageTitle','Thông tin liên hệ');
});
Route::get('vitrituyendung',function(){
    return view('tuyendung.vitri')
        ->with('pageTitle','Thông tin tuyển dụng');
});
Route::get('chinhsachtuyendung',function(){
    return view('tuyendung.chinhsach')
        ->with('pageTitle','Chính sách tuyển dụng');
});

Route::resource('sanpham','DmSanPhamController');

Route::get('lichtrinhtaphuan',function(){
    return view('news.lichtaphuan.index')
        ->with('pageTitle','Lịch trình tập huấn');
});

Route::get('hinhanhtaphuan',function(){
    return view('news.imgtaphuan.index')
        ->with('pageTitle','Hình ảnh tập huấn');
});

// <editor-fold defaultstate="collapsed" desc="--Setting--">
Route::resource('general','GeneralConfigsController');
Route::get('setting','GeneralConfigsController@setting');
Route::post('setting','GeneralConfigsController@updatesetting');

Route::resource('district','DistrictController');
Route::resource('town','TownController');
//Route::resource('company','CompanyController');

Route::resource('xetduyet_thaydoi_ttdoanhnghiep','XdTdTtDnController');
Route::post('xetduyet_thaydoi_ttdoanhnghiep/tralai','XdTdTtDnController@tralai');
Route::get('xetduyet_thaydoi_ttdoanhnghiep/{id}/duyet','XdTdTtDnController@duyet');

Route::resource('diabanhoatdong','DiaBanHdController');

//Users
Route::get('login','UsersController@login');
Route::post('signin','UsersController@signin');
Route::get('/change-password','UsersController@cp');
Route::post('/change-password','UsersController@cpw');
Route::get('/user_setting','UsersController@settinguser');
Route::post('/user_setting','UsersController@settinguserw');
Route::get('/checkpass','UsersController@checkpass');
Route::get('/checkuser','UsersController@checkuser');
Route::get('/checkmasothue','UsersController@checkmasothue');
Route::get('logout','UsersController@logout');
Route::get('users','UsersController@index');
Route::get('users/{id}/edit','UsersController@edit');
Route::patch('users/{id}','UsersController@update');
Route::get('users/{id}/phan-quyen','UsersController@permission');
Route::post('users/phan-quyen','UsersController@uppermission');
Route::post('users/delete','UsersController@destroy');
Route::get('users/lock/{id}/{pl}','UsersController@lockuser');
Route::get('users/unlock/{id}/{pl}','UsersController@unlockuser');
Route::get('users/create','UsersController@create');
Route::post('users','UsersController@store');

//EndUsers
// </editor-fold>//End Setting

?>




