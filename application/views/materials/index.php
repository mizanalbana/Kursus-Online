<h2><?= $title ?></h2>
<a href="<?= site_url('materials/create') ?>" class="btn btn-primary mb-3">Tambah Materi</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Kursus</th>
            <th>Deskripsi</th>
            <th>File</th>
            <th>Aksi</th>
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

            <td>
                <a href="<?= site_url('materials/delete/' . $m->id) ?>" class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
