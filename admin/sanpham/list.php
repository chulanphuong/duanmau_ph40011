<div class="row2">
         <div class="row2 font_title mb">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <form action="index.php?act=listsp" method="post">
         <div class="row2 mb10 form_content_container">
            <input type="text" name="kyw">
               <select name="iddm" id="">
                <option value="0" selected>--All--</option>
                <?php 
                    foreach($listdm as $dm){
                        extract($dm);
                        echo '<option value="'.$id.'"> '.$name.' </option>';
                    }
                ?>
                
               </select>
               <input type="submit" name="listok" value="Go">
           </div>
            </form>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
            
           <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ</th>
                <th>ẢNH</th>
                <th>LƯỢT XEM</th>
                <th></th>
            </tr>
            <?php
                foreach ($listsp as $sanpham){
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=".$id;
                    $xoasp = "index.php?act=xoasp&id=".$id;
                    $hinhpath = "../uploads/". $img;
                    if(is_file($hinhpath)){
                        $hinh = "<img src='".$hinhpath."' height='80' >";
                    }else{
                        $hinh = "no photo";
                    }
                    echo    '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$price.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$view.'</td>
                            <td> <a href= "'.$suasp.'"> <input type="button" value="Sửa"> </a>   <a href= "'.$xoasp.' "><input type="button" value="Xóa"></a></td>
                            </tr>';
                }
            ?>

           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>