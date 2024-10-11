<?= $this->extend('admlayout/template'); ?>
<?= $this->section('content'); ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title"></h3>
          </div>
          <form action="<?= site_url('/admspanduk/updatespanduk/' . ($spanduk['id_spanduk'])); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="imgLama" value="<?= $spanduk['img']; ?>">
            <div class="card-body">
              <div class="form-group">
                <label for="judul_spanduk">Judul</label>
                <input type="text" class="form-control" id="judul_spanduk" name="judul_spanduk" value="<?= $spanduk['judul_spanduk']; ?>" autofocus>
              </div>
              <div class="form-group">
                <label for="deskripsi_spanduk">Deskripsi</label>
                <textarea id="deskripsi_spanduk" class="form-control" name="deskripsi_spanduk"><?= $spanduk['deskripsi_spanduk']; ?></textarea>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img" name="img">
                  <label class="custom-file-label" for="img"><?= $spanduk['img']; ?></label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-success" value="Update">Upload</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>