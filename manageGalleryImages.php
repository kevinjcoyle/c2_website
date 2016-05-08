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
        <?php require_once("auth.php"); ?>
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
              
        <style>
		body { font-size: 62.5%; }
		label, input { display:block; }
		input.text { margin-bottom:12px; width:95%; padding: .4em; }
		fieldset { padding:0; border:0; margin-top:25px; }
		h1 { font-size: 1.2em; margin: .6em 0; }
		div#users-contain { width: 350px; margin: 20px 0; }
		div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
		div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
		.ui-dialog .ui-state-error { padding: .3em; }
		.validateTips { border: 1px solid transparent; padding: 0.3em; }
	</style>
	
	

        <!-- InstanceBeginEditable name="head" -->
        <script type="text/javascript">
            function load() {
               // document.getElementById("gallery").className="selectedMenuItem";
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
                            src="images/C2 Logo.jpg" 
                            width="132" 
                            height="96"
                            id="logo"/>
                    </div>
                    <div id="header-content-center" style="width:290px">
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
                    <div id="main-content-left">
                        <div id="infoArea" class="infoArea">
                            <div id="infoAreaTitle" class="infoAreaTitle">
                                <!-- InstanceBeginEditable name="infoAreaTitle" -->FEATURED IMAGE<!-- InstanceEndEditable -->
                            </div>
                            <div id="infoAreaUnderline" class="infoAreaUnderline">
                            </div>
                            <div id="infoAreaBody" class="infoAreaBody">
                                <!-- InstanceBeginEditable name="infoArea" -->This is a test to see how it will look when there is more test.  Under Construction<!-- InstanceEndEditable -->
                            </div>
                        </div>
                    </div>
                    <div id="main-content-center">
                      <div id="galleryImage" class="simpleGalleryManager">
                      
                      </div>
                       
                    </div>
                    <div id="main-content-right">
                    </div> 
                </div>  
                <div class="gradient"></div>  
            </div>

        </div>
    </body>
    <!-- InstanceEnd -->

    <script src="./javascript/simpleGalleryManager.js" type="text/javascript">
     
    </script>
    </html>

