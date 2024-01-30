<?php
namespace NSP2;
class SinhVien {
    public $ten;
    public $namSinh;
    public function __construct($ten,$namSinh)
    {
        $this->ten = $ten;
        $this->namSinh = $namSinh;
    }

    public function hienThiThongTinSV() {
        echo "Ten".$this->ten."Tuoi".$this->namSinh;
    }

}