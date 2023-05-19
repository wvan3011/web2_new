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
                <div class="container-fluid flex-grow-1 container-p-y">
                    <div class="modal fade show" id="xacnhan" tabindex="-1" style="display: none;" aria-modal="true"
                         role="dialog">
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header">Số phiếu nhập: 1</h5>
                        <div class="card-body">
                            <div class="row gx-3 gy-2 align-items-center">
                                <div class="col-md-3">
                                    <label class="form-label" for="selectTypeOpt">Nhà cung cấp</label>
                                    <select id="supplierSelect" class="form-select color-dropdown">
                                        <?php
                                            include '../classes/supplier.php';
                                            $supplier = new supplier();

                                            $get_supplier = $supplier->get_supplier();
                                            while ($result = $get_supplier->fetch_assoc()) {
                                        ?>
                                                <option value="<?php echo $result['id'] ?>"><?php echo $result['id'].' - '.$result['name'] ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="showToastPlacement">&nbsp;</label>
                                    <button id="btn-add-product" class="btn btn-primary d-block">Thêm sản phẩm</button>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.getElementById("btn-add-product").onclick=function () {
                                $("#modal-from-add-product").css("display","block");
                            }
                        </script>

                        <script>
                            function showRecord() {
                                // var modal = document.getElementsByClassName('modal-body')[0];
                                var categoryObj = document.getElementById('categorySelect');
                                var phoneObj = document.getElementById('phoneSelect');
                                var variantObj = document.getElementById('variantSelect');
                                var priceObj = document.getElementById('priceInput');
                                var quantityObj = document.getElementById('quantityInput');
                                
                                
                                var tr = document.createElement('tr');

                                var td = document.createElement('td');
                                td.setAttribute('value', categoryObj.value);
                                td.innerHTML = categoryObj.options[categoryObj.selectedIndex].text;
                                tr.appendChild(td)

                                var td = document.createElement('td');
                                td.setAttribute('value', phoneObj.value);
                                td.innerHTML = phoneObj.options[phoneObj.selectedIndex].text;
                                tr.appendChild(td)

                                var td = document.createElement('td');
                                td.setAttribute('value', variantObj.value);
                                td.innerHTML = variantObj.options[variantObj.selectedIndex].text;
                                tr.appendChild(td)

                                var td = document.createElement('td');
                                td.setAttribute('value', priceObj.value);
                                td.innerHTML = parseFloat(priceObj.value).toLocaleString('it-IT', {style : 'currency', currency : 'VND'});
                                tr.appendChild(td)

                                var td = document.createElement('td');
                                td.setAttribute('value', quantityObj.value);
                                td.innerHTML = quantityObj.value;
                                tr.appendChild(td)

                                var receiptTableObj = document.getElementById('receiptTable').getElementsByTagName('tbody')[0];
                                receiptTableObj.appendChild(tr);

                                $("#modal-from-add-product").css("display","none");
                            }
                        </script>
                        <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table id="receiptTable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th value="category">Thương hiệu</th>
                                        <th value="phone">Điện thoại</th>
                                        <th value="variant">Loại</th>
                                        <th value="price">Giá</th>
                                        <th value="quantity">Số lượng</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <button id="btn-save" type="button" style="margin:30px;" class="btn btn-info" onclick="save()">Lưu</button>
                            </div>
                        </div>
                        <script>
                            function save() {
                                receiptObj = {};
                                var supplierVal = document.getElementById('supplierSelect').value;
                                receiptObj.supplier = supplierVal;

                                var table = document.getElementById("receiptTable");
                                var header = [];
                                var rows = [];
                                var total = 0;

                                for (var i = 0; i < table.rows[0].cells.length; i++) {
                                    header.push(table.rows[0].cells[i].getAttribute('value'));
                                }
                            
                                for (var i = 1; i < table.rows.length; i++) {
                                    var row = {};
                                    var subtotal = 0;
                                    for (var j = 2; j < table.rows[i].cells.length; j++) {
                                        row[header[j]] = table.rows[i].cells[j].getAttribute('value');
                                    }
                                    rows.push(row);

                                    subtotal = row['price'] * row['quantity'];
                                    total += subtotal;
                                }

                                receiptObj.total = total;
                                receiptObj.employee = 'wvan3011@gmail.com';
                            
                                receiptObj.details = rows;

                                $.ajax({
                                    type: 'POST',
                                    url: '../api/postreceipt.php',
                                    data: {data: JSON.stringify(receiptObj)},
                                    success: function(res) {
                                        alert(res);
                                        location.reload(); 
                                    }
                                });
                            }
                        </script>
                    </div>
                    <div class="modal fade show" id="modal-from-add-product" tabindex="-1" style="display: none; padding-left: 0px;" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Thêm điện thoại nhập</h5>
                                    <button id="btn-x-modal-from-add-product" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="defaultSelect" class="form-label">Thương hiệu</label>
                                            <select id="categorySelect" class="form-select" onchange="showPhone(this.value)">
                                                <option value="">Vui lòng chọn thương hiệu</option>
                                                <?php
                                                    include '../classes/category.php';
                                                    $category = new category();

                                                    $get_category = $category->get_category();
                                                    while ($result = $get_category->fetch_assoc()) {
                                                ?>
                                                        <option value="<?php echo $result['id'] ?>"><?php echo $result['name'] ?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <script>
                                        function showPhone(catId) {
                                            if (catId) {
                                                $("#phone").css("visibility","visible");
                                                $("#phone").css("opacity","1");

                                                var select = document.getElementById('phoneSelect');
                                                $("#phoneSelect").empty();
                                                var opt = document.createElement('option');
                                                opt.value = '';
                                                opt.innerHTML = 'Vui lòng chọn điện thoại';
                                                select.appendChild(opt);

                                                var xmlhttp = new XMLHttpRequest();
                                                xmlhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        if (this.responseText == '') {
                                                            return;
                                                        }
                                                        const phoneList = JSON.parse(this.responseText);
                                                        for (const phone of phoneList) {
                                                            var opt = document.createElement('option');
                                                            opt.value = phone.id;
                                                            opt.innerHTML = phone.name;
                                                            select.appendChild(opt);
                                                        }
                                                    }
                                                };
                                                xmlhttp.open("GET","../api/getphone.php?by_catid="+catId,true);
                                                xmlhttp.send();
                                                
                                            } else {
                                                $("#phone").css("visibility","hidden");
                                                $("#phone").css("opacity","0");
                                            }
                                        }
                                    </script>
                                    <div class="row" id="phone" style="visibility: hidden; opacity: 0; transition: visibility 0s, opacity 0.5s linear;">
                                        <div class="mb-3">
                                            <label for="defaultSelect" class="form-label">Điện thoại</label>
                                            <select id="phoneSelect" class="form-select" onchange="showVariant(this.value)">
                                                <option value="">Vui lòng chọn điện thoại</option>
                                            </select>
                                        </div>
                                    </div>

                                    <script>
                                        function showVariant(phoneId) {
                                            if (phoneId) {
                                                $("#variant").css("visibility","visible");
                                                $("#variant").css("opacity","1");

                                                var select = document.getElementById('variantSelect');
                                                $("#variantSelect").empty();
                                                var opt = document.createElement('option');
                                                opt.value = '';
                                                opt.innerHTML = 'Vui lòng chọn biến thể';
                                                select.appendChild(opt);

                                                var xmlhttp = new XMLHttpRequest();
                                                xmlhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        if (this.responseText == '') {
                                                            return;
                                                        }
                                                        const variantList = JSON.parse(this.responseText);
                                                        for (const variant of variantList) {
                                                            var opt = document.createElement('option');
                                                            opt.value = variant.id;
                                                            opt.innerHTML = variant.size + ' - Màu ' + variant.color;
                                                            select.appendChild(opt);
                                                        }
                                                    }
                                                };
                                                xmlhttp.open("GET","../api/getvariant.php?by_phoneid="+phoneId,true);
                                                xmlhttp.send();
                                                
                                            } else {
                                                $("#variant").css("visibility","hidden");
                                                $("#variant").css("opacity","0");
                                            }
                                        }
                                    </script>

                                    <div class="row" id="variant" style="visibility: hidden; opacity: 0; transition: visibility 0s, opacity 0.5s linear;">
                                        <div class="mb-3">
                                            <label for="defaultSelect" class="form-label">Biến thể</label>
                                            <select id="variantSelect" class="form-select">
                                                <option>Vui lòng chọn biến thể</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Giá nhập</label>
                                            <input type="number" id="priceInput" class="form-control" placeholder="Nhập giá nhập">
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobWithTitle" class="form-label">Số lượng</label>
                                            <input type="number" id="quantityInput" class="form-control" placeholder="Nhập số lượng">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="btn-close-modal-from-add-product" type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Đóng
                                    </button>
                                    <button disabled type="button" class="btn btn-primary" id="add" onclick="showRecord()">Thêm vào đơn nhập</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById("btn-close-modal-from-add-product").onclick=function () {
                            $("#modal-from-add-product").css("display","none");
                        }
                        document.getElementById("btn-x-modal-from-add-product").onclick=function () {
                            $("#modal-from-add-product").css("display","none");
                        }

                        var categoryObj = document.getElementById('categorySelect');
                        var phoneObj = document.getElementById('phoneSelect');
                        var variantObj = document.getElementById('variantSelect');
                        var priceObj = document.getElementById('priceInput');
                        var quantityObj = document.getElementById('quantityInput');

                        addbtn = document.getElementById("add");

                        function changeButton() {
                            if (categoryObj.value && phoneObj.value && variantObj.value && priceObj.value && quantityObj.value) {
                                addbtn.disabled = false;
                            } else {
                                addbtn.disabled = true;
                            } 
                        }
                        
                        categoryObj.oninput=function () {changeButton()};
                        phoneObj.oninput=function () {changeButton()};
                        variantObj.oninput=function () {changeButton()};
                        priceObj.oninput=function () {changeButton()};
                        quantityObj.oninput=function () {changeButton()};
                    </script>
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
                                <a href="https://themeselection.com/license/" class="footer-link me-4"
                                   target="_blank">License</a>
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