<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Rumah Sakit Ibu dan Anak "ANDINI"';
?>
<!DOCTYPE html>
<html>
  
<head>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    
    <!--theme colour-->
    <?= $this->Html->css('blue.css') ?>
    
    <!-- Bootstrap -->
    <?= $this->Html->css('bootstrap.css') ?>
    
    <!-- medicom style -->
    <?= $this->Html->css('medicom.css') ?>
    
    <!-- masonary -->
    <?= $this->Html->css('style-masonary.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    
     	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body class="fixed-header">
    
    
    <div id="wrapper">
    
    
    <header class="medicom-header">
    	<div class="colourfull-row"></div>
        <div class="container">
        	<nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="images/logo_rsiaandini_transparent.png" alt="image" title="Logo RSIA Andini"></a>
                <!--a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image" title="Logo RSIA Andini"></a-->
              </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="dropdown active">
                    <a href="#">Home</a>
                  </li>
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFIL</a>
                    <ul class="dropdown-menu">                                                                                          
                      <li><a href="about-us.html">---</a></li>
                      <li><a href="about-us2.html">---</a></li>
                    </ul>
                  </li>
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">BERITA</a>
                    <ul class="dropdown-menu">                                                                                          
                      <li><a href="patient-and-families.html">Patients &amp; Families</a></li>
                      <li class="dropdown-submenu"><a href="research.html">Research</a><i class="fa fa-angle-right pull-right"></i>
                        <ul class="dropdown-menu">                                                                                          
                          <li class="dropdown-submenu"><a href="#.">Medicome Trials</a><i class="fa fa-angle-right pull-right"></i>
                            <ul class="dropdown-menu">  
                              <li><a href="trials.html">Trials</a></li>
                            </ul>
                          </li>
                          <li class="dropdown-submenu"><a href="#.">Cancer Care</a><i class="fa fa-angle-right pull-right"></i>
                            <ul class="dropdown-menu">  
                              <li><a href="cancer-center.html">Cancer Center</a></li>
                              <li><a href="cancer-center.html">Cell Death Research</a></li>
                              <li><a href="cancer-center.html">Brain Cancer</a></li>
                              <li><a href="cancer-center.html">Tumor Microenvironment</a></li>
                              <li><a href="cancer-center.html">Breast Cancer</a></li>
                              <li><a href="cancer-center.html">Childhood Cancers</a></li>
                              <li><a href="cancer-center.html">Endocrine Cancers</a></li>
                              <li><a href="cancer-center.html">Male Cancers</a></li>
                              <li><a href="cancer-center.html">Skin Cancer </a></li>
                            </ul>
                          </li>
                          <li class="dropdown-submenu"><a href="#.">Childrens Health</a><i class="fa fa-angle-right pull-right"></i>
                            <ul class="dropdown-menu">  
                                <li><a href="children-health.html"> Genetic Disease</a></li>
                                <li><a href="children-health.html"> Growth &amp; Development</a></li>
                                <li><a href="children-health.html"> Infections</a></li>
                                <li><a href="children-health.html"> Pregnancy &amp; Baby</a></li>
                                <li><a href="children-health.html"> Nutrition &amp; Fitness</a></li>
                                <li><a href="children-health.html"> Emotions &amp; Behavior</a></li>
                                <li><a href="children-health.html"> Doctors &amp; Hospitals</a></li>
                                <li><a href="children-health.html"> Muscle Development</a></li>
                                <li><a href="children-health.html"> RNA Biology</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="meet-team.html">Meet Awesome Team</a></li>
                      <li><a href="member-detail.html">Memmber Detail</a></li>
                      <li><a href="tables.html">Pricing Table</a></li>
                      <li><a href="appointment.html">Appointment</a></li>
                      
                      <li class="dropdown-submenu"><a href="#">Portfolio</a><i class="fa fa-angle-right pull-right"></i>
                        <ul class="dropdown-menu">
                            <li><a href="gallery1.html">Portfolio one</a></li>
                            <li><a href="gallery2.html">Portfolio two</a></li>
                            <li><a href="gallery3.html">Portfolio three</a></li>
                        </ul>
                      </li>
                      
                      <li><a href="services.html">Services</a></li>
                      <li><a href="shortcodes.html">Shortcodes</a></li>
                      <li><a href="error404.html">404 Not Found</a></li>
                    </ul>
                  </li>
                  
                  <li class="mega-menu-item"><a href="medical-department.html">FASILITAS</a>
                    <div class="mega-menu">
                        <img src="images/mega-menu-img.jpg" class="img-rounded" alt="" title="">
                        <ul>
                            <li><strong>Department One</strong></li>
                            <li><a href="medical-department.html">Medical Department</a></li>
                            <li><a href="medical-department.html">Body Lift Department</a></li>
                            <li><a href="medical-department.html">Liposuction Department</a></li>
                            <li><a href="medical-department.html">Eyelid Department</a></li>
                            <li><a href="medical-department.html">Thigh Lift Department</a></li>
                            <li><a href="medical-department.html">Brow Lift Department</a></li>
                        </ul>
                        <ul>
                            <li><strong>Department Two</strong></li>
                            <li><a href="medical-department.html">Arm Lift Department</a></li>
                            <li><a href="medical-department.html">Rhinoplasty Department</a></li>
                            <li><a href="medical-department.html">Ear Surgery Department</a></li>
                            <li><a href="medical-department.html">Tummy Tuck Department</a></li>
                            <li><a href="medical-department.html">Neck Lift Department</a></li>
                        </ul>
                        <ul>
                            <li><strong>Department Three</strong></li>
                            <li><a href="medical-department.html">Arm Lift Department</a></li>
                            <li><a href="medical-department.html">Rhinoplasty Department</a></li>
                            <li><a href="medical-department.html">Ear Surgery Department</a></li>
                            <li><a href="medical-department.html">Rhinoplasty Department</a></li>
                        </ul>
                    </div>
                  </li>
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAYANAN UTAMA</a>
                    <ul class="dropdown-menu">                                                                                          
                      <li><a href="gallery1.html">Gallery one</a></li>
                      <li><a href="gallery2.html">Gallery two</a></li>
                      <li><a href="gallery3.html">Gallery three</a></li>
                    </ul>
                  </li>
                  
                  <li class="dropdown last">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAYANAN PENDUKUNG</a>
                    <ul class="dropdown-menu">                                                                                          
                      <li><a href="blog.html">Blog one</a></li>
                      <li><a href="blog-single-post.html">Blog two</a></li>
                      <li><a href="blog-2-column.html">Blog three</a></li>
                      <li><a href="blog-detail.html">Blog Detail</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div><!-- /.navbar-collapse -->
            </nav>

        </div>
        <div class="header-bottom-line"></div>
    </header>
    
    
    <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
    <div class="overlay"></div>
    	<div class="container">
        	<h1 class="entry-title">Blog</h1>
            <p>Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
        </div>
    </section>
    
   
    <div class="sub-page-content">
        <div class="container">

            <?= $this->fetch('content') ?>
            
        </div>
    
    
    <div class="clr"></div>    
    </div><!--end sub-page-content-->
    
    
    
    
    
    
    
    <div class="colourfull-row"></div>
    <footer id="footer" class="light">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-3">
                    <div class="footer-widget">
                        <h4><span>Medicom</span></h4>
                        <ul class="footer-nav list-unstyled clearfix">
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Home</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Doctors</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>About US</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Departments</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Services</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Blog</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Why US</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Medical Care</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Specilaties</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Timetable</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Events</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            	<div class="col-md-3">
                	<div class="footer-widget">
                        <h4><span>newsletter</span></h4>
                        <div class="newsletter clearfix">
                            <i class="fa fa-envelope"></i>
                            <p class="newsletter-text">Sign up with your name and email to
    get updates fresh updates.</p>
                            <input type="text" placeholder="Your Name">
                            <input type="email" placeholder="Email Address">
                            <input type="submit" value="subscribe" class="btn btn-default btn-rounded">
                        </div>
                    </div>
                </div>
            	<div class="col-md-3">
                <div class="footer-widget">
                	<h4><span>Latest Tweets</span></h4>
                      <div class="twitter-widget">
                        <div class="tweet">
                          <i class="fa fa-twitter"></i>
                          <p><a href="#">@Rotography</a> Please kindly use our Support Forum: <a href="#.">pixelatic.co.uk.</a>
                          <span>about a month ago</span>
                          </p>
                        </div>
                      </div>
                        <div class="tweet">
                          <i class="fa fa-twitter"></i>
                          <p><a href="#">@Rotography</a> Please kindly use our Support Forum: <a href="#.">pixelatic.co.uk.</a>
                          <span>about a month ago</span>
                          </p>
                        </div>
                    </div>
                </div>
            	<div class="col-md-3">
                    <div class="footer-widget">
                        <h4><span>get in touch</span></h4>
                        <p>Medico Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                        <div class="contact-widget">
                        	<i class="fa fa-home"></i><p>Medicom Ltd, Manhattan 1258, New York, USA Lahore</p>
							<i class="fa fa-globe"></i><p><a href="#.">www.medicom.com</a></p>
                            <i class="fa fa-mobile"></i><p class="phone-number">(+1) 234 567 8901</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright text-center">Copyright &copy; 2014 Medicom. All right reserved.</p>
        <div class="container">
        	<div class="row">
            	<div class="col-md-2"><a href="#."><img src="images/footer-logo.jpg" alt="" title="Medicom Logo"></a></div>
            	<div class="col-md-10">
                	<p class="footer-bottom-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                </div>
            </div>
        </div>
    </footer>
    </div><!--end #wrapper-->   
    
    <?= $this->fetch('scriptBottom') ?>
  </body>
</html>