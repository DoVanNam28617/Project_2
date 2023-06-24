<?php
    function loadAll_goitin($id_kh){
        $sql = "select * from khach_hang where id_kh = $id_kh";
        $listgoitin = pdo_query($sql);
        return $listgoitin;
    }
    function update_goiKH($id_kh,$hieu_coin){
        $sql = "UPDATE `khach_hang` SET `coin`='$hieu_coin' WHERE id_kh=$id_kh";
        $listgoitin = pdo_query($sql);
        return $listgoitin;
    }
    function update_giagoi($id,$coin_new){
        $sql = "UPDATE `sp_duan` SET `goi_tin`='$coin_new',`dac_biet`='1' WHERE id=$id";
        $listgoitin = pdo_query($sql);
        return $listgoitin;
    }
?>