<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Join the Crossfit Gym, ​Get started today, ​Book your workout">
    <meta name="description" content="">
    <title>Art of Aspiration</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Register.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "The art of aspiration",
		"logo": "images/68735890-0.png"
}</script>
    <meta name="theme-color" content="#deca97">
    <meta property="og:title" content="User Register">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
                      <?php
                            include('connection.php');

                            if(isset($_POST["submit"]))
                            {

                                $usertype = "user";

                                ///Declaration Variable
                                $Username = $_POST['username'];
                                $Email = $_POST['email'];
                                $Password = $_POST['password'];

                                //SQL Statement
                                $query = "INSERT INTO tbllogin VALUES('','$usertype','$Username','$Password','$Email')";
                                mysqli_query($conn,$query);
                                header("Location: index.php");
                            }
                      ?>
    <header class="u-clearfix u-header u-header" id="sec-1a30"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="1016" data-image-height="1000">
          <img src="images/68735890-0.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-palette-1-base u-section-1" id="sec-8287">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-size-20 u-image-1" data-image-width="736" data-image-height="920">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-container-style u-layout-cell u-size-40 u-white u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div style="position: relative; bottom:45px" class="u-form u-form-1">
                    <form action="#" method="POST" style="padding: 28px;">
                      <p style="position: relative; bottom:30px" class="u-align-center u-form-group u-form-text u-text u-text-1"> New to our website?<br>Create an account to get started!</p>
                      <div style="position: relative; top: 30px;" class ="form">
                      <div class="u-form-group u-form-name">
                        <label for="name-4c18" class="u-label">Username</label>
                        <input type="text" placeholder="Enter your Username" id="name-4c18" name="username" class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none" required>
                      </div>
                      <div style="position: relative; top:20px" class="u-form-email u-form-group">
                        <label for="email-4c18" class="u-label">Email</label>
                        <input type="email" placeholder="Enter a valid Email address" id="email-4c18" name="email" class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none" required>
                      </div>
                      <div style="position: relative; top:40px" class="u-form-group u-form-group-4">
                        <label for="text-18a4" class="u-label">Password</label>
                        <input type="text" placeholder="Enter a Password" id="text-18a4" name="password" class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none" required>
                      </div>
                      </div>
                      <div class="u-align-right u-form-group u-form-submit">
                        <a style="position: relative; top:115px" href="#" class="u-active-black u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-black u-palette-1-base u-radius-50 u-btn-1">Register</a>
                        <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
                      </div>
                    </form>
                    <a style="position:relative; width:565px; left: 25px;top:100px" href="index.php" class="u-active-black u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-none u-btn u-hover-black u-palette-1-base u-radius-50 u-btn-1">Back</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0bc3"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">&copy; Art of Aspiration 2023.</p>
      </div></footer>
 
</body></html>