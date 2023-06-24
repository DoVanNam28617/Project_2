
<style>
  .ht_them{
    color: rgb(39, 118, 237);
     height: 10%;
     width: 50%;
     border: none;
     background-color: white;
 }
 .thu_bot{
     color: rgb(39, 118, 237);
     height: 10%;
     width: 35%;
     border: none;
     background-color: white;
 }
 .ht_them:hover{
    text-decoration: 1.5px underline solid rgb(39, 118, 237) ;
    cursor: pointer;
 
 }
 .thu_bot:hover{
   text-decoration: 1.5px underline solid rgb(39, 118, 237) ;
    cursor: pointer;
 
 }
 .tr:hover .ht_them{
   background-color: #ECECEC;
 }
 .tr:hover .thu_bot{
   background-color: #ECECEC;
 }
 .kyw{
   width: 150px;
   height: 30px;
   border: 1px solid black;
   border-radius: 5px;
   margin-right: 5px;
 }
 .kyw:hover{
   border: 2px solid red;
 }
 .iddm:hover{
   border: 2px solid rgb(5, 112, 243);
 }
 /* .iddm:hover{
   border: 2px solid green;
 } */
 .iddm{
   width: 150px;
   height: 30px;
   border: 1px solid black;
   border-radius: 5px;
   margin-right: 10px;
 }
 .btn_submit{
   border: 1px solid palevioletred;
   background-color: palevioletred;
   border-radius: 10px;
   width: 120px;
   margin-left: 36%;
   height: 35px;
   color: white;
   font-weight: 500;

 }
 .fa_solid{
   background-color: red;
   color: white;
   border: 1px solid red;
   border-radius: 5px;
   margin-top: 5px;
   padding: 3px 8px;
 }
</style>
  <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách coin chờ nạp</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                          
                           
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                          </div>

                          

                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr >
                  
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th style="text-align: center">Mã nạp coin</th>
                                    <th style="text-align: center">User khách hàng</th>
                                    <th style="text-align: center">Ảnh</th>
                                    <th style="text-align: center">Số coin nạp</th>
                                    <th style="text-align: center">Trạng thái</th>
                                    <th style="text-align: center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                                    <?php
                                  foreach($listCoin as $listCoin)
                                  {                               
                                    extract($listCoin);

                                    $phe_duyet = "index.php?act=nap_coin&id_kh=$id_kh&id=$id";
                                    $xoasp = "index.php?act=xoacoin&id=".$id;
                                 
                                    $imgpath = "../uploads".$anh;
                                    $thongbao = "Bạn có chắc chắn duyệt bài không !";
                                    if($trang_thai==0){
                                      $trang_thai = "<b style='color:red'>Chưa duyêt</b>";
                                    }
                                    if($trang_thai==1){
                                      $trang_thai = "<b style='color:green'>Đã duyêt</b>";
                                    }
                                    if(is_file($imgpath))
                                    {
                                      $img = "<img src='".$imgpath."'>";
                                    }
                                    else
                                    {
                                      $img = "no photo";
                                    }
                                    echo '
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>   
                                    <td>Coin-'.$id.'</td>
                                    <td>'.$id_kh.'</td>
                                    <td style="width:200px"><img style="text-align: center;" src="../uploads/'.$anh.'" alt="" height=70></td>
                                    <td>'.$so_coin.'</td> 
                                    <td>'.$trang_thai.'</td>                                                                     
                                    </td>
                                    <td style="text-align: center;width:100px">
                                        <a href="'.$phe_duyet.'"  OnClick="return confirm('.$thongbao.')><button style="background-color: rgb(89, 234, 89);" class="btn btn-primary btn-sm edit" type="button" title="Phê duyệt" id="show-emp" data-toggle="modal"
                                        data-target="#ModalUP"><i class="fas fa-check" style="color:green;"></i></button></a>

                                        <a href="'.$xoasp.'"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                            "><i class="fas fa-trash-alt"></i> 
                                        </button></a>
                                        
                                     

                                    </td>
                                    </tr>';
                                  }
                                ?>
                            </tbody>
                           
                        </table>
                        <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous" id="sampleTable_previous"><a href="#" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">▲</a></ul></div></div>
                        
                    </div>
                </div>
            </div>
        </div>
             
              <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="registermodal">
                  <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                  <div class="modal-body">
                    <h2 class="modal-header-title" style="color:red;margin-top:10px">Lí do chưa duyệt</h2>
                    <div class="login-form">
                      <form action="index.php?act=lido_duyet" method="POST">
                      
                        <div class="form-group">
                          <label>Nội dung</label>
                          <div class="input-with-icon">
                            <input type="text" class="form-control" placeholder="Nội dung" name="li_do">
                            <i class="ti-user"></i>
                          </div>
                          <input type="hidden" value="<?=$id?>" name="id">
                        </div>
                                          
                        <div class="form-group">
                          <button type="submit"  class="btn_submit" name="xac_nhan">Xác nhận</button>
                        </div>
                      
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </main>


    <!-- Essential javascripts for application to work-->

</script>
    <!-- <script src="../view/assets/js/jquery.min.js"></script>
		<script src="../view/assets/js/popper.min.js"></script>
		<script src="../view/assets/js/bootstrap.min.js"></script> -->

    <script src="../view/doc/js/jquery-3.2.1.min.js"></script>
    <script src="../view/doc/js/popper.min.js"></script>
    <script src="../view/doc/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <script src="../view/doc/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="../view/doc/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../view/doc/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
        //Thời Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
    </script>
    <script>
        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("myTable").deleteRow(i);
        }
        jQuery(function () {
            jQuery(".trash").click(function () {
                swal({
                    title: "Cảnh báo",
                    text: "Bạn có chắc chắn là muốn xóa sản phẩm này?",
                    buttons: ["Hủy bỏ", "Đồng ý"],
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Đã xóa thành công.!", {

                            });
                        }
                    });
            });
        });
        oTable = $('#sampleTable').dataTable();
        $('#all').click(function (e) {
            $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
            e.stopImmediatePropagation();
        });
    </script>

</body>

</html>