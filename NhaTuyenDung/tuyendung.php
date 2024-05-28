<?php
   require_once 'SqlTimKiemViecLam/db.php';
   session_start();
   ob_start();
?>
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
    <link rel="stylesheet" href="tuyendung.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <title>TimViec</title>

</head>

<body>

    <header class="tren">
        <div class="menu-left">
            <img src="../NguoiDung/mainicon.png" />

        </div>

        <div class="menu-right">


            <button type="button" onclick="dang_tin()">
                <!-- "fa fa-pen-circle icon -->
                <i class="fa fa-pencil icon"></i>
                Đăng tin
            </button>

            <button>
                <i class="fa fa-pencil icon"></i>
                Tìm CV
            </button>

            <button>
                <!-- fa-comment-dots -->
                <i class="fa fa-comment"></i>
                Connect
            </button>

            <button>
                <!-- fa-solid fa-circle-question -->


                <i class="fa fa-question"></i>
                Trợ giúp

            </button>

            <button class="thong-bao">
                <i class="fa fa-bell"></i>
            </button>
            <form action="../Login/Logout.php">
                <div class="dang-xuat">
                        <input type="submit" name="logout" value="Đăng xuất"/>
                </div>
            </form>



        </div>

    </header>

    <div class="trai" id="trai">

        <div class="tai-khoan">
            <div class="avata">

                <i class="fa fa-user-circle"></i>
            </div>

            <p class="vach"></p>
            <div class="content">
                <p><?php echo $_SESSION['name'] ?></p>
            </div>
            

        </div>

        <div class="nav">

        </div>

    </div>


    <main>

        <div class="dang-tin" id="dangtin">

            <?php
                if(isset($_GET['page_layout'])){
                    switch($_GET['page_layout']){
                        case 'danhsach':
                            require_once 'SqlTimKiemViecLam/danhsach.php';
                            break;
                        case 'sua':
                            require_once 'SqlTimKiemViecLam/sua.php';
                            break;
                      
                        default:
                            require_once 'SqlTimKiemViecLam/danhsach.php';
                            break;
                        }
                }
                else{
                    require_once 'SqlTimKiemViecLam/danhsach.php';
                }
            ?>

        </div>

    </main>


    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="tuyendung.js"></script>

</body>

</html>