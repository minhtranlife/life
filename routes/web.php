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
Route::resource('vitrituyendung','ViTriTuyenDungController');

Route::get('chinhsachtuyendung',function(){
    return view('tuyendung.chinhsach')
        ->with('pageTitle','Chính sách tuyển dụng');
});

Route::resource('sanpham','DmSanPhamController');

Route::get('thongtintaphuan','ThongTinTapHuanController@index');
Route::get('thongtincapnhat',function(){
    return view('news.thongtincapnhat.index')
        ->with('pageTitle','Thông tin cập nhật');
});



// <editor-fold defaultstate="collapsed" desc="--System--">
//Start User
Route::get('login','UserController@index');
Route::post('signin','UserController@signin');
Route::get('logout','UserController@logout');
//EndUsers
// </editor-fold>//End Setting

?>




