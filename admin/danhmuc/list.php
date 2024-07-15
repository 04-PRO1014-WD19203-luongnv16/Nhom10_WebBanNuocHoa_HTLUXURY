

    <div class="content-wrapper">
          <!-- Content -->

          <div class="card">
            <h5 class="card-header">DANH SÁCH DANH MỤC  </h5>
            <div class="table-responsive text-nowrap">
           
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Lựa chọn</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <?php
                 foreach ($listdanhmuc as $danhmuc){// gtri và bảng danhmuc
                    extract($danhmuc); //xô dl ra
                    $suadm="index.php?act=suadm&id=".$id;
                    $xoadm="index.php?act=xoadm&id=".$id;

                   echo' <tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'.$suadm.'"><i class="mdi mdi-pencil" style=" height:36px;margin: 15px; color: #f29dab"></i></a> <a href="'.$xoadm.'"> <i class="mdi mdi-delete" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" style="color: #f29dab"></i> </a></td>
                    </tr>';
                }
                  ?>
          
                </tbody>
              </table>
              <div class="row mb10 ">
                <a href="?act=adddm"> <input class="mr20" type="button" value="THÊM DANH MỤC"style=" height:36px;background: #f29dab; color: white; border: 0.5px pink;margin: 15px"></a>
            </div>
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
       

          <div class="content-backdrop fade"></div>
        </div>