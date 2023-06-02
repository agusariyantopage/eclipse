<?php
    $BASE_URL="http://localhost/eclipse/";
    $app_version="1.0";

    if(empty($_GET['p'])){
        $title  =$APP_TITLE." ".$APP_VERSION; 
        $konten="konten/home.php";    
    }

    // (START) Menu Master Data
    else if($_GET['p']=='kategori'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Kategori Produk";
        $konten="konten/produk_kategori.php";
    }
    else if($_GET['p']=='produk'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Produk";
        $konten="konten/produk.php";
    }
    else if($_GET['p']=='produk-konsinyasi'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Produk Konsinyasi";
        $konten="konten/produk_konsinyasi.php";
    }
    else if($_GET['p']=='produk-tambah'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Tambah Produk";
        $konten="konten/produk_tambah.php";
    }
    else if($_GET['p']=='produk-ubah'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Ubah Produk";
        $konten="konten/produk_ubah.php";
    }
    else if($_GET['p']=='anggota'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Anggota";
        $konten="konten/anggota.php";
    }
    else if($_GET['p']=='pemasok'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Pemasok";
        $konten="konten/pemasok.php";
    }
    // (END) Menu Master Data

    else if($_GET['p']=='user'){
        $title  =$APP_TITLE." ".$APP_VERSION." | User";
        $konten="konten/user.php";
    }
    else if($_GET['p']=='daftar-penjualan'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Daftar Penjualan";
        $konten="konten/penjualan-daftar.php";
    }
    else if($_GET['p']=='penjualan'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Point Of Sales";
        $konten="konten/penjualan.php";
    }
    else if($_GET['p']=='penjualan-info'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Informasi Penjualan";
        $konten="konten/penjualan-info.php";
    }
    else if($_GET['p']=='daftar-pembelian'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Daftar Pembelian";
        $konten="konten/pembelian-daftar.php";
    }
    else if($_GET['p']=='pembelian'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Pembelian";
        $konten="konten/pembelian.php";
    }
    else if($_GET['p']=='pembelian-info'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Informasi Pembelian";
        $konten="konten/pembelian-info.php";
    }
    else if($_GET['p']=='pembelian-edit'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Ubah Pembelian";
        $konten="konten/pembelian-edit.php";
    }
    else if($_GET['p']=='daftar-produksi'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Daftar Produksi";
        $konten="konten/produksi-daftar.php";
    }
    else if($_GET['p']=='produksi'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Produksi";
        $konten="konten/produksi.php";
    }
    else if($_GET['p']=='produksi-info'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Informasi Produksi";
        $konten="konten/produksi-info.php";
    }
    else if($_GET['p']=='produksi-edit'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Ubah Produksi";
        $konten="konten/produksi-edit.php";
    }
    else if($_GET['p']=='kartu-stok'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Kartu Stok";
        $konten="konten/kartu_stok.php";
    }
    else if($_GET['p']=='kartu-stok-individu'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Kartu Stok Individu";
        $konten="konten/kartu_stok_individu.php";
    }
    else if($_GET['p']=='penjualan-info-kas'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Informasi Kas Toko";
        $konten="konten/penjualan-info-kas.php";
    }   

    else if($_GET['p']=='laporan'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Laporan";
        $konten="konten/laporan.php";
    }

    // [START] Menu Keuangan
    else if($_GET['p']=='coa'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Daftar Akun Keuangan";
        $konten="konten/coa.php";
    }
    else if($_GET['p']=='jurnal'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Jurnal Keuangan";
        $konten="konten/jurnal.php";
    }
    else if($_GET['p']=='jurnal-tambah'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Tambah Jurnal Keuangan";
        $konten="konten/jurnal_tambah.php";
    }
    else if($_GET['p']=='jurnal-tambah'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Tambah Jurnal Keuangan";
        $konten="konten/jurnal_tambah.php";
    }
    else if($_GET['p']=='jurnal-tambah-template'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Tambah Jurnal Keuangan Via Template";
        $konten="konten/jurnal_tambah_template.php";
    }
    else if($_GET['p']=='jurnal-template'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Template Transaksi Jurnal Keuangan";
        $konten="konten/jurnal_template.php";
    }    

    // (START)  Menu Pemeliharaan
    else if($_GET['p']=='pemeliharaan'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Pemeliharaan";
        $konten="konten/pemeliharaan.php";
    }
    else if($_GET['p']=='pemeliharaan-tidakwajar'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Transaksi Dengan Harga Tidak Wajar";
        $konten="konten/pemeliharaan-tidakwajar.php";
    }
    else if($_GET['p']=='pemeliharaan-beda-total'){
        $title  =$APP_TITLE." ".$APP_VERSION." | Transaksi Beda Total";
        $konten="konten/pemeliharaan-beda-total.php";
    }
    // (END)  Menu Pemeliharaan
?>