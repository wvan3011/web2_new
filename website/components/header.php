<div class="header">
  <div class="wrapper wrapper-header">
    <div class="header-top">

      <div class="header-top-left">
        <i class="fab fa-facebook header-top-left__item"></i>
        <i class="fab fa-instagram header-top-left__item"></i>
        <i class="fas fa-envelope-square header-top-left__item"></i>
        <i class="fab fa-youtube header-top-left__item"></i>
      </div>
      <div class="header-top-right">
        <a href="" class="header-top-right__item"><i class="fas fa-home"></i>
          <p>Trang chủ</p></a>
        <a href="" class="header-top-right__item"><i class="fas fa-info-circle"></i>
          <p>Giới thiệu</p></a>
        <a href="" class="header-top-right__item"><i class="far fa-question-circle"></i>
          <p>Trợ giúp</p></a>
        <a href="" class="header-top-right__item"><i class="fas fa-shield-alt"></i>
          <p>Điều khoản</p></a>
      </div>
    </div>
    <div class="button-bars">
      <script>
        function actionOnclickBars() {
          let display2 = document.getElementsByClassName("menu-bar")[0];
          let openBars = document.getElementById("icon-open-bars");
          let closeBars = document.getElementById("icon-close-bars");
          if (display2.style.display === "flex") {
            display2.style.display = "none";
            openBars.style.display = "flex";
            closeBars.style.display = "none";
          } else {
            display2.style.display = "flex";
            openBars.style.display = "none";
            closeBars.style.display = "flex";
          }
        }
      </script>
      <i class="fas fa-bars" id="icon-open-bars" onclick="actionOnclickBars()"></i>
      <i class="fas fa-times" style="display:none;" id="icon-close-bars" onclick="actionOnclickBars()"></i>
    </div>
    <div class="header-left">
      <img src="./assets/img/company/MyStore.png" alt="">
    </div>
    <div class="header-center">
      <div class="header-center-top">
        <form action="" class="search-bar">
          <label class="search__input">
            <input type="text" name="inputSearch" placeholder="Tìm kiếm laptop, hãng,...">
          </label>
          <button class="search__button"><i class="fas fa-search"></i></button>
        </form>
        <div class="logo-center">
          <img src="./assets/img/company/MyStore.png" alt="" class="logo">
        </div>
        <div class="header-right-top">
          <div class="button-open-search">
            <i class="fas fa-search"></i>
          </div>
          <div class="header-right__cart">
            <i class="fas fa-cart-plus" title="Giỏ hàng"></i>
          </div>
          <div class="header-right__account">
            <i class="fas fa-user-circle" title="Tài khoản"></i>
          </div>
        </div>
      </div>
      <div class="header-center-bottom">
        <div class="menu-bar">
          <a href="" class="menu-bar__item">Samsung</a>
          <a href="" class="menu-bar__item">Apple</a>
          <a href="" class="menu-bar__item">Oppo</a>
          <a href="" class="menu-bar__item">Nokia</a>
          <a href="" class="menu-bar__item">Xiaomi</a>
        </div>
        <div class="button-filter" onclick="clinkButtonFilter()">
          <script>
            function clinkButtonFilter() {
              let filter = document.getElementById("filter-in-header");
              if (filter.style.display === "none") {
                filter.style.display = "flex";
                document.getElementById("filter-in-header-status").innerText = "Đóng bộ lọc";
              } else {
                filter.style.display = "none";
                document.getElementById("filter-in-header-status").innerText = "Mở bộ lọc";
              }
            }
          </script>
          <i class="fas fa-filter"></i>
          <p id="filter-in-header-status">Mở bộ lọc</p>
        </div>
      </div>

    </div>

    <div id="filter-in-header" style="display:none" class="filter wrapper up-to-5-columns ">
      <div class="column">
        <div class="custom-select" style="width:200px;">
          <select>
            <option value="0">Chọn thương hiệu:</option>
            <option value="1">hp</option>
            <option value="2">Dell</option>
            <option value="3">Lenovo</option>
            <option value="4">Asus</option>
            <option value="5">Aser</option>
          </select>
        </div>
      </div>
      <div class="column">
        <div class="custom-select" style="width:200px;">
          <select>
            <option value="0">Chọn sự kiện ưu đãi:</option>
            <option value="1">Giảm giá</option>
            <option value="2">Trả góp</option>
            <option value="3">Mới ra mắt</option>
            <option value="4">Có quà tặng</option>
          </select>
        </div>
      </div>
      <div class="column">
        <div class="custom-select" style="width:200px;">
          <select>
            <option value="0">Chọn mức giá:</option>
            <option value="1">Giá dưới 10 triệu</option>
            <option value="2">Giá từ 10 đến 20 triệu</option>
            <option value="3">Giá từ 20 đến 30 triệu</option>
            <option value="4">Giá từ 30 đến 40 triệu</option>
            <option value="5">Giá trên 40 triệu</option>
          </select>
        </div>
      </div>
      <div class="column">
        <div class="custom-select" style="width:200px;">
          <select>
            <option value="0">Sắp xếp:</option>
            <option value="1">Giá tăng dần</option>
            <option value="2">Giá giảm dần</option>
          </select>
        </div>
      </div>
      <div style="display:flex;align-items:center;justify-content:right;flex-grow:1;">
        <button style="background:inherit;color:white;border:none;"><i class="fas fa-broom"
                                                                       style="margin:4px;"></i>Reset bộ lọc
        </button>
      </div>
      <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
          selElmnt = x[i].getElementsByTagName("select")[0];
          ll = selElmnt.length;
          /*for each element, create a new DIV that will act as the selected item:*/
          a = document.createElement("DIV");
          a.setAttribute("class", "select-selected");
          a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
          x[i].appendChild(a);
          /*for each element, create a new DIV that will contain the option list:*/
          b = document.createElement("DIV");
          b.setAttribute("class", "select-items select-hide");
          for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
              /*when an item is clicked, update the original select box,
              and the selected item:*/
              var y, i, k, s, h, sl, yl;
              s = this.parentNode.parentNode.getElementsByTagName("select")[0];
              sl = s.length;
              h = this.parentNode.previousSibling;
              for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                  s.selectedIndex = i;
                  h.innerHTML = this.innerHTML;
                  y = this.parentNode.getElementsByClassName("same-as-selected");
                  yl = y.length;
                  for (k = 0; k < yl; k++) {
                    y[k].removeAttribute("class");
                  }
                  this.setAttribute("class", "same-as-selected");
                  break;
                }
              }
              h.click();
            });
            b.appendChild(c);
          }
          x[i].appendChild(b);
          a.addEventListener("click", function (e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
          });
        }

        function closeAllSelect(elmnt) {
          /*a function that will close all select boxes in the document,
          except the current select box:*/
          var x, y, i, xl, yl, arrNo = [];
          x = document.getElementsByClassName("select-items");
          y = document.getElementsByClassName("select-selected");
          xl = x.length;
          yl = y.length;
          for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
              arrNo.push(i)
            } else {
              y[i].classList.remove("select-arrow-active");
            }
          }
          for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
              x[i].classList.add("select-hide");
            }
          }
        }

        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
      </script>
    </div>
  </div>

</div>