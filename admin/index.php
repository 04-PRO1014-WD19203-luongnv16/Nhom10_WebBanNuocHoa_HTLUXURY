<?php
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";





//Controller
include "header.php";
if(isset($_GET['act'])){
    $act=$_GET['act'] ;
    switch($act){
        //Sản phẩm=================================
        case "listsp":
            if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                $keyw=$_POST['keyw'];
               

            }else{
                $keyw="";
                
            }
           
            $listsanpham = loadall_sanpham($keyw);
            include "sanpham/list.php";
            break;
        case "addsp":
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giacu = $_POST['giacu'];
                $giamoi = $_POST['giamoi'];
                $mota = $_POST['mota'];
                $motadai = $_POST['motadai'];
                $hinh = $_FILES['hinh']['name']; //lấy ra tên hình
                $target_dir = "../upload/";
                $target_file = $target_dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                    echo "Upload thành công!";
                }else{
                    echo"Upload không thành công!";
                }

                echo $iddm;
                insert_sanpham($tensp, $giacu, $giamoi, $hinh, $mota,$motadai ,$iddm);
                
                
                $thanhcong = "Thêm thành công!";
               
            }
            $listdanhmuc= loadall_danhmuc();

            include "sanpham/add.php";
            break;  
            case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                  
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc= loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "updatesp":
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $iddm = $_POST['iddm'];
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $giacu = $_POST['giacu'];
                    $giamoi = $_POST['giamoi'];
                    $mota = $_POST['mota'];
                    $motadai = $_POST['motadai'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($id, $iddm, $tensp, $giacu,$giamoi, $mota,$motadai, $hinh);
                    $thongbao = "cập nhật thành công!";
                }
                $listsanpham = loadall_sanpham("", 0);
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/list.php";
                break;

             case "xoasp":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
    
                    }
                    $listsanpham = loadall_sanpham("",0);
                    include "sanpham/list.php";
                    break;
    
//Danh muc====================
case "adddm":
    $errtenloai="";
    $tenloai="";
    //kiểm tra xem người dùng có click vào nút add hay không
    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){ //kiểm tra xem nó có tồn tại hay k và có click vào hay k
        $tenloai=$_POST['tenloai']; //lấy tên loại về và insert vào database
        if(empty($_POST['tenloai']))
        {
            $errtenloai="Bạn chưa nhập tên loại";
        }
        if($errtenloai==""){
            $sql="insert into danhmuc(name) values('$tenloai')";//câu lệnh sql
            pdo_execute($sql);//thực thi câu lệnh
            $thongbao="Thêm thành công";

        }
    }
    include "danhmuc/add.php";
    break;  
case "listdm":
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql); //gán cho 1 giá trị nào đó
    include "danhmuc/list.php";
    break;  
case "xoadm":
    if(isset($_GET['id'])&&($_GET['id']>0)){
        $sql="delete from danhmuc where id=".$_GET['id'];
        pdo_execute($sql);
    }
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    include "danhmuc/list.php";
    break;  
case "suadm":
    if(isset($_GET['id'])&&($_GET['id']>0)){
        $sql="select * from danhmuc where id=".$_GET['id'];
        $dm=pdo_query_one($sql);
    }
 
    include "danhmuc/update.php";
    break; 
case "updatedm":
    
    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
        $tenloai=$_POST['tenloai'];
        $id=$_POST['id'];

        $sql="update danhmuc set name='".$tenloai."' where id=".$id;
        pdo_execute($sql);
        $thongbao="Thêm thành công";
    }

    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    include "danhmuc/list.php";
    break;   


    //     default:
    //     include "home.php";
    //     break;
    // }
// }else{
//     include "home.php";
    }
}

include "footer.php";

?>