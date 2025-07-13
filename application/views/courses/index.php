
<div class="container mt-4">
  <div class="card">
    <div class="card-header">
      Kursus Saya
      <a href="<?= site_url('courses/add') ?>" class="btn btn-sm btn-primary float-right">Tambah</a>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($schedules as $course): ?>
            <tr>
              <td><?= $course->title ?></td>
              <td><?= $course->description ?></td>
              <td>
                <a href="<?= site_url('courses/edit/'.$course->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?= site_url('courses/delete/'.$course->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus kursus ini?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
