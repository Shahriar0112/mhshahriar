<?php
class product {
    public $id;
    public $name;
    public $price;

    function __construct($id,$name,$price){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
    }
   
    public function showDetails() {
        $getFormattedPrice = number_format($this->price, 2);
        echo "ID: {$this->id} \nName: {$this->name} \nPrice: $getFormattedPrice.";
      }
}
    $product = new product(01,"T-Shart", 19.99);
    $product->showDetails();
    
