<!--  -->
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=listbds">Danh sách dự án</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo dự án mới</h3>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <form class="row" action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input name="tensp" class="form-control" type="text" value="<?= isset($tensp) ? $tensp : '' ?>">
                <span style="color:red">
                    <?=isset($error['tensp']) ? $error['tensp'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Địa chỉ</label>
                <input name="diachi" class="form-control" type="text" value="<?= isset($diachi) ? $diachi : '' ?>">
                <span style="color:red">
                    <?=isset($error['diachi']) ? $error['diachi'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select name="iddm" class="form-control" id="exampleSelect1">
                <option value="0" selected>-- Chọn danh mục --</option>
                  <?php
                    foreach($listdanhmuc as $danhmuc)
                    {
                      extract($danhmuc);
                      echo '<option value="'.$id_loai.'">'.$ten_loai.'</option>';
                    }
                  ?>
                </select>
                <span style="color:red">
                    <?=isset($error['iddm']) ? $error['iddm'] : '' ?>
                </span>
               
              </div>

              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Địa điểm</label>
                <select name="iddd" class="form-control" id="exampleSelect1">
                <option value="0" selected>-- Chọn địa điểm --</option>
                  <?php
                    foreach($listdiadiem as $diadiem)
                    {
                      extract($diadiem);
                      echo '<option value="'.$id_dd.'">'.$ten_dd.'</option>';
                    }
                  ?>
                </select>
                <span style="color:red">
                    <?=isset($error['iddd']) ? $error['iddd'] : '' ?>
                </span>
               
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Giá tiền</label>
                <input name="giatien" class="form-control" type="text" value="<?= isset($giatien) ? $giatien : '' ?>" >
                <span style="color:red">
                    <?=isset($error['giatien']) ? $error['giatien'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Diện tích(m²)</label>
                <input name="dientich" class="form-control" type="text" value="<?= isset($dientich) ? $dientich : '' ?>">
                <span style="color:red">
                    <?=isset($error['dientich']) ? $error['dientich'] : '' ?>
                </span>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="anh" onchange="readURL(this);" value="<?= isset($hinh) ? $hinh : '' ?>">
                  
                </div>
                <div id="thumbbox">
                  <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a> <br>
                  <span style="color:red">
                    <?=isset($error['anh']) ? $error['anh'] : '' ?>
                </span>
                  <p style="clear:both"></p>
                </div>

              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả </label>
                <textarea class="form-control" name="mota" id="mota"></textarea>
                <span style="color:red">
                    <?=isset($error['anh']) ? $error['anh'] : '' ?>
                </span>
                <script>CKEDITOR.replace('mota');</script>
              </div>
              <input type="hidden" name="trang_thai" value="1">
              <!-- <div class="form-group col-md-12">
                <label class="control-label">Mô tả dài</label>
                <textarea class="form-control" name="mo_taDai" id="mota"></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div> -->

          </div>
          <input type="submit" name="submit" class="btn btn-save" value="Thêm mới">
          <input type="reset" value="Nhập lại" class="btn btn-cancel">
          <a class="btn btn-cancel" href="index.php?act=listbds">Hủy bỏ</a> <br> <br>
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