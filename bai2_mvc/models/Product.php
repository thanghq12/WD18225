<?php
require_once "db.php";
function getListProduct() {
    $sql = "select * from product";
    return getData($sql);
}

//
function deleteProduct($id) {
    $sql = "DELETE FROM product where  id = $id";
    getData($sql,false); // câu lệnh thêm sửa xóa thì chỉ cần truyền
    // false vào là được
}