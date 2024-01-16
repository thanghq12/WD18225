<?php
//tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
// tạo phương thức set cho các thuộc tính trên
// tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
// tạo phương thức set cho các thuộc tính trên
//tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
//tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
// hoten,diachi,tuoi,email,sdt,điểm TB
//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương
class ConNguoi {
    public $hoTen;
    public $diaChi;
    public $sdt;
    public $namSinh;
    public $email;
    public function __construct($hoTen,$diaChi,$sdt,$namSinh,$email)
    {
        $this->hoTen = $hoTen;
        $this->diaChi = $diaChi;
        $this->sdt = $sdt;
        $this->namSinh = $namSinh;
        $this->email = $email;
    }
    public  function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    public function hienThiThongTin() {
        echo $this->hoTen."-".$this->diaChi."-".$this->tinhTuoi();
    }

}

class HocSinh extends ConNguoi {
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    public function __construct($hoTen,$diaChi,$sdt,$namSinh,$email,$diemToan,$diemLy,$diemHoa)
    {
        parent::__construct($hoTen,$diaChi,$sdt,$namSinh,$email);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }
    public function tinhDiemTB() {
        return ($this->diemToan + $this->diemLy + $this->diemHoa) /3;
    }
    public function hienThongTinSv() {
        $this->hienThiThongTin();
       echo "điểm TB". $this->tinhDiemTB();
    }
}
$hs1 = new  HocSinh("a","tbc","abc@gmail.com",2000,"djdjd",7,8,9);
$hs1->hienThongTinSv();
//assGD1 :
//thực hiện chuyển từ mô hình MVC không có class sang mô hình MVC có class
// và áp dụng được tính chất kế thừa trong mô hình
// thực hiện đc full chức năng thêm sửa,xóa ,danh sách