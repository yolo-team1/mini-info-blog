<?php
function cek_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        $ci->session->set_flashdata('error', 'Anda belum login, silahkan login terlebih dahulu');
        redirect('admin/login');
    }
}