<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;
    // member-member (special method) - constructor
    public function __construct($nim, $nama, $kuliah, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->grade = $this->getGrade();
        $this->predikat = $this->getPredikat();
        $this->status = $this->getStatus();
        // $this->getPredikat();
        // $this->getStatus();
    }

    // member3 (method) - function return
    public function getGrade()
    {
        if ($this->nilai > 85 && $this->nilai <= 100) {
            return 'A';
        } else if ($this->nilai > 75 && $this->nilai <= 85) {
            return 'B';
        } else if ($this->nilai > 60 && $this->nilai <= 75) {
            return 'C';
        } else if ($this->nilai > 30 && $this->nilai <= 60) {
            return 'D';
        } else if ($this->nilai > 0 && $this->nilai <= 30) {
            return 'E';
        } else {
            return '';
        };
    }

    public function getPredikat()
    {
        switch ($this->grade) {
            case 'A':
                return 'Sangat Memuaskan';
            case 'B':
                return 'Memuaskan';
            case 'C':
                return 'Cukup';
            case 'D':
                return 'Kurang';
            case 'E':
                return 'Sangat Kurang';
            default:
                return  '';
        };
    }


    public function getStatus()
    {
        if ($this->nilai > 65) return "Lulus";
        else if ($this->nilai > 0) return "Tidak Lulus";
        else return '';
    }
};
