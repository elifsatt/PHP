<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Elif ŞAT</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		
		<style>
	
			.satrancTahtasi .tahtaKose{
				background-color: lightblue;
			}
		
		</style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Ana Menü</a></li> 
                            <li class="nav-item"><a class="nav-link" href="gallery.php">Galeri</a></li>
                            
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ödevler</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="about-us.php">CV</a></li>
									<li class="nav-item"><a class="nav-link" href="satrani-tahtasi.php">Satranç Tahtası</a></li>
									<li class="nav-item"><a class="nav-link" href="boy-kilo-endeksi.php">Boy/Kilo Endeksi</a></li>
									<li class="nav-item"><a class="nav-link" href="takim.php">Takim</a></li>
									<li class="nav-item"><a class="nav-link" href="for-ile-satranc-tahtasi.php">For ile Satranç Tahtasi</a></li>
									<li class="nav-item"><a class="nav-link" href="arm.php">ARM</a></li>
									<li class="nav-item"><a class="nav-link" href="islem.php">İşlem(toplama/çarpma/bölme/çıkartma)</a></li>
									<li class="nav-item"><a class="nav-link" href="carpim-tablosu.php">Çarpım Tablosu</a></li>
									<li class="nav-item"><a class="nav-link" href="kok-hesapla.php">Kök Hesaplama</a></li>
									<li class="nav-item"><a class="nav-link" href="not-cevirme.php">Nota Çevirme</a></li>
									<li class="nav-item"><a class="nav-link" href="n-sayisi.php">N Sayisi</a></li>

									
                                </ul>
							</li> 
							
							<li class="nav-item"><a class="nav-link" href="about-us.php">Hakkımda</a></li>
                            
                           <!-- <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li> -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Not Çevirme</h2>
						<div class="page_link">
							<a href="#">Ana Menü</a>
							<a href="#">Not Çevirme</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Find View Area =================-->
        <section class="find_view_area p_120"> 
        	<div class="container">
        		<div class="find_inner" >
                 
               

                <form method="POST" action="not-cevirme.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Notunuz</label>
                        
                        <input type="text" class="form-control" id="exampleInputEmail1" name="s" aria-describedby="emailHelp">
                    </div>               
                   
                    <button type="submit" class="btn btn-primary"  name="hesapla">Hesapla</button>
                 </form>


                <?php
                    function bescevir($a)
                    {
                     return $a/20;
                    }
                    
                    if(isset($_POST['s'])){
                        $s=$_POST['s'];
                        if($s>0 &&$s<=20)
                        printf("notunuz =%d,  beşlik sistemdeki karşılığı=%.4f",$s,bescevir($s));
                        if($s>20 && $s<=40)
                        printf("notunuz =%d, beşlik sistemdeki karşılığı=%.4f",$s,bescevir($s));
                        if($s>40 && $s<=60)
                        printf("notunuz =%d, beşlik sistemdeki karşılığı=%.4f",$s,bescevir($s));
                        if($s>60 && $s<=80)
                        printf("notunuz =%d,  beşlik sistemdeki karşılığı=%.4f",$s,bescevir($s));
                        if($s>80 && $s<=100)
                        printf("notunuz =%d,  beşlik sistemdeki karşılığı=%.4f",$s,bescevir($s));
                        else 
                        echo "lütfen 0-100  arası sayi giriniz, program 0-100 arasındaki notların 5 lik puan sistemi olan karşılığını gösterir";
                    }

                    
                    


            ?> 
                    
        		</div>
        	</div>
        </section>
        <!--================End Find Vies Area =================-->
        
       
			
        
        <!--================Footer Area =================-->
		<footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>Hakkımda</h3>
        					</div>
        					<p>Herşeyde mükemmelim :) </p>
        					
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3></h3>
        					</div>
        					
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Takipte Kalın :)</h3>
        					</div>
        					<p>Hesaplarım</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
       
     
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>