<?php

function is_logged_in()
{
    //memanggil library ci di file ini
    $ci = get_instance();

    if(!$ci->session->userdata('username')){
        redirect('auth');
    }else{
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu',[
                        'menu' => $menu
                    ])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu',[
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if($userAccess->num_rows() < 1){
            redirect('auth/blocked'); 
        }
    }
}

function check_access($role_id,$menu_id){
    $ci = get_instance();

    $result = $ci->db->get_where('user_access_menu',[
        'role_id' => $role_id,
        'menu_id' => $menu_id
    ]);

    if($result->num_rows() > 0){
        return "checked = 'checked'";
    }

}

function formatTanggalIndonesia($tanggal){
    $bulan = [
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember'
    ];

    $tgl = date('d', strtotime($tanggal));
    $bln = date('F', strtotime($tanggal));
    $thn = date('Y', strtotime($tanggal));

    return $tgl . ' ' . $bulan[$bln] . ' ' . $thn;
}

function formatSemesterIndonesia($angka){
    $romawi = [
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',
        10 => 'X'
    ];

    $terbilang = [
        1 => 'Satu',
        2 => 'Dua',
        3 => 'Tiga',
        4 => 'Empat',
        5 => 'Lima',
        6 => 'Enam',
        7 => 'Tujuh',
        8 => 'Delapan',
        9 => 'Sembilan',
        10 => 'Sepuluh'
    ];

    if(isset($romawi[$angka]) && isset($terbilang[$angka])){
        return '' . $romawi[$angka] . ' (' . $terbilang[$angka] . ')';
    } else {
        return 'Semester tidak valid';
    }
}



