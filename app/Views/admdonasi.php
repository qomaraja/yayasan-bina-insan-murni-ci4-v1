<?= $this->extend('admlayout/template'); ?>
<?= $this->section('content'); ?>

<section class="content">
  <div class="container-fluid">
    <!-- Menampilkan pesan flashdata jika ada -->
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

    <!-- Tabel Donasi -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="donasi" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Target</th>
                  <th>Dana Terkumpul</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $nomor = 1;
                $total_target_donasi = 0;
                $total_perolehan_donasi = 0;
                ?>
                <?php foreach ($donasi as $d) : ?>
                  <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $d['updated_at']; ?></td>
                    <td><?= $d['nama_donasi']; ?></td>
                    <td><?= 'Rp. ' . number_format($d['target_donasi'], 0, ',', '.'); ?></td>
                    <td><?= 'Rp. ' . number_format($d['perolehan_donasi'], 0, ',', '.'); ?></td>
                    <td>
                      <a href="<?= site_url('/admdonasi/editdonasi/' . $d['id_donasi']); ?>"><i class="fas fa-edit" style="color: green;"></i></a> |
                      <a href="<?= site_url('/admdonasi/deletedonasi/' . $d['id_donasi']); ?>" onclick="return confirm('Apakah Anda yakin?');"><i class="fas fa-trash-alt" style="color: green;"></i></a>
                    </td>
                  </tr>
                  <?php
                  $total_target_donasi += $d['target_donasi'];
                  $total_perolehan_donasi += $d['perolehan_donasi'];
                  ?>
                <?php endforeach; ?>
                <tr>
                  <td colspan="3" style="text-align:left;"><strong>Total</strong></td>
                  <td><strong><?= 'Rp. ' . number_format($total_target_donasi, 0, ',', '.'); ?></strong></td>
                  <td><strong><?= 'Rp. ' . number_format($total_perolehan_donasi, 0, ',', '.'); ?></strong></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>