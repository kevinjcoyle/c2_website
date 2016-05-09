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

        <link rel="stylesheet" title="Default Styles"
            href="css/base.css" media="screen"/>
        <link rel="stylesheet" 
              type="text/css" 
              href="css/simpleGallery.css" 
              media="screen">
        <link rel="icon" 
              type="image/x-ico" 
              href="favicon.ico" />
        <link rel="shortcut icon" 
              type="image/x-icon" 
              href="favicon.ico" />

        <!-- InstanceBeginEditable name="head" -->
        <script language="javascript">
            function load() {
                document.getElementById("home").className="selectedMenuItem";
            } // end load()
        </script>
        <!-- InstanceEndEditable -->
    </head>

    <body onload="load()">
        <div id="all" >

        <div id="header">
            <div id="header-content">
                <div id="header-content-left" itemscope itemtype="http://schema.org/Organization">
                    <img itemprop="logo" style="padding:10px" 
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
                            <a id="galleryLink" class="menuItem" href="gallery.php">GALLERY</a>
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
                                <!-- InstanceBeginEditable name="infoAreaTitle" -->
                                <img src="images/Welcome.png" width="93" height="16" alt="Welcome" /> <!-- InstanceEndEditable -->
                            </div>
                            <div id="infoAreaUnderline" class="infoAreaUnderline">
                            </div>
                            <div id="infoAreaBody" class="infoAreaBody">
                                <!-- InstanceBeginEditable name="infoArea" -->
                                C2 is committed to providing the highest quality furnishings and services to the commercial, educational, healthcare and hospitality markets. <br/>
								<ul>
								<li><a id="customFurnitureLink" class="menuItem" href="customFurniture.php">Custom Furniture</a></li>
                                <li><a id="productLineLink" class="menuItem" href="productlines.php">Product Lines</a></li>
                                <!-- InstanceEndEditable -->
                            </div>
                        </div>
                    </div>
                    <div id="main-content-center">
                        <!-- InstanceBeginEditable name="mainBody" -->
                        <div class="dropshadow2">
                        <div class="innerbox">
                        <div id="simpleGalleryImageDiv">
                          <img src="images/gallery/show/Zanetti.jpg"
                            width="594" 
                            height="396"/>
                        </div>
                        </div>
                        </div>
                        <!-- InstanceEndEditable -->
                    </div>
                    <div id="main-content-right">
                    </div> 
                </div>  
                <div class="gradient"></div>  
            </div>
            
        </div>
    </body>
    <!-- InstanceEnd --></html>

