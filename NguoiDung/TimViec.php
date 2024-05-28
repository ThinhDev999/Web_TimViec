<?php
    require_once 'SqlTimKiemViecLam/db.php';
    $sql = "SELECT * FROM vieclam";
    $query = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($query);
    if(isset($_POST['button-sbm-timkiem'])){

        $input_timkiem = $_POST['input-timkiem'];
        $sql_timkiem = "SELECT * FROM vieclam WHERE TenViecLam LIKE '%$input_timkiem%'";
        $query = mysqli_query($connect, $sql_timkiem);
        $num = mysqli_num_rows($query);

    }
      
    
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
    <link rel="stylesheet" href="TimViec3.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <title>NguoiDung</title>

</head>
<body>

    <header class="logo">
        <div class="menu-left">
            
            <img src="mainicon.png"/>
            
                 
            <ul class="menu">
                <li>
                    <a href="">Việc Làm</a>
                    <div class="navbar__item__dropdown-menu">
                        <ul class="nav navbar-menu">
                            <li class="navbar-menu__item">
                                <a href="" class="text-sm">
                                    <i class="icon fa-light fa-solid
                                            fa-radar" id="icon1"></i>
                                    <!-- <font-awesome-icon icon="fa-solid fa-radar" /> -->
                                    <!-- <i class="icon fa-regular fa-radar"></i> -->
                                    Tìm việc làm
                                </a>
                            </li>
                            <li class="navbar-menu__item">
                                <a href="" class="text-sm">
                                    <i class="icon fa-light fa-user-robot"></i> Việc làm phù hợp
                                    <span class="label label-primary">Hot</span>
                                </a>
                            </li>
                            <li class="navbar-menu__item">
                                <a href="" class="text-sm">
                                    <i class="fa-light fa-display-code
                                            icon"></i> Việc làm IT <span class="label label-new">Mới</span>
                                </a>
                            </li>
                            <li class="navbar-menu__item">
                                <a href="" class="text-sm">
                                    <i class="icon fa-light
                                            fa-user-graduate"></i> Việc làm Senior <span
                                        class="label label-new">Mới</span>
                                </a>
                            </li>
                        </ul>

                    </div>

                </li>
                <li>
                    <a href="">Hồ Sơ & CV</a>
                    <div class="navbar__item__dropdown-menu">
                        <ul class="nav navbar-menu">

                            <li class="navbar-menu__item">
                                <a href="" class="text-sm">
                                    <i class="icon fa-light"></i> Mẫu CV
                                </a>
                            </li>
                            <li class="navbar-menu__item">
                                <a href="" class="text-sm">
                                    <i class="icon fa-light fa-file-lines"></i> Mẫu Cover Letter
                                </a>
                            </li>
                            <li class="navbar-menu__item">
                                <a href="" class="text-sm">
                                    <i class="icon fa-light fa-file-user"></i> Dịch vụ tư vấn CV
                                </a>
                            </li>
                            <li class="navbar-menu__item">

                                <a href="" class="text-sm">
                                    <i class="icon fa-light fa-file-user"></i> Hướng dẫn viết CV theo ngành nghề
                                </a>

                            </li>
                            <li class="navbar-menu__item ">

                                <a href="" class="text-sm">
                                    <i class="icon fa-light fa-pager"></i> TopCV Profile
                                </a>

                            </li>
                        </ul>

                    </div>
                </li>
                <li>
                    <a href="">Công Ty</a>
                    <div class="navbar__item__dropdown-menu">
                        <ul class="nav navbar-menu">
                            <li class="navbar-menu__item">
                                <a href="" class="text-sm">
                                    <i class="icon fa-light fa-buildings"></i> Danh sách công ty
                                </a>
                            </li>
                            <li class="navbar-menu__item">
                                <a href="" class="text-sm">
                                    <i class="icon fa-light fa-buildings"></i> Top công ty
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <div class="menu_right">
        <ul class="menu">
            <li>
                <form action="../Login/Logout.php">
                    <input type="submit" id="dangxuat" name="dangxuat" value="Đăng xuất"/>
                </form>
            </li>
        </ul>
        </div>

    </header>
    <main>
        <div class="timkiem">

            <div class="khung2">

                <div class="khung2-1">

                    <form class="khung2-1-1" method="POST" enctype="multipart/form-data">

                        <input type="text" placeholder="Tên công việc, vị trí bạn muốn ứng tuyển..." name="input-timkiem" required>

                        <div class="search-advanced">

                            <div class="wrapper Tat-ca-nganh-nghe">

                                <div class="select-btn">
                                    <!-- <i class="uil uil-building"></i> -->

                                    <span>Tất Cả Ngành Nghề</span>


                                    <i class="fa uil uil-angle-down"></i>


                                </div>


                                <div class="content">

                                    <div class="search">

                                        <!-- <i class="uil uil-search"></i> -->
                                        <input type="text" placeholder="search">

                                    </div>

                                    <ul class="options">


                                    </ul>
                                </div>


                            </div>

                            <div class="wrapper Tat-ca-linh-vuc-cong-ty">

                                <div class="select-btn">


                                    <span>Tất Cả Lĩnh Vực Công Ty</span>
                                    <!-- <i class="uil uil-building"></i> -->
                                    <i class="fa uil uil-angle-down danh-dau"></i>


                                </div>

                                <div class="content">

                                    <div class="search">

                                        <!-- <i class="uil uil-search"></i> -->
                                        <input type="text" placeholder="search">

                                    </div>

                                    <ul class="options">


                                    </ul>
                                </div>


                            </div>

                            <div class="wrapper Tat-ca-dia-diem">

                                <div class="select-btn">


                                    <span>Tất Cả Địa Điểm</span>
                                    <!-- <i class="uil uil-location-point"></i> -->
                                    <i class="fa uil uil-angle-down danh-dau"></i>


                                </div>

                                <div class="content">

                                    <div class="search">

                                        <!-- <i class="uil uil-search"></i> -->
                                        <input type="text" placeholder="search">

                                    </div>

                                    <ul class="options">


                                    </ul>
                                </div>


                            </div>

                        </div>

                        <button name="button-sbm-timkiem" type="submit">

                            <div class="text-button">
                                <i class="fa fa-search"></i>
                                <p>Tìm Kiếm</p>
                            </div>

                        </button>

                    </form>


                </div>

            </div>

        </div>


        <div class="khung3">

            <div class="khung3-1">
                <div class="container">
                    <ul class="nav d-flex">
                        <li class="nav-item">
                            <a href="TimViec2.html">Trang chủ</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <h1 class="breadcrumb-heading">
                            Tìm kiếm việc làm
                        </h1>
                    </ul>
                </div>
            </div>

            <div class="khung3-2">
                <div class="search-advanced">


                    <div class="wrapper hinh-thuc-lam-viec">

                        <div class="select-btn">

                            <span>Hình Thức Làm Việc</span>
                            <i class="uil uil-angle-down"></i>

                        </div>

                        <div class="content">

                            <div class="search">

                                <!-- <i class="uil uil-search"></i> -->
                                <input type="text" placeholder="search">

                            </div>

                            <ul class="options">


                            </ul>
                        </div>


                    </div>

                    <div class="wrapper cap-bac">

                        <div class="select-btn">

                            <span>Cấp Bậc</span>
                            <i class="uil uil-angle-down"></i>

                        </div>

                        <div class="content">

                            <div class="search">

                                <!-- <i class="uil uil-search"></i> -->
                                <input type="text" placeholder="search">

                            </div>

                            <ul class="options">


                            </ul>
                        </div>


                    </div>

                    <div class="wrapper kinh-nghiem-lam-viec">

                        <div class="select-btn">

                            <span>Kinh Nghiệm Làm Việc</span>
                            <i class="uil uil-angle-down"></i>

                        </div>

                        <div class="content">

                            <div class="search">

                                <!-- <i class="uil uil-search"></i> -->
                                <input type="text" placeholder="search">

                            </div>

                            <ul class="options">


                            </ul>
                        </div>


                    </div>

                    <div class="wrapper muc-luong">

                        <div class="select-btn">

                            <span>Mức Lương</span>
                            <i class="uil uil-angle-down"></i>

                        </div>

                        <div class="content">

                            <div class="search">

                                <!-- <i class="uil uil-search"></i> -->
                                <input type="text" placeholder="search">

                            </div>

                            <ul class="options">


                            </ul>
                        </div>


                    </div>


                </div>
            </div>

            <div class="khung3-3">
                <div class="khung3-3-1">
                    <span>
                        Tìm thấy
                           
                        <b class="text-highlight"><?php echo "$num" ?></b>
                            
                        việc làm phù hợp với yêu cầu của bạn.
                       
                    </span>
                </div>
                <div class="khung3-3-3">
                    <div class="khung3-3-3-1">

                        <div class="lists">
                            <?php
                                while($row = mysqli_fetch_assoc($query)){?>

                                    <div class="job-item">


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
                                            <form action="https://formsubmit.co/thachbolachcachcach@gmail.com" method="post" enctype="multipart/form-data"> 
                                                <input type="submit" name="upload" id="upload" value="Upload CV"/>
                                            </form>    
                
                                            <!-- <button class="tai-cv">
                                                <i class="fa fa-plus"></i>
                                                Upload CV
                                            </button> -->
                                        </div>

                                    </div>
                                <?php }
                            ?>
                        </div>

                    </div>
                    <div class="khung3-3-3-2">
                        <div class="col-md-3 right-box">
                            <div class="interested">
                                <div class="box box-white box-no-padding" id="company-spotlight">
                                    <h3 class="title-spotlight">Có thể bạn quan tâm</h3>
                                    <div class="spotlight-company">
                                        <div class="spotlight-image">
                                            <a href="">
                                                <div class="spotlight-cover-wraper">
                                                    <img src="https://cdn.topcv.vn/247/company_covers/cong-ty-cp-giai-phap-thanh-toan-viet-nam-vnpay-43f06e84344dc68ac8cbc398107d7f7f-5e8c4ac22885b.jpg"
                                                        data-src="https://cdn.topcv.vn/247/company_covers/cong-ty-cp-giai-phap-thanh-toan-viet-nam-vnpay-43f06e84344dc68ac8cbc398107d7f7f-5e8c4ac22885b.jpg"
                                                        alt="Công ty CP Giải pháp Thanh toán Việt Nam (VNPAY)"
                                                        class="spotlight-cover">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="spotlight-info">
                                            <div class="company-name">
                                                <a class="text-highlight bold text_uppercase" style="font-size: 15px;"
                                                    href="https://www.topcv.vn/brand/vnpay">Công ty CP Giải pháp Thanh
                                                    toán Việt Nam (VNPAY)
                                                </a>
                                            </div>
                                        </div>
                                        <div class="job">
                                            <a href="https://www.topcv.vn/brand/vnpay/tuyen-dung/nhan-vien-marketing-lam-viec-tai-ho-chi-minh-j872486.html?ta_source=JobSearchList"
                                                target="_blank" data-toggle="tooltip" title="" data-placement="top"
                                                class="job-name"
                                                data-original-title="Nhân Viên Marketing - Làm Việc Tại Hồ Chí Minh">Nhân
                                                Viên Marketing - Làm Việc Tại Hồ Chí Minh</a>
                                            <div class="d-flex">
                                                <div class="deadline ml-auto logo">

                                                    <i class="uil uil-money-bill text-highlight"></i> Thoả thuận
                                                </div>
                                                <div class="salary mr-auto logo">
                                                    <i class="uil uil-timer text-highlight"></i> 16/12/2022
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job">
                                            <a href="https://www.topcv.vn/brand/vnpay/tuyen-dung/nhan-vien-quan-ly-chat-luong-pqa-lam-viec-tai-ho-chi-minh-j867636.html?ta_source=JobSearchList"
                                                data-toggle="tooltip" title="" data-placement="top" class="job-name"
                                                data-original-title="Nhân Viên Quản Lý Chất Lượng (Pqa) - Làm Việc Tại Hồ Chí Minh">
                                                Nhân Viên Quản Lý Chất Lượng (Pqa) - Làm Việc Tại Hồ Chí Minh

                                            </a>
                                            <div class="d-flex">
                                                <div class="deadline ml-auto logo">
                                                    <i class="uil uil-money-bill text-highlight"></i> Thoả thuận
                                                </div>
                                                <div class="salary mr-auto logo">
                                                    <i class="uil uil-timer-bill text-highlight"></i> 10/12/2022
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spotlight-count text-center">
                                            <a href="https://www.topcv.vn/brand/vnpay" target="_blank"
                                                class="text-highlight get-more" rel="nooppener noreferrer">TÌM HIỂU
                                                NGAY</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="khung4">

            <div class="keyword-box">
                <h3 class="title-box">Các từ khóa liên quan:</h3>
                <div class="row">
                    <div class="col-md-4 box-seo">
                        <h3 class="title">Việc làm theo lĩnh vực</h3>
                        <div class="seo-content">

                            <a class="list-item" title="Tìm việc làm game developer tài chính" href="">
                                việc làm game developer tài chính
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer thiết kế / kiến trúc" href="">
                                việc làm game developer thiết kế / kiến trúc
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer thời trang" href="">
                                việc làm game developer thời trang
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer thương mại điện tử" href="">
                                việc làm game developer thương mại điện tử
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tổ chức phi lợi nhuận" href="">
                                việc làm game developer tổ chức phi lợi nhuận
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tự động hóa" href="">
                                việc làm game developer tự động hóa
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tư vấn" href="">
                                việc làm game developer tư vấn
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer viễn thông" href="">
                                việc làm game developer viễn thông
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer xây dựng" href="">
                                việc làm game developer xây dựng
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer xuất nhập khẩu" href="">
                                việc làm game developer xuất nhập khẩu
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 box-seo">
                        <h3 class="title">Việc làm theo mức lương</h3>
                        <div class="seo-content">
                            <a class="list-item" title="Tìm việc làm game developer lương dưới 3 triệu" href="">
                                việc làm game developer lương dưới 3 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương 3 - 5 triệu" href="">
                                việc làm game developer lương 3 - 5 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương 5 - 7 triệu" href="">
                                việc làm game developer lương 5 - 7 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương 7 - 10 triệu" href="">
                                việc làm game developer lương 7 - 10 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương 10 - 12 triệu" href="">
                                việc làm game developer lương 10 - 12 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương 12 - 15 triệu" href="">
                                việc làm game developer lương 12 - 15 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương 15 - 20 triệu" href="">
                                việc làm game developer lương 15 - 20 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương 20 - 25 triệu" href="">
                                việc làm game developer lương 20 - 25 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương 25 - 30 triệu" href="">
                                việc làm game developer lương 25 - 30 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương trên 30 triệu" href="">
                                việc làm game developer lương trên 30 triệu
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer lương thoả thuận" href="">
                                việc làm game developer lương thoả thuận
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 box-seo">
                        <h3 class="title">Việc làm theo kinh nghiệm</h3>
                        <div class="seo-content">
                            <a class="list-item" title="Tìm việc làm game developer kinh nghiệm chưa có kinh nghiệm"
                                href="">
                                việc làm game developer kinh nghiệm chưa có kinh nghiệm
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer kinh nghiệm dưới 1 năm" href="">
                                việc làm game developer kinh nghiệm dưới 1 năm
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer kinh nghiệm 1 năm" href="">
                                việc làm game developer kinh nghiệm 1 năm
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer kinh nghiệm 2 năm" href="">
                                việc làm game developer kinh nghiệm 2 năm
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer kinh nghiệm 3 năm" href="">
                                việc làm game developer kinh nghiệm 3 năm
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer kinh nghiệm 4 năm" href="">
                                việc làm game developer kinh nghiệm 4 năm
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer kinh nghiệm 5 năm" href="">
                                việc làm game developer kinh nghiệm 5 năm
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer kinh nghiệm trên 5 năm" href="">
                                việc làm game developer kinh nghiệm trên 5 năm
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 box-seo">
                        <h3 class="title">Việc làm theo hình thức công việc</h3>
                        <div class="seo-content">
                            <a class="list-item" title="Tìm việc làm game developer toàn thời gian" href="">
                                việc làm game developer toàn thời gian
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer bán thời gian" href="">
                                việc làm game developer bán thời gian
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer thực tập" href="">
                                việc làm game developer thực tập
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 box-seo">
                        <h3 class="title">Tìm việc làm theo khu vực</h3>
                        <div class="seo-content">
                            <a class="list-item" title="Tìm việc làm game developer tại Hà Nội" href="">
                                việc làm game developer tại Hà Nội
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tại Hồ Chí Minh" href="">
                                việc làm game developer tại Hồ Chí Minh
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tại Hải Phòng" href="">
                                việc làm game developer tại Hải Phòng
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tại Đà Nẵng" href="">
                                việc làm game developer tại Đà Nẵng
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tại Bắc Ninh" href="">
                                việc làm game developer tại Bắc Ninh
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tại Cần Thơ" href="">
                                việc làm game developer tại Cần Thơ
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tại Bình Dương" href="">
                                việc làm game developer tại Bình Dương
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tại Vĩnh Phúc" href="">
                                việc làm game developer tại Vĩnh Phúc
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tại Đồng Nai" href="">
                                việc làm game developer tại Đồng Nai
                            </a>
                            <a class="list-item" title="Tìm việc làm game developer tại Long An" href="">
                                việc làm game developer tại Long An
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 box-seo">
                        <h3 class="title">Tìm việc làm theo vị trí công việc</h3>
                        <div class="seo-content">



                            <a class="list-item" title="Tìm việc làm account executive" href="">
                                việc làm account executive
                            </a>
                            <a class="list-item" title="Tìm việc làm account manager" href="">
                                việc làm account manager
                            </a>
                            <a class="list-item" title="Tìm việc làm giám đốc dự án" href="">
                                việc làm giám đốc dự án
                            </a>
                            <a class="list-item" title="Tìm việc làm giám đốc điều hành" href="">
                                việc làm giám đốc điều hành
                            </a>
                            <a class="list-item" title="Tìm việc làm trợ lý giám đốc" href="">
                                việc làm trợ lý giám đốc
                            </a>
                            <a class="list-item" title="Tìm việc làm nhân viên lái xe" href="">
                                việc làm nhân viên lái xe
                            </a>
                            <a class="list-item" title="Tìm việc làm nhân viên giao hàng" href="">
                                việc làm nhân viên giao hàng
                            </a>
                            <a class="list-item" title="Tìm việc làm nhân viên kho" href="">
                                việc làm nhân viên kho
                            </a>
                            <a class="list-item" title="Tìm việc làm kỹ sư cơ khí" href="">
                                việc làm kỹ sư cơ khí
                            </a>
                            <a class="list-item" title="Tìm việc làm bán thời gian" href="">
                                việc làm bán thời gian
                            </a>
                            <a class="list-item" title="Tìm việc làm quản lý" href="">
                                việc làm quản lý
                            </a>
                            <a class="list-item" title="Tìm việc làm trợ lý" href="">
                                việc làm trợ lý
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="khung7">
            <div class="khung7-1">

                <div class="container ">
                    <a href="">cv là gì</a>
                    <a href="">Mẫu CV</a>
                    <a href="">mẫu cv tiếng việt</a>
                    <a href="">Sơ yếu lý
                        lịch</a>
                    <a href="">CV tham khảo</a>
                    <a href="">tổng hợp CV
                        tham khảo cho lập trình viên</a>
                    <a href="">giấy tờ thủ tục hồ sơ
                        xin việc</a>
                    <a href="">Email xin
                        việc bằng tiếng anh</a>
                    <a href="">Mẫu đơn xin việc</a>
                    <a href="">mẫu đơn xin nghỉ việc</a>
                    <a href="">Cách viết đơn xin nghỉ phép</a>
                    <a href="">Cách viết CV xin việc</a>
                    <a href="">cách
                        viết CV Ngành Kinh doanh/Bán hàng</a>
                    <a href="">cách viết CV
                        Ngành Kế Toán/Kiểm Toán</a>
                    <a href="">cách viết CV Ngành Nhân
                        Sự</a>
                    <a href="">cách viết CV xin Học
                        bổng</a>
                    <a href="">cách viết CV
                        Tiếng Anh</a>
                    <a href="">cách viết CV Tiếng
                        Nhật</a>
                    <a href="">cách viết CV Tiếng
                        Trung</a>
                    <a href="">cách viết CV Tiếng
                        Hàn</a>
                    <a href="">cẩm nang năm
                        nhất cho sinh viên</a>
                    <a href="">Mẫu đơn xin
                        thực tập</a>
                    <a href="">Hướng dẫn sửa
                        lỗi gõ tiếng Việt</a>
                    <a href="">Ngành du lịch
                        làm việc gì</a>
                    <a href="">Cẩm nang xin việc
                        ngành nhân sự</a>
                    <a href="">Xin việc ngành
                        công nghệ thông tin</a>
                    <a href="">Cẩm nang xin việc
                        ngành marketing</a>
                    <a href="">Cẩm nang xin việc
                        ngành kế toán kiểm toán </a>
                    <a href="">Cẩm nang xin việc
                        ngành công nghệ thực phẩm</a>
                    <a href="">Cẩm nang
                        xin việc ngành tài chính ngân hàng</a>
                    <a href="">Cẩm nang xin việc ngành luật</a>
                    <a href="">Cẩm nang xin việc
                        ngành xây dựng - địa ốc</a>
                    <a href="">Trắc nghiệm tính cách
                        MBTI</a>
                    <a href="">Việc làm online tại nhà</a>
                    <a href="">Tìm việc làm
                        tại TP. HCM</a>
                    <a href="">Cách viết cover letter
                        xin việc</a>
                    <a href="">CV xin việc bằng
                        tiếng Anh</a>
                    <a href="">CV cho sinh viên
                        chưa tốt nghiệp</a>
                    <a href="">Việc làm hành chính
                        nhân sự</a>
                    <a href="">Thư xin việc bằng tiếng
                        Anh</a>
                    <a href="">Ngành logistic là gì</a>
                    <a t href="">Việc làm Hải
                        Phòng</a>
                    <a href="">Việc làm Bình
                        Định</a>
                    <a href="">Tuyển dụng Content
                        Marketing</a>
                    <a href="">Tuyển lập trình viên
                        PHP</a>
                    <a href="">Tuyển lập trình viên
                        Java</a>
                    <a href="">Tuyển lập trình viên
                        .Net</a>
                    <a href="">Tuyển dụng nhân
                        viên kinh doanh</a>
                    <a href="">Tuyển dụng nhân viên
                        marketing</a>
                    <a href="">Tìm việc kế toán</a>
                </div>

            </div>
        </div>

        
    </main>

    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="TimViec3.js"></script>


</body>

</html>