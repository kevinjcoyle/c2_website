<?php 
    require "databaseConnection.php";
    require "logPageHit.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/c2cf_template.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>
            C2 Custom Furnishings
        </title>
        <!-- InstanceEndEditable -->
        <script src="./javascript/jquery-1.4.2.min.js">
        </script>
        <script type="text/javascript" src="./javascript/jquery.ad-gallery.js"></script>

		<link rel="stylesheet" type="text/css" href="css/jquery.ad-gallery.css">
        <link rel="stylesheet" 
              title="Default Styles"
              href="css/base.css" 
              media="screen"/>
        <link rel="stylesheet" 
              type="text/css" 
              href="css/simpleGallery.css" 
              media="screen">

        <!-- InstanceBeginEditable name="head" -->
        <script type="text/javascript">
            $(function() {
    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });

            function loadNewData() {
            	$('#thumb-list').load('pages/data.html, #thumb-list');
            }
  </script>
   
  </style>
        <!-- InstanceEndEditable -->
    </head>

    <body onload="load()">
        <div id="all" >

            <div id="header">
                <div id="header-content">
                    <div id="header-content-left">
                        <img style="padding:10px" 
                            src="images/C2 Logo.png" 
                            width="132" 
                            height="96"
                            id="logo"/>
                    </div>
                    <div id="header-content-center">
                        &nbsp;
                    </div>
                    <div id="header-content-right">
                        <div id="navigation">
                            <div id="home" class="menuItemDiv" onclick="location.href = 'index.php';">
                                <a id="homeLink" class="menuItem" href="index.php">HOME</a>
                            </div>
							<div id="customFurniture" class="menuItemDiv" onclick="location.href = 'customFurniture.php';">
								<a id="customFurnitureLink" class="menuItem" href="customFurniture.php">CUSTOM FURNITURE</a>
							</div>
							<div id="productLine" class="menuItemDiv" onclick="location.href = 'productlines.php';">
								<a id="productLineLink" class="menuItem" href="productlines.php">PRODUCT LINES</a>
							</div>
                            <div id="gallery" class="menuItemDiv" onclick="location.href='gallery.php';">
                                <a id="galleryLink" class="menuItem">GALLERY</a>
                            </div>
                            <div id="about" class="menuItemDiv" onclick="location.href='about.php';">
                                <a id="aboutc2Link" class="menuItem">ABOUT C2</a>
                            </div>
                            <div id="contact" class="menuItemDiv" onclick="location.href='contact.php';">
                                <a id="contactLink" class="menuItem" href="contact.php">CONTACT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menuUnderline">
                </div>

            </div>


            <div id="main">
                <div id="main-content">
                    <div id="main-content-left">
                        <div id="infoArea" class="infoArea">
                            <div id="infoAreaTitle" class="infoAreaTitle">
                                <!-- InstanceBeginEditable name="infoAreaTitle" --><img src="images/Gallery.png" width="93" height="16" alt="Gallery" /><!-- InstanceEndEditable -->
                            </div>
                            <div id="infoAreaUnderline" class="infoAreaUnderline">
                            </div>
                            <div id="infoAreaBody" class="infoAreaBody">
                                <!-- InstanceBeginEditable name="infoArea" -->
                                From conception to installation, C2 will work with you to achieve your design goals.  
								</br>
								</br>
								View some of our recent projects to learn more about what we can do for you.  
                                <!-- InstanceEndEditable -->
                                
                                
                            </div>
                            
                         
                        </div>
                    </div>
                    <div id="main-content-center">
					  <div id="gallerydiv" class="ad-gallery">
						<div class="ad-image-wrapper">
						</div>
							
						  <div class="ad-controls">
						  </div>
						  <div class="ad-nav">
							<div class="ad-thumbs">
							  <ul class="ad-thumb-list" id="thumb-list">
								<li>
								  <a href="images/gallery/show/Zan2.jpg">
									<img src="images/gallery/show/thumbs/Zan2.jpg" class="image0">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/Zan3.jpg">
									<img src="images/gallery/show/thumbs/Zan3.jpg"  class="image1">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/Zan4.jpg">
									<img src="images/gallery/show/thumbs/Zan4.jpg"  class="image2">
								 </a>
								</li>
								<li>
								  <a href="images/gallery/show/Zan5.jpg">
									<img src="images/gallery/show/thumbs/Zan5.jpg"  class="image3">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/Zanetti.jpg">
									<img src="images/gallery/show/thumbs/Zanetti.jpg"  class="image4">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/c2-villa cabrini_0012_couches tables.jpg">
									<img src="images/gallery/show/thumbs/c2-villa cabrini_0012_couches tables.jpg"  class="image5">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/c2-villa cabrini_0062_chair and buffet cr.jpg">
									<img src="images/gallery/show/thumbs/c2-villa cabrini_0062_chair and buffet cr.jpg"  class="image6">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/Zan7.jpg">
									<img src="images/gallery/show/thumbs/Zan7.jpg"  class="image7">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/Zan1.jpg">
									<img src="images/gallery/show/thumbs/Zan1.jpg"  class="image8">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/c2-dorchester.jpg">
									<img src="images/gallery/show/thumbs/c2-dorchester.jpg"  class="image9">
								  </a>
								</li>							
								<li>
								  <a href="images/gallery/show/c2-seine_0008_dining_594px.jpg">
									<img src="images/gallery/show/thumbs/c2-seine_0008_dining_594px.jpg"  class="image10">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/c2-seine_0089_flower table_594px.jpg">
									<img src="images/gallery/show/thumbs/c2-seine_0089_flower table_594px.jpg"  class="image11">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/c2-seine_0150_hallway bench_594px.jpg">
									<img src="images/gallery/show/thumbs/c2-seine_0150_hallway bench_594px.jpg"  class="image14">
								  </a>
								</li>
								<li>
								  <a href="images/gallery/show/c2-seine_0176_workout room_594px.jpg">
									<img src="images/gallery/show/thumbs/c2-seine_0176_workout room_594px.jpg"  class="image15">
								  </a>
								</li>				
							  </ul>
							</div>
						  </div>
						</div>
                    </div>
                    <div id="main-content-right">
                    </div> 
                </div>  
                <div class="gradient"></div>  
            </div>
            <a href="javascript:void()" onclick="loadNewData()">LoadNewData</a>

        </div>
    </body>
    <!-- InstanceEnd -->

     
    </script>
    </html>

