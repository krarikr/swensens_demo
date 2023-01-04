
<?php
    session_start();
    include ('connect_db.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js" integrity="sha512-t89+ZHqiI+cJO2EZ1zy846TMzc7K0VH22insNeb32hMoVymAMd0aYeLzmNF4WuRLDUXPVo6dzbZ1zI7MBWlqlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">
    
        
    </head>
    <body >
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-lg" id="mainNav">
        
    <div class="collapse navbar-collapse justify-content-between">
            <div class="header-left">
            <a class="navbar-brand" href="#">
            <img src="images/swensens-logo.png" width="111" height="33" alt="">
            </a>  
            </div>
            
            <ul class="navbar-nav header-right">

            <li class="nav-item">
                <a href="#" class="navbar" >
                        <span class="d-flex align-items-center">
                            <span class="navbar-icon mr-3">
                            <img src="images/icon-location.svg" alt="">
                            </span>
                            <span class="text-secondary">กรุณาเลือกที่อยู่จัดส่ง</span>
                            <span class="navbar-icon ml-3">
                            <img src="images/icon-drop2.png" width="20" height="25" alt="">
                            </span>
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                <a href="#" class="btn btn-outline-danger rounded-pill px-3 mb-2 ml-3 mr-3 mb-lg-0" >
                        <span class="d-flex align-items-center">
                            <span class="navbar-icon mr-3">
                            <img src="images/icon-qr-scan.svg" alt="">
                            </span>
                            <span class="small">สแกน</span>
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                <a class="navbar-brand " href="#">
                <img src="images/icon-bag.svg" width="70" height="35" alt="">
                </a>  
                </li>

                <li class="nav-item">
                <a class="navbar-brand " href="#">
                <img src="images/icon-favorite.svg" width="70" height="35" alt="">
                </a>  
                </li>

                <li class="nav-item">
                <a class="navbar-brand " href="#">
                <img src="images/icon-inbox.svg" width="70" height="35" alt="">
                </a>  
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ml-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        TH
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item " href="#">EN</a>
                    
                    </div>
                </li>

                <li class="nav-item">
                <a class="navbar-brand " href="#">
                <img src="images/menu.svg" width="70" height="35" alt="">
                </a>  
                </li>
            
            </ul>
                
                
            </div>

        </nav>

       <!-- ส่วนภาพปก-->
       <header class="masthead">
        <br>
        <img src="https://firebasestorage.googleapis.com/v0/b/swensens-production.appspot.com/o/banner%2Fsw-banner.jpg?alt=media" class="img-fluid" alt="">
        </header>

        <br>
        <div class="container">
        
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-danger active" href="#">ทั้งหมด</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">ไฮไลท์ & โปรโมชั่น</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">เค้กไอศกรีม</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">ไอศกรีมควอท (450g)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">ไอศกรีมควอท (250g)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">ไอศกรีมบาร์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">ไอศกรีมสกู๊ป</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">ไอศกรีมสมอลไบทส์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">ท้อปปิ้ง</a>
            </li>
            
        </ul>

        </div>

        <!-- ไฮไลท์ & โปรโมชั่น -->
        <section class="page-section">
            <div class="container">
                <div class="text mt-5">
                    <h2 class="section-heading text-uppercase">ไฮไลท์ & โปรโมชั่น</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="https://1112.minorcdn.com/1112one/public/images/products/SW/656052_6.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">ไอศกรีม 2 ควอท 429 บาท</h5>
                                <h5 class="card-title text-danger">429 บาท</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- เค้กไอศกรีม -->
        <section class="page-section">
            <div class="container">
                <div class="text mt-5">
                    <h2 class="section-heading text-uppercase">เค้กไอศกรีม</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="https://1112.minorcdn.com/1112one/public/images/products/SW/5001262.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">ช็อกโก โอรีโอ</h5>
                                <h5 class="card-title text-danger">429 บาท</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ไอศกรีมควอท (450g) -->
        <section class="page-section">
            <div class="container">
                <div class="text mt-5">
                    <h2 class="section-heading text-uppercase">ไอศกรีมควอท (450g)</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="https://1112.minorcdn.com/1112one/public/images/products/SW/654011_1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">มะม่วง ซอร์เบท์</h5>
                                <h5 class="card-title text-danger">349 บาท</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ไอศกรีมควอท (250g) -->
        <section class="page-section">
            <div class="container">
                <div class="text mt-5">
                    <h2 class="section-heading text-uppercase">ไอศกรีมควอท (250g)</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="https://1112.minorcdn.com/1112one/public/images/products/SW/JUL2019/654023.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">วานิลา</h5>
                                <h5 class="card-title text-danger">219 บาท</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ไอศกรีมบาร์ -->
        <section class="page-section">
            <div class="container">
                <div class="text mt-5">
                    <h2 class="section-heading text-uppercase">ไอศกรีมบาร์</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="https://1112.minorcdn.com/menu/swensens/659001.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">ไอศกรีมบาร์ วานิล่า</h5>
                                <h5 class="card-title text-danger">59 บาท</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ไอศกรีมสกู๊ป -->
        <section class="page-section">
            <div class="container">
                <div class="text mt-5">
                    <h2 class="section-heading text-uppercase">ไอศกรีมสกู๊ป</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="https://1112.minorcdn.com/1112one/public/images/products/SW/5009623.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">โคเรีย เมลอน</h5>
                                <h5 class="card-title text-danger">75 บาท</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ไอศกรีมสมอลไบทส์ -->
        <section class="page-section">
            <div class="container">
                <div class="text mt-5">
                    <h2 class="section-heading text-uppercase">ไอศกรีมสมอลไบทส์</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="https://1112.minorcdn.com/1112one/public/images/products/SW/659115.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">ไอศกรีมแซนวิช ช็อกโกแลต</h5>
                                <h5 class="card-title text-danger">199 บาท</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ท้อปปิ้ง -->
        <section class="page-section">
            <div class="container">
                <div class="text mt-5">
                    <h2 class="section-heading text-uppercase">ท้อปปิ้ง</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="https://1112.minorcdn.com/menu/swensens/652049.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">เชอร์ลี่โอเวอร์โหลด</h5>
                                <h5 class="card-title text-danger">49 บาท</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>

        <section class="page-section">
    
            <div class="container">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-5 ml-4">ดาวน์โหลด</h2>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="ml-2" href="#!"><img class="app-badge" src="images/google-play.png" width="150" height="50" alt="" /></a>
                                <a class="ml-2" href="#!"><img class="app-badge" src="images/app-store.png" width="150" height="50" alt="" /></a>
                            </div>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="images/app-screen-webp.webp" alt="" /></div>
                    </div>
                </div>
            </div>
        </section>

        
        
    
        
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       

    </body>
</html>