
<div class="content-wrapper">
  <section class="content pt-3">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">Kursus yang Diikuti Siswa</div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead><tr><th>Nama Siswa</th><th>Email</th><th>Kursus</th></tr></thead>
            <tbody>
              <?php foreach($students as $row): ?>
              <tr>
                <td><?= $row->name ?></td>
                <td><?= $row->email ?></td>
                <td><?= $row->course_title ?></td>
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
