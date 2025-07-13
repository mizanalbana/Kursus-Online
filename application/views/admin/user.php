
<h2>Kelola Pengguna</h2>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->nama ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->role ?></td>
            <td>
                <a href="<?= base_url('UserController/edit/'.$user->id) ?>">Edit</a> |
                <a href="<?= base_url('UserController/delete/'.$user->id) ?>" onclick="return confirm('Hapus pengguna ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


