<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Greatest Farmer</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles-merged.css">
    <link rel="stylesheet" href="../../css/style.min.css">
    <link rel="stylesheet" href="../../css/custom.css">

  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="../buyerMain.php" class="probootstrap-logo" style="margin-right:20px;">The Greatest Farmer<span>.</span></a>
        <a href="learn.php" style="margin-right: 10px;color:green;">Learn</a>
        <a href="buy.php" style="margin-right: 10px;color:green;">Buy</a>
        <a href="subscribe.php" style="margin-right: 10px;color:green;">Subscribe</a>
        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <div class="btn-group">
                <button style="color:navy;background-color:transparent;"class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hello, <?php session_start();if ( ! empty( $_SESSION['username'] ) ) {echo htmlspecialchars($_SESSION['username']);} else{echo htmlspecialchars("");}?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a href="myOrder.php" style="padding-left:10px;">My Order</a><br>
                    <a href="mySubscription.php" style="padding-left:10px;">My Subscription</a><br>
                    <a href="mySavedPost.php" style="padding-left:10px;">My Saved Post</a><br>
                    <a href="../../index.html" style="padding-left:10px;">Logout</a>
                </div>
            </div>
            <li><a href="cart.php">Cart</a></li>
          </ul>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  
  <div class="probootstrap-section">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 mb40">
          <h2></h2>
          <p>Purchase products from farmers</p>
        </div>
      </div>
            <div class="row">
              <div class="col-md-2">
                  <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Origin
                        <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                
                            </ul>
                  </div>    
              </div>
              <div class="col-md-2">
                  <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Crop type
                        <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Vegetable</a></li>
                              <li><a href="#">Fruit</a></li>
                              <li><a href="#">Herb</a></li>
                              <li><a href="#">Nuts</a></li>
                              <li><a href="#">Grain</a></li>
                            </ul>
                  </div>    
              </div>
              <div class="col-md-2">
                  <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Price
                        <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#">0-10000won</a></li>
                              <li><a href="#">10,000-20,000won</a></li>
                              <li><a href="#">20,000-30,000won</a></li>
                              <li><a href="#">30,000-40,000won</a></li>
                              <li><a href="#">40,000-50,000won</a></li>
                              <li><a href="#">50,000-100,000won</a></li>
                              <li><a href="#">Above 100,000won</a></li>    
                            </ul>
                  </div>    
              </div>
            </div>
    </div>
  </div>


  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="../../js/scripts.min.js"></script>
  <script src="../../js/main.min.js"></script>
  <script src="../../js/custom.js"></script>

  </body>
</html>