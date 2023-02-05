<?php
    namespace App\Models;
    
    class Products extends BaseModels {
        var $table = "hang_hoa hh";

        public static function special() {
            $model = new static;
            $sql = "SELECT * FROM " . $model -> table . " WHERE special = 1";
            $stmt = $model -> conn -> prepare($sql);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        public static function mostView() {
            $model = new static;
            $sql = "SELECT * FROM " . $model -> table . " ORDER BY luotxem DESC";
            $stmt = $model -> conn -> prepare($sql);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        public static function loadall_product_asc() {
            $model = new static;
            $sql = "SELECT * FROM " . $model -> table . " ORDER BY price_old";
            $stmt = $model -> conn -> prepare($sql);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        public static function loadall_product_desc() {
            $model = new static;
            $sql = "SELECT * FROM " . $model -> table . " ORDER BY price_old DESC";
            $stmt = $model -> conn -> prepare($sql);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        public static function loadone_product($id) {
            $model = new static;
            $cate = new Categories();
            $sql = "SELECT * FROM " . $model -> table . " join " . $cate -> table . " ON iddm = ma_loai WHERE id = " . $id;
            $stmt = $model -> conn -> prepare($sql);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

        public static function filter_sanpham($iddm) {
            $model = new static;
            $sql = "SELECT * FROM " . $model -> table . " WHERE iddm = " . $iddm;
            $stmt = $model -> conn -> prepare($sql);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }
    }

    // function insert_sanpham($tensp,$giasp,$giaspnew,$hinh,$mota,$iddm){
    //     $sql = "INSERT INTO hang_hoa (name, price_old, price_new, img, mota, iddm)
    //     VALUES ('$tensp', '$giasp', '$giaspnew', '$hinh', '$mota', '$iddm')";
    //     pdo_execute($sql);
    // }
    // function delete_sanpham($id){
    //     $sql = "DELETE FROM hang_hoa WHERE id=".$id;
    //     pdo_execute($sql);
    // }
    // function loadall_sanpham_home(){
        
    //     $sql = "SELECT * from hang_hoa WHERE 1 order by id desc limit 9";   //load 8 sản phẩm
        
    //     $listsanpham = pdo_query($sql);
    //     return $listsanpham;
    // }
    // function giohang_sanpham($ma_hh){
    //     $sql = "SELECT * FROM hang_hoa hh WHERE hh.id = ".$ma_hh;
    //     $sanpham = pdo_query($sql);
    //     return $sanpham;
    // }
    // // function update_sanpham($id,$tensp,$giasp,$mota,$hinh,$iddm){
    // function update_sanpham($id,$tensp,$giasp,$giaspnew,$mota,$hinh,$trang_thai){
    //     if($hinh!="")
    //         // $sql = "UPDATE hang_hoa SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' WHERE id=".$id;
    //         $sql = "UPDATE hang_hoa SET name='".$tensp."',price_old='".$giasp."',price_new='".$giaspnew."',mota='".$mota."',img='".$hinh."',trang_thai='".$trang_thai."' WHERE id=".$id;
    //     else
    //         // $sql = "UPDATE hang_hoa SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."' WHERE id=".$id;
    //         $sql = "UPDATE hang_hoa SET name='".$tensp."',price_old='".$giasp."',price_new='".$giaspnew."',mota='".$mota."',trang_thai='".$trang_thai."' WHERE id=".$id;
    //     pdo_execute($sql);
    // }
    // function updateview($id) {
    //     $sql = "UPDATE hang_hoa SET luotxem = luotxem + 1 WHERE id=".$id;
    //     pdo_execute($sql);
    // }
    // function load_ten_dm($iddm){
    //     if($iddm>0){
    //         $sql="select * from hang_hoa where id=".$iddm;
    //         $dm=pdo_query_one($sql);
    //         extract($dm);
    //         return $name;

    //     } else {
    //         return "";
    //     }
    // }
    
?>