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
   
</style>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách dự án</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
              
                              <a class="btn btn-add btn-sm" href="index.php?act=addsp" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                            </div>
                           
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                          </div>

                          <form action="index.php?act=listbds" method="POST">
                        <input type="text" name="kyw" placeholder="Search sản phẩm" class="kyw">                                          
                      
                        <select name="iddm" class="iddm">
                        <option value="0">-- Chọn danh mục --</option>
                        <option value="0">Tất cả</option>
                              <?php
                                foreach($listdanhmuc as $danhmuc)
                                {
                                  extract($danhmuc);
                                  echo '<option value="'.$id_loai.'">'.$ten_loai.'</option>';
                                }
                              ?>
                        </select>

                        <select name="iddd" class="iddm">
                        <option value="0">-- Chọn địa điểm --</option>
                        <option value="0">Tất cả</option>
                              <?php
                                foreach($listdiadiem as $diadiem)
                                {
                                  extract($diadiem);
                                  echo '<option value="'.$id_dd.'">'.$ten_dd.'</option>';
                                }
                              ?>
                        </select>
                    
                        <input type="submit"  name="listgo" value="Go" class="btn btn-cancel" class="go">
                    </form> <br> <br>

                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr >
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th style="text-align: center">Mã dự án</th>
                                    <th style="text-align: center">Tên dự án</th>
                                    <th style="text-align: center">Ảnh</th>
                                    <th style="text-align: center">Diện tích</th>
                                    <th style="text-align: center">Giá tiền</th>
                                    <th style="text-align: center">Địa chỉ</th>
                                    <th style="text-align: center">Mô tả</th>
                                    <th style="text-align: center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  foreach($bds as $bds)
                                  {
                                    extract($bds);
                                    $suasp = "index.php?act=suasp&id=".$id;
                                    $xoasp = "index.php?act=xoasp&id=".$id;
                                    $imgpath = "../uploads".$hinh;
                                    if(is_file($imgpath))
                                    {
                                      $img = "<img src='".$imgpath."'>";
                                    }
                                    else
                                    {
                                      $img = "no photo";
                                    }
                                    echo '<tr class="tr">
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>NAMAI -'.$id.'</td>
                                    <td>'.$ten_sp.'</td>
                                    <td style="width:100px"><img style="text-align: center;" src="../uploads/'.$hinh.'" alt="" height=70></td>
                                    <td>'.$dien_tich.' m²</td>
                                    <td>'.$don_gia.' tỷ</td>
                                    <td  style="width:160px">'.$dia_chi.'</td>
                                    <td class="mo_ta" style="width:320px">'.$mo_ta.'
                                                                            
                                    </td>
                                    <td style="text-align: center;width:100px"><a href="'.$xoasp.'"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                    ><i class="fas fa-trash-alt"></i>
                                    </button></a>
                                        <a href="'.$suasp.'"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                                        data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
                                                        
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
    </main>


    <!-- Essential javascripts for application to work-->
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
    <script>
      function Confirm(){
        if(confirm("Bạn muốn xóa không ?")){
          return true;

        }else{
          return false;
        }
      }
    </script>
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
    

</body>

</html>
                                      <!-- <div class="click_but">                                  
                                        <button class="ht_them">Hiển thị thêm >>></button>                                    
                                        </div>

                                        <div class="mo_taDai"  style="display:none">'.$mo_taDai.'</div> 

                                        <div class="click_but">                                                  
                                        <button class="thu_bot" style="display:none">Ẩn bớt <<<</button> 
                                        </div> -->