<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title' => 'Pemasang Laravel',
    'next' => 'Langkah Berikutnya',
    'back' => 'Sebelumnya',
    'finish' => 'Pasang',
    'forms' => [
        'errorTitle' => 'Kesalahan berikut terjadi:',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'Selamat Datang',
        'title'   => 'Pemasang Laravel',
        'message' => 'Wizard Pemasangan dan Pengaturan yang Mudah.',
        'next'    => 'Periksa Persyaratan',
    ],

    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'Langkah 1 | Persyaratan Server',
        'title' => 'Persyaratan Server',
        'next'    => 'Periksa Izin',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'Langkah 2 | Izin',
        'title' => 'Izin',
        'next' => 'Konfigurasi Lingkungan',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan',
            'title' => 'Pengaturan Lingkungan',
            'desc' => 'Silakan pilih bagaimana Anda ingin mengkonfigurasi file <code>.env</code> aplikasi.',
            'wizard-button' => 'Pengaturan Form Wizard',
            'classic-button' => 'Editor Teks Klasik',
        ],
        'wizard' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan | Wizard Terpandu',
            'title' => 'Wizard <code>.env</code> Terpandu',
            'tabs' => [
                'environment' => 'Lingkungan',
                'database' => 'Database',
                'application' => 'Aplikasi',
            ],
            'form' => [
                'name_required' => 'Nama lingkungan diperlukan.',
                'app_name_label' => 'Nama Aplikasi',
                'app_name_placeholder' => 'Nama Aplikasi',
                'app_environment_label' => 'Lingkungan Aplikasi',
                'app_environment_label_local' => 'Lokal',
                'app_environment_label_developement' => 'Pengembangan',
                'app_environment_label_qa' => 'QA',
                'app_environment_label_production' => 'Produksi',
                'app_environment_label_other' => 'Lainnya',
                'app_environment_placeholder_other' => 'Masukkan lingkungan Anda...',
                'app_debug_label' => 'Debug Aplikasi',
                'app_debug_label_true' => 'Benar',
                'app_debug_label_false' => 'Salah',
                'app_log_level_label' => 'Level Log Aplikasi',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'pemberitahuan',
                'app_log_level_label_warning' => 'peringatan',
                'app_log_level_label_error' => 'kesalahan',
                'app_log_level_label_critical' => 'kritis',
                'app_log_level_label_alert' => 'waspada',
                'app_log_level_label_emergency' => 'darurat',
                'app_url_label' => 'URL Aplikasi',
                'app_url_placeholder' => 'URL Aplikasi',
                'db_connection_failed' => 'Tidak dapat terhubung ke database.',
                'db_connection_label' => 'Koneksi Database',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Host Database',
                'db_host_placeholder' => 'Host Database',
                'db_port_label' => 'Port Database',
                'db_port_placeholder' => 'Port Database',
                'db_name_label' => 'Nama Database',
                'db_name_placeholder' => 'Nama Database',
                'db_username_label' => 'Nama Pengguna Database',
                'db_username_placeholder' => 'Nama Pengguna Database',
                'db_password_label' => 'Kata Sandi Database',
                'db_password_placeholder' => 'Kata Sandi Database',

                'app_tabs' => [
                    'more_info' => 'Info Lebih Lanjut',
                    'broadcasting_title' => 'Broadcasting, Caching, Session, & Queue',
                    'broadcasting_label' => 'Driver Broadcasting',
                    'broadcasting_placeholder' => 'Driver Broadcasting',
                    'cache_label' => 'Driver Cache',
                    'cache_placeholder' => 'Driver Cache',
                    'session_label' => 'Driver Session',
                    'session_placeholder' => 'Driver Session',
                    'queue_label' => 'Driver Queue',
                    'queue_placeholder' => 'Driver Queue',
                    'redis_label' => 'Driver Redis',
                    'redis_host' => 'Host Redis',
                    'redis_password' => 'Kata Sandi Redis',
                    'redis_port' => 'Port Redis',

                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Driver Mail',
                    'mail_driver_placeholder' => 'Driver Mail',
                    'mail_host_label' => 'Host Mail',
                    'mail_host_placeholder' => 'Host Mail',
                    'mail_port_label' => 'Port Mail',
                    'mail_port_placeholder' => 'Port Mail',
                    'mail_username_label' => 'Username Mail',
                    'mail_username_placeholder' => 'Username Mail',
                    'mail_password_label' => 'Kata Sandi Mail',
                    'mail_password_placeholder' => 'Kata Sandi Mail',
                    'mail_encryption_label' => 'Enkripsi Mail',
                    'mail_encryption_placeholder' => 'Enkripsi Mail',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Id App Pusher',
                    'pusher_app_id_palceholder' => 'Id App Pusher',
                    'pusher_app_key_label' => 'Key App Pusher',
                    'pusher_app_key_palceholder' => 'Key App Pusher',
                    'pusher_app_secret_label' => 'Secret App Pusher',
                    'pusher_app_secret_palceholder' => 'Secret App Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Atur Database',
                    'setup_application' => 'Atur Aplikasi',
                    'install' => 'Pasang',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan | Editor Klasik',
            'title' => 'Editor Lingkungan Klasik',
            'save' => 'Simpan .env',
            'back' => 'Gunakan Form Wizard',
            'install' => 'Simpan dan Pasang',
        ],
        'success' => 'Pengaturan file .env Anda telah disimpan.',
        'errors' => 'Tidak dapat menyimpan file .env, Silakan buat secara manual.',
    ],

    'install' => 'Pasang',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'Laravel Installer berhasil DIPASANG pada ',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Pemasangan Selesai',
        'templateTitle' => 'Pemasangan Selesai',
        'finished' => 'Aplikasi telah berhasil dipasang.',
        'migration' => 'Output Konsol Migrasi & Seed:',
        'console' => 'Output Konsol Aplikasi:',
        'log' => 'Entri Log Pemasangan:',
        'env' => 'File .env Final:',
        'exit' => 'Website Pengguna',
        'admin_panel' => 'Website Admin',
    ],

    /*
     *
     * Update specific translations
     *
     */
    'updater' => [
        /*
         *
         * Shared translations.
         *
         */
        'title' => 'Pembaruan Laravel',

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title'   => 'Selamat Datang di Pembaruan',
            'message' => 'Selamat datang di wizard pembaruan.',
        ],

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title'   => 'Ikhtisar',
            'message' => 'Ada 1 pembaruan.|Ada :number pembaruan.',
            'install_updates' => 'Pasang Pembaruan',
        ],

        /*
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => 'Selesai',
            'finished' => 'Database aplikasi telah berhasil diperbarui.',
            'exit' => 'Klik di sini untuk keluar',
        ],

        'log' => [
            'success_message' => 'Laravel Installer berhasil DIPERBARUI pada ',
        ],
    ],
];
