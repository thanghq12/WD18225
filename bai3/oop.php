<?php
class SinhVien {
    // khai báo thuộc tính tức là khai báo biến trong class
    public $tenSV ; //set giá trị mặc định cho thuộc tính
    public $maSV;
    public $namSinh;
    //hàm magic function trong class (hàm đặc biệt ) hàm khởi tạo
    public function __construct($tenSV,$maSV,$namSinh)
    {
        //hàm này là hàm luôn luôn được gọi khi khởi tạo 1 đối tượng mới
        //loại 1 không co tham số truyền vào
        // loại 2 có tham số truyền vào
//        echo 123;die;
        $this->tenSV = $tenSV;
        $this->maSV = $maSV;
        $this->namSinh = $namSinh;
    }

    //tạo ra 1 phước thức setTen để set giá trị cho tên
    public function setTen($tenSV) {
        $this->tenSV = $tenSV;
    }

    // viết hàm setMAsV, và setNamSinh sau đó gọi ra vơới 2 sv
    // khai bao phươnng thức tức là khai báo hàm trong class
    //xây dựng 1 phương thức tính tuổi
    public function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    public function hienThiThongTin() {
        echo "Tên".$this->tenSV."Mã SV".$this->maSV."Năm sinh ".$this->namSinh."tuổi:".$this->tinhTuoi()."<br>";
    }
}
//khơ tạo đối tượng sinh viên nghĩa là tạo ra 1 tk sinh viên
$sv1 = new SinhVien("Thắng","PH12344",1996);
$sv1->setTen("Tài");
$sv1->hienThiThongTin();
//$sv2 = new SinhVien();
//$sv2->setTen("Nhật");
//$sv2->hienThiThongTin();;
?>