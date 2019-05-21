<?php 
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'fypweb') or die (mysqli_error($mysqli));

if (isset($_GET['read'])) {
    $id = $_GET['read'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM animals WHERE id=$id") or die ($mysqli->error());
        $row = $result->fetch_array();
        $id = $row['id'];
        $date = $row['date'];
        $name_title = $row['name_title'];
        $type = $row['type'];
        $species = $row['species'];
        $gender = $row['gender'];
        $age = $row['age'];
        $basic_ifmt = $row['basic_ifmt'];
        $other_ifmt = $row['other_ifmt'];
        $username = $row['username'];
        $name = $row['name'];
        $whatsapp = $row['whatsapp'];
        $contact = $row['contact'];
        $email = $row['email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Animals LOVE | Modify Animals Page</title>

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
                  <li><a href="create.html">Create animals</a></li>
                  <li class="hidden-xs"><a href="your_animals.php?read=<?php echo $username; ?>">Your animals</a></li>
                  <li class="hidden-xs"><a href="message.php?read=<?php echo $username; ?>">Message</a></li>
                  <li class="hidden-xs"><a href="logout.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Animals<strong>LOVE</strong> <span>Your Animals Home</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.php"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="search.php" method="post">
                  <input type="text" name="valueToSearch" id="valueToSearch" placeholder="Search here ex. 'cat' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  
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
              <li><a href="index.php">Animals LOVE</a></li>
              <li><a href="#">Dog <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Siberian</a></li>
                  <li><a href="#">Dachshund</a></li>
                  <li><a href="#">Australian Shepherd</a></li>
                  <li><a href="#">Shih Tzu</a></li>
                  <li><a href="#">Alaskan</a></li>
                  <li><a href="#">Irish wolfhound</a></li>
                  <li><a href="#">Other</a></li>
                </ul>
              </li>
              <li><a href="#">Cat <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Russian Blue</a></li>
                  <li><a href="#">Persian cat</a></li>
                  <li><a href="#">Scottish Fold</a></li>
                  <li><a href="#">Siamese cat</a></li>
                  <li><a href="#">Ragdoll</a></li>
                  <li><a href="#">Maina Coon</a></li>
                  <li><a href="#">Other</a></li>
                </ul>
              </li>
              <li><a href="#">Rabbit</a></li>
              <li><a href="#">Rodents</a></li>
              <li><a href="#">Tortoise</span></a></li>
              <li><a href="#">Other</a></li>
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
          <h2>Modify Animal Page</h2>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Modify Animals</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- / catg header banner section -->

  <!-- Cart view section -->
  <section id="checkout">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="checkout-area">
            <form action="update.php?update=<?php echo $id?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>">
              <div class="row">
                <div class="col-md-8">
                  <div class="checkout-left">
                    <div class="panel-group" id="accordion" value="<?php echo $id; ?>">
                      <!-- Animal Information -->
                      <div class="panel panel-default aa-checkout-billaddress">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Animal Information
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input name="date" type="date" value="<?php echo $date?>" placeholder="Posting Date*"
                                    required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input name="name_title" type="text" value="<?php echo $name_title ?>"
                                    placeholder="Name / Title*" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <select name="type">
                                    <option value="Null">Select Your Animal</option>
                                    <option value="Dog">Dog</option>
                                    <option value="Cat">Cat</option>
                                    <option value="Rabbit">Rabbit</option>
                                    <option value="Rodents">Rodents</option>
                                    <option value="Tortoise">Tortoise</option>
                                    <option value="Other">Other</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <select name="species">
                                    <option value="Null">Select Your Species</option>
                                    <option value="Siberian">Dog - Siberian</option>
                                    <option value="Dachshund">Dog - Dachshund</option>
                                    <option value="Asustralian Shepherd">Dog - Asustralian Shepherd</option>
                                    <option value="Shih Tze">Dog - Shih Tze</option>
                                    <option value="Alaskan">Dog - Alaskan</option>
                                    <option value="Irish wolfhound">Dog - Irish wolfhound</option>
                                    <option value="Other">Dog - Other</option>
                                    <option value="Russian Blue">Cat - Russian Blue</option>
                                    <option value="Persian cat">Cat - Persian cat</option>
                                    <option value="Scottish Fold">Cat - Scottish Fold</option>
                                    <option value="Siamese cat">Cat - Siamese cat</option>
                                    <option value="Ragdoll">Cat - Ragdoll</option>
                                    <option value="Maina Coon">Cat - Maina Coon</option>
                                    <option value="Other">Cat - Other</option>
                                    <option value="Rabbit">Rabbit</option>
                                    <option value="Rodents">Rodents</option>
                                    <option value="Tortoise">Tortoise</option>
                                    <option value="Other">Other</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <select name="gender">
                                    <option value="Null">Select Animal Gender*</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Male (already neutered)">Male (already neutered)
                                    </option>
                                    <option value="Female (already neutered)">Female (already neutered)
                                    </option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <select name="age">
                                    <option value="Null">Select Animal Age*</option>
                                    <option value="Below 6 Months">Below 6 Months</option>
                                    <option value="6 Months to 1 Year">6 Months to 1 Year</option>
                                    <option value="1 Year to 3 Years">1 Year to 3 Years</option>
                                    <option value="3 Years to 8 Years">3 Years to 8 Years</option>
                                    <option value="Older Then 8 Years">Older Then 8 Years</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <textarea name="basic_ifmt" value="<?php echo $basic_ifmt ?>" cols="8"
                                    rows="3">Basic Information*</textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <textarea name="other_ifmt" value="<?php echo $other_ifmt ?>" cols="8"
                                    rows="3">Other Information*</textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Contact Information -->
                      <div class="panel panel-default aa-checkout-billaddress">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                              Contact Information
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input name="username" type="text" value="<?php echo $username ?>"
                                    placeholder="User Name*" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input name="name" type="text" value="<?php echo $name ?>" placeholder="Name*"
                                    required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input name="whatsapp" type="number" value="<?php echo $whatsapp ?>"
                                    placeholder="Whatsapp No.*" required>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input name="contact" type="number" value="<?php echo $contact ?>"
                                    placeholder="Contact No.*" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <input name="email" type="email" value="<?php echo $email ?>"
                                    placeholder="Email Address*" required>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="checkout-right">
                    <h4>Animal Picture</h4>
                    <div class="aa-payment-method">
                      Select image to upload:
                      <input type="file" name="picture" id="picture">
                      <input name="update" type="submit" value="Update" class="aa-browse-btn">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->

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
                      <li><a href="index.php">Home</a></li>
                      <li><a href="create.html">Create animals</a></li>
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
                        <li><a href="https://www.google.com.hk/maps/@22.2822262,114.2331057,15z?hl=en">Site Map</a></li>
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
                        <p><span class="fa fa-envelope"></span>kikichau03@gmail.com</p>
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