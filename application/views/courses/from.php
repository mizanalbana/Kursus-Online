
<div class="container mt-4">
  <div class="card">
    <div class="card-header">Form Kursus</div>
    <div class="card-body">
      <?= form_open(isset($course) ? 'courses/edit/' . $course->id : 'courses/add') ?>
        <div class="form-group">
          <label>Judul Kursus</label>
          <input type="text" name="title" class="form-control" value="<?= isset($course) ? $course->title : '' ?>">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea name="description" class="form-control"><?= isset($course) ? $course->description : '' ?></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
      <?= form_close() ?>
    </div>
  </div>
</div>
