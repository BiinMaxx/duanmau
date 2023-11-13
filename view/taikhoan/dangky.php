<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxmoi">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formmoi">
                <form action="index.php?act=dangky" method="post">
                    
                    <div class="row mb10" >
                        Email
                        <input type="email" name="email" style="
                        width: 100%;
                        border: 1px solid #ccc;
                        padding: 5px;
                        border-radius: 5px">
                    </div>
                    <div class="row mb10">
                        Tên Đăng Ký
                        <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        Mật Khẩu
                        <input type="password" name="pass" id="">
                    </div>

                    <input type="submit" value="Đăng Ký" name="dangky">


                    <input type="reset" value="Nhập Lại">

                </form>
                <h2 class="thongbao">
                <?php
                     if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                     }
                ?></h2>
            </div>

        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>