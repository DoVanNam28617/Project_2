<!--  -->
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?act=listuser">Danh sách Khách Hàng</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm mới khách hàng </h3>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <form class="row" action="index.php?act=addkh" method="POST" >
              <div class="form-group col-md-3">
                <label class="control-label">Họ tên</label>
                <input name="ho_ten" class="form-control" type="text" value="<?= isset($ho_ten) ? $ho_ten : '' ?>">
                <span style="color:red">
                    <?=isset($error['ho_ten']) ? $error['ho_ten'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Mật khẩu</label>
                <input name="mat_khau" class="form-control" type="text" value="<?= isset($mat_khau) ? $mat_khau : '' ?>">
                <span style="color:red">
                    <?=isset($error['mat_khau']) ? $error['mat_khau'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Nhập lại mật khẩu</label>
                <input name="re-pass" class="form-control" type="text" >
                <span style="color:red">
                    <?=isset($error['re-pass']) ? $error['re-pass'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Email</label>
                <input name="email" class="form-control" type="text" value="<?= isset($email) ? $email : '' ?>">
                <span style="color:red">
                    <?=isset($error['email']) ? $error['email'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Vai trò</label>
                <input name="vai_tro" class="form-control" type="text" value="<?= isset($vai_tro) ? $vai_tro : '' ?>">
                <span style="color:red">
                    <?=isset($error['vai_tro']) ? $error['vai_tro'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Kích hoạt</label>
                <input name="kich_hoat" class="form-control" type="text" value="<?= isset($kich_hoat) ? $kich_hoat : '' ?>">
                <span style="color:red">
                    <?=isset($error['kich_hoat']) ? $error['kich_hoat'] : '' ?>
                </span>
              </div>

          </div>
          <input type="submit" name="themmoi" class="btn btn-save" value="Thêm mới">
          <input type="reset" value="Nhập lại" class="btn btn-cancel">
          <a class="btn btn-cancel" href="index.php?act=listdm">Hủy bỏ</a> <br> <br>
          <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao
          ?>
          
          </form>
        </div>
  </main>


  <!--
  MODAL CHỨC VỤ 
-->
  <!--<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới nhà cung cấp</h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên chức vụ mới</label>
              <input class="form-control" type="text" required>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  -->
  <!--
MODAL
-->



  <!--
  MODAL DANH MỤC
-->
  <!-- <div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới danh mục </h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên danh mục mới</label>
              <input class="form-control" type="text" required>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Danh mục sản phẩm hiện đang có</label>
              <ul style="padding-left: 20px;">
                <li>Bàn ăn</li>
              <li>Bàn thông minh</li>
              <li>Tủ</li>
              <li>Ghế gỗ</li>
              <li>Ghế sắt</li>
              <li>Giường người lớn</li>
              <li>Giường trẻ em</li>
              <li>Bàn trang điểm</li>
              <li>Giá đỡ</li>
              </ul>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div> -->
  <!--
MODAL

-->




  <!--
  MODAL TÌNH TRẠNG
-->
  <div class="modal fade" id="addtinhtrang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới tình trạng</h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tình trạng mới</label>
              <input class="form-control" type="text" required>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
MODAL
-->



  <script src="../view/doc/js/jquery-3.2.1.min.js"></script>
  <script src="../view/doc/js/popper.min.js"></script>
  <script src="../view/doc/js/bootstrap.min.js"></script>
  <script src="../view/doc/js/main.js"></script>
  <script src="../view/doc/js/plugins/pace.min.js"></script>
  <script>
    const inpFile = document.getElementById("inpFile");
    const loadFile = document.getElementById("loadFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
        reader.addEventListener("load", function () {
          previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
      }
    });

  </script>
</body>

</html>