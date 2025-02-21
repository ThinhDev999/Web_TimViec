<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="DangKy.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <title>Đăng Ký</title>

</head>

<body>
    <div class="main">

        <div class="khung1">

            <div class="content">

                <h1>Đăng ký</h1>

                <h3>Chào Mừng Bạn Đến Với Chúng Tôi</h3>

            </div>
            <form action="process_dangky.php" method="post">
                    <div class="dangky">

                <div class="ten box">
                    <p>Họ và Tên</p>
                    <i class="fa fa-solid fa-user"></i>
                    <input type="text" placeholder="Nhập họ và tên của bạn" name="name" required>
                </div>

                <div class="email box">
                    <p>Email</p>
                    <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="Nhập email của bạn" name="username" required>
                </div>

                <div class="matkhau box">
                    <p>Password</p>

                    <i class="uil uil-shield-check"></i>
                    <input type="password" placeholder="Nhập mật khẩu" name="pass1">
                </div>

                <div class="matkhau box">
                    <p>Xác nhận mật khẩu</p>

                    <i class="uil uil-shield-check"></i>
                    <input type="password" placeholder="Nhập lại mật khẩu" name="pass2">
                </div>

                <div> Giới Tính: <input type="radio" name="gioitinh" value="Nam"> Nam
                    <input type="radio" name="gioitinh" value="Nu"> Nữ

                </div> <br>

                <div>
                    Ngày Sinh: <input type="date" name="date">
                </div> <br>


                <button>Đăng Ký</button>
            </div>   
            </form>
            

            <div class="text-content">

                <div class="content-dangnhap">
                    <p>Bạn đã có tài khoản?</p>
                    <a href="../Login/Login.php" class="dangnhap">
                        Đăng Nhập Ngay
                    </a>
                </div>


            </div>

        </div>

        <div class="khung2">
            <img src="https://cdn-icons-png.flaticon.com/512/5388/5388159.png">

        </div>
    </div>

    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="DangKy.js"></script>
</body>

</html>