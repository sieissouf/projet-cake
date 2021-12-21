<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST['achete'])){

        if(isset($_SESSION['card'])){
            $count=count($_SESSION['card']);
          $_SESSION['card'][$count]==array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'], 'Quantity'=>1);
          print_r($_SESSION['card']);
        }else{
            $_SESSION['card'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'], 'Quantity'=>1);
            print_r($_SESSION['card']);
           }
    }
}

?>