<?= $this->extend('admlayout/template'); ?>
<?= $this->section('content'); ?>

<section class="content">
  <div class="container-fluid">
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
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="spanduk" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($spanduk as $item) : ?>
                  <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $item['judul_spanduk']; ?></td>
                    <td><?= $item['deskripsi_spanduk']; ?></td>
                    <td>
                      <a href="<?= base_url('/admspanduk/editspanduk/' . $item['id_spanduk']); ?>"><i class="fas fa-edit" style="color: green;"></i></a> |
                      <a href="<?= base_url('/admspanduk/deletespanduk/' . $item['id_spanduk']); ?>" onclick="return confirm('apakah anda yakin?');"><i class="fas fa-trash-alt" style="color: green;"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>