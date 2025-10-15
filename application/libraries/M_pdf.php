<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . '../vendor/autoload.php';

class M_pdf {

    public function __construct() {}

    public function load($param = [])
    {
        $defaultConfig = [
            'mode' => 'utf-8',
            'format' => 'A4',
            'autoLangToFont' => true,     // otomatis pilih font sesuai bahasa
            'autoScriptToLang' => true,   // aktifkan deteksi bahasa
            'directionality' => 'rtl',    // kanan ke kiri (RTL)
            'default_font' => 'Amiri',    // font Arabic-friendly
        ];

        $config = array_merge($defaultConfig, $param);

        return new \Mpdf\Mpdf($config);
    }
}
