<div class="row">
            <div class="row formtitle">
                <h1>Danh Sách Bình luận</h1>
            </div>
            <div class="row formconten">
                <form action="" method="POST">
                    <div class="row mb10 frms">
                       <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>IdUser</th>
                            <th>IdPro</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listbinhluan as $binhluan){
                                extract($binhluan);
                                $suabl="index.php?act=suabl&id=".$id;
                                $xoabl="index.php?act=xoabl&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a>
                                <a href="'.$xoabl.'"><input type="button" value="Xóa"></td></a>
                            </tr>';
                            }
                        ?>
                       </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn Tất Cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xóa Các Mục Đã Chọn">
                    </div>
                </form>
            </div>
        </div>