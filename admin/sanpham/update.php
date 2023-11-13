<?php
    if (is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if (is_file($hinhpath)) {
        $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
    $hinh="No img";
    }
?>
<div class="row">
            <div class="row frmtitle">
                 <H1>CẬP NHẬT SẢN PHẨM</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatesp" method="post" style="height: 150px;" enctype="multipart/form-data"   >
                  <div class="row mb10"> 
                  
               <select name="iddm">
                <option value="0" selected>Tất Cả</option>
                <?php
                foreach($listdanhmuc as $danhmuc){
                    if ($iddm==$danhmuc['id']) 
                    echo '<option value="'.$danhmuc['id'].'" selected>'.$danhmuc['name'].'</option>';
                    else echo '<option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                }
                ?>
            </select>
                </div>
                <div class="row mb10"> 
                    Tên sản phẩm<br>
                    <input type="text" name="tensp" value="<?=$name?>">
                </div>
                <div class="row mb10"> 
                    Giá sản phẩm<br>
                    <input type="text" name="giasp" value="<?=$price?>">
                </div>
                <div class="row mb10"> 
                    Hình ảnh<br>
                    <input type="file" name="hinh" value=""><?=$hinh?>
                </div>
                <div class="row mb10"> 
                    Mô tả<br>
                   <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                </div>
                <div class="row  in">
                    <input type="hidden" name="id" value="<?=$id?>">
                 <input type="submit" name="capnhat" value="Cập nhật">
                 <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a> 
                </div>
                <?php 
                if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                </form>
            </div>
        </div>
        </div>