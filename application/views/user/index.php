
<div class="content-wrapper">
  <section class="content-header">
    <h1><?= $title ?></h1>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">Daftar Pengguna</div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <!-- <thead class="thead-dark"> -->
            <class="table table-hover text-nowrap">
  <thead>
    <tr>
    <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Password</th>
      <th>Role</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($user as $u): ?>
      <tr>
        <td><?= $u->id ?></td>
        <td><?= $u->name ?></td>
        <td><?= $u->email ?></td>
        <td><?= $u->password ?></td> <!-- 👈 tampilkan password di sini -->
        <td><?= ucfirst($u->role) ?></td>
        <td>
          <a href="<?= site_url('user/edit/'.$u->id) ?>" class="btn btn-sm btn-primary">Edit</a>
          <a href="<?= site_url('user/delete/'.$u->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
      </div>
    </div>
  </section>
</div>
 
