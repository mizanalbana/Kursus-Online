<h2><?= $title ?></h2>

<<form method="post" action="<?= site_url('materials/store') ?>" enctype="multipart/form-data">
    <div class="form-group">
        <label>Kursus</label>
        <select name="course_id" class="form-control" required>
            <option value="">-- Pilih Kursus --</option>
            <?php foreach ($courses as $c): ?>
                <option value="<?= $c->id ?>"><?= $c->title ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Judul Materi</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control"></textarea>
    </div>


    <div class="form-group">
        <label>Upload File Materi (PDF, DOCX, dll)</label>
        <input type="file" name="file" class="form-control" required>
    </div>


    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= site_url('materials') ?>" class="btn btn-secondary">Kembali</a>
</form>
