<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>C2 Custom Furnishings Administration</title>
<?php include("auth.php"); ?>
<script src="./javascript/jquery-1.4.2.min.js">
        </script>
        <script src="./javascript/jquery-ui-1.8.7.custom.min.js">
        </script>
        <link rel="stylesheet" 
              type="text/css" 
              href="css/base.css" 
              media="screen">
        <link rel="stylesheet" 
              type="text/css" 
              href="css/simpleGallery.css" 
              media="screen">
        <link rel="stylesheet"
              type="text/css" 
              href="css/custom-theme/jquery-ui-1.8.7.custom.css"
              media="screen">
              
</head>
<body>
<div id="all" >
    <div id="header">
      <div id="header-content">
        <div id="header-content-left">
          <img style="padding:10px" 
               src="images/C2 Logo.jpg" 
               width="132" 
               height="96"
               id="logo"/>
        </div>
        <div id="header-content-center">
          &nbsp;
        </div>
        <div id="header-content-right">
          <div id="navigation">
            <?php include("adminNav.php");?>
          </div>
        </div>
      </div>
      <div id="menuUnderline">
      </div>
    </div>
    <div id="main">
      <div id="main-content">
        <div id="main-content-left"  style="width:300px">
          <div id="infoArea" class="infoArea">
            <div id="infoAreaTitle" class="infoAreaTitle">
              <!-- InstanceBeginEditable name="infoAreaTitle" -->
                Administration
              <!-- InstanceEndEditable -->
            </div>
            <div id="infoAreaUnderline" class="infoAreaUnderline">
            </div>
            <div id="infoAreaBody" class="infoAreaBody" style="width:250px">
            <!-- InstanceBeginEditable name="infoArea" -->
              Click the administration operation you would like to perform to the right.
            <!-- InstanceEndEditable -->
            </div>
          </div>
        </div>
        <div id="main-content-center" style="width:580">
            <a href="./manageGalleryImages.php">Manage Gallery Images</a><br>        
            <a href="http://test.c2customfurnishings.com/referers.php">View Website Views</a>
  
        </div>
        <div id="main-content-right">
        </div> 
      </div>  
      <div class="gradient">
      </div>  
    </div>
  </div>



</body>
</html>