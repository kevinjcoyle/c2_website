<?php

/* Config Section */

$pass		= 'demo';				    // Set the password.
$cookiename	= 'sascookie';				// Optional change: Give the cookie a name. Default is sascookie
$expirytime	= time()+3600;				// Optional change: Set an expiry time for the password (in seconds). Default is 1 hour.
$msg		= 'Password incorrect.';	// Optional change: Error message displayed when password is incorrect. Default is "Password incorrect".


/* Logout Stuff */
$exit_admin_nav    = '<a id="return_to_page" class="menuItem" href="./index.php">RETURN TO WEB PAGE</a>';
$logout_button = '<form action="'.$_SERVER['REQUEST_URI'].'" method="post"><input type="submit" name="logout" value="Logout" /></form>';
$logout_text   = '<a href="'.$_SERVER['REQUEST_URI'].'?logout=true">Logout</a>';
$logout_nav   = '<div id="logoutNavDiv" class="menuItemDiv" onclick="location.href="'.$_SERVER['REQUEST_URI'].'?logout=true";"><a id="logoutNav" class=menuItem" href="'.$_SERVER['REQUEST_URI'].'?logout=true">LOGOUT</a></div>';

/* End Config */



if (isset($_REQUEST['logout'])) {
	setcookie($cookiename,'',time() - 3600);							// remove cookie/password
	if (substr($_SERVER['REQUEST_URI'],-12)=='?logout=true') {			// if there is '?logout=true' in the URL
		$url=str_replace('?logout=true','',$_SERVER['REQUEST_URI']);	// remove the string '?logout=true' from the URL
		header('Location: '.$url);										// redirect the browser to original URL
	}
	show_login_page('');
	exit();
}


/* End Logout Stuff */

/* FUNCTIONS */
$encrypt_pass=md5($pass);	// encrypt password

function setmycookie() {
global $cookiename,$encrypt_pass,$expirytime;
	setcookie($cookiename,$encrypt_pass,$expirytime);
}	

function show_login_page($msg) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Authorization Required</title>
  <script src="./javascript/jquery-1.4.2.min.js">
  </script>
  <script src="./javascript/jquery-ui-1.8.7.custom.min.js">
  </script>
  <link rel="stylesheet"
        type="text/css" 
        href="css/custom-theme/jquery-ui-1.8.7.custom.css"
        media="screen">
  <link rel="stylesheet" 
        type="text/css" 
        href="css/base.css" 
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
            <div id="index" class="menuItemDiv" onclick="location.href='index.php';">
              <?php 
                global $exit_admin_nav;
                echo $exit_admin_nav;
              ?>
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
                Login
              <!-- InstanceEndEditable -->
            </div>
            <div id="infoAreaUnderline" class="infoAreaUnderline">
            </div>
            <div id="infoAreaBody" class="infoAreaBody">
            <!-- InstanceBeginEditable name="infoArea" -->
              Enter your password in the field to the right and click login.
            <!-- InstanceEndEditable -->
            </div>
          </div>
        </div>
        <div id="main-content-center">
        
        <form id="passwordForm" action="" method="POST">
          <div>
          <label for="password">Password:&nbsp;&nbsp;</label>
          <input type="password" name="password" size="20">
          </div>
          <div>
            <a href="javascript:$('#passwordForm').submit()">Login</a>
           </div>
            <input type="hidden" name="sub" value="sub"/>
        </form>
        <div class=error><?=$msg?></div>
  
  
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
<?php

 }

/* END FUNCTIONS */

$errormsg='';
if (substr($_SERVER['REQUEST_URI'],-8)!='auth.php') {// if someone tries to request sas.php
	if (isset($_POST['sub'])) {						// if form has been submitted
		$submitted_pass=md5($_POST['password']);	// encrypt submitted password
		if ($submitted_pass<>$encrypt_pass) {		// if password is incorrect
			$errormsg=$msg;
			show_login_page($errormsg);
			exit();
		} else {									// if password is correct
			setmycookie();
		}
	} else {
		if (isset($_COOKIE[$cookiename])) {			// if cookie isset
			if ($_COOKIE[$cookiename]==$encrypt_pass) {	// if cookie is correct
			   // do nothing
			} else {								// if cookie is incorrect
				show_login_page($errormsg);
				exit();
			}
		} else {									// if cookie is not set
			show_login_page($errormsg);
			exit();
		}
	}
} else {
	echo 'Invalid file request';
}
?>