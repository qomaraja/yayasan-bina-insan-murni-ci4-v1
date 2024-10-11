<?= $this->extend('admlayout/template'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Flash message -->
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-warning" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif; ?>

    <!-- Search Input -->
    <div class="row mb-3">
      <div class="col-12">
        <div class="input-group">
          <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn search-button">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabel Pengeluaran -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="pengeluaran" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama Donasi</th>
                  <th>Nama Pengeluaran</th>
                  <th>Pengeluaran</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor = 1; ?>
                <?php $total_pengeluaran = 0; ?>
                <?php foreach ($pengeluaran as $p) : ?>
                  <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= date('j M Y', strtotime($p['created_at'])); ?></td>
                    <td><?= $p['nama_donasi']; ?></td> <!-- Menampilkan nama_donasi -->
                    <td><?= $p['nama_pengeluaran']; ?></td>
                    <td><?= 'Rp. ' . number_format($p['perolehan_pengeluaran'], 0, ',', '.'); ?></td>
                    <td><?= $p['deskripsi_pengeluaran']; ?></td>
                    <td>
                      <a href="<?= site_url('/admpengeluaran/editpengeluaran/' . $p['id_pengeluaran']); ?>" class="edit-btn"><i class="fas fa-edit" style="color: green;"></i></a> |
                      <a href="<?= site_url('/admpengeluaran/deletepengeluaran/' . $p['id_pengeluaran']); ?>" class="delete-btn" onclick="return confirm('Apakah Anda yakin?');"><i class="fas fa-trash-alt" style="color: green;"></i></a>
                    </td>
                  </tr>
                  <?php $total_pengeluaran += $p['perolehan_pengeluaran']; ?>
                <?php endforeach; ?>
                <tr>
                  <td colspan="4" style="text-align:left;"><strong>Total Pengeluaran</strong></td>
                  <td><strong><?= 'Rp. ' . number_format($total_pengeluaran, 0, ',', '.'); ?></strong></td>
                  <td></td> <!-- Kolom aksi kosong untuk keselarasan baris -->
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>