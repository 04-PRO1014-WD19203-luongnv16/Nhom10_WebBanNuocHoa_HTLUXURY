<?php
include "../model/pdo.php";
include "header.php";
//Controller
if(isset($_GET['act'])){
    $act=$_GET['act'] ;
    switch($act){
         case 'listdm':
                include "danhmuc/list.php";
                break;
         case 'adddm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
        
                
            $tenloai = $_POST['tenloai'];
            $sql = 'insert into danhmuc(name) values('$tenloai')';
            pdo_execute($sql);
            $thongbao="Them thanh cong"
            }
            include "danhmuc/add.php";
            break;
        case 'editdm':
                include "danhmuc/edit.php";
                break;
        case 'deletedm':
                include "danhmuc/delete.php";
                break;        
       

        default:
        include "home.php";
        break;
    }
}else{
    include "home.php";
}

include "footer.php";

?>