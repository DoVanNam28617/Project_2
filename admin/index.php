<!-- controller admin -->
<?php
include "../model/pdo.php";
include "../model/bds.php";
include "../model/coin.php";
include "../model/danhmucbds.php";
include "../model/diadiem.php";
include "../model/user.php";
include "header.php";
// require "../mail/sendmail.php";

$dmNew = loadall_danhmuc_moi();
$khNew = loadall_khachhang_moi();
$duanNew = loadall_duan_moi();
$allduan = loadall_bds("","", 0, 0);
$list_dd=bds_dd();
$dstk = thongke();



if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        //Thêm danh mục BĐS
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $error = [];
                if ($tenloai == "") {
                    $error['name'] = "Không đươc để trống";
                }
                if (!$error) {
                    danhmuc_insert($tenloai);
                    $thongbao = "Thêm thành công";
                }
            }
            include "danhmucbds/add.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmucbds/list.php";
            break;

        case 'suadm':
            if (isset($_GET["id_loai"]) && ($_GET["id_loai"]) > 0) {

                $dm = danhmuc_loadone($_GET["id_loai"]);
            }

            include "danhmucbds/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_loai = $_POST['ten_loai'];
                $id_loai = $_POST['id_loai'];
                $error = [];
                if ($ten_loai == "") {
                    $error['name'] = "Không đươc để trống";
                }
                if (!$error) {
                    danhmuc_update($ten_loai, $id_loai);
                    $listdanhmuc = loadall_danhmuc();
                    $thongbao = 'Thêm thành công';
                    include "danhmucbds/list.php";
                } else {
                    $dm = danhmuc_loadone($id_loai);
                    include "danhmucbds/update.php";
                }
            }

            break;


        case 'xoadm':
            if (isset($_GET["id_loai"]) && ($_GET["id_loai"]) > 0) {
                danhmuc_delete($_GET["id_loai"]);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmucbds/list.php";
            break;

        case 'listdiadiem':
            $listdiadiem = loadall_diadiem();
            include "quantridiadiem/list.php";
            break;

        case 'adddd':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendd = $_POST['tendd'];
                $error = [];
                if ($tendd == "") {
                    $error['name'] = "Không đươc để trống. ";
                }
                if (!$error) {
                    diadiem_insert($tendd);
                    $thongbao = "Thêm thành công";
                }
            }
            include "quantridiadiem/add.php";
            break;

        case 'suadd':
            if (isset($_GET["id_dd"]) && ($_GET["id_dd"]) > 0) {

                $dd = diadiem_loadone($_GET["id_dd"]);
            }

            include "quantridiadiem/update.php";
            break;

        case 'updatedd':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_dd = $_POST['ten_dd'];
                $id_dd = $_POST['id_dd'];
                $error = [];
                if ($ten_dd == "") {
                    $error['name'] = "Không đươc để trống";
                }
                if (!$error) {
                    diadiem_update($ten_dd, $id_dd);
                    $listdiadiem = loadall_diadiem();
                    $thongbao = 'Thêm thành công';
                    include "quantridiadiem/list.php";
                } else {
                    $dd = diadiem_loadone($id_dd);
                    include "quantridiadiem/update.php";
                }
            }

            break;

        case 'listuser':
            $listtaikhoan = khach_hang_select_all();
            include "quantriuser/listuser.php";
            break;

        case 'addkh':
            if (isset($_POST['themmoi'])) {
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = $_POST['mat_khau'];
                $re_pass = $_POST['re-pass'];
                $email = $_POST['email'];
                $vai_tro = $_POST['vai_tro'];
                $kich_hoat = $_POST['kich_hoat'];
                $error = [];
                if ($ho_ten == "") {
                    $error['ho_ten'] = "Không đươc để trống";
                }
                if ($mat_khau == "") {
                    $error['mat_khau'] = "Không đươc để trống";
                }
                if ($re_pass == "") {
                    $error['re-pass'] = "Không đươc để trống";
                }
                if ($re_pass != $mat_khau) {
                    $error['re-pass'] = "Mật khẩu phải khớp nhau";
                }
                if ($email == "") {
                    $error['email'] = "Không đươc để trống";
                }
                if ($vai_tro == "") {
                    $error['vai_tro'] = "Không đươc để trống";
                }
                if ($kich_hoat == "") {
                    $error['kich_hoat'] = "Không đươc để trống";
                }
                if (!$error) {
                    khach_hang_insert($mat_khau, $ho_ten, $email,$img, $sdt, $kich_hoat, $vai_tro);
                    $thongbao = "thêm thành công";
                }
            }
            include "quantriuser/add.php";
            break;

        case 'suakh':
            if (isset($_GET["id_kh"]) && ($_GET["id_kh"]) > 0) {
                $taikhoan = loadone_taikhoan($_GET["id_kh"]);
            }
            include "quantriuser/update.php";
            break;

        case 'updatekh':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_kh = $_POST['id_kh'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $ho_ten = $_POST['ho_ten'];
                $vai_tro = $_POST['vai_tro'];
                $kich_hoat = $_POST['kich_hoat'];
                $error = [];
                if ($ho_ten == "") {
                    $error['ho_ten'] = "Không đươc để trống";
                }
                if ($mat_khau == "") {
                    $error['mat_khau'] = "Không đươc để trống";
                }
                if ($email == "") {
                    $error['email'] = "Không đươc để trống";
                }
                if ($vai_tro == "") {
                    $error['vai_tro'] = "Không đươc để trống";
                }
                if ($kich_hoat == "") {
                    $error['kich_hoat'] = "Không đươc để trống";
                }
                if (!$error) {
                    update_taikhoan($id_kh, $mat_khau, $email, $ho_ten, $vai_tro, $kich_hoat);

                    $thongbao = 'Cập nhật thành công';
                    $listtaikhoan = khach_hang_select_all("", 0);
                    include "quantriuser/listuser.php";
                } else {
                    $taikhoan = loadone_taikhoan($id_kh);
                    include "quantriuser/update.php";
                }
            }

            break;

        case 'xoakh':
            if (isset($_GET["id_kh"]) && ($_GET["id_kh"]) > 0) {
                delete_taikhoan($_GET["id_kh"]);
            }
            $listtaikhoan = khach_hang_select_all("", 0);
            include "quantriuser/listuser.php";
            break;
        case 'listbds':
            if (isset($_POST['listgo']) && ($_POST['listgo'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
                $iddd = $_POST['iddd'];
            } else {
                $kyw = '';
                $iddm = 0;
                $iddd = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listdiadiem = loadall_diadiem();
            $bds = loadall_bds("",$kyw, $iddm, $iddd);
            include "bds/list.php";
            break;
        case 'addsp':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $diachi = $_POST['diachi'];
                $dientich = $_POST['dientich'];
                $mota = $_POST['mota'];
                $trang_thai = $_POST['trang_thai'];
                $iddd = $_POST['iddd'];
                $giatien = $_POST['giatien'];
                $hinhanh = $_FILES['anh']['name'];
                $images = $_FILES['anh'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                $error = [];
                if ($tensp == "") {
                    $error['tensp'] = "Không được để trống";
                }
                if ($iddm == "0") {
                    $error['iddm'] = "Không được để trống";
                }
                if ($iddd == "0") {
                    $error['iddd'] = "Không được để trống";
                }
                if ($diachi == "") {
                    $error['diachi'] = "Không được để trống";
                }
                if ($dientich == "") {
                    $error['dientich'] = "Không được để trống";
                }
                if ($mota == "") {
                    $error['mota'] = "Không được để trống";
                }
                if ($giatien == "") {
                    $error['giatien'] = "Không được để trống";
                }
                if ($images['size'] <= 0) {
                    $error['anh'] = "Không được để trống";
                }
                if ($_FILES['anh']['size'] > 0) {
                    $ext = pathinfo($hinhanh, PATHINFO_EXTENSION);
                    if ($ext != 'jpg' && $ext != 'png' && $ext != "jpeg") {
                        $error['hinh'] = "file không phải ảnh";;
                    }
                }
                if (!$error) {
                    move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
                    bds_insert($diachi, $hinhanh, $dientich, $giatien, $tensp, $mota, $trang_thai, $iddm, $iddd);
                    $thongbao = 'Thêm thành công';
                }
            }
            $listdanhmuc = loadall_danhmuc();
            $listdiadiem = loadall_diadiem();
            include "bds/add.php";
            break;
        case 'xoasp':
            if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                bds_delete($_GET["id"]);
            }
            $bds = loadall_bds("","", 0, 0);
            include "bds/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                $bdsone = bds_loadone($_GET['id']);
            }
            $lay_img = layAnhMoTa($id);
            $listdanhmuc = loadall_danhmuc();
            $listdiadiem = loadall_diadiem();
            include "bds/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['submit']) && ($_POST['submit'])) {

                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $iddd = $_POST['iddd'];
                $tensp = $_POST['tensp'];
                $diachi = $_POST['diachi'];
                $dientich = $_POST['dientich'];
                $mota = $_POST['mota'];
                $giatien = $_POST['giatien'];
                $hinhanh = $_FILES['anh']['name'];
                $images = $_FILES['anh'];
                $anh = $_POST['img'];
                $size = 8000000;
                $target_dir = "../uploads/";
                // die;
                $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                $error = [];
                if ($tensp == "") {
                    $error['tensp'] = "Không được để trống";
                }
                if ($iddm == "0") {
                    $error['iddm'] = "Không được để trống";
                }
                if ($iddd == "0") {
                    $error['iddd'] = "Không được để trống";
                }
                if ($diachi == "") {
                    $error['diachi'] = "Không được để trống";
                }
                if ($dientich == "") {
                    $error['dientich'] = "Không được để trống";
                }
                if ($mota == "") {
                    $error['mota'] = "Không được để trống";
                }
                if ($giatien == "") {
                    $error['giatien'] = "Không được để trống";
                }
                if ($_FILES['anh']['size'] <= 0) {
                    $hinhanh = $anh;
                }
                if ($_FILES['anh']['size'] > 0) {
                    $ext = pathinfo($hinhanh, PATHINFO_EXTENSION);
                    if ($ext != 'jpg' && $ext != 'png' && $ext != "jpeg") {
                        $error['hinh'] = "file không phải ảnh";;
                    }
                }
            
                if (!$error) {
                    move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
                    bds_update($diachi, $hinhanh, $dientich, $giatien, $tensp, $mota, $iddm, $id);                 
                
                } 

                if(isset($_FILES['anh_mota'])&&isset($id)){
                    $anh_mota=$_FILES['anh_mota'];
                    $anh_mota_name=$anh_mota['name'];  
                    $target_dir="../uploads/anh_phu/"; 
                    
                   if(!empty($anh_mota_name[0])){
                        delete_anhMT($id);
                   
                    foreach($anh_mota_name as $key => $value){
                        insert_anh($id,$value);;   
                        move_uploaded_file($_FILES["anh_mota"]["tmp_name"][$key],$target_dir.$value);
                    }
                   
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listdiadiem = loadall_diadiem();
                    $bds = loadall_bds("", "",0, 0);
                    include "bds/list.php";

                }else {
                    $lay_img = layAnhMoTa($id);
                    $listdanhmuc = loadall_danhmuc();
                    $listdiadiem = loadall_diadiem();
                    $bdsone = bds_loadone($id);
                    include "bds/update.php";
                }
            }
                   
            break;

        case 'listbd':
            $listBD = loadall_BD();
            include "quantribd/list.php";
            break;

        case 'xoabd':
                if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                    bds_delete($_GET["id"]);
                }
                // $bds = loadall_bds("", 0, 0);
                $listBD = loadall_BD();;
                include "quantribd/list.php";
                break;

        case 'pheduyetsp':
            if (isset($_GET["id"]) && ($_GET['id_kh'])) {
               
                $id_kh = $_GET['id_kh'];
                $email = select_email_oneKH($id_kh);
                $error=[];
                $id=$_GET['id'];
                $bds = bds_loadone($id);
                extract($bds);
                $khach_hang = loadone_taikhoan($id_kh);
                extract($khach_hang);
                date_default_timezone_set('ASIA/Ho_Chi_Minh');
                $date = date('h:i:sa Y-m-d');
                bds_pheduyet($id,$date);
                $tieude = "Thông báo về bài viết được phê duyệt";
                $noidung = "Một bài viết của bạn đã được phê duyệt";
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
        
            $listBD = loadall_BD();
            include "quantribd/list.php";
            break;

        case 'nd_Kduyet':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $id=$_GET['id'];
                    $bdone = bds_loadone($id);
                }
                include "quantribd/lido_duyet.php";
                break;

        case 'lido_Kduyet':
            if(isset($_POST['xac_nhan'])){
                $id = $_POST['id'];
                $li_do = $_POST['li_do'];
                $email = $_POST['email'];
                $tieude = "Bài viết mới của bạn không được phê duyệt";
                // $noidung = "Một bài viết của bạn đã được phê duyệt";
                $url = "https://script.google.com/macros/s/AKfycbzSNx9aPPupuEEtKTFtWyKxDDtE_xoER7gbj7gWI3GZpFGM0XZ9pEfKImn1fGTsY-RA/exec";
                $ch = curl_init($url);
                curl_setopt_array($ch, [
                   CURLOPT_RETURNTRANSFER => true,
                   CURLOPT_FOLLOWLOCATION => true, 
                   CURLOPT_POSTFIELDS => http_build_query([
                      "recipient" => $email,
                      "subject"   => $tieude,
                      "body"      => 'Lí do: '.$li_do,
                   ])
                ]);
                $result = curl_exec($ch);
                update_liDo($id,$li_do);
        }
            $listBD = loadall_BD();
            include "quantribd/list.php";
            break;

        case 'BDloi':
            $list_BDloi =  loadall_BDloi();
            include "Bdchuaduyet/list.php";
            break;

         case 'xoabdchuaduyet':
                if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                    bds_delete($_GET["id"]);
                }
                // $bds = loadall_bds("", 0, 0);
                $list_BDloi =  loadall_BDloi();
                include "Bdchuaduyet/list.php";
                break;

        case 'listcoin':
            $listCoin =  loadAll_LScoin();         
            include "coin/list.php";
            break;

         case 'nap_coin':
                if (isset($_GET['id_kh']) && ($_GET['id'])>0) {
                    $id_kh=($_GET['id_kh']);
                    $id=($_GET['id']);
                    $khone = loadone_KH($id_kh);
                    $coinone = loadAll_idcoin($id);
                }
                include "coin/napcoin.php";
                break;

        case 'xoacoin':
                    if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                        coin_delete($_GET["id"]);
                    }
                    // $bds = loadall_bds("", 0, 0);
                    $listCoin =  loadAll_LScoin();         
                    include "coin/list.php";
                    break;
                    
        case 'duyet_coin':
                if (isset($_POST["hoan_tat"])) {
                    $id_kh=$_POST['id_kh'];
                    $email = $_POST['email'];
                    $id = $_POST['id'];
                    $coinOld = $_POST['coinOld'];
                    $coinNew = $_POST['coinNew'];
                    $tongCoin = $coinOld + $coinNew;
                    // var_dump($tongCoin);
                    update_coin($id_kh,$tongCoin);
                    update_LScoin($id);              
                    echo ' <script> alert("Nạp coin thành công!")</script>';
                }
                $tieude = "Thông báo từ Admin Rakida";
                $noidung = "Coin bạn đã nạp thành công!";
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
                $listCoin =  loadAll_LScoin(); 
                include "coin/list.php";
                break;
        case 'thongke':
                include "thongke/home.php";
                break;
    }
} else {
    include "thongke/home.php";
}
include "foodter.php"

?>