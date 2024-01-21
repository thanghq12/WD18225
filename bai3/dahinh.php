<?php
interface DiChuyen {
    // interface không phải là class
    //vì nó không phải là classs nên nó không có thuộc tính và phương thức
    //nó chỉ có phương thức trìu tượng
    function di(); //trong interface khai báod ntn sẽ tự hiểu là phương thức trìu tượng
}
class ConCho implements DiChuyen {
    public function di()
    {
       echo "con chó đi bằng 4 chân";
    }
}
class ConNguoi implements DiChuyen {
    public function di()
    {
        echo "con chó đi bằng 4 chân";
    }
}
//tìm hiểu sự khác nhau giữa abstract và interface
//tìm hiểu về namespace