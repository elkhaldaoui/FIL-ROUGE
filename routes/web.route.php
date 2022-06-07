<?php


// Routes


Route::get('/',function(){
    return Route::view("index");
});

Route::get('/',function(){
    return Route::view("login");
});

Route::get('/',function(){
    return Route::view("dashboard");
});

Route::get('/',function(){
    return Route::view("agents");
});

Route::get('/',function(){
    return Route::view("releves");
});

Route::get('/',function(){
    return Route::view("rapports");
});

Route::get('/',function(){
    return Route::view("anomalies");
});

Route::get('/',function(){
    return Route::view("logout");
});