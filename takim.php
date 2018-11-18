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
						<h2>Takım</h2>
						<div class="page_link">
							<a href="#">Ana Menü</a>
							<a href="#">Takım</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Find View Area =================-->
        <section class="find_view_area p_120"> 
        	<div class="container">
        		<div class="find_inner">
                 
                    <form >
                        <div class="form-group">
                        <h2 class="title" style="text-align: center;">Süper Lig Puan Durumu (22.10.18)</h2>
                        </div>
                        <div class="form-group">
                            
                            <?php
                                
                                $takimlar=array('Galatasaray','Başakşehir','Kasımpaşa','Antalyaspor','Beşiktaş','Göztepe','Trabzonspor','Konyaspor','Ankaragücü','Yeni Malatya','Alanyaspor','Sivasspor','Bursaspor','Kayserispor','Fenerbahçe','Rizespor','BB Erzurumspor','Akhisar Bld');
                                $puan=array('19','18','18','16','15','15','14','13','13','12','12','10','9','9','9','8','6','5');


                                echo "<center> <table border='6'>";
                                echo '<tr> <th width="30"  > Sıralama </th><th width="200">Takım Adı</th> <th width="10"> Puan </th> </tr>';
                                for ($i=0; $i<18;$i++)
                                { $b= $i+1;
                                echo '<tr> <td align="center" >' .$b. '</td> <td align="center">' .$takimlar[$i].'</td><td align="center">'.$puan[$i]. '</td> </tr>';
                                }

                                echo "</center> </table>";

                            ?>
                        </div>
                        
                    </form>

                 
                    
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