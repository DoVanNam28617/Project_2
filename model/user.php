<?php 
function khach_hang_select_all(){
   $sql = "SELECT * FROM khach_hang";
   return pdo_query($sql);
}

function khach_hang_insert($mat_khau, $ho_ten, $email, $sdt,$kich_hoat, $vai_tro){
   $sql = "INSERT INTO khach_hang(mat_khau, ho_ten, email, so_dth,kich_hoat, vai_tro) VALUES (?, ?, ?, ?, ?, ?, ?)";
   pdo_execute($sql,$mat_khau, $ho_ten, $email, $sdt, $kich_hoat==0, $vai_tro==0);
}

//  function checkten($tennguoidung,$matkhau){
//     $sql="select * from taikhoan where tennguoidung='".$tennguoidung."' AND matkhau='".$matkhau."'";
//     $sanpham=pdo_query_one($sql);
//     return $sanpham;
//  }
 function khach_hang_check($mat_khau,$ho_ten){
   $sql = "SELECT * FROM khach_hang WHERE mat_khau ='".$mat_khau."' AND ho_ten ='".$ho_ten."'";
   $sp = pdo_query_one($sql);
   return $sp;
}
 function update_taikhoan($id_kh,$mat_khau,$email,$ho_ten,$vai_tro,$kich_hoat)
 {
    
         $sql="update khach_hang set mat_khau='".$mat_khau."',email='".$email."',ho_ten='".$ho_ten."',kich_hoat='".$kich_hoat."',vai_tro='".$vai_tro."'  where id_kh=".$id_kh;
     
     pdo_execute($sql);
 }

function admin($a,$b){
   $sql="select * from admin where username='".$a."' AND password='".$b."'";
   $sanpham=pdo_query($sql);
   return $sanpham;
}
function loadone_taikhoan($id_kh){
   $sql="select * from khach_hang where id_kh=".$id_kh;
   $sp=pdo_query_one($sql);
   return $sp;
}
function delete_taikhoan($id_kh){
   $sql="delete from khach_hang where id_kh=".$id_kh;
   pdo_execute($sql);
}
function loadall_khachhang_moi(){
   $sql="select * from khach_hang where 1 order by id_kh desc limit 0,5";      
   $listkh=pdo_query($sql);
   return   $listkh;
}
function check_username($ho_ten){
   $sql="select * from khach_hang where ho_ten='".$ho_ten."'";
   // echo($sql);
   // die();
   $ho_ten=pdo_query_one($sql);
  
      return $ho_ten;
   
}
function check_email($email){
   $sql="select * from khach_hang where email ='".$email."'";
   // echo($sql);
   // die();
   $email=pdo_query_one($sql);
  return $email;

}
function check_phone($phone){
   $sql="select * from khach_hang where so_dth='".$phone."'";
   // echo($sql);
   // die();
   $phone=pdo_query_one($sql);
  
      return $phone;
   

}
function check_emailphone($email,$phone){
   $sql="select * from khach_hang where email='".$email."' AND so_dth ='".$phone."'";
   // echo($sql);
   // die();
   $email=pdo_query_one($sql);
  return $email;
}


function update_matkhau($mat_khau,$email)
 {
    
         $sql="update khach_hang set mat_khau='".$mat_khau."' where email='".$email."'";
     
     pdo_execute($sql);
 }
function khachhang_insert($username,$pass,$email,$vaitro){
   $sql= "INSERT INTO `khach_hang` (`id_kh`, `username`, `pass`, `email`, `vai_tro`)
    VALUES (NULL, '$username', '$pass', '$email','$vaitro')";
   pdo_execute($sql);
}
function loadSP_KH($id_kh){
   $sql="select * from khach_hang where id_kh=$id_kh";
   $listSPKH=pdo_query_one($sql);
   return $listSPKH;
}
function update_sanpham($id_kh,$ho_ten,$email,$img,$mat_khau,$sdt)
{
    
$sql="update khach_hang set ho_ten='".$ho_ten."',email='".$email."',img='".$img."',mat_khau='".$mat_khau."',so_dth='".$sdt."' where id_kh=".$id_kh;
 pdo_execute($sql);
}
function user_loadone($id_kh){
   $sql="select * from khach_hang where id_kh=".$id_kh;
   $bds=pdo_query_one($sql);
   return $bds;
}
function user_coin($id_kh_coin){
   $sql="select * from khach_hang where id_kh=".$id_kh_coin;
   $bds=pdo_query_one($sql);
   return $bds;
}
function select_email_oneKH($id_kh){
   $sql = "select  email from khach_hang where id_kh = $id_kh ";
   $lay_email = pdo_query_one($sql);
   // var_dump($lay_email);
   return $lay_email;
}


?>