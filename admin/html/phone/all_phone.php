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
  data-assets-path="../../assets/"
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
    
    <?php require_once("../template/header.php") ?>
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

          <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a href="form_add_phone.php">
                    <button class="btn btn-primary">Add new product</button>
                  </a>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../assets/img/avatars/cowboy.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/cowboy.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Username (Email)</span>
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
                    <!-- <li>
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
                    </li> -->
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">
              <!-- Layout Demo -->
               <!-- Basic Bootstrap Table -->
               <div class="card">
                <div class="row">
                  <div class="col-sm">
                    <h5 class="card-header">All products</h5>
                  </div>
                  <div class="col-sm text-end">
                    <div class="dropdown card-header">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                        Brand
                      </button>
                      <?php 
                      require("../../SQL/sql_admin.php"); 
                      
                      $result = mysqli_query($con,get_category_id_name());?>
                      
                      


                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="all_phone.php">All</a></li>
                      <?php 
                        while($row = mysqli_fetch_array($result)){
                      ?>
                        <li><a class="dropdown-item" href="all_phone.php?category=<?=$row["id"]?>"><?=$row["name"]?></a></li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                  

                </div>
                
                <div class="table">
                  <table class="table table-hover">
                    <thead>
                      <tr >
                        <th>Image</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
                    $limit = 5; // Số bản ghi hiển thị trên mỗi trang
                    $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Lấy số trang đang được hiển thị
                    $offset = ($page - 1) * $limit;
                    $result = "";
                    $countSql = "";
                    if(isset($_GET["category"])){
                      $result = mysqli_query($con,get_item_by_category($limit,$offset,$_GET["category"]));
                      $countSql = count_item($_GET["category"]);
                    }else{
                      $result = mysqli_query($con,get_all_item($limit,$offset));
                      $countSql = count_item("0");
                      }

                    $countResult = mysqli_query($con, $countSql);
                    $dataCount = mysqli_fetch_assoc($countResult);
                    $totalPages = ceil($dataCount['total'] / $limit);
                    while($row = mysqli_fetch_array($result)){
                        
                      ?>
                      <tr>
                        <td class="col-1">
                          <?php 
                          if($row["visible"] == 1){
                            echo "<img src='../../../phone_image/".$row['image']."' style='width: 150%'>";
                          }
                          else {
                            echo "<div class='card' id='allphone'>
                                    <img src='../../../phone_image/".$row["image"]."' class='card-img-top' style='width: 150%; opacity: 0.3'>
                                    <div class='card-img-overlay'>
                                      <img class='card-img' src='../../assets/img/elements/visible.png' style='width: 25px'></img>
                                      
                                    </div>
                                  </div>";
                          }

                          ?>
                      
                          
                      </td>
                        <td class="col-3 ps-4"><strong><?= $row['name'] ?></strong></td>
                        <td class="col-3">
                          <?=$row['cac_mau'] ?>
                          <!-- <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li> -->
                          </ul>
                        </td>
                        <td class="col-4">
                          <!-- <span class="badge bg-label-primary me-1">Active</span> -->
                          <?= $row['size'] ?>
                        </td>
                        <td class="col-1 text-center">
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item text-dark" href="../../php/phone/visible.php?phoneID=<?=$row["phoneID"]?>&visible=<?=$row["visible"]?>" >
                              
                              <i class='bx bx-low-vision me-1'></i> Visible</a
                              >
                              
                              
                              <a class="dropdown-item text-primary" href="form_edit_phone.php?phoneID=<?= $row["phoneID"] ?>"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item text-danger" href="#" onclick="deletePhone(<?= $row['phoneID'] ?>)"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                        
                      </tr>
                      
                      <?php } 
                      
                      if(isset($_GET['message'])){
                        if($_GET['message'] == "Delete success!"){
                          echo '<div id="alert" class="alert alert-primary"><i class="bx bxs-like">   '.urldecode($_GET['message']).'</i></div>';
                        }else if($_GET['message'] == "Can't delete product!"){
                          echo '<div id="alert" class="alert alert-danger"><i class="bx bx-error-alt">   '.urldecode($_GET['message']).'</i></div>';
                        }else if($_GET['message'] == "Add new product success!"){
                          echo '<div id="alert" class="alert alert-primary"><i class="bx bx-check-double">   '.urldecode($_GET['message']).'</i></div>';
                        }
                        else if($_GET['message'] == "Edit product success!"){
                          echo '<div id="alert" class="alert alert-primary"><i class="bx bx-check-circle">   '.urldecode($_GET['message']).'</i></div>';
                        }
                      }
                      
                        mysqli_close($con);
                    


                        ?>
                    </tbody>
                    
                  </table>
                        <!--  -->
                        


                </div>
          
                
              </div>
              <!--/ Basic Bootstrap Table -->
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->
            <?php 
                      $prevLink = ($page > 1) ? '<li class="page-item"><a class="page-link" href="?page='.($page - 1).'">Prev</a></li>' : '';
                      $nextLink = ($page < $totalPages) ? '<li class="page-item"><a class="page-link" href="?page='.($page + 1).'">Next</a>' : '';
                      
                      echo '<ul class="pagination justify-content-center">' . $prevLink;
                      for($i = 1; $i <= $totalPages; $i++) {
                          $activeClass = ($i == $page) ? ' active' : '';
                          echo '<li class="page-item '. $activeClass .'"><a class="page-link" href="?page=' . $i . '">' . $i .'</a></li>';
                      }
                      echo $nextLink . '</ul>';
                      
                        
                  ?>
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
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
    
    <!-- Page JS -->
    <?php require_once("../template/tail.php") ?>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


  
    </body>
</html>
