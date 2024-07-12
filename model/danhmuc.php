<?php
//hiển thị tất cả danh mục ra
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id desc";//load danh mục mới nhất từ dưới lên 
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);//lấy ra tên nó
        extract($dm);
        return $name;
    }else{
        return "";
    }
}