<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <h1 class="m-0 text-center text-color-red">Dashboard</h1>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <?php if (is_role('admin')): ?>
        <H1 class=" ">SELAMAT DATANG Admin</H1>
        <div class="row">
          <div class="col-lg-4">
            <div class="small-box bg-info">
              <div class="inner">
                <?php if (isset($total_users)): ?>
                  <h3>
                    <?= $total_users ?>
                  </h3>
                <?php endif; ?>
                <p>Total Pengguna</p>
              </div>
              <div class="icon"><i class="fas fa-users"></i></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $total_courses ?></h3>
                <p>Total Kursus</p>
              </div>
              <div class="icon"><i class="fas fa-book"></i></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $total_enrollments ?></h3>
                <p>Total Pendaftaran</p>
              </div>
              <div class="icon"><i class="fas fa-user-graduate"></i></div>
            </div>
          </div>
        </div>

       

        <!-- Tombol Tambah Jadwal -->
        <!-- <button class="btn btn-primary mb-3" type="button" data-toggle="collapse" data-target="#formTambahJadwal"
          aria-expanded="false" aria-controls="formTambahJadwal" href="<?= base_url('courses/create') ?>">
          + Tambah Jadwal
        </button>
        <div class="content-wrapper">
          <section class="content-header">
            <h1><?= $title ?></h1>
          </section> -->

          <section class="content">
            <a href="<?= site_url('courses/create') ?>" class="btn btn-success mb-3">+ Tambah Kursus</a>
            <section class="content">
              <div class="card">
                <div class="card-header">Kursus</div>
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <!-- <thead class="thead-dark"> -->
                    <class="table table-hover text-nowrap table-striped ">
              <tr class=" bg-secondary">
                      <th>No</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>ID Instruktur</th>
                      <th>Waktu</th>
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
                            <td><?= $course->time ?></td>
                            <td>
                              <a href="<?= site_url('courses/edit/' . $course->id) ?>"
                                class="btn btn-sm btn-primary">Edit</a>
                              <a href="<?= site_url('courses/delete/' . $course->id) ?>" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                  </table>
                </div>
              </div>
            </section>
        </div>
        
        <!-- Form Tambah Jadwal (Bootstrap Collapse) -->
        <!-- <div class="collapse" id="formTambahJadwal">
          <div class="card card-body">
            <form action="<?= base_url('dashboard/tambah_jadwal') ?>" method="post">
              <div class="form-group">
                <label for="course_title">Judul Kursus</label>
                <input type="text" class="form-control" id="course_title" name="course_title" required>
              </div>
              <div class="form-group">
                <label for="schedule_time">Waktu Kursus</label>
                <input type="datetime-local" class="form-control" id="schedule_time" name="schedule_time" required>
              </div>
              <button type="submit" class="btn btn-success">Simpan Jadwal</button>
            </form>
          </div>
        </div> -->

        <!-- <ul class="list-group">
          <?php if (!empty($schedules)): ?>
            <?php foreach ($schedules as $s): ?>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><strong><?= $s->course_title ?></strong></span>
                <span><?= date('d M Y H:i', strtotime($s->schedule_time)) ?></span>
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li class="list-group-item">Belum ada jadwal.</li>
          <?php endif; ?>
        </ul> -->

      <?php elseif (is_role('instructor')): ?>
        <H1 class=" ">SELAMAT DATANG Instruktur</H1>
        <!-- <H1>SELAMAT DATANG</H1> -->
        <h5 class="text-center">Kursus Anda:</h5>
        <ul class="list-group">
          <?php foreach ($courses as $course): ?>
            <li class="list-group-item">📘 <?= $course->title ?></li>
          <?php endforeach; ?>
        </ul>


        <!-- <h5 class="mt-4">📅 Jadwal Kursus:</h5>
        <ul class="list-group">
          <?php if (!empty($schedules)): ?>
            <?php foreach ($schedules as $s): ?>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><strong><?= $s->course_title ?></strong></span>
                <span><?= date('d M Y H:i', strtotime($s->schedule_time)) ?></span>
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li class="list-group-item">Belum ada jadwal.</li>
          <?php endif; ?>
        </ul> -->

      <?php elseif (is_role('student')): ?>
        <H1 class=" ">SELAMAT DATANG Siswa</H1>
        <!-- <H1>SELAMAT DATANG</H1> -->
        <h5 class="">Kursus yang Anda ikuti:</h5>
        <ul class="list-group">
          <?php foreach ($enrollments as $e): ?>
            <li class="list-group-item">📗 <?= $e->course_title ?> (<?= $e->enrolled_at ?>)</li>
          <?php endforeach; ?>
        </ul>
        <table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Kursus</th>
            <th>Deskripsi</th>
            <th>File</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($materials as $m): ?>
        <tr>
            <td><?= $m->title ?></td>
            <td><?= $m->course_title ?></td>
            <td><?= $m->description ?></td>
            <td>
    <?php if ($m->file): ?>
        <a href="<?= base_url('uploads/' . $m->file) ?>" target="_blank">Download</a>
    <?php else: ?>
        Tidak ada file
    <?php endif; ?>
</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
      <?php endif; ?>



    </div>
  </div>
</div>