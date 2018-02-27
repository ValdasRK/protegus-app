<?php

return array(
    'filter'    => array(
        'date_from' => 'Tanggal memulai',
        'date_to'   => 'Tanggal berakhir',
        'system'    => 'Pemilihan sistim',
        'type'      => array(
            'label'   => 'Jenis kegiatan:',
            'options' => array(
                'all' => 'Semua',
            )
        ),
        'day'       => 'Hari',
        'week'      => 'Minggu',
        'month'     => 'Bulan',
        'submit'    => 'Penyaring',
        'cancel'    => 'Batal',
        'filterBy'  => 'SARING BERDASARKAN',
    ),
    'table'     => array(
        'type'      => 'Jenis kegiatan',
        'system'    => 'Sistem kegiatan',
        'zone'      => 'Daerah kegiatan',
        'timestamp' => 'Tanggal kegiatan',
    ),
    'list'      => array(
        'all'       => 'Semua',
        'allAreas'  => 'Semua area',
        'today'     => 'Hari ini',
        'yesterday' => 'Kemarin',
        'empty'     => 'Tidak ada kegiatan',
    ),
    'buttons'   => array(
        'clearFilter' => 'Hapus saringan',
    ),
    'reactions' => array(
        'toggle'  => 'Ubah negara',
        'enable'  => 'Hidup',
        'disable' => 'Mati',
    ),
    'settings'  => array(
        'title'    => 'Daftar kegiatan',
        'titleAdd' => 'Tambah kegiatan',
        'labels'   => array(
            'active'     => 'Aktif',
            'inactive'   => 'Tidak aktif',
            'activate'   => 'Aktivasi',
            'deactivate' => 'Menonaktifkan',
            'on'         => 'Aktif',
            'off'        => 'Mati',
            'qualifier'  => 'Kualifikasi',
            'code'       => 'Kode',
            'name'       => 'Nama',
            'reaction'   => 'Reaksi',
            'nameDesc'   => 'Variabel yang tersedia: <z>- wilayah; <v>- pengguna',
        ),
    ),
    'titles'    => array(
        'area' => 'Wilayah \':area\'',
    ),
);
