<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxmoi">Cập Nhật Thông Tin Tài Khoản</div>
            <div class=" row boxcontent formmoi">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        Tên Đăng Ký
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        Email
                        <input type="email" name="email" value="<?=$email?>"style="
                        width: 100%;
                        border: 1px solid #ccc;
                        padding: 5px;
                        border-radius: 5px">
                    </div>
                    <div class="row mb10">
                        Mật Khẩu
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        Địa Chỉ
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Điện Thoại
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden"  name="id" value="<?=$id?>">
                    <input type="submit" value="Cập Nhật" name="capnhat">
                    <input type="reset" value="Nhập Lại">
                    </div>
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