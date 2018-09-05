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

Route::get('login',function(){
    return view('system.users.login')
        ->with('pageTitle','Login');
});

// <editor-fold defaultstate="collapsed" desc="--Setting--">

//EndUsers
// </editor-fold>//End Setting

?>




