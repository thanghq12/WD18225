<?php
namespace NSP1;
class SinhVien {
    public $ten;
    public $tuoi;
    public function __construct($ten,$tuoi)
    {
       $this->ten = $ten;
       $this->tuoi = $tuoi;
    }

    public function hienThiThongTinSV() {
        echo "Ten".$this->ten."Tuoi".$this->tuoi;
    }

}