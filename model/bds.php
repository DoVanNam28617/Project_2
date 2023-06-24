<?php 
/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
 function bds_insert($diachi, $hinhanh, $dientich, $giatien, $tensp, $mota, $trang_thai,$iddm,$iddd){
    $sql= "INSERT INTO sp_duan(dia_chi, hinh, dien_tich, don_gia, ten_sp, mo_ta,trang_thai,id_loai,id_dd) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$diachi, $hinhanh, $dientich, $giatien, $tensp, $mota, $trang_thai,$iddm,$iddd);
 }
 function insert_bd($address, $price, $ten_sp, $mo_ta,$dien_tich,$trang_thai,$goi_tin,$hinh,$iddm,$iddd,$id_kh){
   $sql= "INSERT INTO sp_duan(dia_chi, don_gia, ten_sp,mo_ta,dien_tich,trang_thai,goi_tin,hinh,id_loai,id_dd,id_kh) VALUES('$address',' $price', '$ten_sp', '$mo_ta','$dien_tich','$trang_thai','$goi_tin','$hinh',$iddm,$iddd,$id_kh)";
   return pdo_execute_get_lastInsertId($sql);
}

 function bds_delete($id){
    $sql = "delete from sp_duan where id=".$id;
    pdo_execute($sql);
 }

// function bds_dd($id_dd){
//    $sql = "SELECT b.*, h.id_dd FROM sp_duan b JOIN dia_diem h ON h.id_dd=b.id_dd ";
//    return pdo_query($sql, $id_dd);
// }
 function sanpham_loadall_top8(){
   $sql = "select * from sp_duan where dac_biet=1  order by id desc limit 0,12"; 
   $listsanpham=pdo_query($sql);
   return $listsanpham;
}
function sanpham_loadall_dac_biet(){
   $sql = "select * from sp_duan where dac_biet=1 and don_gia < 100 order by id desc "; 
   $listsanpham=pdo_query($sql);
   return $listsanpham;
}
// function sanpham_loadall_top4(){
//    $sql = "select * from sp_duan where dac_biet=1  order by id  limit 0,4"; 
//    $listsanpham=pdo_query($sql);
//    return $listsanpham;
// }
// function sanpham_loadall_comhan($kq,$moc){
//    $sql = "select * from sp_duan where dac_biet=1 and 'ngay_daytin = $kq' < '.$moc.' "; 
//    $listsanpham=pdo_query($sql);
//    var_dump($);
//    die();
//    return $listsanpham;
// }

// function sanpham_diadiem(){
//    $sql = "select * from san_pham where 1 order by id desc limit 0,6"; 
//    $listsanpham=pdo_query($sql);
//    return $listsanpham;
// }
 function sanpham_loadil_home(){
   $sql = "select * from sp_duan where 1 order by id desc limit 0,9"; 
   $listsanpham=pdo_query($sql);
   return $listsanpham;
}

 function bds_loadone($id){
    $sql="select * from sp_duan where id=".$id;
    $bds=pdo_query_one($sql);
    return $bds;
 }
 function load_tendm($id_loai){
   if($id_loai>0){
   $sql="select * from loai where id_loai=".$id_loai;
   $dm=pdo_query_one($sql);
   extract($dm);
   return $ten_loai;
   }else{
       return"";
   }
}
function load_tendd($id_dd){
   if($id_dd>0){
   $sql="select * from dia_diem where id_dd=".$id_dd;
   $dd=pdo_query_one($sql);
   extract($dd);
   return $ten_dd;
   }else{
       return"";
   }
}
//  function sanpham_load_cungloai($id,$iddm){
//    $sql="select * from sp_duan where id_loai=".$iddm." AND id <>".$id;
//    $listsanpham=pdo_query($sql);
//    return $listsanpham;
// }
 function  bds_update($diachi, $hinhanh, $dientich, $giatien, $tensp, $mota, $iddm, $id){
  
      $sql = "UPDATE sp_duan SET dia_chi = '$diachi', hinh = '$hinhanh', dien_tich = '$dientich', don_gia = '$giatien', ten_sp = '$tensp', mo_ta = '$mota' , id_loai = $iddm WHERE id=".$id;
  
   // echo $sql;
   // die();
   pdo_execute($sql);
     
 }
 function loadall_BD_dacbiet(){
   $sql = "select * from sp_duan where dac_biet=1";
   $listBD=pdo_query($sql);
   return $listBD;
 }
 function loadall_BD_thuong(){
   $sql = "select * from sp_duan where dac_biet=0 and trang_thai=1";
   $listBD=pdo_query($sql);
   return $listBD;
 }
 function loadall_BD(){
   $sql = "select * from sp_duan where trang_thai=0";
   $listBD=pdo_query($sql);
   return $listBD;
 }
 function loadall_bds($donGia,$kyw,$iddm,$iddd){
   $sql="select * from sp_duan where trang_thai=1";
   if($donGia==10){
      $sql.=" and don_gia <=10";
  }
  if($donGia==20){
     $sql.=" and don_gia >10 and don_gia <=20 ";
  }
  if($donGia==30){
     $sql.=" and don_gia > 20 and don_gia <= 30 ";
 }
  if($donGia==50){
  $sql.=" and don_gia <=50";
  }

   if($kyw!=""){
       $sql.=" and ten_sp like '%".$kyw."%'";
   }
   if($iddm>0){
       $sql.=" and id_loai ='".$iddm."'";
   }
   if($iddd>0){
      $sql.=" and id_dd ='".$iddd."'";
  }
   $listsanpham=pdo_query($sql);
   return   $listsanpham;
}

