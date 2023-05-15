<?php
//- Tạo phiếu nhập sản phẩm (nhập thêm số lượng tồn kho cho sản phẩm đó)

//- Khi tạo phiếu nhập thì hiển thị danh sách chọn sản phẩm (1 cái listbox hiển thị danh mục, 1 cái listbox hiển thị các sản phẩm đã lọc sau khi đã chọn danh mục) để thêm số lượng, lưu ý chỉ được thêm các sản phẩm tồn tại trong kho
//- Khi thêm sản phẩm vào trong phiếu nhập thì hiển thị bên dưới 1 table hiển thị các sản phẩm đã được thêm (nên lưu trên js, sau khi bấm lưu phiếu thì mới cho vào database) và cho phép xóa sản phẩm đó
//- Sau khi chọn sản phẩm thì cho chọn phân loại (ram, bộ nhớ trong) của sản phẩm đó
//- Được phép chọn nhà cung cấp (hiển thị tất cả các nhà cung cấp qua 1 listbox)
//- Giá nhập sản phẩm không được cao hơn giá bán lẻ
//- Hiển thị số lượng tồn kho của mỗi sản phẩm với mỗi màu sắc, mỗi cấu hình
//- Chỉ cho xóa phiếu tồn kho, không cho sửa
//- Xem tồn kho sản phẩm
