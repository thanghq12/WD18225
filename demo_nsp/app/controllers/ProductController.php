<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function  index() {
        //tạo ra 1 biến nhận dữ liệu từ model
        $products = $this->product->getProduct();
//        echo "đây là danh sách product";
        $tilte = "1234";
        $name = "thanghq12";
        return $this->render("product.index",compact("tilte","name","products"));
    }
    public function addProduct(){
        return $this->render("product.add");
    }
    public function postProduct(){
        if(isset($_POST['btn_add'])) {
            //chưa validate
            $result = $this->product->addProduct(NULL,$_POST['name'],$_POST['price']);
            if($result) {
                echo "Thêm thành công";
            }
        }
    }
    public function detail($id) {
        $product = $this->product->getDetailProduct($id);
        return $this->render('product.edit',compact('product'));
    }

}