
<div class="content-wrapper">
  <section class="content-header">
    <h1><?= $title ?></h1>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <form action="<?= site_url('courses/store') ?>" method="post">
          <div class="form-group">
            <label for="title">Judul Kursus</label>
            <input type="text" name="title" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
          </div>
            <div class="form-group">
            <label for="instructor_id">Pilih Instruktur</label>
            <select name="instructor_id" class="form-control" required>
                <option value="">-- Pilih Instruktur --</option>
                <?php foreach ($instructors as $instruktur): ?>
                <option value="<?= $instruktur->id ?>">
                    <?= $instruktur->id ?> - <?= $instruktur->name  ?>
                </option>
                <?php endforeach; ?>
            </select>
            </div>
          <div class="form-group">
            <label for="time">Waktu Kursus</label>
            <input type="datetime-local" name="time" class="form-control" required>
          </div>


          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?= site_url('dashboard') ?>" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </section>
</div>
 