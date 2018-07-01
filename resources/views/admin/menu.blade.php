@extends('admin.layout')
@section('title', 'Daftar Menu')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu
        <small>Makanan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Point Of Sales</a></li>
        <li><a href="#">Admin</a></li>
        <li><a href="#">Menu</a></li>
        <li class="active">Makanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-6">
          <!-- Line chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sate Ayam</h3>
              <div class="box-tools pull-right">
                Rp. 30.000,-
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <img class="col-md-12" style="width: 100%;height:100%;max-height:250px;" src="https://media.travelingyuk.com/wp-content/uploads/2017/07/Ilustrasi-makanan-yang-biasa-dikonsumsi-masyarakat-Indonesia-1.jpg">
              </div>
              <div align="center">
                <h3><b><strike>Rp. 30.000,-</strike></b> <a style="color: red;"><b>Rp. 20.000,-</b></a></h3>
              </div>
              <br>
              <div align="center">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahakun">
        Ubah
      </button>      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusstok">
        Hapus
      </button>      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahstok">
        Tambah Stok
      </button>
              </div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Line chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sate Ayam</h3>

              <div class="box-tools pull-right">
                Rp. 30.000,-
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <img class="col-md-12"  style="width: 100%;height:100%;max-height:250px;" src="https://media.travelingyuk.com/wp-content/uploads/2017/07/Ilustrasi-makanan-yang-biasa-dikonsumsi-masyarakat-Indonesia-1.jpg">
              </div>
              <div align="center">
                <h3><b>Rp. 30.000,-</b></h3>
              </div>
              <br>
              <div align="center">
                <a class="btn btn-primary">Ubah inin</a>
                <a class="btn btn-danger">Hapus</a>
                <a class="btn btn-success">Tambah Stok</a>
              </div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Line chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sate Ayam</h3>

              <div class="box-tools pull-right">
                Rp. 30.000,-
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <img class="col-md-12" style="width: 100%;height:100%;max-height:250px;" src="https://www.nibble.id/blog/wp-content/uploads/2018/01/makanan-unik-di-jakarta-02.jpg">
              </div>
              <div align="center">
                <h3><b>Rp. 30.000,-</b></h3>
              </div>
              <br>
              <div align="center">
                <a class="btn btn-primary">Ubah</a>
                <a class="btn btn-danger">Hapus</a>
                <a class="btn btn-success">Tambah Stok</a>
              </div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Line chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sate Ayam</h3>

              <div class="box-tools pull-right">
                Rp. 30.000,-
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <img class="col-md-12" style="width: 100%;height:100%;max-height:250px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0hfTBviChEYIPEfKmciIYX94eCcnyX_zP6LA642t6czm7W0Eedg">
              </div>
              <div align="center">
                <h3><b>Rp. 30.000,-</b></h3>
              </div>
              <br>
              <div align="center">
                <a class="btn btn-primary">Ubah</a>
                <a class="btn btn-danger">Hapus</a>
                <a class="btn btn-success">Tambah Stok</a>
              </div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection


@section('modal')
<!-- Modal untuk tambah akun-->
<div class="modal fade" id="tambahakun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form action="/action_page.php">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Akun Karyawan</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama Lengkap :</label>
          <input type="nama" class="form-control" id="nama">
        </div>
        <div class="form-group">
          <label>Alamat Email :</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label>Password :</label>
          <input type="password" class="form-control" id="pwd">
        </div>
        <div class="form-group">
          <label>Ketik Ulang Password :</label>
          <input type="password" class="form-control" id="pwd">
        </div>
        <div class="form-group">
          <label>Cabang :</label>
          <br>
          <label class="radio-inline">
            <input type="radio" name="optradio">Cabang 1
          </label>
          <label class="radio-inline">
            <input type="radio" name="optradio">Cabang 2
          </label>
          <label class="radio-inline">
            <input type="radio" name="optradio">Cabang 3
          </label>
        </div>
        <div class="form-group">
          <label>Upload Foto Profil : </label>
          <br>
          <input type="file" name="pic" accept="image/*">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah Akun</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
      </div>
    </form> 
    </div>
  </div>
</div>
<!-- Modal untuk tambah stok -->
<div class="modal fade" id="tambahstok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form action="/action_page.php">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Stok Menu</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama Lengkap :</label>
          <input type="nama" class="form-control" id="nama">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah Menu</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
      </div>
    </form> 
    </div>
  </div>
</div>
<!-- Modal untuk hapus stok -->
<div class="modal fade" id="hapusstok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Hapus Stok</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin akan menghapus stok ini ? 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Iya</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>
@endsection