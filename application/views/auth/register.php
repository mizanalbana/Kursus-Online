<body
    style="margin: 0; height: 100vh; display: flex; align-items: center; justify-content: center; background-color: #f4f6f9;">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h4><b>Register</b> Online Course</h4>
            </div>
            <div class="card-body">
                <p class="text-center">Create a New Accounts</p>
                <?= form_open('auth/register') ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Passwords" name="password" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" name="role" required>
                        <option value="">-- Choice a Role --</option>
                        <option value="student">Students</option>
                        <option value="instructor">instructor</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user-tag"></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <a href="<?= site_url('auth/login') ?>">i have a account</a>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    </div>
                </div>
                <?= form_close() ?>
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success mt-3"><?= $this->session->flashdata('success') ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS + jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>