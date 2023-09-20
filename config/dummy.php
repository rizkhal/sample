<?php

return [
    "status" => true,
    "message" => "Data berhasil ditemukan!",
    "current_page" => 1,
    "data" => [
        [
            "fitur_id" => "F64605BF0886E0",
            "fitur_name" => "History-Lokasi Kerja",
            "modul_name" => "Manajemen User",
            "permission_names" => [
                "history.lokasi-kerja.index"
            ],
            "actions" => [
                "melihat" => 0
            ]
        ],
        [
            "fitur_id" => "F64605BF0886E1",
            "fitur_name" => "History-Permohonan Registrasi",
            "modul_name" => "Manajemen User",
            "permission_names" => [
                "history.permohonan-registrasi.index",
                "history.permohonan-registrasi.show"
            ],
            "actions" => [
                "melihat" => 0
            ]
        ],
        // [
        //     "fitur_id" => "F64605BF0886E10",
        //     "fitur_name" => "Permohonan-Lokasi Kerja",
        //     "modul_name" => "Manajemen User",
        //     "permission_names" => [
        //         "permohonan.lokasi-kerja.index",
        //         "permohonan.lokasi-kerja.show"
        //     ],
        //     "actions" => [
        //         "melihat" => 0
        //     ]
        // ],
        [
            "fitur_id" => "F64605BF0886E10",
            "fitur_name" => "Permohonan-Registrasi",
            "modul_name" => "Operasi Pengawasan Dilaut",
            "permission_names" => [
                "permohonan.registrasi.index",
                "permohonan.registrasi.show"
            ],
            "actions" => [
                "melihat" => 0
            ]
        ],
        [
            "fitur_id" => "F64605BF0886E14",
            "fitur_name" => "Profile-Foto",
            "modul_name" => "Operasi Pengawasan Dilaut",
            "permission_names" => [
                "profile.foto.show"
            ],
            "actions" => [
                "melihat" => 0
            ]
        ],
    ],
];
