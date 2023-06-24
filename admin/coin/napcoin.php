<?php
      if (is_array($khone)){
        extract($khone);
       
    }
   
 ?>;
<!DOCTYPE html>
<html lang="en">

<head>
  <title>| Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="view/doc/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- <link rel="stylesheet" href="../view/adminn.css"> -->

  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" href="../view/icon/fontawesome-free-6.2.0-web/css/all.css">
  
  <!-- <link href="../view/assets/css/styles.css" rel="stylesheet">
	<link href="../view/assets/css/colors.css" rel="stylesheet">	 -->

</head>

<body onload="time()" class="app sidebar-mini rtl" style="background-color: rgb(183, 183, 183);">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="../index123.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>   
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../uploads/logo2.jpg" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>Admin GR7</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      
      <!-- <li><a class="app-menu__item active" href="index.php"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li> -->

      <li><a class="app-menu__item " href="index.php"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>

      <li><a class="app-menu__item " href="index.php?act=listdm"><i class='app-menu__icon bx bx-id-card'></i> <span
            class="app-menu__label">Quản lý danh mục BDS</span></a></li>

      <li><a class="app-menu__item " href="index.php?act=listdiadiem"><i class='app-menu__icon bx bx-id-card'></i> <span
            class="app-menu__label">Quản lý địa điểm</span></a></li>
     
      <!-- <li><a class="app-menu__item" href="index.php?act=listuser"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý user</span></a>
      </li> -->

      <li><a class="app-menu__item" href="index.php?act=listuser"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý user</span></a></li>
      <!-- <li><a class="app-menu__item" href="index.php?act=listbd"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý bài đăng</span></a>
      </li> -->
      <li><a class="app-menu__item" href="index.php?act=listbds"><i
        class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Danh sách dự án</span></a>
  </li>
      <li><a class="app-menu__item" href="index.php?act=listbd"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý bài đăng</span></a></li>
     
      
      <li><a class="app-menu__item" href="quan-ly-bao-cao.html"><i
            class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Thống kê</span></a>
      </li>
      
    </ul>
  </aside>
<style>
  .form_lido{
    width: 35%;
    margin-left: 33%;
    margin-top: 80px;
    background-color: white;
    border: 1px solid white;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0px 5px 20px 0px black;
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
 #select{
    width: 150px;
    height: 30px;
    border: 1px solid black;
    border-radius: 8px;
    text-align: center;
 }
</style>
  <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
    <main class="app-content" style="background-color:rgb(183, 183, 183);">
        <div class="row">
            <div class="col-md-12">
                     
                        <div class="modal-body">
                          <div class="form_lido">
                          <h2 class="modal-header-title" style="color:red;margin-top:10px">Số coin nạp</h2>
                          <div class="login-form">
                            <form action="index.php?act=duyet_coin" method="POST">
                            
                              <div class="form-group">
                                <!-- <label>Số coin muốn nạp</label> <br> -->
									<select name="coinNew" id="select" style="width:150px">
                                        <option value="0" id="id">---Mức coin---</option>
                                        <option value="300">300</option>
                                        <option value="500">500</option>
                                        <option value="1000">1000</option>
                                        <option value="2000">2000</option>
                                    </select> <br>
                                <input type="hidden" name="id_kh" value="<?=$id_kh?>" >
                                <input type="hidden" name="email" value="<?=$email?>" >
                                <input type="hidden" name="coinOld" value="<?=$coin?>" >
                                <input type="hidden" name="id" value="<?=$id?>" >
                              </div>
                                                
                              <div class="form-group">
                                <button type="submit"  class="btn_submit" name="hoan_tat">Hoàn tất</button>

                              </div>
                              <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao
          ?>
                            
                            </form>
                          
                    </div>
                  </div>
                      </div>
            </div>
             
    </main>



</script>
    

</body>

</html>