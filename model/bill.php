<?php 

    function loadall_bill(){
        // $sql = "SELECT * from hang_hoa WHERE 1";
        // if ($kyw!="") {
        //     $sql.=" and name like '%".$kyw."%'";
        // }
        // if ($iddm>0) {
        //     $sql.=" and iddm ='".$iddm."'";
        // }
        $sql = "SELECT * from don_hang order by ma_dh desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function delete_bill($ma_dh){
        $sql = "DELETE FROM don_hang WHERE ma_dh=".$ma_dh;
        pdo_execute($sql);
    }
    function taodonhang($nguoi_nhan,$dia_chi_nhan,$sdt_nhan,$payment,$email,$ma_tk){
     
        $sql = "INSERT INTO don_hang (nguoi_nhan,dia_chi_nhan,sdt_nhan,payment,email ,ma_tk)
            VALUES ('$nguoi_nhan','$dia_chi_nhan','$sdt_nhan','$payment','$email','$ma_tk')";
        pdo_execute($sql);
                      
    }
    
    
?>