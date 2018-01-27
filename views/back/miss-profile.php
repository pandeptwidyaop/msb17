<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
      <small>User Profile</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url('panel/peserta')?>"><i class="fa fa-dashboard"></i> User</a></li>
      <li class="active">Rubah Data User</li>
    </ol>
  </section>
  <section class="content">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Rubah Data User</h3>
      </div>
      <?php foreach ($this->userdata as $r): ?>
      <?php echo form_open_multipart(base_url('user/edit/'.$r['user_id']),'menthod="post"') ?>
        <div class="row">
          <div class="col-md-6">
            <div class="box-body">
              <div class="form-group" id="nama">
                <label for="nama">Nama</label>
                <input class="form-control"  placeholder="NAMA" type="text" style="text-transform : uppercase" name="name" value="<?=$r['name']?>">
                <p></p>
              </div>
              <div class="form-group"  id="email">
                <label for="email">E-Mail</label>
                <input class="form-control" placeholder="EMAIL" type="text" name="email" value="<?=$r['email']?>">
                <p></p>
              </div>
              <div class="form-group" id="username">
                <label for="nim">User Name</label>
                <input class="form-control" placeholder="USER NAME" type="text"  name="user" value="<?=$r['username']?>" disabled="">
                <p></p>
              </div>
              <div class="form-group"  id="password">
                <label for="password">PASSWORD</label>
                <input class="form-control" placeholder="KOSONGKAN JIKA TIDAK INGIN MENGUBAH" type="text" name="password">
                <p></p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Gambar Profile</label>
                <input id="exampleInputFile" type="file" name="userfile" size="20">
              </div>
              <input type="hidden" name="pict" value="<?=$r['picture']?>">
              <input type="hidden" name="salt" value="<?=$r['password']?>">
              <input type="hidden" name="username" value="<?=$r['username']?>">
              <div class="form-group pull-left">
                <a href="<?=base_url('panel/peserta')?>" class="btn btn-primary btn-flat">Kembali</a>
              </div>
              <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary btn-flat" id="btn-tambah">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      <?php echo form_close(); ?>
      <?php endforeach; ?>
    </div>
  </section>
</div>
