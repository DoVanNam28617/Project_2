<?php 
/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
 function diadiem_insert($ten_dd){
    $sql= "insert into dia_diem (ten_dd) values ('$ten_dd')";
    pdo_execute($sql);
 }
 function loadall_diadiem(){
   $sql="select * from dia_diem ";
   $listdiadiem=pdo_query($sql);
   return   $listdiadiem;
}



 function diadiem_loadone($id_dd){
    $sql="select * from dia_diem where id_dd=".$id_dd;
    $diadiem=pdo_query_one($sql);
    return $diadiem;
 }
 function diadiem_update($ten_dd,$id_dd){
    $sql = "update dia_diem set ten_dd = '$ten_dd' where id_dd = ".$id_dd;
   //  echo $sql;
   // die();
    pdo_execute($sql);
 }
//  function loadall_danhmuc_moi(){
//    $sql="select * from loai where 1 order by id_loai desc limit 0,5";      
//    $listdanhmuc=pdo_query($sql);
//    return   $listdanhmuc;
// }
function bds_dd(){
   $sql = "select dia_diem.id_dd, dia_diem.ten_dd,   
   count(sp_duan.id) as soluong, max(sp_duan.hinh) as img 
    from sp_duan join dia_diem on dia_diem.id_dd=sp_duan.id_dd  
    where trang_thai=1 
    group by dia_diem.id_dd 
    order by dia_diem.id_dd  ";
   // echo $sql;
   // die();
   $sp_dd=pdo_query($sql);
   return $sp_dd;
}
function loadSP_DD($id_dd){
   $sql = "select * from dia_diem where id_dd=$id_dd";
   $listone_DD = pdo_query_one($sql);
   return $listone_DD;
}
?>