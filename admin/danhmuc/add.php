<div class="row">
            <div class="row frmtitle">
                 <H1>THÊM MỚI LOẠI HÀNG HÓA</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post" style="height: 150px;"   >
                  <div class="row mb10">  Mã loại <br>
                    <input type="text" name="maloai" id="" disabled >
                </div>
                <div class="row mb10"> 
                    Tên loại <br>
                    <input type="text" name="tenloai">
                </div>
                <div class="row  in">
                 <input type="submit" name="themmoi" value="THÊM MỚI">
                 <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a> 
                </div>
                <?php 
                if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                </form>
            </div>
        </div>
        </div>