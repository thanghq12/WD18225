<?php
// tạo kết nối từ project php sang mysql
require_once "env.php";
class db {
   public $connect;
   public function __construct(){
        $this->connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
//        return $connect;
    }
// nếu như khi gọi hàm getData mà chỉ truyền vào $query thì sẽ áp dụng cho
// câu lệnh select lấy toàn bộ  dữ liệu
//nếu như khi gọi hàm getData mà truyền vào $query kèm với false áp dụng cho
// câu lệnh thêm,sửa ,xóa
//hàm 4 trong 1
public function getData($query, $getAll = true){
//    $conn = getConnect();

    $stmt = $this->connect->prepare($query);
    $stmt->execute();
    if($getAll){
        return $stmt->fetchAll();
    }

    return $stmt->fetch();
}
}
?>