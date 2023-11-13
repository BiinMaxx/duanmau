<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxmoi">Quên Mật Khẩu</div>
            <div class=" row boxcontent formmoi">
                <form action="index.php?act=quenmk" method="post">
                    
                <div class="row mb10">
                        Email
                        <input type="email" name="email" style="
                        width: 100%;
                        border: 1px solid #ccc;
                        padding: 5px;
                        border-radius: 5px">
                    </div>
                   
                    <div class="row mb10">
                    <input type="submit" value="Gửi" name="guiemail">


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
</div