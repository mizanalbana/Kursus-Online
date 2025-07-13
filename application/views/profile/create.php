<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container mt-4">
        <h2><?= $title; ?></h2>
    
        <form action="<?= site_url('profile/store') ?>" method="post">
            <!-- PILIH KURSUS -->
            <div class="form-group">
                <label for="course_id">Nama Kursus</label>
                <select name="course_id" id="course_id" class="form-control" required>
                    <option value="">-- Pilih Kursus --</option>
                    <?php foreach ($courses as $course): ?>
                        <option value="<?= $course->id ?>" data-instructor-id="<?= $course->instructor_id ?>"
                            data-course-time="<?= $course->time ?>">
                            <?= $course->title ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
    
            <!-- ID INSTRUKTUR AKAN OTOMATIS TERISI -->
            <div class="form-group">
                <label for="user_id">ID Instruktur</label>
                <input type="text" name="user_id" id="user_id" class="form-control" readonly required>
            </div>
    
            <!-- WAKTU KURSUS DARI TABEL COURSES -->
            <!-- TANGGAL DAFTAR -->
            <div class="form-group">
                <label for="enrolled_at">Tanggal Daftar</label>
                <input type="text" id="enrolled_at" name="enrolled_at" class="form-control"
                    value="<?= date('Y-m-d H:i:s') ?>"
                    readonly>
                <small class="text-muted">Tanggal akan disimpan secara otomatis</small>
            </div>
    
            <!-- BUTTON -->
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= site_url('profile') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- SCRIPT: Mengisi user_id otomatis saat kursus dipilih -->
    <script>
        document.getElementById('course_id').addEventListener('change', function () {
            var selected = this.options[this.selectedIndex];
            var instructorId = selected.getAttribute('data-instructor-id');
            document.getElementById('user_id').value = instructorId || '';
        });
    </script>
</body>

</html>