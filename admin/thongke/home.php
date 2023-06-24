<main class="app-content">
  <div class="row">
    <div class="col-md-12">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="#"><b>Thống kê</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
    </div>
  </div>
  <style>
    .p{
      font-weight: 700;
      color: #006600;
    }
   
  </style>
  <div class="row">
    <!--Left-->
    <div class="col-md-12 col-lg-6">
      <div class="row">

      </div>
    </div>
    <!-- col-6 -->
    <div class="col-md-6">
      <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
        <div class="info">
          <!-- <h4>Tổng dự án</h4> -->
          <?php
          $bds = loadall_bds("","", 0, 0);
          $dac_biet = loadall_BD_dacbiet();
          $thuong = loadall_BD_thuong();
          // array($bds);
          $count = count($bds);
          $countĐB = count($dac_biet);
          $count_thuong = count($thuong);

          echo '
                          <p class="p" style="font-size:20px;color:red">Tổng dự án : <b style="color:black">' . $count . ' dự án</b></p> 
                          <p class="p" >Dự án đặc biệt : <b style="color:black">' . $countĐB . ' dự án</b></p> 
                          <p class="p" >Dự án thường   : <b style="color:black">' . $count_thuong . ' dự án</b></p> 
                         
                       
                '
          ?>
          <p class="info-tong">Tổng số dự án được quản lý.</p>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Khu vực</h3>
        <div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="text-align:center">Mã khu vực</th>
                <th style="text-align:center">Tên khu vực</th>
                <th style="text-align:center">Tổng dự án</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($list_dd as $kv) {
                extract($kv);
                echo '
                    <tr>
                      <th style="width:120px;text-align:center">' . $id_dd . '</th>
                      <th>' . $ten_dd . '</th>   
                      <th>' . $soluong . '</th>                  
                    </tr>
                    ';
              }
              ?>

            </tbody>
          </table>
        </div>
        <!-- / div trống-->
      </div>
      <div class="tile">
        <h3 class="tile-title">Danh mục</h3>
        <div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="text-align:center">Mã danh mục</th>
                <th style="text-align:center">Tên danh mục</th>
                <th style="text-align:center">Tổng dự án</th>
                <th style="text-align:center">Giá thấp nhất</th>
                <th style="text-align:center">Giá cao nhất</th>
                <th style="text-align:center">Giá trung bình</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach ($dstk as $dstk) {
                extract($dstk);
                echo '
                    <tr>
                      <th style="width:120px;text-align:center">' . $idloai . '</th>
                      <th>' . $tenloai . '</th>   
                      <th>' . $countduan . '</th>
                      <th>' . $mingia . '</th>
                      <th>' . $maxgia . '</th>
                      <th>' . $avggia . '</th>                     
                    </tr>
                    ';
              }
              ?>

            </tbody>
          </table>
        </div>
        <!-- / div trống-->
      </div>
    </div>

    <!-- / col-12 -->
    <!-- col-12 -->
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Khách hàng và số lượng coin</h3>
        <div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th style="text-align:center">ID</th>
                <th style="text-align:center">Tên khách hàng</th>
                <th style="text-align:center">Mật khẩu</th>
                <th style="text-align:center">Email</th>
                <th style="text-align:center">Số lượng coin</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($khNew as $khNew) {
                extract($khNew);
                echo '
                          <tr>
                            <th style="width:65px;text-align:center">' . $id_kh . '</th>
                            <th>' . $ho_ten . '</th> 
                            <th>' . $mat_khau . '</th>    
                            <th>' . $email . '</th>
                            <th>' . $coin . '</th>                         
                          </tr>
                          ';
              }
              ?>

            </tbody>
          </table>
        </div>

      </div>

      <div class="tile">
        <h3 class="tile-title">Dự án mới</h3>
        <div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="text-align:center">Mã dự án</th>
                <th style="text-align:center">Tên dự án</th>
                <th style="text-align:center">Diện tích</th>
                <th style="text-align:center">Giá</th>
                <th style="text-align:center">Ngày đăng</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($duanNew as $duanNew) {
                extract($duanNew);
                echo '
                    <tr>
                      <th style="width:120px;text-align:center">' . $id . '</th>
                      <th>' . $ten_sp . '</th>   
                      <th>' . $dien_tich . ' m²</th>
                      <th>' . $don_gia . ' tỷ</th>   
                      <th>' . $ngay_dang . '</th>                     
                    </tr>
                    ';
              }
              ?>

            </tbody>
          </table>
        </div>
        <!-- / div trống-->
      </div>

    </div>

    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Biểu đồ thống kê</h3>
        <div id="myChart" style="width:100%; max-width:700px; height:700px;">
        </div>

        <script>
          google.charts.load('current', {
            'packages': ['corechart']
          });
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Loại', 'Số lượng'],
              <?php
              $tk = thongke();
              foreach($tk as $tk)
              {
                extract($tk);
                echo "['".$tenloai."', ".$countduan."],";
              }
              ?>
            ]);

            var options = {
              title: 'Biểu đồ thống kê'
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
          }
        </script>
      </div>
    </div>

  </div>
  <!--END left-->
  <!--Right-->

  <!--END right-->
  </div>



</main>
<script src="view/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="view/js/popper.min.js"></script>
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
<!--===============================================================================================-->
<script src="view/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="view/js/main.js"></script>
<!--===============================================================================================-->
<script src="view/js/plugins/pace.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="view/js/plugins/chart.js"></script>
<!--===============================================================================================-->
<script type="text/javascript">
  var data = {
    labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
    datasets: [{
        label: "Dữ liệu đầu tiên",
        fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
        strokeColor: "rgb(255, 212, 59)",
        pointColor: "rgb(255, 212, 59)",
        pointStrokeColor: "rgb(255, 212, 59)",
        pointHighlightFill: "rgb(255, 212, 59)",
        pointHighlightStroke: "rgb(255, 212, 59)",
        data: [20, 59, 90, 51, 56, 100]
      },
      {
        label: "Dữ liệu kế tiếp",
        fillColor: "rgba(9, 109, 239, 0.651)  ",
        pointColor: "rgb(9, 109, 239)",
        strokeColor: "rgb(9, 109, 239)",
        pointStrokeColor: "rgb(9, 109, 239)",
        pointHighlightFill: "rgb(9, 109, 239)",
        pointHighlightStroke: "rgb(9, 109, 239)",
        data: [48, 48, 49, 39, 86, 10]
      }
    ]
  };
  var ctxl = $("#lineChartDemo").get(0).getContext("2d");
  var lineChart = new Chart(ctxl).Line(data);

  var ctxb = $("#barChartDemo").get(0).getContext("2d");
  var barChart = new Chart(ctxb).Bar(data);
</script>
<script type="text/javascript">
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