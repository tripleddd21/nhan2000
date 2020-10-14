<?php
    require_once 'pdo.php';

    function loai_tour_insert($tenloaitour,$sort){
        $sql = "INSERT INTO loai_tour(Ten_loaitour,Sort) VALUES(?,?)";
        pdo_execute($sql, $tenloaitour,$sort);
    }

    function loai_tour_update($maloaitour,$tenloaitour,$sort){
        $sql = "UPDATE loai_tour SET Ten_loaitour=? , Sort = ?  WHERE 	Ma_loaitour =?";
        pdo_execute($sql, $tenloaitour, $sort, $maloaitour);
    }

    function loai_tour_delete($maloaitour){
        $sql = "DELETE FROM loai_tour WHERE Ma_loaitour=?";
        if(is_array($maloaitour)){
            foreach ($maloaitour as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $maloaitour);
        }
    }

    function loai_tour_select_all(){
        $sql = "SELECT * FROM loai_tour ORDER BY Sort DESC";
        return pdo_query($sql);
    }

    function loai_tour_select_by_id($maloaitour){
        $sql = "SELECT * FROM loai_tour WHERE Ma_loaitour=?";
        return pdo_query_one($sql, $maloaitour);
    }

    function loai_tour_exist($maloaitour){
        $sql = "SELECT count(*) FROM loai_tour WHERE Ma_loaitour=?";
        return pdo_query_value($sql, $maloaitour) > 0;
    }

?>
