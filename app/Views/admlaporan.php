<?= $this->extend('admlayout/template'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Laporan Transaksi</h3>
          </div>
          <form action="<?= site_url('admlaporan/laporantransaksi/transaksi') ?>" method="get">
            <div class="card-body">
              <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control float-right" id="transaksi" name="transaksi">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-warning">Cetak</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Laporan Donasi</h3>
          </div>
          <form action="<?= site_url('admlaporan/laporandonasi/donasi') ?>" method="get">
            <div class="card-body">
              <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control float-right" id="donasi" name="donasi">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Cetak</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Laporan Pengeluaran</h3>
          </div>
          <form action="<?= site_url('admlaporan/laporanpengeluaran/pengeluaran') ?>" method="get">
            <div class="card-body">
              <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control float-right" id="pengeluaran" name="pengeluaran">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-danger">Cetak</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Laporan Donatur</h3>
          </div>
          <form action="<?= site_url('admlaporan/laporandonatur/donatur') ?>" method="get">
            <div class="card-body">
              <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control float-right" id="donatur" name="donatur">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-success">Cetak</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Laporan Full</h3>
          </div>
          <form action="<?= site_url('admlaporan/laporanfull/full') ?>" method="get">
            <div class="card-body">
              <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control float-right" id="full" name="full">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Cetak</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>