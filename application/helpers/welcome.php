<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('sambut')) {
    function sambut($role)
    {
        $role = strtolower($role);
        if ($role == "admin") {
            return "Selamat datang, Admin!";
        } elseif ($role == "user") {
            return "Selamat datang, Pengguna!";
        } elseif ($role == "guest") {
            return "Selamat datang, Tamu!";
        } else {
            return "Selamat datang!";
        }
    }
}
