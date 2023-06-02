 <?php
  // Hitung Nilai Umum 

  // Jumlah dan Total Transaksi
  $sql1="select count(id_jual) as jumlah_transaksi,sum(total) as total_transaksi from jual";
  $query1=mysqli_query($koneksi,$sql1);
  $data1=mysqli_fetch_array($query1);
  $jumlah_transaksi=$data1['jumlah_transaksi'];
  $total_transaksi=$data1['total_transaksi'];

  $sql2="select count(id_anggota) as jumlah_anggota from anggota";
  $query2=mysqli_query($koneksi,$sql2);
  $data2=mysqli_fetch_array($query2);
  $jumlah_anggota=$data2['jumlah_anggota'];
 
  $sql3="select count(id_pemasok) as jumlah_pemasok from pemasok";
  $query3=mysqli_query($koneksi,$sql3);
  $data3=mysqli_fetch_array($query3);
  $jumlah_pemasok=$data3['jumlah_pemasok'];
  
  $sql4="SELECT count(id_produk) as jumlah_produk from produk";
  $query4=mysqli_query($koneksi,$sql4);
  $data4=mysqli_fetch_array($query4);
  $jumlah_produk=$data4['jumlah_produk'];
  

  $sql41="SELECT sum(hpp*qty) as nilai_inventaris_toko from produk WHERE servis=0 AND konsinyasi=0 AND qty>0";
  $query41=mysqli_query($koneksi,$sql41);
  $data41=mysqli_fetch_array($query41);
  $nilai_inventaris_toko=$data41['nilai_inventaris_toko'];

  $sql5="select sum(total) as total_beli from beli";
  $query5=mysqli_query($koneksi,$sql5);
  $data5=mysqli_fetch_array($query5);
  $total_beli=$data5['total_beli'];

  $sql6="select sum(debet-kredit) as total_kas from akun_mutasi where id_akun=3";
  $query6=mysqli_query($koneksi,$sql6);
  $data6=mysqli_fetch_array($query6);
  $total_kas=$data6['total_kas'];
  

 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Home</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4><?= number_format($jumlah_transaksi); ?></h4>

                <p>Transaksi Toko</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-basket"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4><?= "Rp. ".number_format($total_transaksi); ?></sup></h4>

                <p>Total Penjualan</p>
              </div>
              <div class="icon">
                <i class="fas fa-cash-register"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4><?= number_format($jumlah_anggota); ?></h4>

                <p>Pelanggan Terdaftar</p>
              </div>
              <div class="icon">
                <i class="fas fa-address-card"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4><?= number_format($jumlah_pemasok); ?></h4>

                <p>Pemasok Terdaftar</p>
              </div>
              <div class="icon">
                <i class="fas fa-address-card"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->        
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4><?= number_format($jumlah_produk); ?></h4>

                <p>Produk Toko</p>
              </div>
              <div class="icon">
                <i class="fas fa-tags"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4><?= "Rp. ".number_format($nilai_inventaris_toko); ?></sup></h4>

                <p>Total Nilai Inventaris Toko</p>
              </div>
              <div class="icon">
                <i class="fas fa-store"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4><?= "Rp. ".number_format($total_kas); ?></h4>

                <p>Saldo Kas Toko</p>
              </div>
              <div class="icon">
                <i class="fas fa-wallet"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4><?= "Rp. ".number_format($total_beli); ?></h4>

                <p>Total Pembelian</p>
              </div>
              <div class="icon">
                <i class="fas fa-truck"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->        
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->