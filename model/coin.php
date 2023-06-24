<?php
    function insert_coin($id_kh,$so_coin,$img){
        $sql = "insert into lich_su_coin(id_kh,anh,so_coin) values ('$id_kh','$img','$so_coin')";
        pdo_execute($sql);
    }
    function loadAll_LScoin(){
        $sql = "select * from lich_su_coin where trang_thai = 0 ";
        $coin = pdo_query($sql);
        return $coin;
    }
    function loadAll_idcoin($id){
        $sql = "select * from lich_su_coin where id=$id";
        $coin = pdo_query($sql);
        return $coin;
    }
    function loadone_kh($id_kh){
        $sql = "select * from khach_hang where id_kh=$id_kh";
        $coin = pdo_query_one($sql);
        return $coin;
    }

    function coin_delete($id){
        $sql = "delete from lich_su_coin where id=".$id;
        pdo_execute($sql);
     }
    function update_coin($id_kh,$tongCoin){
        $sql= "UPDATE `khach_hang` SET `coin`='$tongCoin' WHERE id_kh=$id_kh";
        pdo_execute($sql);

     }
     function update_LScoin($id){
        $sql= "UPDATE `lich_su_coin` SET `trang_thai`='1' WHERE id=$id";
        pdo_execute($sql);

     }
     function LS_coin($id_kh){
        $sql = "select * from lich_su_coin where trang_thai = 1 having   id_kh=$id_kh ";
        $listLscoin = pdo_query($sql);
        return $listLscoin;
     }
?>