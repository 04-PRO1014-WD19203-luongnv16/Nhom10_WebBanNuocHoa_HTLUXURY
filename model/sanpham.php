<?php 
//hiển thị 9 sản phẩm mới nhất
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9"; //Sắp xếp từ dưới lên
    $listsanpham=pdo_query($sql);// thực hiện câu lệnh truy vấn (nhiều dl nên dùng pdo_query($sql))
    return  $listsanpham;
}
//hiển thị top 10 sản phẩm có lượt xem cao nhất 
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);// thực hiện câu lệnh truy vấn
    return $listsanpham;
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}

// 
function loadone_sanpham($id){
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
  
    return $result;
}
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";// khác với sản phẩm id hiện tại
    $result = pdo_query($sql);
    return $result;
}
function insert_sanpham($tensp, $giacu,$giamoi, $hinh, $mota,$motadai , $iddm){
    $sql= " INSERT INTO `sanpham`(`name`, `giacu`,`giamoi`, `img`, `mota`, `motadai`,`iddm`) VALUES ('$tensp', '$giacu','$giamoi', '$hinh', '$mota', '$motadai', '$iddm');";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}

function update_sanpham($id,$iddm,$tensp,$giacu,$giamoi,$mota, $motadai,$hinh){
    if($hinh!=""){
        $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `giacu` = '{$giacu}',`giamoi` = '{$giamoi}', `mota` = '{$mota}', `motadai` = '{$motadai}',`img` = '{$hinh}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }else{
        $sql=  "UPDATE `sanpham` SET `name` = '{$tensp}', `giacu` = '{$giacu}',  `giamoi` = '{$giamoi}',  `mota` = '{$mota}',`motadai` = '{$motadai}', `iddm` = '{$iddm}' WHERE `sanpham`.`id` = $id";
    }
    pdo_execute($sql);
}