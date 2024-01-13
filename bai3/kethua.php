<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function __construct($chan,$tay,$mat,$mui)
    {
        $this->chan = $chan;
        $this->tay= $tay;
        $this->mat = $mat;
        $this->mui = $mui;
    }

    public function setChan($chan) {
        $this->chan = $chan;
    }
    public function an() {
        echo "ăn bằng mồm";
    }
}
class NguoiLon extends ConNguoi {
    public  $longNach;
    public function __construct($chan, $tay, $mat, $mui,$longNach)
    {
        //gọi hàm khởi tạo của thăằng cha xuống
        parent::__construct($chan, $tay, $mat, $mui);
        $this->longNach =  $longNach;

    }



    public function di() {
        echo "Người lớn đi bằng ".$this->chan."Chân Bắng ".$this->tay."Tay";
    }

    public function noi() {

    }

}
class TreCon {
    public function bo() {

    }
}
$nl = new NguoiLon(2,3,4,5,6);// kkhowir taạo  đối tượng người lơns tạo ra 1 tk người lớn

$nl->di();
//khởi tạo đói tượng trẻ con và hiển thị trẻ con bò bằng 2 tay 2 chân
?>