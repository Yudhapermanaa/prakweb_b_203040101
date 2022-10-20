<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // private $mhs = [
    //     [
    //         "nama" => "Yudha Permana",
    //         "nrp" => "203040101",
    //         "email" => "yudha@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Agung Septiama",
    //         "nrp" => "203040102",
    //         "email" => "agung@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Reza",
    //         "nrp" => "203040079",
    //         "email" => "reza@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];
}
