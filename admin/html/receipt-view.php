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
    <title>Thống kê kho theo ngày</title>
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
                <div class="container-fluid flex-grow-1 container-p-y">
                    <div class="card">
                        <div class="container" style="min-height: 400px;">
                            <div class="filter-container"
                                 style="margin:10px auto;height: auto;background: inherit;display: flex;justify-content: space-between;align-items: center;">
                                <label for="brand-filter">Thương hiệu:</label>
                                <select id="categorySelect" name="brand-filter" class="form-select" style="width: auto;" onchange="showPhone(this.value)">
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
                                <script>
                                    function showPhone(catId) {
                                        if (catId) {                                           
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
                                            
                                        }
                                    }
                                </script>
                                <label for="phoneSelect">Điện thoại</label>
                                <select id="phoneSelect" name="phoneSelect" class="form-select" style="width: auto;">
                                    <option value="">Vui lòng chọn điện thoại</option>
                                </select>
                                <label for="date-to"> Ngày </label>
                                <input class="form-select" style="width: 150px;" type="date" id="dateInput" name="date-to"
                                       >
                                <div style="width: 300px"></div>
                            </div>
                            <script>
                                var categoryObj = document.getElementById('categorySelect');
                                var phoneObj = document.getElementById('phoneSelect');
                                var dateObj = document.getElementById('dateInput');

                                function showContent() {
                                    if (categoryObj.value && phoneObj.value && dateObj.value) {
                                        currentdate = dateObj.valueAsDate;
                                        yesterdate = dateObj.valueAsDate;
                                        yesterdate.setDate(yesterdate.getDate() - 1);

                                        yesterdate_str = yesterdate.toISOString().split('T')[0];

                                        var startH1 = document.getElementById('startH1');
                                        var endH1 = document.getElementById('endH1');
                                        startH1.innerHTML = 'Vào thời điểm (' + currentdate.toLocaleDateString("vi-VN") + ' 00:00)';
                                        endH1.innerHTML = 'Vào thời điểm (' + currentdate.toLocaleDateString("vi-VN") + ' 23:59)';

                                        phoneName = phoneObj.options[phoneObj.selectedIndex].text;


                                        var xmlhttp = new XMLHttpRequest();
                                        xmlhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                if (this.responseText == '') {
                                                    return;
                                                }

                                                total = 0;
                                                var startTableObj = document.getElementById('startTable').getElementsByTagName('tbody')[0];
                                                startTableObj.innerHTML = '';

                                                const variantList = JSON.parse(this.responseText);
                                                for (const variant of variantList) {
                                                    var tr = document.createElement('tr');

                                                    var td = document.createElement('td');
                                                    td.innerHTML = phoneName;
                                                    tr.appendChild(td);

                                                    var td = document.createElement('td');
                                                    td.innerHTML = variant['size'];
                                                    tr.appendChild(td);

                                                    var td = document.createElement('td');
                                                    td.innerHTML = variant['color'];
                                                    tr.appendChild(td);

                                                    var td = document.createElement('td');
                                                    td.innerHTML = variant['quantity'];
                                                    tr.appendChild(td);

                                                    total += parseInt(variant['quantity']);

                                                    startTableObj.appendChild(tr);
                                                }
                                                var tr = document.createElement('tr');
                                                tr.setAttribute('style', 'background: #F0F4F8');

                                                var td = document.createElement('td');
                                                td.setAttribute('colspan', '3');
                                                td.setAttribute('style', 'text-align: center');
                                                td.innerHTML = 'Tất cả ' + phoneName;
                                                tr.appendChild(td);

                                                var td = document.createElement('td');
                                                td.innerHTML = total;
                                                tr.appendChild(td);

                                                startTableObj.appendChild(tr);

                                                var xmlhttp2 = new XMLHttpRequest();
                                                xmlhttp2.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        if (this.responseText == '') {
                                                            return;
                                                        }
                                                    
                                                        total = 0;
                                                        var endTableObj = document.getElementById('endTable').getElementsByTagName('tbody')[0];
                                                        endTableObj.innerHTML = '';

                                                        const variantList = JSON.parse(this.responseText);
                                                        for (const variant of variantList) {
                                                            var tr = document.createElement('tr');
                                                        
                                                            var td = document.createElement('td');
                                                            td.innerHTML = phoneName;
                                                            tr.appendChild(td);
                                                        
                                                            var td = document.createElement('td');
                                                            td.innerHTML = variant['size'];
                                                            tr.appendChild(td);
                                                        
                                                            var td = document.createElement('td');
                                                            td.innerHTML = variant['color'];
                                                            tr.appendChild(td);
                                                        
                                                            var td = document.createElement('td');
                                                            td.innerHTML = variant['quantity'];
                                                            tr.appendChild(td);
                                                        
                                                            total += parseInt(variant['quantity']);
                                                        
                                                            endTableObj.appendChild(tr);
                                                        }
                                                        var tr = document.createElement('tr');
                                                        tr.setAttribute('style', 'background: #F0F4F8');
                                                    
                                                        var td = document.createElement('td');
                                                        td.setAttribute('colspan', '3');
                                                        td.setAttribute('style', 'text-align: center');
                                                        td.innerHTML = 'Tất cả ' + phoneName;
                                                        tr.appendChild(td);
                                                    
                                                        var td = document.createElement('td');
                                                        td.innerHTML = total;
                                                        tr.appendChild(td);
                                                    
                                                        endTableObj.appendChild(tr);
                                                    
                                                        $("#content").css("visibility","visible");
                                                        $("#content").css("opacity","1");
                                                    }
                                                };
                                                xmlhttp2.open("GET","../api/getinventory.php?by_phoneid=" + phoneObj.value + "&date=" + dateObj.value,true);
                                                xmlhttp2.send();
                                                    }
                                                };
                                                xmlhttp.open("GET","../api/getinventory.php?by_phoneid=" + phoneObj.value + "&date=" + yesterdate_str,true);
                                                xmlhttp.send();
                                    } else {
                                        $("#content").css("visibility","hidden");
                                        $("#content").css("opacity","0");
                                    } 
                                }

                                categoryObj.oninput=function () {showContent()};
                                phoneObj.oninput=function () {showContent()};
                                dateObj.oninput=function () {showContent()};
                            </script>
                            <div id="content" style="visibility: hidden; opacity: 0; transition: visibility 0s, opacity 0.5s linear;">
                                <h1 id="startH1" style="text-align: center">Vào thời điểm (18/5/2023 00:00)</h1>
                                <!--Danh sách đơn hàng-->
                                <table id="startTable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Điện thoại</th>
                                        <th scope="col">Thông số</th>
                                        <th scope="col">Màu</th>
                                        <th scope="col">Tồn kho</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody><!-- Thêm các trường của bảng chi tiết hóa đơn vào đây -->
                                </table>
                                <br>
                                <h1 id="endH1" style="text-align: center">Vào thời điểm (18/5/2023 23:59)</h1>

                                <!--Danh sách đơn hàng-->
                                <table id="endTable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Điện thoại</th>
                                        <th scope="col">Thông số</th>
                                        <th scope="col">Màu</th>
                                        <th scope="col">Tồn kho</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Samsung Galaxy S23</td>
                                        <td>4GB 128GB</td>
                                        <td>Tím</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Samsung Galaxy S23</td>
                                        <td>4GB 128GB</td>
                                        <td>Xanh Rêu</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Samsung Galaxy S23</td>
                                        <td>4GB 128GB</td>
                                        <td>Đen</td>
                                        <td>2</td>
                                    </tr>


                                    <tr style="background: #F0F4F8">
                                        <td colspan="3" style="text-align: center">Tất cả Samsung Galaxy S23</td>
                                        <td>4</td>
                                    </tr>
                                    </tbody><!-- Thêm các trường của bảng chi tiết hóa đơn vào đây -->
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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