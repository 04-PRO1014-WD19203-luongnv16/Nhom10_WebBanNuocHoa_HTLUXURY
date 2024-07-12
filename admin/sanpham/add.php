


        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">THÊM MỚI SẢN PHẨM</h5>
            </div>
            <div class="card-body">
              <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Danh mục</label>
                  <div class="col-sm-10">
                    <div class="form-floating form-floating-outline mb-4">
                        <select class="form-select" name="iddm" id="" aria-label="Default select example">
                        <option value="0" selected>Tất cả danh mục</option>
                        <?php
                                    foreach ($listdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        echo'<option value="'.$id.'">'.$name.'</option>';
                                    }
                                ?>

                        </select>
                      </div>
          
           
                  </div>

                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Tên sản phẩm</label> 
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ten" name="tensp" placeholder="nhập vào tên sp" />  <span id="ten_err" style="color: red;"></span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Giá cũ</label>  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="giacu" name="giacu" placeholder="nhập vào giá của sản phẩm" /><span id="giacu_err" style="color: red;"></span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Giá mới</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="giamoi"  name="giamoi" placeholder="nhập vào giá của sản phẩm"/><span id="giamoi_err" style="color: red;"></span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-message">Mô tả ngắn</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                     
                      <textarea name="mota" id="motangan" class="form-control"
                      
                        aria-describedby="basic-icon-default-message2"></textarea>
                    </div>
                    <span id="motangan_err" style="color: red;"></span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-message">Mô tả dài</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                     
                      <textarea name="motadai" id="motadai" class="form-control"
                      
                        aria-describedby="basic-icon-default-message2"></textarea>
                    </div>
                    <span id="motadai_err" style="color: red;"></span>
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-message">Thêm ảnh sản phẩm</label>
                  <div class="col-sm-10">
                    <div class="input-group">
                      <input type="file" class="form-control" id="hinh" name="hinh"/> 
                      <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <span id="hinh_err" style="color: red;"></span>
                  </div>

                  <div class="row mb10 " >
                  <div style="display:flex">
                    <div style="margin-right:10px"> <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI SẢN PHẨM"style=" height:36px;background: #f29dab; color: white; border: 0.5px pink; margin-top: 10px "></div>
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


        
    <script>
        
        const ten = document.getElementById('ten');
        const giacu = document.getElementById('giacu');
        const giamoi = document.getElementById('giamoi');
        const motangan = document.getElementById('motangan');
        const motadai = document.getElementById('motadai');
        const hinh = document.getElementById('hinh');


        const ten_err = document.getElementById('ten_err');
        const giacu_err = document.getElementById('giacu_err');
        const giamoi_err = document.getElementById('giamoi_err');
        const motangan_err = document.getElementById('motangan_err');
        const motadai_err = document.getElementById('motadai_err');
        const hinh_err = document.getElementById('hinh_err');

      


        function validate() {
            let kt = true;

            if (ten.value.trim() == "") {
                ten_err.innerHTML = "Bạn chưa nhập tên";
                kt = false;
            } else {
                ten_err.innerHTML = "";
            }

            if (giacu.value.trim() == "") {
                giacu_err.innerHTML = "Bạn chưa nhập giá";
                kt = false;
            } else {
                giacu_err.innerHTML = "";
            }

            if (giamoi.value.trim() == "") {
                giamoi_err.innerHTML = "Bạn chưa nhập giá";
                kt = false;
            } else {
                giamoi_err.innerHTML = "";
            }


            if (motangan.value.trim() == "") {
                motangan_err.innerHTML = "Bạn chưa nhập mô tả";
                kt = false;
            } else {
                motangan_err.innerHTML = "";
            }

            if (motadai.value.trim() == "") {
                motadai_err.innerHTML = "Bạn chưa nhập mô tả";
                kt = false;
            } else {
                motadai_err.innerHTML = "";
            }
          
            if (hinh.value.trim() == "") {
                hinh_err.innerHTML = "Bạn chưa chọn hình";
                kt = false;
            } else {
               hinh_err.innerHTML = "";
            }
          

          

            
          

            return kt;
        }

    </script>