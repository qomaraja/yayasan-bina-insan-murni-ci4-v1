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
          <form action="<?= site_url('/admtransaksi/updatetransaksi/' . ($transaksi['id_transaksi'])); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="nama_donatur">Nama Donatur</label>
                <input type="text" class="form-control" id="nama_donatur" name="nama_donatur" value="<?= $transaksi['nama_donatur']; ?>" autofocus>
              </div>
              <div class="form-group">
                <label for="no_telp_donatur">No Telp Donatur</label>
                <input type="text" class="form-control" id="no_telp_donatur" name="no_telp_donatur" value="<?= $transaksi['no_telp_donatur']; ?>">
              </div>
              <div class="form-group">
                <label for="jumlah_donasi">Jumlah Donasi</label>
                <input type="text" class="form-control" id="jumlah_donasi" placeholder="Rp." name="jumlah_donasi" value="<?= 'Rp.' . $transaksi['jumlah_donasi']; ?>" disabled>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="tambah_donasi">Tambah Donasi</label>
                    <input type="text" class="form-control" id="tambah_donasi" placeholder="Rp." name="tambah_donasi">
                  </div>
                  <div class="col">
                    <label for="kurang_donasi">Kurang Donasi</label>
                    <input type="text" class="form-control" id="kurang_donasi" placeholder="Rp." name="kurang_donasi">
                  </div>
                </div>
              </div>
              <input type="hidden" name="id_transaksi" value="<?= $transaksi['id_transaksi']; ?>">

              <div class="form-group">
                <label for="pesan_donatur">Pesan</label>
                <textarea class="form-control" id="summernote" name="pesan_donatur"><?= $transaksi['pesan_donatur']; ?></textarea>
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