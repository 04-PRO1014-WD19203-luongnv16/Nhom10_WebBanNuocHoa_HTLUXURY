<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Admin</title>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/logo.jpg" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="../assets/vendor/fonts/materialdesignicons.css" />

  <!-- Menu waves for no-customizer fix -->
  <link rel="stylesheet" href="../assets/vendor/libs/node-waves/node-waves.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background: pink">
        <div class="app-brand demo">
          <a href="" class="app-brand-link">
           <img src="../assets/img/logo/logo.png" alt="" width="50px">
            <span class="app-brand-text demo menu-text fw-semibold ms-2" >Thời trang HL</span>
          </a>

         
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item">
            <a href="index.php?act=home" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
              <div data-i18n="Email">Trang chủ</div>
            </a>
          </li>
          <!-- DANH MỤC  -->
          <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
              <i class="mdi mdi-folder-outline" style="padding-right: 15px;"></i>              
              <div data-i18n="Layouts">Danh mục</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="index.php?act=listdm" class="menu-link">
                  <div data-i18n="Without menu">Danh sách danh mục </div>
                </a>
              </li>
              <li class="menu-item">
                <a href="index.php?act=adddm" class="menu-link">
                  <div data-i18n="Without navbar">Thêm danh mục</div>
                </a>
              </li>
             
            </ul>
          </li>
          <!-- SẢN PHẨM  -->
          <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
              <i class="mdi mdi-clipboard" style="padding-right: 15px;"></i>              
              <div data-i18n="Layouts">Sản phẩm</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="index.php?act=listsp" class="menu-link">
                  <div data-i18n="Without menu">Danh sách sản phẩm </div>
                </a>
              </li>
              <li class="menu-item">
                <a href="index.php?act=addsp" class="menu-link">
                  <div data-i18n="Without navbar">Thêm sản phẩm</div>
                </a>
              </li>
             

            </ul>
          </li>
        

           <!-- BÌNH LUẬN  -->
           <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
              <i class="mdi mdi-message-text-outline" style="padding-right: 15px;"></i>              
              <div data-i18n="Layouts">Bình luận</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="index.php?act=listbl" class="menu-link">
                  <div data-i18n="Without menu">Danh sách bình luận </div>
                </a>
              </li>
              
             
            </ul>
          </li>

             <!-- ĐƠN HÀNG  -->
             <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
            <i class="mdi mdi-format-list-bulleted" style="padding-right: 15px;"></i>
              <div data-i18n="Layouts">Đơn hàng</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="index.php?act=listdonhang" class="menu-link">
                  <div data-i18n="Without menu">Danh sách đơn hàng </div>
                </a>
              </li>
             
             
             
            </ul>
          </li>
             <!-- KHÁCH HÀNG  -->
             <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
              <i class="mdi mdi-account-outline" style="padding-right: 15px;"></i>              
              <div data-i18n="Layouts">Tài khoản</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="index.php?act=listtk" class="menu-link">
                  <div data-i18n="Without menu">Danh sách tài khoản </div>
                </a>
              </li>
              <li class="menu-item">
                <a href="index.php?act=addtk" class="menu-link">
                  <div data-i18n="Without navbar">Thêm tài khoản</div>
                </a>
              </li>
             
             
            </ul>
          </li>

           <!-- THỐNG KÊ  -->
           <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
              <i class="mdi mdi-chart-line" style="padding-right: 15px;"></i>              
              <div data-i18n="Layouts">Thống kê</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="index.php?act=thongke" class="menu-link">
                  <div data-i18n="Without menu">Danh sách thống kê </div>
                </a>
              </li>
              <li class="menu-item">
                <a href="index.php?act=bieudo" class="menu-link">
                  <div data-i18n="Without menu">Biểu đồ </div>
                </a>
              </li>
              
             
            </ul>
          </li>

        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="">
              <i class="mdi mdi-menu mdi-24px"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <marquee style="color: brown;" >Chào mừng bạn đến với trang quản trị của Thời trang HL chúc bạn ngày mới vui vẻ!</marquee>

            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
             
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/ling.jpg" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                  <li>
                    <a class="dropdown-item pb-2 mb-1" href="">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-2 pe-1">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/ling.jpg" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-0">LÊ THỊ THÙY LINH</h6>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider my-1"></div>
                  </li>
                  <!-- <li>
                    <a class="dropdown-item" href="">
                      <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                      <span class="align-middle">Tài khoản</span>
                    </a>
                  </li> -->
                  <li>
                    <a class="dropdown-item" href="../index.php?act=shop">
                    <i class="mdi mdi-earth"></i>
                     <span class="align-middle">Vào trang web</span>
                    </a>
                  </li>
                 
                  
                  <li>
                    <a class="dropdown-item" href="?act=thoat">
                      <i class="mdi mdi-power me-1 mdi-20px"></i>
                      <span class="align-middle">Đăng xuất</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>