<?php
    require_once 'db.php';
    $sql = "SELECT * FROM vieclam";
    $query = mysqli_query($connect, $sql);

    if(isset($_POST['sbm'])){

        $ten_cong_viec = $_POST['ten_cong_viec'];
        $ten_cong_ty = $_SESSION['name'];
        $luong = $_POST['luong'];
        $dia_diem = $_POST['dia_diem'];
        $thoi_gian=$_POST['thoigian'];


        $sql_them = "INSERT INTO vieclam (TenViecLam, TenCongTy, Luong, DiaChi,thoigian)
        VALUES ('$ten_cong_viec', '$ten_cong_ty', '$luong', '$dia_diem','$thoi_gian')";

        $query_them = mysqli_query($connect, $sql_them);
        move_uploaded_file($anh_tmp, $anh);
        header('location: tuyendung.php?page_layout=danhsach');

    }
    
   

?>
<script>
    $(document).ready(function() {
        $("#dangtin").css({
            "display":"block",
        });
        // $("#from_sua").css({
        //     "display":"flex",
        // });
    });
</script>
<div class="form-dang-tin">
    <button onclick="bang_dang_tin()">
        <i class="fa fa-plus"></i>
            Đăng Tin Tuyển Dụng
    </button>
    <form class="bang-dang-tin" id="BangDangTin" method="POST" enctype="multipart/form-data">

        <div class="body-d">

            <p>
                Tên công việc
            </p>

            <input type="text" name="ten_cong_viec" placeholder="Nhập công việc bạn muốn tuyển" required>

            <p>
                Lương
            </p>

            <input type="text" name="luong" placeholder="Nhập lương" required>

            <p>
                Địa Điểm
            </p>

            <input type="text" name="dia_diem" placeholder="Nhập địa điểm" required>

            <p>
                Thời gian làm việc
            </p>

            <input type="text" name="thoigian" placeholder="Nhấp thời gian" required>

            <button class="nut-luu" type="submit" name="sbm">
               Lưu
            </button>


        </div>

       
    </form>
    <div class="du-lieu">

        <?php

            $i = 1;
            while($row = mysqli_fetch_assoc($query)){?>

                <div class="item">

                    <div class="body">

                        <div class="thong-tin">
                            <div class="anh-content">

                                <div class="anh-icon">
                                    <img src="DuLieuAnh/<?php echo $row['thoigian']; ?>" id="hien-anh">
                                </div>

                                <div class="content">

                                    <h3 class="ten-cong-viec">
                                        <?php echo $row['TenViecLam']; ?>
                                    </h3>
  
                                    <h4 class="ten-cong-ty">
                                         <?php echo $row['TenCongTy']; ?>
                                    </h4>

                                </div>

                            </div>


                            <div class="label-content">

                                <p class="luong">
                                    <?php echo $row['Luong']; ?>
                                </p>

                                <p class="dia-diem">
                                   <?php echo $row['DiaChi']; ?>
                                </p>

                            </div>

                        </div>

                        <div class="nut-button">
                            
                            <button  name="edit" onclick="sua(<?php echo $row['so']; ?>)" class="sua">Sửa</button>
                            <div class="from_sua" id="from_sua">
                            <div class="body-sua">

                                    <p>
                                        Tên công việc
                                    </p>

                                    <input type="text" name="ten_cong_viec" placeholder="Nhập công việc bạn muốn tuyển" required>

                                    <p>
                                        Lương
                                    </p>

                                    <input type="text" name="luong" placeholder="Nhập lương" required>

                                    <p>
                                        Địa Điểm
                                    </p>

                                    <input type="text" name="dia_diem" placeholder="Nhập địa điểm" required>

                                    <p>
                                        Thời gian làm việc
                                    </p>

                                    <input type="text" name="thoigian" placeholder="Nhấp thời gian" required>

                                    <button class="nut-luu" type="submit" name="sbm_sua">
                                    Lưu
                                    </button>


                                    </div>
                                    
                                </div>
                            <button name="delete" onclick="xoa(<?php echo $row['so']; ?>)"  class="xoa">Xoá</button>
                        </div>

                   </div>

                </div>

                <script>
                    function xoa(xoa_id){                    
                       
                        // if(confirm("bạn chắc muốn xoá không")){
                            window.location.href='SqlTimKiemViecLam/xoa.php?del_id=' +xoa_id+ '';
                            // return true;
                        // }
                    }
                    function sua(sua_id){                    
                        
                        // if(confirm("bạn chắc muốn xoá không")){

                            window.location.href='tuyendung.php?page_layout=sua&sua_id=' +sua_id+ '';
                            // return true;
                        // }
                    }
                </script>

            <?php }
        ?>

    </div>
                  
</div>

    
    

   

