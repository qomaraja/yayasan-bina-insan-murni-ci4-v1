<?= $this->extend('admlayout/template'); ?>
<?= $this->section('content'); ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Form Tambah Spanduk</h3>
          </div>
          <form action="<?= base_url('/admspanduk/savespanduk'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="judul_spanduk">Judul</label>
                <input type="text" class="form-control" id="judul_spanduk" placeholder="Judul" name="judul_spanduk" autofocus>
              </div>
              <div class="form-group">
                <label for="deskripsi_spanduk">Isi</label>
                <textarea name="deskripsi_spanduk" class="form-control" rows="3" placeholder="Isi"></textarea>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img" name="img">
                  <label class="custom-file-label" for="img">Pilih Gambar</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Upload</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>