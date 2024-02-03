<?php
namespace App\Models;
class  Product extends BaseModel {
   protected $table = "product";
   // xây dựng hàm truy vấn lấy ra danh sách sản phẩ
    public function getProduct() {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();//lấy ra nhiều dòng dữ liệu
    }
    // lấy ra 1 dòng dữ liệu theo id
    public function getDetailProduct($id) {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    //xây dựng hàm thêm sản phẩm
    public function addProduct($id,$tenSP,$gia) {
        $sql = "INSERT INTO $this->table values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$tenSP,$gia]);
    }
    //xây dựng hàm update sản phẩm
    public function updateProduct($id,$tenSP,$gia) {
        $sql = "UPDATE $this->table SET name = ? ,price = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute([$tenSP,$gia,$id]);

    }
}