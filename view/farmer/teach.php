<?php ob_start(); ?>
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
  <link rel="icon" type="image/png" href="../../img/logo.png" />


</head>

<body>

  <!-- START: header -->

  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
      <a href="../farmerMain.php" class="probootstrap-logo" style="margin-right:20px;">The Greatest Farmer
        <span>.</span>
      </a>
      <a href="learn.php" style="margin-right: 10px;color:green;">Learn</a>
      <a href="teach.php" style="margin-right: 10px;color:green;">Teach</a>
      <a href="sell.php" style="margin-right: 10px;color:green;">Sell</a>
      <a href="subscribe.php" style="margin-right: 10px;color:green;">Subscribe</a>
      <nav role="navigation" class="probootstrap-nav hidden-xs">
        <ul class="probootstrap-main-nav">
          <div class="btn-group">
            <button style="color:navy;background-color:transparent;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hello,
              <?php session_start(); if ( ! empty( $_SESSION['username'] ) ) {echo ($_SESSION['username']);} else{echo ("");}?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="myProduct.php" style="padding-left:10px;">My Products</a>
              <br>
              <a href="mySubscription.php" style="padding-left:10px;">My Subscriptions</a>
              <br>
              <a href="myWrittenPost.php" style="padding-left:10px;">My Written Posts</a>
              <br>
              <a href="mySavedPost.php" style="padding-left:10px;">My Saved Posts</a>
              <br>
              <a href="../../index.html" style="padding-left:10px;">Logout</a>
            </div>
          </div>
        </ul>
      </nav>
    </div>
  </header>
  <!-- END: header -->

  <div class="probootstrap-section">
    <div class="container">
      <div class="row">
        <h2> Enter a new blog post</h2>
        <div class="col-md-8 probootstrap-animate">
          <form id="input-post" method="post">
            <!--              Title of the post-->
            <div class="row">
              <div class="col-md-9 form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
              </div>
            </div>

            <!--  CROP NAME DROPDOWN-->
            <?php
  require_once '../../app/DBinfo.php';
      try{
          $dbc = new PDO("mysql:host={$hn};dbname={$db}",$un,$pw);
          $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
          catch(PDOException $e){
              echo $e->getMessage();
              echo "Cannot connect to DB";
          }
            ?>
              <div class="row form-group">
                <div class="col-md-3">
                  <label for="crop">Crop:</label>
                  <select name="cropname" id="cropname">
                    <option selected disabled>Select crop</option>
                    <?php
                      try{
                          $stm = $dbc->query("SELECT cropName from CROPS");
                          $stm->setFetchMode(PDO::FETCH_ASSOC);
                          while ($row = $stm->fetch()){
                            echo "<option value=\"".$row['cropName']."\">".$row['cropName']."</option>";
                          }
                          }
                          catch(PDOException $e){
                              echo $e->getMessage();
                              echo "Fetching Cropname failed";
                          }
                            ?>
                  </select>
                </div>


                <!--              Description of crops-->
                <div class="col-md-6" class="form-group">
                  <label for="description">Crop Description:</label>
                  <textarea type="text" class="form-control" id="description" name="description" required></textarea>
                </div>
              </div>

              <!--              Uses of crops-->
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="uses">Uses:</label>
                  <textarea type="text" class="form-control" id="uses" name="uses" required></textarea>
                </div>
              </div>

              <!--              Disease-->
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="disease">Disease:</label>
                  <textarea class="form-control" id="disease" name="disease" width="30" required></textarea>
                </div>
              </div>


              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="writepost" name="writepost" value="Write Post">
              </div>
              <div id="success"> </div>

          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="gototop js-top">
    <a href="#" class="js-gotop">
      <i class="icon-chevron-thin-up"></i>
    </a>
  </div>

  <script src="../../js/scripts.min.js"></script>
  <script src="../../js/main.min.js"></script>
  <script src="../../js/jquery.validate.min.js"></script>
  <script src="../../js/additional-methods.min.js"></script>
  <script src="../../js/inputPost.js"></script>

</body>

</html>