<?php

abstract class ProductFeatres{

    
    abstract function productDetails();
    // abstract function productImage();
    // abstract function productOwnerDetails();

}


class upLoadProduct extends ProductFeatres {

    function productDetails(){
        echo "this are product details";
    }

}

$uplaod=new upLoadProduct();
$uplaod->productDetails();

?>