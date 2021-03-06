<?php 
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login.html"); // Redirecting To Home Page 
}

$mysqli = new mysqli('localhost', 'root', '', 'fypweb') or die (mysqli_error($mysqli));

if (isset($_GET['read'])) {
    $username = $_GET['read'];
    $result = $mysqli->query("SELECT * FROM animals WHERE username LIKE '$username'")
    or die ($mysqli->error);
}?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Animals LOVE | Your Animals Page</title>

  <!-- Font awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- SmartMenus jQuery Bootstrap Addon CSS -->
  <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <!-- Product view slider -->
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="css/nouislider.css">
  <!-- Theme color -->
  <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
  <!-- Top Slider CSS -->
  <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

  <!-- Main style sheet -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- wpf loader Two -->
  <div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
      <span>Loading</span>
    </div>
  </div>
  <!-- / wpf loader Two -->
  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div id="google_translate_element"></div>
                </div>
                <!-- / language -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>+852-6732-6697</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="login.html">Login</a></li>
                  <li><a href="create.php">Create animals</a></li>
                  <li class="hidden-xs"><a href="your_animals.php?read=<?php echo $login_session; ?>">Your animals</a></li>
                  <li class="hidden-xs"><a href="message.php?read=<?php echo $login_session; ?>">Message</a></li>
                  <li class="hidden-xs"><a href="logout.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->


    <!-- menu -->
    <section id="menu">
      <div class="container">
        <div class="menu-area">
          <!-- Navbar -->
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <!-- Left nav -->
              <ul class="nav navbar-nav">
                <li><a href="index_login.php">Animals LOVE</a></li>
              <li><a href="search_list.php?read=Dog">Dog <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="search_list.php?read=Siberian">Siberian</a></li>
                  <li><a href="search_list.php?read=Dachshund">Dachshund</a></li>
                  <li><a href="search_list.php?read=Australian Shepherd">Australian Shepherd</a></li>
                  <li><a href="search_list.php?read=Shih Tzu">Shih Tzu</a></li>
                  <li><a href="search_list.php?read=Alaskan">Alaskan</a></li>
                  <li><a href="search_list.php?read=Irish wolfhound">Irish wolfhound</a></li>
                  <li><a href="search_list.php?read=Dog-Other">Other</a></li>
                </ul>
              </li>
              <li><a href="search_list.php?read=Cat">Cat <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="search_list.php?read=Russian Blue">Russian Blue</a></li>
                  <li><a href="search_list.php?read=Persian cat">Persian cat</a></li>
                  <li><a href="search_list.php?read=Scottish Fold">Scottish Fold</a></li>
                  <li><a href="search_list.php?read=Siamese cat">Siamese cat</a></li>
                  <li><a href="search_list.php?read=Ragdoll">Ragdoll</a></li>
                  <li><a href="search_list.php?read=Maina Coon">Maina Coon</a></li>
                  <li><a href="search_list.php?read=Cat-Other">Other</a></li>
                </ul>
              </li>
              <li><a href="search_list.php?read=Rabbit">Rabbit</a></li>
              <li><a href="search_list.php?read=Rodents">Rodents</a></li>
              <li><a href="search_list.php?read=Tortoise">Tortoise</span></a></li>
              <li><a href="search_list.php?read=Other-Other">Other</a></li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
        </div>
      </div>
    </section>
    <!-- / menu -->

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
      <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
      <div class="aa-catg-head-banner-area">
        <div class="container">
          <div class="aa-catg-head-banner-content">
            <h2>Your Animals Page</h2>
            <ol class="breadcrumb">
              <li><a href="index_login.php">Home</a></li>
              <li class="active">Your Animals</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="cart-view">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cart-view-area">
              <div class="cart-view-table aa-wishlist-table">
                <form action="">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th></th>
                          <th></th>
                          <th>Name / Title</th>
                          <th>Type</th>
                          <th>Species</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()): ?>
                        <tr>
                          <td><a class="remove" href="delete.php?delete=<?php echo $row['id']; ?>">
                              <fa class="fa fa-close"></fa>
                            </a></td>
                          <td><a href="detail.php?read=<?php echo $row['id']; ?>"><img src="img/man/polo-shirt-1.png"
                                alt="img"></a></td>
                          <td><a class="aa-cart-title"
                              href="detail.php?read=<?php echo $row['id']; ?>"><?php echo $row['name_title']; ?></a>
                          </td>
                          <td><?php echo $row['type']; ?></td>
                          <td><?php echo $row['species']; ?></td>
                          <td><a href="modify.php?read=<?php echo $row['id']; ?>" class="aa-add-to-cart-btn">Modify
                              animals</a></td>
                        </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / Cart view section -->

    <!-- Subscribe section -->
    <section id="aa-subscribe">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-subscribe-area">
              <h3>Subscribe our newsletter </h3>
              <p>If you want to know the latest news, please subscribe!</p>
              <form action="" class="aa-subscribe-form">
                <input type="email" name="" id="" placeholder="Enter your Email">
                <input type="submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / Subscribe section -->

    <!-- footer -->
    <footer id="aa-footer">
      <!-- footer bottom -->
      <div class="aa-footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-footer-top-area">
                <div class="row">
                  <div class="col-md-3 col-sm-6">
                    <div class="aa-footer-widget">
                      <h3>Main Menu</h3>
                      <ul class="aa-footer-nav">
                        <li><a href="index_login.php">Home</a></li>
                        <li><a href="create.php">Create animals</a></li>
                        <li><a href="terms.html">Terms And Privacy</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="aa-footer-widget">
                      <div class="aa-footer-widget">
                        <h3>Knowledge Base</h3>
                        <ul class="aa-footer-nav">
                          <li><a href="https://www.spca.org.hk/en/">SPCA</a></li>
                          <li><a href="http://www.mongrelclub.hk/Welcome-To-Mongrel-Club-Website/">Mongrel Club</a></li>
                          <li><a href="https://hongkongdogrescue.com/">HKDR</a></li>
                          <li><a href="http://www.hkherp.org/">HKHerp</a></li>
                          <li><a href="http://www.catsocietyhk.org/">Cat Society HK</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="aa-footer-widget">
                      <div class="aa-footer-widget">
                        <h3>Useful Links</h3>
                        <ul class="aa-footer-nav">
                          <li><a href="https://www.google.com.hk/webhp?tab=lw">Google Search</a></li>
                          <li><a href="https://www.google.com.hk/maps/@22.2822262,114.2331057,15z?hl=en">Site Map</a>
                          </li>
                          <li><a href="https://translate.google.com.hk/?hl=en&tab=lT">Google Translate</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="aa-footer-widget">
                      <div class="aa-footer-widget">
                        <h3>Contact Us</h3>
                        <address>
                          <p> 25 Astor Pl, NY 10003, USA</p>
                          <p><span class="fa fa-phone"></span>+852-6732-6697</p>
                          <p><span class="fa fa-envelope"></span>187109450@stu.vtc.edu.hk</p>
                        </address>
                        <div class="aa-footer-social">
                          <a href="#"><span class="fa fa-facebook"></span></a>
                          <a href="#"><span class="fa fa-twitter"></span></a>
                          <a href="#"><span class="fa fa-google-plus"></span></a>
                          <a href="#"><span class="fa fa-youtube"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-bottom -->
      <div class="aa-footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-footer-bottom-area">
                <p>Designed by <a href="https://www.instagram.com/kiki_kkcwk311/">Wing Ki Chau</a></p>
                <div class="aa-footer-payment">
                  <span class="fa fa-cc-mastercard"></span>
                  <span class="fa fa-cc-visa"></span>
                  <span class="fa fa-paypal"></span>
                  <span class="fa fa-cc-discover"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- / footer -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
    <!-- To Slider JS -->
    <script src="js/sequence.js"></script>
    <script src="js/sequence-theme.modern-slide-in.js"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
    <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="js/slick.js"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="js/nouislider.js"></script>
    <!-- Custom js -->
    <script src="js/custom.js"></script>
    <!-- Traanslate js -->
    <script type="text/javascript"
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="js/google_translate.js"></script>

</body>

</html>

<?php
function pre_r($array) {
  echo'<pre>';
  print_r($array);
  echo '</pre>';
}
?>