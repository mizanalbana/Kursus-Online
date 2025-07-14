
<div class="content-wrapper">
  <section class="content-header">
    <h1><?= $title ?></h1>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <form action="<?= site_url('courses/update/' . $course->id) ?>" method="post">
          <div class="form-group">
            <label for="title">Judul Kursus</label>
            <input type="text" name="title" class="form-control" value="<?= $course->title ?>" required>
          </div>

          <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control" rows="4" required><?= $course->description ?></textarea>
          </div>

          <div class="form-group">
            <label for="instructor_id">ID Instruktur</label>
            <input type="number" name="instructor_id" class="form-control" value="<?= $course->instructor_id ?>" required>
          </div>
          <div class="form-group">
            <label for="time">Waktu Kursus</label>
            <input type="datetime-local" name="time" class="form-control" value="<?= date('Y-m-d\TH:i', strtotime($course->time)) ?>" required>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
          <a href="<?= site_url('dashboard') ?>" class="btn btn-secondary">Batal</a>
        </form>
      </div>
    </div>
  </section>
</div>
