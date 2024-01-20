<?php
abstract class DongVat {
    //1 class được gọi là class trìu tượng khi nóa chứa phương thức trìu tượng
    // class trìu tượng không thể khởi tạo
    // nhưng vẫn có phương thức và thuộc tính như class bình thưường
    abstract function di(); // đây là phương thưc trìu tượng chỉ định nghĩa tên không
    // triển khai cụ thể

}
class ConNguoi extends DongVat {
    public function di()
    {
        echo "đi bằng 2 chân";
    }
}
class ConCho extends DongVat {
    public function di()
    {
        echo "đi bằng 4 chân";
    }
}
// xây dựng xác định class trìu tượng và phương thức trìu tượng
//cho các class sau : class HCN , class HV , class hinhTrinh


/// tìm hiểu INTERFACE