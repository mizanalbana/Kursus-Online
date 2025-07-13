<h4 class="mb-3 text-center">Daftar Pendaftaran Kursus</h4>
<div class="mt-3 text-start mb-3">
    <a href="<?= site_url('profile/create') ?>" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-circle"></i> Tambah Pendaftaran
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Nama instruktur</th>
            <th>Nama Kursus</th>
            <th>Waktu Daftar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($enrollments as $e): ?>
        <tr>
            <td><?= $e->id ?></td>
            <td><?= $e->instructor_name ?></td>
            <td><?= $e->course_title ?></td>
            <td><?= date('d M Y H:i', strtotime($e->enrolled_at)) ?></td>
            <td>
                <!-- <a href="<?= site_url('profile/edit/'.$e->id) ?>" class="btn btn-warning btn-sm">Edit</a> -->
                <a href="<?= site_url('profile/delete/'.$e->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                    <i class="bi bi-trash"></i> Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Tombol Tambah di Bawah -->


