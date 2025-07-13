<?php
function require_login() {
    $CI = get_instance();
    if (!$CI->session->userdata('logged_in')) redirect('auth/login');
}
function require_role($role) {
    $CI = get_instance();
    if ($CI->session->userdata('role') !== $role) show_error("Akses ditolak: khusus $role", 403);
}
function is_role($role) {
    $CI = get_instance();
    return $CI->session->userdata('role') === $role;
}
?>
