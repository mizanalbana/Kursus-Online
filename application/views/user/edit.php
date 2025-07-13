<div class="content-wrapper">
  <section class="content-header">
    <h1><?= $title ?></h1>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <form method="post" action="<?= site_url('user/update') ?>">
          <input type="hidden" name="id" value="<?= $user_data->id ?>">

          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?= $user_data->name ?>" required>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $user_data->email ?>" required>
          </div>

          <div class="form-group">
            <label>Password (kosongkan jika tidak ingin mengubah)</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label>Role</label>
            <select name="role" class="form-control" required>
              <option value="admin" <?= $user_data->role == 'admin' ? 'selected' : '' ?>>Admin</option>
              <option value="instructor" <?= $user_data->role == 'instructor' ? 'selected' : '' ?>>Instruktur</option>
              <option value="student" <?= $user_data->role == 'student' ? 'selected' : '' ?>>Siswa</option>
            </select>
          </div>

          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="<?= site_url('user') ?>" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </section>
</div>
