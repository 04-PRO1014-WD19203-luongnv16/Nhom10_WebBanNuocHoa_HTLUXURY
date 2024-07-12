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
                $iddm=$_POST['iddm'];

            }else{
                $keyw="";
                $iddm=0;
            }
            $listdanhmuc= loadall_danhmuc();
            $listsanpham = loadall_sanpham($keyw, $iddm);
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
    //      case 'listdm':
    //             include "danhmuc/list.php";
    //             break;
    //      case 'adddm':
    //         if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
        
                
    //             $tenloai = $_POST['tenloai'];
    //             $sql = "insert into danhmuc(name) values('$tenloai')";
    //             pdo_execute($sql);
    //             $thongbao="Them thanh cong";
    //         }
    //         include "danhmuc/add.php";
    //         break;
    //     case 'editdm':
    //             include "danhmuc/edit.php";
    //             break;
    //     case 'deletedm':
    //             include "danhmuc/delete.php";
    //             break;        
       

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