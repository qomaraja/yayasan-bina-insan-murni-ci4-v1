<?= $this->extend('admlayout/template'); ?>
<?= $this->section('content'); ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Form Tambah Donasi</h3>
          </div>
          <form action="<?= site_url('/admdonasi/savedonasi'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="nama_donasi">Nama</label>
                <input type="text" class="form-control" id="nama_donasi" placeholder="Nama" name="nama_donasi" autofocus>
              </div>
              <div class="form-group">
                <label for="target_donasi">Target</label>
                <input type="text" class="form-control" id="target_donasi" placeholder="Rp." name="target_donasi">
              </div>
              <div class="form-group">
                <label for="deskripsi_donasi">Deskripsi</label>
                <textarea class="form-control" id="summernote" name="deskripsi_donasi"></textarea>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img1" name="img1">
                  <label class="custom-file-label" for="img1">Pilih Gambar 1</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img2" name="img2">
                  <label class="custom-file-label" for="img2">Pilih Gambar 2</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img3" name="img3">
                  <label class="custom-file-label" for="img3">Pilih Gambar 3</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img4" name="img4">
                  <label class="custom-file-label" for="img4">Pilih Gambar 4</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img5" name="img5">
                  <label class="custom-file-label" for="img5">Pilih Gambar 5</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Upload</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>