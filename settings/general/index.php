<?php
require "../../php/db.php"
?>
<?php if(isset($_SESSION['logged_user']) ) : /* checking if user already authorised  and if yes then*/ ?>

<?php else : ?>
<?php header('Location: /') ?>
<?php endif; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Timer</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/dashboard/css/master.css">
  <link rel="stylesheet" href="/dashboard/css/navBar.css">




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script type="text/javascript" src="/dashboard/js/navigationBar.js" async></script>
  <script type="text/javascript" src="./js/settings.js" async></script>



</head>

<body>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/dashboard/index.php"><span class="glyphicon glyphicon-home iconSize"> </span> Dashboard</a>
    <a href="#IcoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapseble "> <span class="glyphicon glyphicon-certificate iconSize"> </span> ICO</a>
    <ul class="collapse list-unstyled" id="IcoSubmenu">
      <li>
        <a href="/ico/purchase_token/index.php" class="subMenuText">Purchase Token</a>
      </li>
      <li>
        <a href="/ico/purchase_history/index.php" class="subMenuText" >Purchase History</a>
      </li>
    </ul>

    <a href="#WalletSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapseble"> <span class="glyphicon glyphicon-qrcode iconSize"> </span> Wallet</a>
    <ul class="collapse list-unstyled" id="WalletSubmenu">

      <li>

      <li><a href="index.php" class="subMenuText" >Token Withdrawal</a></li>
      <li><a href="/refund/index.php" class="subMenuText" >Ether Refund</a></li>


      </li>

    </ul>


    <a href="#ReferralSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapseble"> <span class="glyphicon glyphicon-share-alt iconSize"></span> Referral</a>
    <ul class="collapse list-unstyled" id="ReferralSubMenu">
      <li><a href="#" class="subMenuText" > Affilate History</a></li>
    </ul>



    <a href="#SettingsSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapseble"> <span class="glyphicon glyphicon-cog iconSize"> </span> Settings</a>
    <ul class="collapse list-unstyled" id="SettingsSubMenu">
      <li> <a href="#" class="subMenuText" > General Setting </a> </li>
  <li> <a href="/settings/logs/logs.php" class="subMenuText" > Logs </a> </li>
      <li> <a href="#" class="subMenuText" > Reset Password </a> </li>
      <li> <a href="#" class="subMenuText" > Security </a> </li>
      <li> <a href="#" class="subMenuText" > Login History </a> </li>
    </ul>

    <a href="/php/logout.php"> <span class="glyphicon glyphicon-log-out iconSize" ></span> LogOut</a>
  </div>

  <div id="main">

    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>
    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="">
          <h2 class="text-center">Setting</h2>

          <div style="" class="">
            <span>USD</span>
            <input id="usd" type="radio" name="currency" value="usd" checked>
            <input id="eur" type="radio" name="currency" value="eur">
            <span>EUR</span>
          </div>


          <button type="button" name="button" id="showme">showCookies</button>
        </div>
        <!--end of block-->
      </div>
    </div>
  </div>

</body>

</html>
