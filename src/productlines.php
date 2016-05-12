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
                document.getElementById("productLine").className="selectedMenuItem";
            } // end load()
        </script>
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
           
        </div><!-- HEADER -->
         

            <div id="main">
                <div id="main-content">
                    <div id="main-content-left-pl">
                        <div id="infoArea" class="infoArea">
                            <div id="infoAreaTitle" class="infoAreaTitle">
                                <!-- InstanceBeginEditable name="infoAreaTitle" -->
                                <img src="images/Product Lines.png" width="131" height="16" alt="Welcome" /> <!-- InstanceEndEditable -->
                            </div>
                            <div id="infoAreaUnderline" class="infoAreaUnderline">
                            </div>
                            <div id="infoAreaBody">
                                <!-- InstanceBeginEditable name="infoArea" -->
								<table>
								  <tr>
     								<td align="center">
	         							<a href="http://www.pacificgreen.net" target="_blank">
											<img class="productLineLogo" src="images/Pacific Green Logo.png" alt="Pacific Green" />
										</a>
			     					</td>
				     				<td colspan="1" align="center">
					         			<a href="http://www.assaabloy.ca/" target="_blank">
											<img class="productLineLogo" src="images/Assa Abloy Logo.png" alt="Assa Abloy" />
										</a>
							    	</td>
								    <td align="center">
         								<a href="http://www.thegooddesignstudio.com/" target="_blank">
											<img class="productLineLogo" src="images/Good Design Studio Logo.png" alt="The Good Design Studio" />
										</a>
     								</td>
	   							</tr>
								<tr>
									<td align="center">
										<a href="http://www.nulcolighting.com/" target="_blank">
											<img class="productLineLogo" src="images/ELK Logo.png" alt="ELK" />
										</a>
									</td>
									<td align="center">
										<a href="http://www.mysterlinghome.com/" target="_blank">
											<img class="productLineLogo" src="images/Sterling Logo.png" alt="Sterling"/>
										</a>
									</td>
									<td align="center">
										<a href="http://www.dimondlighting.com/" target="_blank">
											<img class="productLineLogo" src="images/Dimond Logo.png" alt="Dimond" />
										</a>
									</td>
								</tr>
								<tr>
									<td colspan="3" align="center">
										<a href="http://www.adivik.com/" target="_blank">
											<img class="productLineLogo" src="images/Adivik Linen Logo.png" alt="Adivik Linen Company" />
										</a>
									</td>
								</tr>
							</table>
<!-- InstanceEndEditable -->
                            </div>
                        </div>
                    <!--/div>
                    

					
                        <!-- InstanceEndEditable -->
                    <!--/div>
                    <!--div id="main-content-right">
                    <!--/div--> 
                </div>  
                <div class="gradient"></div>  
            </div>
            
        </div>
    </body>
    <!-- InstanceEnd --></html>

