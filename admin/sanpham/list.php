<div class="row">
            <div class="row frmtitle mb"> 
                <H1>DANH SÁCH SẢN PHẨM</H1>
            </div>
            <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw">
                    <select name="iddm" id="">
                       <option value="0" selected>Tất cả</option>
                       <?php
                           foreach ($listdanhmuc as $danhmuc) {
                              extract($danhmuc);
                              echo ' <option value="'.$id.'">'.$name.'</option>';
                           }
                       ?>
                   
               </select>
               <input type="submit" name="listok" value="OK" >
            </form>
           <div class="row frmcontent">
            <div class="row mb10 frms"> 
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH ẢNH</th>
                        <th>GIÁ SẢN PHẨM</th>
                        <th>LƯỢT XEM</th>
                        <th>THAO TÁC</th>
                       
                    </tr>
                    <?php
                    foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                $xoasp="index.php?act=xoasp&id=".$id;
                                $suasp="index.php?act=suasp&id=".$id; 
                                $hinhpath="../upload/".$img;
                                if (is_file($hinhpath)) {
                                    $hinh="<img src='".$hinhpath."' height='80'";
                     }else{
                        $hinh="No img";
                     }
                    
                    echo '<tr>
                    <td><input type="checkbox" name= id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$price.'</td>
                    <td>'.$luotxem.'</td>
                    <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                     <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>
                 
                </table>
            </div>  
            <div class="row  in">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn ">
              <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a> 
              </div>
           </div>
    </div>