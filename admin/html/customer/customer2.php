<?php 
    if(!isset($_GET['id'])) {
        header('Location: customer.php');
    }
  include('../../SQL/connection.php');
  $id = $_GET['id'];
    if(isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        if($sort == 'desc') {
            $sql_lietke_order_detail = "SELECT * FROM orderdetail WHERE orderID = '$id' ORDER BY price DESC";
        } else if($sort == 'asc') {
            $sql_lietke_order_detail = "SELECT * FROM orderdetail WHERE orderID = '$id' ORDER BY price ASC";
        }
    } else {
    $sql_lietke_order_detail = "SELECT * FROM orderdetail WHERE orderID = '$id'";
  }
  $query_lietke_order_detail = mysqli_query($con ,$sql_lietke_order_detail);
?>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Fluid - Layouts | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <?php require("../template/header.php");?>
    <style>
        .text-purple {
            color: #696CFF;
        }
        .select-wrapper {
            margin-bottom: 20px;
        }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php require_once("../template/sidebar.php") ?>

        <!-- Layout container -->
        <div class="layout-page">
         
          <!-- Navbar -->

          <!-- <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div> -->

            <!-- <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse"> -->
              <!-- Search -->
              <!-- <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div> -->
              <!-- /Search -->

              <!-- Place this tag where you want the button to render. -->
              <!-- <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li> -->

                <!-- User -->
                <!-- <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li> -->
                <!--/ User -->
              <!-- </ul> -->
            <!-- </div> -->
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">
                <main role="main">
                    <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
                    <div class="container mt-4">
                        <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <h1 class="text-center text-purple">
                            <?php 
                                $sql_name_customer = "SELECT customer.name FROM `order` , customer WHERE `order`.customerID = customer.id";
                                $query_name_customer = mysqli_query($con , $sql_name_customer);
                                $row_customer = mysqli_fetch_array($query_name_customer);

                                echo 'Sản phẩm đã mua của '.$row_customer['name'];
                            ?>
                        </h1>
                        <div class="select-wrapper">
                            <span>Sắp xếp : </span>
                            <select class="select-sort" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                <option value="" selected>Sắp xếp giá</option>
                                <option value="?id=<?php echo $id?>&sort=desc">Giá giảm dấn</option>
                                <option value="?id=<?php echo $id?>&sort=asc">Giá tăng dần</option>
                            </select>
                            <!-- <span> or </span>
                            <input type="date" class="input-sort"/> -->
                        </div>
                        <div class="row">
                            <div class="col col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="datarow">
                                      <?php
                                      while ($row = mysqli_fetch_array($query_lietke_order_detail)) {
                                      ?>
                                        <tr>
                                            <td><?php echo $row['orderID'] ?></td>
                                            <td class="text-right"><?php
                                                $variantID = intval($row['variantID']);
                                                $sql_name_phone = "SELECT phone.name FROM variant, phone WHERE variant.id = $variantID and phone.id = variant.phoneID";
                                                $query_name_phone = mysqli_query($con , $sql_name_phone);
                                                $row_phone = mysqli_fetch_array($query_name_phone);

                                                echo $row_phone['name'];
                                            ?></td>
                                            <td class="text-right"><?php echo $row['quantity'] ?></td>
                                            <td class="text-right"><?php echo $row['price'] ?></td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <!-- <a href="../index.html" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"
                                        aria-hidden="true"></i>&nbsp;Quay
                                    về trang chủ</a>
                                <a href="checkout.html" class="btn btn-primary btn-md"><i
                                        class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Thanh toán</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- End block content -->
                </main>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="" target="_blank" class="footer-link fw-bolder">Tan Dat</a>
                </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <?php require("../template/tail.php");?>
  </body>
</html>