function loadall_bds_theoGia($donGia,$kyw,$iddm,$iddd){
   // var_dump($donGia);
   // die();
   $sql="select * from sp_duan where dac_biet=1";
   if($kyw!=""){
      $sql.=" and ten_sp like '%".$kyw."%'";
  }
  if($iddm>0){
      $sql.=" and id_loai ='".$iddm."'";
  }
  if($iddd>0){
     $sql.=" and id_dd ='".$iddd."'";
   } 

   if($donGia==10){
       $sql.=" and don_gia <=10";
   }
   if($donGia==20){
      $sql.=" and don_gia >10 and don_gia <=20 ";
   }
   if($donGia==30){
      $sql.=" and don_gia > 20 and don_gia <= 30 ";
  }
   if($donGia==50){
   $sql.=" and don_gia <=50";
   }

   
   $listsanpham=pdo_query($sql);
   return   $listsanpham;
}

function loadall_duan_moi(){
   $sql="select * from sp_duan where 1 order by id desc limit 0,5";      
   $listduan=pdo_query($sql);
   return  $listduan;
}
function loadall_duan_binhtuong(){
   $sql="select * from sp_duan where dac_biet = 0 order by id desc limit  0,8";      
   $listduan=pdo_query($sql);
   return  $listduan;
}
function loadall_duan_binhtuong_part2(){
   $sql="select * from sp_duan where dac_biet = 0 order by id asc limit 0,8";      
   $listduan=pdo_query($sql);
   return  $listduan;
}
function load_sanpham_cungloai($id,$iddm){
   $sql="select * from sp_duan where id_loai = ".$iddm." AND id <>".$id;
   $sp_cung_loai=pdo_query($sql);
   return   $sp_cung_loai;
}
function loadone_sanpham($id){
   $sql="select * from sp_duan where id=".$id;
   $sp=pdo_query_one($sql);
   return $sp;
}
function listbds_kh($id_kh){
   $sql = "select * from khach_hang where id_kh= $id_kh";
   // echo $sql;
   // die();
   $sp_dd=pdo_query($sql);
   return $sp_dd;
}
function layAnhMoTa($id){
   $sql = "select * from image where id_sp = '$id'";
   $imgMT = pdo_query($sql);
   return $imgMT;
}
function insert_anh($last_id,$value){
   $sql="INSERT INTO image(id_sp,anh)  VALUES(?,?)";
   pdo_execute($sql,$last_id,$value);
}
function bds_pheduyet($id,$date){
   $sql="UPDATE `sp_duan` SET `ngay_duyet`='$date',`trang_thai`='1' WHERE id=$id";
   pdo_execute($sql);
   // var_dump($date);
}
function daytin_date($id,$date){
   $sql="UPDATE `sp_duan` SET `ngay_daytin`='$date' WHERE id=$id";
   pdo_execute($sql);
   // var_dump($date);
}
function BD_pheduyet($id_kh){
   $sql = "select * from sp_duan where trang_thai = 1 having id_kh=$id_kh ";
   $listphedyet = pdo_query($sql);
   return $listphedyet;
}
function BD_chuaduyet($id_kh){
   $sql = "select * from sp_duan where trang_thai = 2 having  id_kh=$id_kh ";
   $listphedyet = pdo_query($sql);
   return $listphedyet;
}
function update_liDo($id,$li_do){
   $sql= "UPDATE `sp_duan` SET `li_do`='$li_do',`trang_thai`='2' WHERE id=$id";
   pdo_execute($sql);
}
function loadall_BDloi(){
   $sql = "select * from sp_duan where trang_thai=2";
   $listBD=pdo_query($sql);
   return $listBD;
 }
 function loadall_BD_view($id_kh){
   $sql = "select * from sp_duan where id_kh=$id_kh";
   $listBD=pdo_query($sql);
   return $listBD;
 }
 function updateAnh_mota($id,$value){
   $sql = "update image set anh = '$value' where id_sp=$id";
   pdo_execute($sql);
 }
 function delete_anhMT($id){
   $sql = "DELETE FROM `image` WHERE id_sp=$id";
   pdo_execute($sql);
 }
 function thongke(){
   $sql = "SELECT loai.id_loai as idloai, loai.ten_loai as tenloai, count(sp_duan.id) as countduan, min(sp_duan.don_gia) as mingia, max(sp_duan.don_gia) as maxgia, avg(sp_duan.don_gia) as avggia from sp_duan left join loai on loai.id_loai = sp_duan.id_loai group by loai.id_loai order by loai.id_loai desc";
   $dstk = pdo_query($sql);
   return $dstk;
 }
?>