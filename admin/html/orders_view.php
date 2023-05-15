<!DOCTYPE html>
<html lang="en"
      class="light-style layout-menu-fixed"
      dir="ltr"
      data-theme="theme-default"
      data-assets-path="../assets/"
      data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Fluid - Layouts | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    <meta name="description" content=""/>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css"/>
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="../assets/css/demo.css"/>
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/>
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
</head>
<style>
    /* CSS cho modal */
    .modal {
        display: none;
    / /* Hiển thị modal trên cùng màn hình */
    z-index: 1; /* Đặt modal lên trên các thành phần khác */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4); /* Đặt màu nền cho modal */
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        display: flex;
        justify-content: right;
        font-size: 28px;
        font-weight: bold;
    }

    /* Khi hover vào nút đóng, thay đổi màu sắc */
    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

</style>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <?php require_once("template/sidebar.php") ?>
        <div class="layout-page">
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
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../assets/img/avatars/cowboy.png" alt
                                         class="w-px-40 h-auto rounded-circle"/>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="../assets/img/avatars/cowboy.png" alt
                                                         class="w-px-40 h-auto rounded-circle"/>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block"><?php ?></span>
                                                <small class="text-muted">
                                                    <?php echo $_SESSION["user"]["name"]; ?>
                                                </small>
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
                                    <a class="dropdown-item" href="logout.php">
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
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-fluid flex-grow-1 container-p-y">
                    <div class="modal fade show" id="xacnhan" tabindex="-1" style="display: none;" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalScrollableTitle">Cập nhật</h5>
                                    <button id="x_xacnhan" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p id="message-xacnhan">
                                    </p>
                                    <input id="updateStatusOrdersID" type="text" hidden="true">
                                    <input id="updateStatusStatus" type="text" hidden="true">
                                    <input id="updateStatusStatusOld" type="text" hidden="true">
                                    <input id="updateStatusStatusOldView" type="text" hidden="true">
                                </div>
                                <div class="modal-footer">
                                    <button id="close_xacnhan" type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Hủy
                                    </button>
                                    <button id="ok_xacnhan" type="button" class="btn btn-primary">Xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        let xacnhan=0;
                        document.getElementById("close_xacnhan").onclick = function () {
                            $("#"+$("#updateStatusStatusOldView").val()).val($("#updateStatusStatusOld").val());
                            $("#xacnhan").css("display", "none");
                        };
                        document.getElementById("x_xacnhan").onclick = function () {
                            $("#"+$("#updateStatusStatusOldView").val()).val($("#updateStatusStatusOld").val());
                            $("#xacnhan").css("display", "none");
                        };
                        document.getElementById("ok_xacnhan").onclick = function () {
                            $.ajax({
                                url: "./order-update",
                                type: "Post",
                                dataType: "text",
                                async: true,
                                data: {id: $("#updateStatusOrdersID").val(),status:$("#updateStatusStatus").val()},
                            success: function (data) {
                            console.log(data);
                        },
                        });
                            $("#xacnhan").css("display", "none");
                        };


                    </script>
                    <div class="card">
                        <div class="container" style="min-height: 400px;">
                            <div class="filter-container"
                                 style="margin:10px auto;height: auto;background: inherit;display: flex;justify-content: space-between;align-items: center;">
                                <label for="status-filter" >Trạng thái:</label>
                                <select id="status-filter" name="status-filter" class="form-select" style="width: 200px;">
                                    <?php
                                    $ls = array("Tất cả", "Chưa thanh toán", "Đã thanh toán", "Đang vận chuyển", "Chưa vận chuyển", "Đã nhận hàng");
                                    $options = '';
                                    for ($i = 0; $i < count($ls); $i++) {
                                        if ($fillStatus == $i) {
                                            $options = $options . '<option value="' . $i . '" selected>' . $ls[$i] . '</option>';
                                        } else {
                                            $options = $options . '<option value="' . $i . '">' . $ls[$i] . '</option>';
                                        }
                                    }
                                    echo $options;
                                    ?>
                                </select>
                                <input class="form-select" style="width: 150px;" type="date" id="date-from" name="date-from" value="<?php echo $fromDay; ?>">
                                <label for="date-to"> Đến </label>
                                <input class="form-select" style="width: 150px;" type="date" id="date-to" name="date-to" value="<?php echo $toDay; ?>">
                                <input placeholder="Nhập địa chỉ nhận hàng" class="form-control" style="width: 200px" type="text" id="location-filter" name="location-filter"
                                       value="<?php echo $address; ?>">
                                <button class="btn btn-primary" id="filter-button">Lọc</button>
                            </div>
                            <script>
                                let statusFilter = document.getElementById("status-filter");
                                let dateFromInput = document.getElementById('date-from');
                                let dateToInput = document.getElementById('date-to');
                                statusFilter.onchange = function () {
                                    window.location.href = "http://localhost/PhpstormProjects/web2/admin/html/orders?page=1&status=" + statusFilter.value + "&from=" + dateFromInput.value + "&to=" + dateToInput.value;
                                }
                                dateFromInput.addEventListener('change', (event) => {
                                    window.location.href = "http://localhost/PhpstormProjects/web2/admin/html/orders?page=1&status=" + statusFilter.value + "&from=" + dateFromInput.value + "&to=" + dateToInput.value;
                                });
                                dateToInput.addEventListener('change', (event) => {
                                    window.location.href = "http://localhost/PhpstormProjects/web2/admin/html/orders?page=1&status=" + statusFilter.value + "&from=" + dateFromInput.value + "&to=" + dateToInput.value;
                                });
                                let inputText = document.getElementById("location-filter");
                                document.getElementById("filter-button").onclick = function () {
                                    window.location.href = "http://localhost/PhpstormProjects/web2/admin/html/orders?page=1&status=" + statusFilter.value + "&from=" + dateFromInput.value + "&to=" + dateToInput.value + "&address=" + inputText.value;
                                }
                                inputText.addEventListener('keyup', (event) => {
                                    if (event.key === 'Enter') {
                                        window.location.href = "http://localhost/PhpstormProjects/web2/admin/html/orders?page=1&status=" + statusFilter.value + "&from=" + dateFromInput.value + "&to=" + dateToInput.value + "&address=" + inputText.value;
                                    }
                                });

                            </script>

                            <!--Danh sách đơn hàng-->
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Employee management</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($orders as $order) {
                                    $ls = array("Chưa thanh toán", "Đã thanh toán", "Đang vận chuyển", "Chưa vận chuyển", "Đã nhận hàng");
                                    $status = '<select id="order-status-' . $order["id"] . '" name="status' . $order["id"] . '" class="form-select form-select-sm">';
                                    for ($i = 0; $i < count($ls); $i++) {
                                        if ($order["orderStatus"] == $i) {
                                            $status = $status . '<option value="' . $i . '" selected>' . $ls[$i] . '</option>';
                                        } else {
                                            $status = $status . '<option value="' . $i . '">' . $ls[$i] . '</option>';
                                        }
                                    }
                                    $status = $status . "</select>";
                                    echo
                                        '<tr>
                                    <th scope="row">' . $order["id"] . '</th>
                                    <td>' . $order["employeeEmail"] . '</td>
                                    <td>' . $order["date"] . '</td>
                                    <td>' . $order["totalPayment"] . '</td>
                                    <td>' . $order["address"] . '</td>
                                    <td>' . $status . '</td>
                                    <td>
                                        <button id="order-detail-' . $order["id"] . '" class="btn-sm btn-outline-primary">Chi tiết</button>
                                    </td>
                                </tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="modal fade show" id="myModal" tabindex="-1" style="display: none; padding-left: 0px;" aria-modal="true" role="dialog">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel4">Chi tiết hóa đơn</h5>
                                            <button id="modal-close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">Color</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="table-details">
                                                    </tbody><!-- Thêm các trường của bảng chi tiết hóa đơn vào đây -->
                                                </table>
                                            </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById("modal-close").onclick = function () {
                                    $("#myModal").css("display", "none");
                                };
                            </script>
                            <?php
                            foreach ($orders as $order) {
                                echo '
                                <script>
                                document.getElementById("order-detail-' . $order["id"] . '").onclick=function (){
                                     $.ajax({
                                            url: "./order-details",
                                            type: "GET",
                                            dataType: "json",
                                            async: true,
                                            data: {id:' . $order["id"] . '},
                                            success: function (data) {
                                               let innerHTML=``;
                                               for(let i=0;i<data.length;i++){
                                                   innerHTML+=`<tr>
                                               <th scope="row">${i+1}</th>
                                                <td>${data[i].phone}</td>
                                                <td>${data[i].color}</td>
                                                <td>${data[i].price}</td>
                                                <td>${data[i].quantity}</td>
                                                <td>${data[i].total_price}</td>
                                            </tr>`;
                                               }
                                               document.getElementById("table-details").innerHTML=innerHTML;
                                               $("#myModal").css("display", "block");
                                            },
                                     }); 
                                }
                                </script>
                                ';
                                echo '<script>
                               
                               document.getElementById("order-status-' . $order["id"] . '").onchange=function(){ 
                                    $("#message-xacnhan").text("Order ' . $order["id"] . ' trạng thái "+$(this).find("option:selected").text());
                                    $("#xacnhan").css("display", "block");
                                    $("#updateStatusOrdersID").val("' . $order["id"] . '");
                                    $("#updateStatusStatus").val(this.value);
                                    $("#updateStatusStatusOld").val("' . $order["orderStatus"] . '");
                                    $("#updateStatusStatusOldView").val("order-status-' . $order["id"] . '");
                                };
                            </script>
                            ';
                            } ?>
                        </div>
                    </div>
                </div>

                <?php
                $first=($page > 1) ? '<li class="page-item first">
                              <a class="page-link" href="?page=1&status='.$fillStatus.'&from='.$fromDay.'&to='.$toDay.'&address='.$address.'"><i class="tf-icon bx bx-chevrons-left"></i></a>
                            </li>':"";
                $prevLink = ($page > 1) ? '<li class="page-item prev">
                              <a class="page-link" href="?page='.($page - 1) .'&status='.$fillStatus.'&from='.$fromDay.'&to='.$toDay.'&address='.$address.'"><i class="tf-icon bx bx-chevron-left"></i></a>
                            </li>' : '';
                $nextLink = ($page < $totalPages) ? '<li class="page-item next">
                              <a class="page-link"  href="?page='.($page + 1) .'&status='.$fillStatus.'&from='.$fromDay.'&to='.$toDay.'&address='.$address.'"><i class="tf-icon bx bx-chevron-right"></i></a>
                            </li>' : '';
                $last=($page < $totalPages) ?'<li class="page-item last" >
                              <a class="page-link" href="?page='.$totalPages.'&status='.$fillStatus.'&from='.$fromDay.'&to='.$toDay.'&address='.$address.'""><i class="tf-icon bx bx-chevrons-right"></i></a>
                            </li>':'';
                echo '<ul class="pagination " style="margin-top:10px;border-radius:8px;padding: 4px 0px;background: #dae7f5; display: flex;justify-content: center; align-items: center; flex-wrap: wrap">' .$first. $prevLink;
                for ($i = 1; $i <= $totalPages; $i++) {
                    $activeClass = ($i == $page) ? ' active' : '';
                    echo '<li class="page-item ' . $activeClass . '"><a class="page-link" href="?page='.$i.'&status='.$fillStatus.'&from='.$fromDay.'&to='.$toDay.'&address='.$address.'">' . $i . '</a></li>';
                }
                echo $nextLink .$last. '</ul>';


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
                            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                Themes</a>
                            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                               target="_blank"
                               class="footer-link me-4">Documentation</a>
                            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                               target="_blank"
                               class="footer-link me-4">Support</a>
                        </div>
                    </div>
                </footer>
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../assets/vendor/js/menu.js"></script>
<script src="../assets/js/main.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>