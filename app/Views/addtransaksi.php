<?= $this->extend('admlayout/template'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">

      <!-- right column -->
      <div class="col-md">
        <!-- Form Element sizes -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Form Tambah Transaksi</h3>
          </div>
          <form action="<?= base_url('/admtransaksi/savetransaksi'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="nama_donasi">Nama Donasi</label>
                <select class="form-control" id="nama_donasi" name="nama_donasi" autofocus>
                  <option value="">Pilih Nama Donasi</option>
                  <?php foreach ($donasi as $ds) : ?>
                    <option value="<?= $ds['id_donasi']; ?>"><?= $ds['nama_donasi']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="nama_donatur">Nama Donatur</label>
                <input type="text" class="form-control" id="nama_donatur" name="nama_donatur" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="no_telp_donatur">Nomor Telepon Donatur</label>
                <input type="text" class="form-control" id="no_telp_donatur" name="no_telp_donatur" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="jumlah_donasi">Jumlah Donasi</label>
                <input type="text" class="form-control" id="jumlah_donasi" name="jumlah_donasi" placeholder="Rp.">
              </div>
              <div class="form-group">
                <label for="pesan_donatur">Pesan</label>
                <textarea class="form-control" name="pesan_donatur" rows="3" placeholder="Keterangan"></textarea>
              </div>
              <!-- <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img" name="img">
                  <label class="custom-file-label" for="img">Pilih Gambar</label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div> -->
              <!-- /.card-body -->
              <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Upload</button>
              </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>