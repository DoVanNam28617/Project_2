<?php
if (is_array($bdsone)) {
  extract($bdsone);
}
$imgpath = "../uploads" . $hinh;
if (is_file($imgpath)) {
  $img = "<img src='" . $imgpath . "'>";
} else {
  $img = "no photo";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chỉnh sửa sản phẩm | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../view/doc/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
  <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
  <script>
    function readURL(input, thumbimage) {
      if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
        var reader = new FileReader();
        reader.onload = function(e) {
          $("#thumbimage").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      } else { // Sử dụng cho IE
        $("#thumbimage").attr('src', input.value);

      }
      $("#thumbimage").show();
      $('.filename').text($("#uploadfile").val());
      $('.Choicefile').css('background', '#14142B');
      $('.Choicefile').css('cursor', 'default');
      $(".removeimg").show();
      $(".Choicefile").unbind('click');

    }
    $(document).ready(function() {
      $(".Choicefile").bind('click', function() {
        $("#uploadfile").click();

      });
      $(".removeimg").click(function() {
        $("#thumbimage").attr('src', '').hide();
        $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
        $(".removeimg").hide();
        $(".Choicefile").bind('click', function() {
          $("#uploadfile").click();
        });
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'pointer');
        $(".filename").text("");
      });
    })
  </script>
</head>

<body class="app sidebar-mini rtl">
  <style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
    .listanh_mt{
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    }
    .anh_mt{
      width: 90%;
    }
    .anh_mt img{
      width: 100%;
      height: 130px;
    }
  </style>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div> 
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=listbds">Danh sách dự án</a></li>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Sửa sản phẩm</h3>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <form class="row" action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input name="tensp" class="form-control" type="text" value="<?= $ten_sp ?>">
                <span style="color:red">
                                    <?=isset($error['tensp']) ? $error['tensp'] : '' ?>
                            </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Địa chỉ</label>
                <input name="diachi" class="form-control" type="text" value="<?= $dia_chi ?>">
                <span style="color:red">
                                    <?=isset($error['diachi']) ? $error['diachi'] : '' ?>
                            </span>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select name="iddm" class="form-control" id="exampleSelect1">
                  <option value="0" selected>-- Chọn danh mục --</option>

                  <?php foreach($listdanhmuc as $value): ?>
                    <option value="<?= $value['id_loai']?>" <?= $value['id_loai'] == $bdsone['id_loai'] ? "selected": "" ?>><?= $value['ten_loai']?></option>
                    <?php endforeach; ?>
                </select>
                <span style="color:red">
                    <?=isset($error['iddm']) ? $error['iddm'] : '' ?>
                </span>

              </div>

              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Địa điểm</label>
                <select name="iddd" class="form-control" id="exampleSelect1">
                  <option value="0" selected>-- Chọn địa điểm --</option>

                  <?php foreach($listdiadiem as $values): ?>
                    <option values="<?= $values['id_dd']?>" <?= $values['id_dd'] == $bdsone['id_dd'] ? "selected": "" ?>><?= $values['ten_dd']?></option>
                    <?php endforeach; ?>
                </select>
                <span style="color:red">
                    <?=isset($error['iddd']) ? $error['iddd'] : '' ?>
                </span>

              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Giá tiền</label>
                <input name="giatien" class="form-control" type="text" value="<?= $don_gia ?>">
                <span style="color:red">
                                    <?=isset($error['giatien']) ? $error['giatien'] : '' ?>
                            </span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Diện tích(m²)</label>
                <input name="dientich" class="form-control" type="text" value="<?= $dien_tich ?>">
                <span style="color:red">
                                    <?=isset($error['dientich']) ? $error['dientich'] : '' ?>
                            </span>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="anh" onchange="readURL(this);" />
                  <input type="text" name="img"  value="<?=$hinh?>" hidden> 

                  <img height="100" src="../uploads/<?=$hinh?>" alt="">
                </div>
                <div id="thumbbox">
                  <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a> <br>
                  <span style="color:red">
                                    <?=isset($error['iddm']) ? $error['iddm'] : '' ?>
                            </span>
                  <p style="clear:both"></p>
                </div>

              </div>
              
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh mô tả</label>
                <div id="myfileupload" class="listanh_mt">
                  <input type="file" id="uploadfile" name="anh" onchange="readURL(this);" />
        
                  <?php foreach($lay_img as $lay_img):?>
                      <!-- extract($lay_img);
                      // var_dump($lay_img);                                    
                      echo '   -->
                      <div  class="anh_mt">
                      <input type="text" name="anh"  value="<?=$lay_img['anh']?>" hidden >    
                      <img src="../uploads/<?=$lay_img['anh']?>" alt="">
                      </div>
                      <!-- '; -->
                  <?php endforeach?>
                </div> <br>
                <input type="file" name="anh_mota[]" multiple="multiple">

              </div>

              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota"><?=$mo_ta?></textarea>
                <script>
                  CKEDITOR.replace('mota');
                </script>
              </div>

          </div>
          <input type="hidden" name="id" value="<?=$id?>">
          <input type="submit" name="submit" class="btn btn-save" value="Lưu lại">
          <input type="reset" value="Nhập lại" class="btn btn-cancel">
          <a class="btn btn-cancel" href="index.php?act=listbds">Hủy bỏ</a>
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
  <div class="modal fade" id="addtinhtrang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
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
    inpFile.addEventListener("change", function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
        reader.addEventListener("load", function() {
          previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>

</html>