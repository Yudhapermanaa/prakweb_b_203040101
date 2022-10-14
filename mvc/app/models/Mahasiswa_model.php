<?php

class Mahasiswa_model
{
    private $dbh; // databse handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=prakweb_2022_b_203040101';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
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


    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
