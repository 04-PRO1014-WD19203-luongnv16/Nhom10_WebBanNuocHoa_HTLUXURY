

<?php
    if(is_array($sanpham)){
        extract($sanpham);
        
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinhpath="<img src= '".$hinhpath."' width='100px' height='100px'>";
    }else{
        $hinhpath="NO file img!";
    }
?>

        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">CẬP NHẬT THÔNG TIN SẢN PHẨM</h5>
            </div>
            <div class="card-body">
            <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Danh mục</label>
                  <div class="col-sm-10">
                    <div class="form-floating form-floating-outline mb-4">
                        <select class="form-select" name="iddm" id="" aria-label="Default select example">
                        <option value="0" selected>Tất cả danh mục</option>
                        <?php
                        foreach($listdanhmuc as $key=>$value){
                            if($iddm==$value['id']){
                                echo '<option value="'.$value['id'].'" selected>'.$value['name'].'</option>' ;
                            }else{
                                echo '<option value="'.$value['id'].'">'.$value['name'].'</option>' ;
                            }

                        }
                                
                    ?>

                        </select>
                      </div>
          
           
                  </div>

                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Tên sản phẩm</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="tensp" value="<?=$name?>" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Giá cũ</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="giacu"  value="<?= $giacu ?>" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Giá mới</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id=""  name="giamoi" value="<?= $giamoi ?>"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-message">Mô tả ngắn</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                     
                      <textarea name="mota" id="" class="form-control"
                      
                        aria-describedby="basic-icon-default-message2"><?= $mota ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-message">Mô tả dài</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                     
                      <textarea name="motadai" id="" class="form-control"
                      
                        aria-describedby="basic-icon-default-message2"><?= $motadai ?></textarea>
                    </div>
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-message">Thêm ảnh sản phẩm</label>
                  <div class="col-sm-10">
                    <div class="input-group">
                      <input type="file" class="form-control" id="" name="hinh"/>       

                      <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <?= $hinhpath?>
                  </div>

                  <div class="row mb10 " >
                  <div style="display:flex">
                  <input type="hidden" name="id" value="<?=$id?>">

                    <div style="margin-right:10px"> <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT"style=" height:36px;background: #f29dab; color: white; border: 0.5px pink; margin-top: 10px "></div>
                    <div><input class="mr20" type="reset" value="NHẬP LẠI"style=" height:36px;background: #f29dab; color: white; border: 0.5px pink; margin-top: 10px "></div>

                  </div>

                  </div>
                 
                <?php
                  if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                  }
                ?>
              </form>
            </div>
          </div>
        </div>