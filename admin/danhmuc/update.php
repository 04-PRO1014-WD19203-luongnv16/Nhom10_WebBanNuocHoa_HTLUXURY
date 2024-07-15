        <?php
    if(is_array($dm)){//nếu nó là 1 mảng thì xô nó ra
        extract($dm);
    }
?>

        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">CẬP NHẬT THÔNG TIN DANH MỤC</h5>
            </div>
            <div class="card-body">
            <form action="index.php?act=updatedm" method="POST">
              
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Mã danh mục</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id=""  name="maloai" disabled />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Tên danh mục</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id=""  name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>"  />

                  </div>
                </div>
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">

                <div class="row mb-3">
                 

                  <div class="row mb10 " >
                  <div style="display:flex">
                    <div style="margin-right:10px"> <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT"style=" height:36px;background: #f29dab; color: white; border: 0.5px pink; margin-top: 10px "></div>

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