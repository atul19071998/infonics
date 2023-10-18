 <header class="main-header">
 
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <a class="navbar-brand" href="index.php"><img src="<?php path();?>/assets/images/banner/infonics.jpg" alt="" width=250></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link current" aria-current="page" href="<?php path();?>/">Home</a></li>
                     
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-expanded="false">About Us</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"  href="<?php path();?>/about-us">About Infonics</a>
                                <a class="dropdown-item"  href="<?php path();?>/certifications">Certifications</a>
                                <a class="dropdown-item" href="<?php path();?>/unilumin-channel-partner">Unilumin Channel Partner</a>
                            </div>
                        </li> 
                        
                    <li class="nav-item dropdown position-relative">
                            <a class="nav-link dropdown-toggle " href="javascript:void(0)" role="button" data-toggle="dropdown" aria-expanded="false">Our Product</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item " id="custom-menu" href="<?php path();?>/outer-videowall">LED Video wall</a>
                            
                                <a class="dropdown-item"  href="<?php path();?>/led-ticker-display">Led-Ticker-Display
                            </a>
                                <a class="dropdown-item" href="<?php path();?>/led-parameter-display">LED Parameter Display</a>
                                <a class="dropdown-item" href="<?php path();?>/led-standees-poster" >LED Standess & Poster</a>
                                <a class="dropdown-item" href="<?php path();?>/customized-led-displays" >Customized LED Display</a>
                            </div>

                            <div class="dropdown-menu" id="customdropdown-item">
                            <a class="" href="<?php path();?>/led-parameter-display">demo1</a>
                                <a class="" href="<?php path();?>/led-standees-poster"> demo1r</a>
                                <a class="" href="<?php path();?>/customized-led-displays"> demo1</a>
                            </div>
                        </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-expanded="false">Clients</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php path();?>/clients#govt-client">Government Sector</a>
                                <a class="dropdown-item" href="<?php path();?>/clients#private-client">Private Sector</a>
                                <a class="dropdown-item" href="<?php path();?>/clients#psu-client">PSUS</a>
                                <a class="dropdown-item" href="<?php path();?>/clients#institution-client">Institutions</a>
                                <a class="dropdown-item" href="<?php path();?>/clients#defence-client ">Defence Sector</a>
                                <a class="dropdown-item" href="<?php path();?>/clients#news-client ">News Channels</a>
                                <a class="dropdown-item" href="<?php path();?>/clients#malls-client ">Malls</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-expanded="false">Gallery</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php path();?>/image-gallery">Image Gallery</a>
                                <a class="dropdown-item" href="<?php path();?>/video-gallery">Video Gallery</a>
                                <a class="dropdown-item" href="<?php path();?>/new-installation">New Installations</a>
     
                            </div>
                        </li>
                        
                    <!-- <?php 
                        foreach ($icat_arr as $catId => $catName) {
                        $query = mysqli_query($con, "SELECT * FROM tbl_top_category where tcat_id='$catId'");
                        $record = mysqli_fetch_assoc($query);
                        $top=$record['slug'];
                    ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo path() ?>/<?php echo $top ?>"><?php echo $catName ?></a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="<?php path();?>/adapter">Adapter</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php path();?>/powerbank">Powerbank</a></li> -->
                    <!-- <?php } ?> -->
                
                    <li class="nav-item"><a class="nav-link" href="<?php path();?>/contact-us">Contact Us</a></li>
                    <li class="nav-item" style="display:flex; justify-content:center; align-items:center"><i class="fa-solid fa-phone phone-link"></i><a class="nav-link" href="tel:+919891116500"><b>+91-9891116500</b></a> </li>
							 
                    <!-- <li class="has-children">
                                <a href="#!" aria-haspopup="true">Service subitem 2</a>
                                <ul aria-label="submenu">
                                    <li><a href="#!">Service subsubitem 1</a></li>
                                    <li><a href="#!">Service subsubitem 2</a></li>
                                    <li><a href="#!">Service subsubitem 3</a></li>
                                </ul>
                            </li>
                 -->
                </ul>



            </div>
        </nav>
  
</header>
<div class="header-gap"></div>