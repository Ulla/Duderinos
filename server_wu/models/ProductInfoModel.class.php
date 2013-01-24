<?php

class ProductModel extends BaseModel{

  private $listData;
  private $menuListData;
  protected $productname;

  protected function getProductListData($productname){
    return array("products"=>$this->db->get("SELECT p.*, c.categoryName FROM product p INNER JOIN category c ON p.categoryID = c.categoryID WHERE productname = '$productname'"));
  }

  public function getProductList(){
    if(!$this->listData){
      $this->listData = $this->getProductListData();
    }
    
    return $this->listData;
  }



  protected function getProductMenuData(){
    return array("categories"=>$this->db->get("SELECT categoryName FROM category"));
  }

  public function getProductMenu(){
    if(!$this->menuListData){
      $this->menuListData = $this->getProductMenuData();
    }
    
    return $this->menuListData;
  }


}