<?php
    // Variabel Klien
    $APP_TITLE="APP ECLIPSE";
    $APP_VERSION="1.0";
    $APP_COMPANY_NAME="Eclipse Pottery";
    $APP_COMPANY_ADDRESS="Jl. Kubu Kubu Gianyar";
    $APP_COMPANY_PHONE="(0361) 989-0999";
    $APP_COMPANY_EMAIL="info@eclipse-pottery.com";
    $APP_LOGO="dist/img/logo_eclipse.png";
    $APP_ICO="dist/img/logo_eclipse.png";
    
    // Variabel Koneksi
    $servername     ="localhost";
    $database       ="dbeclipse";
    $username       ="root";
    $password       ="";

    // Koneksi Ke Database
    $koneksi =mysqli_connect($servername,$username,$password,$database);

    
    // Cek apakah koneksi berhasil
    if(!$koneksi){
        die("koneksi Ke Database Gagal :".mysqli_connect_error());
    } else {
        //echo "Koneksi Ke Database Berhasil";
    }

?>