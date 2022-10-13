<?php

class About
{
    public function index($nama = 'Yudha', $pekerjaan = 'Mahasiswa')
    {
        echo "Hallo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'about/page';
    }
}
