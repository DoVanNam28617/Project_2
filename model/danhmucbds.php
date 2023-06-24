<?php 
/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
 function danhmuc_insert($tenloai){
    $sql= "insert into loai (ten_loai) values ('$tenloai')";
    pdo_execute($sql);
 }
 function loadall_danhmuc(){
   $sql="select * from loai ";
   $listdanhmuc=pdo_query($sql);
   return   $listdanhmuc;
}
 function danhmuc_delete($id_loai){
    $sql = "delete from loai where id_loai=".$id_loai;
    pdo_execute($sql);
 }
 function danhmuc_loadil(){
    $sql = "select * from danhmuc order by id_loai desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
 }
 function danhmuc_loadone($id_loai){
    $sql="select * from loai where id_loai=".$id_loai;
    $danhmuc=pdo_query_one($sql);
    return $danhmuc;
 }
 function danhmuc_update($ten_loai,$id_loai){
    $sql = "update loai set ten_loai = '$ten_loai' where id_loai = ".$id_loai;
   //  echo $sql;
   // die();
    pdo_execute($sql);
 }
 function loadall_danhmuc_moi(){
   $sql="select * from loai where 1 order by id_loai desc limit 0,5";      
   $listdanhmuc=pdo_query($sql);
   return   $listdanhmuc;
}

?>