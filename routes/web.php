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

Route::get('thongtintaphuan','ThongTinTapHuanController@index');




// <editor-fold defaultstate="collapsed" desc="--System--">
//Start User
Route::get('login','UserController@index');
Route::post('signin','UserController@signin');
Route::get('logout','UserController@logout');
//EndUsers
// </editor-fold>//End Setting

?>




