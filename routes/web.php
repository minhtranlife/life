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

Route::resource('imgcompany','ImgCompanyController');


Route::get('/ajax/carts','AjaxController@carts');
Route::get('/ajax/delcarts','AjaxController@delcarts');
Route::get('/ajax/xoacarts','AjaxController@xoacarts');
Route::get('/ajax/showcartsct','AjaxController@showcartsct');

Route::resource('quanlydonhang','CartsController');



// <editor-fold defaultstate="collapsed" desc="--System--">
//Start User
Route::get('login','UserController@index');
Route::post('signin','UserController@signin');
Route::get('logout','UserController@logout');
//EndUsers
// </editor-fold>//End Setting

?>




