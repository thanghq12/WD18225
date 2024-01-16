<?php
require_once "db.php";
class Product extends db
{
   public function getListProduct()
    {
        $sql = "select * from product";
        return $this->getData($sql);
    }

//
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM product where  id = $id";
        getData($sql, false); // câu lệnh thêm sửa xóa thì chỉ cần truyền
        // false vào là được
    }
}