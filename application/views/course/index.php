
<div class="content-wrapper">
  <section class="content-header">
    <h1><?= $title ?></h1>
  </section>

  <section class="content">
    <a href="<?= site_url('courses/create') ?>" class="btn btn-success mb-3">+ Tambah Kursus</a>
<section class="content">
    <div class="card">
      <div class="card-header">Kursus</div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <!-- <thead class="thead-dark"> -->
            <class="table table-hover text-nowrap table-striped  ">
            <tr class="bg-secondary">
              <th>No</th>
              <th>Judul</th>
              <th>Deskripsi</th>
              <th>ID Instruktur</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($courses as $course): ?>
              <tr>
                <td><?= $course->id ?></td>
                <td><?= $course->title ?></td>
                <td><?= $course->description ?></td>
                <td><?= $course->instructor_id ?></td>
                <td>
                  <a href="<?= site_url('courses/edit/' . $course->id) ?>" class="btn btn-sm btn-primary">Edit</a>
                  <a href="<?= site_url('courses/delete/' . $course->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
