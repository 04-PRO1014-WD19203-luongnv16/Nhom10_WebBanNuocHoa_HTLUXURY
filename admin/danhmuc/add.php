<form action="index.php?act=adddm" method="post">
    <label for="">Tên danh muc</label>
    <input type="text" name="tenloai">
    <input type="submit" value="Them moi" name="themmoi">
    <?php
    
    if(isset($thongbao)&&($thongbao!="")){ echo $thongbao; }
    ?>
 </form>
