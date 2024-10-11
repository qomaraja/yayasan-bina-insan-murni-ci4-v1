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
          <form action="<?= site_url('/admartikel/updateartikel/' . ($artikel['id_artikel'])); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="imgLama1" value="<?= $artikel['img1']; ?>">
            <input type="hidden" name="imgLama2" value="<?= $artikel['img2']; ?>">
            <input type="hidden" name="imgLama3" value="<?= $artikel['img3']; ?>">
            <input type="hidden" name="imgLama4" value="<?= $artikel['img4']; ?>">
            <input type="hidden" name="imgLama5" value="<?= $artikel['img5']; ?>">
            <div class="card-body">
              <div class="form-group">
                <label for="judul_artikel">judul</label>
                <input type="text" class="form-control" id="judul_artikel" placeholder="judul" name="judul_artikel" value="<?= $artikel['judul_artikel']; ?>" autofocus>
              </div>
              <div class="form-group">
                <label for="isi_artikel">Isi</label>
                <textarea class="form-control" id="summernote" name="isi_artikel"><?= $artikel['isi_artikel']; ?></textarea>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img1" name="img1">
                  <label class="custom-file-label" for="img1"><?= $artikel['img1']; ?></label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img2" name="img2">
                  <label class="custom-file-label" for="img2"><?= $artikel['img2']; ?></label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img3" name="img3">
                  <label class="custom-file-label" for="img3"><?= $artikel['img3']; ?></label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img4" name="img4">
                  <label class="custom-file-label" for="img4"><?= $artikel['img4']; ?></label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img5" name="img5">
                  <label class="custom-file-label" for="img5"><?= $artikel['img5']; ?></label>
                </div>
              </div>
              <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-success" value="Update">Upload</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>