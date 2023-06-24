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
      <!-- Link chart -->
      <script src="https://www.gstatic.com/charts/loader.js">
      </script>
      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
      <link rel="stylesheet" href="../view/icon/fontawesome-free-6.2.0-web/css/all.css">

      <!-- <link href="../view/assets/css/styles.css" rel="stylesheet">
	<link href="../view/assets/css/colors.css" rel="stylesheet">	 -->

</head>

<body onload="time()" class="app sidebar-mini rtl">
      <!-- Navbar-->
      <header class="app-header">
            <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
            <!-- Navbar Right Menu-->
            <ul class="app-nav">


                  <!-- User Menu-->
                  <li><a class="app-nav__item" href="../index.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>

                  </li>
            </ul>
      </header>
      <!-- Sidebar menu-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
            <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../uploads/logo2.jpg" width="50px" alt="User Image">
                  <div>
                        <p class="app-sidebar__user-name"><b>Admin GR7</b></p>
                        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
                  </div>
            </div>
            <hr>
            <ul class="app-menu">

                  <!-- <li><a class="app-menu__item active" href="index.php"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li> -->

                  <li><a class="app-menu__item " href="index.php?act=thongke"><i class='app-menu__icon bx bx-tachometer'></i><span class="app-menu__label">Thống kê</span></a></li>

                  <li><a class="app-menu__item " href="index.php?act=listdm"><i class='app-menu__icon bx bx-id-card'></i> <span class="app-menu__label">Quản lý danh mục BDS</span></a></li>

                  <li><a class="app-menu__item " href="index.php?act=listdiadiem"><i class='app-menu__icon bx bx-id-card'></i> <span class="app-menu__label">Quản lý địa điểm</span></a></li>

                  <!-- <li><a class="app-menu__item" href="index.php?act=listuser"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý user</span></a>
      </li> -->

                  <li><a class="app-menu__item" href="index.php?act=listuser"><i class='app-menu__icon bx bx-user-voice'></i><span class="app-menu__label">Quản lý user</span></a></li>
                  <!-- <li><a class="app-menu__item" href="index.php?act=listbd"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý bài đăng</span></a>
      </li> -->
                  <li><a class="app-menu__item" href="index.php?act=listbds"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Danh sách dự án</span></a>
                  </li>
                  <li><a class="app-menu__item" href="index.php?act=listbd"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý bài đăng</span></a></li>

                  <li><a class="app-menu__item" href="index.php?act=BDloi"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Bài đăng không phù hợp</span></a></li>

                  <li><a class="app-menu__item" href="index.php?act=listcoin"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý nạp coin</span></a></li>

            </ul>
      </aside>