
<div class="content-wrapper">
  <section class="content pt-3">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">Semua Kursus</div>
        <div class="card-body">
          <form method="get" class="form-inline mb-2">
            <input type="text" name="q" class="form-control mr-2" placeholder="Cari kursus..." value="<?= $this->input->get('q') ?>">
            <button class="btn btn-primary">Cari</button>
          </form>
          <table class="table table-bordered">
            <thead><tr><th>Judul</th><th>Instruktur</th><th>Deskripsi</th></tr></thead>
            <tbody>
              <?php foreach($courses as $course): ?>
              <tr>
                <td><?= $course->title ?></td>
                <td><?= $course->instructor_name ?></td>
                <td><?= $course->description ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <?= $pagination ?>
        </div>
      </div>
    </div>
  </section>
</div>

