<?php
// ob_start();
session_start();
include 'model/pdo.php';
include 'model/bds.php';
include 'model/coin.php';
include 'model/goi_tin.php';
include 'model/danhmucbds.php';
include 'model/diadiem.php';
include 'model/user.php';
include 'global.php';
include 'globalMT.php';




$bdsnew = sanpham_loadall_top8();
// $bdsthem = sanpham_loadall_top4();
$list_dd  =bds_dd() ;
$listbinhthuong=loadall_duan_binhtuong();
$lisbinhthuongP2=loadall_duan_binhtuong_part2();

if (isset($_GET['act']) ) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':    
            if(isset($_GET['id_loai']) &&($_GET['id_loai']!="") ){
                $iddm = $_GET["id_loai"];
            }else{
                $iddm=0;
            }
            if(isset($_GET['id_dd']) &&($_GET['id_dd']!="") ){
                $iddd = $_GET["id_dd"];
            }else{
                $iddd=0;
            }
            
            // $bds=loadall_bds($kyw,$iddm,$iddd);      
            $dssp=loadall_bds("","", $iddm,$iddd);
            $name = load_tendm($iddm);
            
            include "view/SPduan/sanphamcl.php";               
            break;

        case 'search':
            if(isset($_POST['listgo'])){
                $donGia=$_POST['donGia'];
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
                $iddd=$_POST['iddd'];
            }else{
                $donGia=0;  
                $kyw='';
                $iddm=0;
                $iddd=0;
            }
          
            $dssp=loadall_bds($donGia,$kyw,$iddm,$iddd);                     
            include "view/SPduan/SPsearch.php";               
            break;
        
        case 'sanphamdd':
           
            if(isset($_GET['id_dd']) &&($_GET['id_dd']!="") ){
                $id_dd = $_GET["id_dd"];
            }else{
                $id_dd=0;
            }
            $dsdd=loadall_bds("","", 0,$id_dd);
            $ten_dd=load_tendd($id_dd);
          
            include "view/SPduan/diadiemcl.php";           
            break;

        case 'dangki':
            if (isset($_POST['dangki'])) {
                $ho_ten = $_POST['username'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $re_pass = $_POST['re-pass'];
                $sdt = $_POST['sdt'];            
                $vaitro = $_POST['vaitro'];
                $kichhoat = $_POST['kichhoat'];
                $check_username = check_username($ho_ten);
                $check_email = check_email($email);
                $check_phone= check_phone($sdt);

                $error=[];
                if(is_array($check_username)){
                    $error['username']="Tên đăng nhập đã tồn tại";
                  
                }
                if(!preg_match("/^[a-z0-9_-]{3,16}$/",$ho_ten)) {
                    $error['usernames']="Họ tên chỉ chấp nhận chữ và khoảng trắng.";}
                   
              
                if(is_array($check_email)){
                    $error['email']="Email đã được sử dụng";                
                }
                if(is_array($check_phone)){
                    $error['phone']="số điện thoại đã được sử dụng";                
                }
                if($re_pass != $pass){
                    $error['re-pass'] = 'Password phải trùng khớp';
                }
              
                if(empty($error)){
                   
                    khach_hang_insert($pass, $ho_ten, $email,$sdt, $kichhoat, $vaitro);
                    echo ' <script> alert("Bạn đã đăng ký thành công ! Tiếp tục đăng nhập để truy cập vào website")</script>';            
                    include "view/acount/login.php";
                    break;
                }   
            }
            include "view/acount/register.php";
            break;

        case 'dangnhap':
            if (isset($_POST['login'])) {
                $mat_khau = $_POST['pass'];
                $ho_ten = $_POST['username'];
                $check_kh = khach_hang_check($mat_khau,$ho_ten);
                // var_dump($check_kh);
                // die();
                if(is_array($check_kh)){
                    $_SESSION['user']= $check_kh;
                    header("location:index.php");
                }else{
                    $thongbao ="Tài khoản hoặc mật khẩu không đúng!!!";                                                            
                }
               
            }
            include "view/acount/login.php";
            break;



              case 'quenmatkhau':
               
                if(isset($_POST['login'])){
                    
                    $forgotemail=$_POST['forgotemail'];
                    $forgotphone=$_POST['forgotphone'];
                    $error=[];
                    $check_forgot = check_emailphone($forgotemail,$forgotphone);
                 
                    if(is_array($check_forgot)){
                        
                        $mk= rand(0,999999);
                        $mkmoi= substr($mk,0,4);
                        update_matkhau($mkmoi,$forgotemail);
                        $thongbao="Mật khẩu mới của bạn đã được gửi về email của bạn. Hãy đăng nhập bằng mật khẩu mới !"; 
                        $tieude = "Thông báo từ Admin Rakida";
                      
                        $url = "https://script.google.com/macros/s/AKfycbzSNx9aPPupuEEtKTFtWyKxDDtE_xoER7gbj7gWI3GZpFGM0XZ9pEfKImn1fGTsY-RA/exec";
                        $ch = curl_init($url);
                        curl_setopt_array($ch, [
                           CURLOPT_RETURNTRANSFER => true,
                           CURLOPT_FOLLOWLOCATION => true,
                           CURLOPT_POSTFIELDS => http_build_query([
                              "recipient" => $forgotemail,
                              "subject"   => $tieude,
                              "body"      => 'Mật khẩu mới của bạn là: '.$mkmoi,
                           ])
                        ]);
                        $result = curl_exec($ch);

                    }else{
                       $thongbao ="Email hoặc số điện thoại không đúng";    
                    }
                }
                     
             
              

                include "view/acount/forgotpassword.php";
                break;
        case 'thoat':
                    session_unset();
                    header("location:index.php");
                    break;

        case 'addbd':
            if (isset($_POST['dangbai'])) {
                $error=[];
                if(isset($_SESSION['user'])) $id_kh=$_SESSION['user']['id_kh'];
                else $id_kh=0;
                $id_kh = $_SESSION['user']['id_kh'];
                $email = "donam04042003@gmail.com";
                // $ma_kh=$_SESSION['user']['ma_kh'];
                $ten_sp = $_POST['ten_sp'];
                $iddm = $_POST['iddm'];
                $iddd = $_POST['iddd'];
                $price = $_POST['price'];
                $address = $_POST['address'];
                $mo_ta = $_POST['mo_ta'];
                $dien_tich = $_POST['dien_tich'];
                $trang_thai = $_POST['trang_thai'];
                $goi_tin = $_POST['goi_tin'];            
                $hinh=$_FILES['hinh']['name'];
                $image = $_FILES['hinh'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if($ten_sp == ""){
                    $error['ten_sp'] = "Không được để trống";
                }
                if($iddm == "0"){
                    $error['iddm'] = "Không được để trống";
                }
                if($iddd == "0"){
                    $error['iddd'] = "Không được để trống";
                }
                if($price == ""){
                    $error['price'] = "Không được để trống";
                }
                if($address == ""){
                    $error['address'] = "Không được để trống";
                }
                if($mo_ta == ""){
                    $error['ten_sp'] = "Không được để trống";
                }
                if($dien_tich == ""){
                    $error['dien_tich'] = "Không được để trống";
                }
                if($image['size']<=0){
                    $error['hinh'] = "Không được để trống";
                }
                if ($_FILES['hinh']['size'] > 0) {
                    $ext = pathinfo($hinh, PATHINFO_EXTENSION);
                    if ($ext != 'jpg' && $ext != 'png' && $ext != "jpeg") {
                        $error['hinh'] = "file không phải ảnh";;
                    }
                }
                if(!$error){
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                $last_id=insert_bd($address, $price, $ten_sp, $mo_ta,$dien_tich,$trang_thai,$goi_tin,$hinh,$iddm,$iddd,$id_kh);
                }

                if(isset($_FILES['anh_mota'])){
                    $anh_mota=$_FILES['anh_mota'];
                    $anh_mota_name=$anh_mota['name'];
    
                    $target_dir="uploads/anh_phu/";
    
                    foreach($anh_mota_name as $key => $value){
                        move_uploaded_file($_FILES["anh_mota"]["tmp_name"][$key],$target_dir.$value);
                }
                if($anh_mota['size']<=0){
                    $error['anh_mota'] = "Không được để trống";
                }
                // if($_FILES['anh_mota']['size']>0){
                //     $ext = pathinfo($anh_mota_name, PATHINFO_EXTENSION);
                //     if ($ext != 'jpg' && $ext != 'png' && $ext != "jpeg") {
                //         $error['anh_mota'] = "file không phải ảnh";;
                //     }
                                                                                    
                // }
              
                }
                if(!$error){         
                    foreach($anh_mota_name as $value){
                        // move_uploaded_file($_FILES["anh_mota"]["tmp_name"],$target_dir.$value);
                        insert_anh($last_id,$value);
                    
                    }
                echo ' <script> alert("Bài viết của bạn cần được admin phê duyệt !")</script>';
              
            } 
         
            $tieude = "Thông báo về bài viết mới";
            $noidung = "Có một bài viết mới đăng cần bạn phê duyệt";
            $url = "https://script.google.com/macros/s/AKfycbzSNx9aPPupuEEtKTFtWyKxDDtE_xoER7gbj7gWI3GZpFGM0XZ9pEfKImn1fGTsY-RA/exec";
            $ch = curl_init($url);
            curl_setopt_array($ch, [
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_POSTFIELDS => http_build_query([
                  "recipient" => $email,
                  "subject"   => $tieude,
                  "body"      => $noidung,
               ])
            ]);
            $result = curl_exec($ch);
        
        }            
            include "view/SPduan/addbd.php";  
            break;  

        case 'CTduan':                              
                if(isset($_GET['id'])) {
                    $id = $_GET["id"];
                    $id_kh = $_GET["id_kh"];
                    $id_dd = $_GET["id_dd"];
                    $onesp = loadone_sanpham($id);
                    $onekh = loadSP_KH($id_kh);
                    $lay_diadiem =  loadSP_DD($id_dd);
                   
                    extract($onesp);
                    extract($onekh);
                    extract($lay_diadiem);
                    $sp_cung_loai=load_sanpham_cungloai($id,$id_loai);
                    $lay_img = layAnhMoTa($id);
                  
                    include "view/SPduan/CTduan.php";
                  
                }
                else{
                    include "home123.php";
                }
                
                break;
         
        case 'edit_taikhoan':
            if(isset($_POST['capnhat'])){
                $id_kh = $_POST['id_kh'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $mat_khau = $_POST['mat_khau'];
                $sdt = $_POST['sdt'];
                $hinh = $_POST['hinh'];
                $anh = $_FILES['img'];
                $img = $_FILES['img']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                $error=[];
                if($ho_ten==""){
                    $error['hoten']="Không được để trống";
                }
                if($email==""){
                    $error['email']="Không được để trống";
                }
                if($mat_khau==""){
                    $error['mat_khau']="Không được để trống";
                }
                if($sdt==""){
                    $error['sdt']="Không được để trống";
                }
                if($_FILES['img']['size']<=0){
                    $img = $hinh;
                }
                if($_FILES['img']['size']>0){
                    $ext=pathinfo($img,PATHINFO_EXTENSION);
                    if($ext !='jpg' && $ext !='png' && $ext !="jpeg"){
                          $error['hinh']="file không phải ảnh";;
                      
                    }
                }
                if(!$error){
                    move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                    update_sanpham($id_kh,$ho_ten,$email,$img,$mat_khau,$sdt);
                    $thongbao = 'Cập nhật thành công';
                            
                    include "view/myproperty/myproty.php";  
                 
                }
            }
            if(isset($_GET['id_kh'])){
                $id_kh = $_GET['id_kh'];
                $listBD_view =  loadall_BD_view($id_kh);              
            }                    
            include "view/myproperty/myproty.php";          
            break;

            case 'pheduyet':
                if(isset($_SESSION['user'])) $id_kh=$_SESSION['user']['id_kh'];
                else $id_kh=0;
                $id_kh = $_SESSION['user']['id_kh'];
                $listgoi = loadAll_goitin($id_kh);
                $listPheDuyet = BD_pheduyet($id_kh);
                include "view/myproperty/pheduyet.php";
            break;

            case 'chuaduyet':
                if(isset($_SESSION['user'])) $id_kh=$_SESSION['user']['id_kh'];
                else $id_kh=0;
                $id_kh = $_SESSION['user']['id_kh'];
                $listChuaDuyet = BD_chuaduyet($id_kh);
                include "view/myproperty/chuaduyet.php";
            break;


            case 'napcoin':
                if(isset($_POST['hoantat'])){
                    $id_kh = $_POST['id_kh'];
                    $so_coin = $_POST['so_coin'];
                    $hinh = $_FILES['img'];
                    $img = $_FILES['img']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    $error=[];
                    if($so_coin == "0"){
                        $error['so_coin'] = "Bạn phải chọn mức coin";
                    }
                    if($hinh['size']<=0){
                        $error['img'] = "File phải có ảnh";
                    }
                    if(!$error){
                        move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                        insert_coin($id_kh,$so_coin,$img);
                        echo ' <script> alert("Coin sẽ cộng cho bạn trong thời gian sớm nhất!")</script>';
                       
                    }                  
                }
                include "view/myproperty/napcoin.php";
                break;

            case 'LScoin':
                if(isset($_SESSION['user'])) $id_kh=$_SESSION['user']['id_kh'];
                else $id_kh=0;
                $id_kh = $_SESSION['user']['id_kh'];
                $listLScoin = LS_coin($id_kh);
                include "view/myproperty/LSnapcoin.php";
                break;
            
            case 'daytin':
                if(isset($_POST['daytin'])){
                    $id_kh = $_POST['id_kh'];
                    $id=$_POST['id_sp'];
                    $coin_old = $_POST['coin_old'];
                    $coin_new = $_POST['goi_tin'];
                    $hieu_coin = $coin_old - $coin_new;
                    date_default_timezone_set('ASIA/Ho_Chi_Minh');
                    $date = date('h:i:sa Y-m-d');
                    $error = [];
                    if($coin_old <1000){
                     $error['coin_old']= "Bạn không đủ tiền để đẩy tin! Số dư phải đủ 1000";

                    }
                    if(!$error){
                    update_giagoi($id,$coin_new);
                    update_goiKH($id_kh,$hieu_coin);
                    daytin_date($id,$date);
                    echo ' <script> alert("Đẩy tin thành công !")</script>';
                    }
                    
                }
                $listgoi = loadAll_goitin($id_kh);
                $listPheDuyet = BD_pheduyet($id_kh);
                include "view/myproperty/pheduyet.php";
                break;
            
            case 'duan_dacbiet':             
                $duan_dacbiet = sanpham_loadall_dac_biet();
                $listdanhmuc = loadall_danhmuc();
                $listdiadiem = loadall_diadiem();
                include "view/SPduan/duan_dacbiet.php";
                break;
            
            case 'duan_search':
                if(isset($_POST['tim'])){
                    $donGia=$_POST['donGia'];
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                    $iddd = $_POST['iddd'];
                
                }else{                  
                    $donGia=0;  
                    $kyw = '';
                    $iddm = 0;
                    $iddd = 0; 
                    // include "view/SPduan/duan_dacbiet.php";               
                }
                $duan_theoGia = loadall_bds_theoGia($donGia,$kyw,$iddm,$iddd);
             
                include "view/SPduan/duan_theoGia.php";
                break;



    }
} else {
    include 'head.php';
    include 'header.php';
    include 'home123.php';
    include 'footer.php';   
}





?>
