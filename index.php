<?php
session_start();
ob_start(); 
if(!isset( $_SESSION['mycart'])){ $_SESSION['mycart']=[];} //kiểm tra k tồn tại thì khởi tạo giỏ hàng


  include "model/pdo.php"; //gọi đến kết nối CSDL để đổ tất cả dữ liệu ra
  include "model/sanpham.php";
  include "model/danhmuc.php";
//   include "model/binhluan.php";
//   include "model/taikhoan.php";
//   include "model/showgiohang.php";

//Những file này include trên header
  include "view/header.php";
  include "global.php";
  //thực hiện truy vấn lấy ra toàn bộ dl 
  $spnew = loadall_sanpham_home();
  $dsdm = loadall_danhmuc();
  $dstop10 = loadall_sanpham_top10();
    if(isset($_GET['act']) && ($_GET['act'] != "")){
        $act =$_GET['act'];
        switch ($act) {
            case 'chitietsp':
                // if(isset($_POST['guibinhluan'])){
                //     extract($_POST);
                //     var_dump($_POST);
                //     insert_binhluan($idpro, $noidung);
                // }
                if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                    $idpro = $_POST['idpro'];
                    $iduser = $_SESSION['user']['id'];
                    $noidung = $_POST['noidung'];
                    insert_binhluan($idpro, $noidung,$iduser);
                }
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                    // $binhluan = loadall_binhluan($_GET['idsp']);
                    include "view/sanpham/chitietsp.php";
                } else {
                    include "view/home.php";
                }
                break;
         
            case 'shop':
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                    $kyw = $_POST['keyword'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm= load_ten_dm($iddm);
                include "view/sanpham/shop.php";
                break;
            
          
          
        
        }
    }else{
        header("Location: index.php?act=shop");

    }
    include "view/footer.php";
    ob_end_flush(); 
?>