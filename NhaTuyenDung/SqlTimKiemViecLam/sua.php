<?php
    // require_once 'SqlTimKiemViecLam/db.php';
    
    $sql_up = "SELECT * FROM vieclam WHERE so = '".$_GET['sua_id']."'";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    
    if(isset($_POST['sbmsua'])){


        $ten_cong_viec = $_POST['tcv'];
        $ten_cong_ty = $_POST['tct'];
        $luong = $_POST['l'];
        $dia_diem = $_POST['d'];

        
      

        $sql_sua = "UPDATE vieclam SET TenViecLam = '$ten_cong_viec', TenCongTy = '$ten_cong_ty', Luong = '$luong', DiaChi = '$dia_diem' WHERE so = '".$_GET['sua_id']."'";
       
        $query_sua = mysqli_query($connect, $sql_sua);

        header('location: tuyendung.php?page_layout=danhsach');

    }

    $sql_show = "SELECT * FROM vieclam";
    $query_show = mysqli_query($connect, $sql_show);



    

?>
<script>
    $(document).ready(function() {
        $("#dangtin").css({
            "display":"block",
        });
        $("#from_sua").css({
            "display":"flex",
        });

        const input_anh = document.querySelector("#input_anh_sua");
var uploaded_image = "";
input_anh.addEventListener("change",function(){

    const reader = new FileReader();
    reader.addEventListener("load", () =>{
        uploaded_image = reader.result;
        document.querySelector(".hien_anh").style.backgroundImage= `url(${uploaded_image})`;
       
    });
    reader.readAsDataURL(this.files[0]);


});
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

            <input type="text" name="ten_cong_viec" placeholder="nhập công việc bạn muốn tuyển" required>

            <p>
               Tên công ty
            </p>

            <input type="text" name="ten_cong_ty" placeholder="nhập tên công ty bạn" required>

            <p>
                Lương
            </p>

            <input type="text" name="luong" placeholder="nhập lương" required>

            <p>
                Địa Điểm
            </p>

            <input type="text" name="dia_diem" placeholder="nhập địa điểm" required>

            <button class="nut-luu" type="submit" name="sbm">
               Lưu
            </button>


        </div>

       
    </form>
    <div class="du-lieu">

        <?php

            
            while($row = mysqli_fetch_assoc($query_show)){?>

                <div class="item">

                    <div class="body">

                        <div class="thong-tin">
                            <div class="anh-content">

                                <div class="anh-icon">
                                    <img src="DuLieuAnh/<?php echo $row['Anh']; ?>" id="hien-anh">
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
                            
                            <button  name="edit" onclick="sua_du_lieu()" class="sua">Sửa</button>
                            <form class="from_sua" id="from_sua" method="POST" enctype="multipart/form-data">
                                    <div class="body-sua">

                                        <p>
                                            Tên công việc
                                        </p>

                                        <input type="text" name = "tcv" placeholder="nhập công việc bạn muốn tuyển" required value="<?php echo $row_up['TenViecLam']; ?>">

                                        <p>
                                            Tên công ty
                                        </p>

                                        <input type="text" name = "tct" placeholder="nhập tên công ty bạn"  required value="<?php echo $row_up['TenCongTy']; ?>">


                                        <p>
                                            Lương
                                        </p>

                                        <input type="text" name="l" placeholder="nhập lương" required value="<?php echo $row_up['Luong']; ?>">

                                        <p>
                                            Địa Điểm
                                        </p>

                                        <input type="text" name="d" placeholder="nhập địa điểm" required value="<?php echo $row_up['DiaChi']; ?>">

                                        
                                        <button class="nut-luu" name="sbmsua" type="submit">
                                            Lưu
                                        </button>


                                    </div>
                                    
                            </form>
                            <button name="delete" onclick="xoa(<?php echo $row['so']; ?>)"  class="xoa">Xoá</button>
                        </div>

                   </div>

                </div>

                <script>
                    function xoa(xoa_id){                    
                        
                        // if(confirm("bạn chắc muốn xoá không")){
                            window.location.href='xoa.php?del_id=' +xoa_id+ '';
                            // return true;
                        // }
                    }
                    // function sua_du_lieu(){                    
                        
                    //     // if(confirm("bạn chắc muốn xoá không")){
                    //         window.location.href='tuyendung.php?page_layout=sua&sua_id=' +sua_id+ '';
                    //         // return true;
                    //     // }
                    // }
                </script>

            <?php }
        ?>

    </div>
                  
</div>

    
    

   

