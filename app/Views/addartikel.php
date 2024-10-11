<?= $this->extend('admlayout/template'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <!-- Form Element sizes -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Form Tambah Artikel</h3>
          </div>
          <form action="<?= site_url('/admartikel/saveartikel'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="judul_artikel">Judul</label>
                <input type="text" class="form-control" id="judul_artikel" placeholder="Judul" name="judul_artikel" autofocus>
              </div>
              <div class="form-group">
                <label for="isi_artikel">Isi</label>
                <textarea id="summernote" class="form-control" name="isi_artikel"></textarea>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img1" name="img1">
                  <label class="custom-file-label" for="customFile">Pilih Gambar 1</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img2" name="img2">
                  <label class="custom-file-label" for="customFile">Pilih Gambar 2</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img3" name="img3">
                  <label class="custom-file-label" for="customFile">Pilih Gambar 3</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img4" name="img4">
                  <label class="custom-file-label" for="customFile">Pilih Gambar 4</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img5" name="img5">
                  <label class="custom-file-label" for="customFile">Pilih Gambar 5</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div>
              <!-- /.card-body -->
              <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Upload</button>
              </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>