<?php
include_once "nsp1.php";
include_once "nsp2.php";
use NSP1 as N1;// đổi tên namespace

$sv = new N1\SinhVien("ten",13);
$sv2 = new NSP2\SinhVien("ghnvg",1996);
$sv->hienThiThongTinSV();
$sv2->hienThiThongTinSV();
// namespace là không gian tên sẽ giúp chúng ta phân biệt được
// các class/biến/hàm ở các file khác nhau
// nếu như chuúng trùng nhau
// namespace luôn luôn đặt ở đầu file PHP
// namespace thì không bao giờ được trùng nhau