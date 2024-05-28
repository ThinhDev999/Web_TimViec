<!DOCTYPE html>
<html>
  
<head>
    <meta name="viewport" content=
        "width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Đăng nhập</title>
</head>
<link rel="stylesheet" href="Login.css">
<script type="text/javascript" src="Login.js"></script>
<body>
    <div id="background">
        <div class="background-Right"></div>
        <div class="background-Left"></div>
    </div>
  
    <div id="slide">
        <div class="top">
            <div class="left">
                <div class="content">
                    <h2 style=" font-weight:bold">Nhà tuyển dụng</h2>
                    <form action="process_login_nhatuyendung.php" method="post" >
                        <div>
                            <input type="text" 
                                placeholder="Email" name="username"/> 
                              
                            <br />
                            <input type="password" 
                                placeholder="Mật khẩu" name="password"/>
                        </div>
                        <input class="button" type="submit" id="nhatuyendung_dangnhap" value="Đăng nhập"/>      
                        <!-- <a id="nhatuyendung_dangky" class="on-off">Đăng ký</a> -->
                    </form>
                    <a href="../NhaTuyenDung/Dangkynhatuyendung.php" id="nguoidung_dangky">Đăng ký</a>  

                </div>
            </div>
  
            <div class="right">
                <div class="content">
                    <h2 style=" font-weight:bold">Người tìm kiếm công việc</h2>
                    <form action="process_login.php" method="post" >
                        <div>
                            <input type="text" 
                                placeholder="Email" name="username"/> 
                              
                            <br />
                            <input type="password" 
                                placeholder="Mật khẩu" name="password"/>
                        </div>
                        <input class="button" type="submit" id="nguoidung_dangnhap" value="Đăng nhập"/>    
                        <!-- <a id="nhatuyendung_dangky" class="on-off">Đăng ký</a> -->
                    </form>
                    <a href="../NguoiDung/Dangky.php" id="nguoidung_dangky">Đăng ký</a>  
                </div>
            </div>
        </div>
    </div>
</body>
  
</html>