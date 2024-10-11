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
            <h3 class="card-title">Form Edit Pengeluaran</h3>
          </div>
          <form action="<?= base_url('/admpengeluaran/updatepengeluaran/' . ($pengeluaran['id_pengeluaran'])); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="imgLama" value="<?= $pengeluaran['img']; ?>">
            <div class="card-body">
              <div class="form-group">
                <label for="nama_donasi">Nama Donasi</label>
                <select class="form-control" id="nama_donasi" name="nama_donasi" autofocus>
                  <option value="">Pilih Nama Donasi</option>
                  <?php foreach ($donasi as $ds) : ?>
                    <option value="<?= $ds['id_donasi']; ?>" <?= $ds['id_donasi'] == $pengeluaran['id_donasi'] ? 'selected' : '' ?>><?= $ds['nama_donasi']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="nama_pengeluaran">Nama Pengeluaran</label>
                <input type="text" class="form-control" id="nama_pengeluaran" name="nama_pengeluaran" placeholder="Nama" value="<?= $pengeluaran['nama_pengeluaran']; ?>">
              </div>
              <div class="form-group">
                <label for="perolehan_pengeluaran">Pengeluaran</label>
                <input type="text" class="form-control" id="perolehan_pengeluaran" name="perolehan_pengeluaran" placeholder="Rp." value="<?= $pengeluaran['perolehan_pengeluaran']; ?>">
              </div>
              <div class="form-group">
                <label for="deskripsi_pengeluaran">Keterangan</label>
                <textarea class="form-control" name="deskripsi_pengeluaran" rows="3" placeholder="Keterangan"><?= $pengeluaran['deskripsi_pengeluaran']; ?></textarea>
              </div>
              <!-- <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="img" name="img">
                  <label class="custom-file-label" for="img"><?= $pengeluaran['img']; ?></label>
                  <p><em>*saran ukuran 16:9.</em></p>
                </div>
              </div> -->
              <!-- /.card-body -->
              <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-success" value="Update">Upload</button>
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