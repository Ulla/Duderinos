<?php

class HomeModel extends BaseModel{

  private $listData = array(
    'items' => array(
      array(
        'title' => "I'm your father Luke.... phaaaaa! Welcome... phaaaaaahhh",
        'text' => "<strong>Something something the Dark side</strong>, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.",
        'image' => "img.jpg"
      )
    )
  );

  public function getHomeList(){
    return $this->listData;
  }

}