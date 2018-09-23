<?php
require "../../php/db.php"
?>
<?php if(isset($_SESSION['logged_user']) ) : /* checking if user already authorised  and if yes then*/ ?>

<?php else : ?>
<?php header('Location: /') ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <title>Purchase Token</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/dashboard/css/master.css">
  <link rel="stylesheet" href="./css/purchaseBlock.css">
  <link rel="stylesheet" href="/dashboard/css/responsiveProgressBar.css">
  <link rel="stylesheet" href="./css/investment.css">
  <link rel="stylesheet" href="/dashboard/css/navBar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./js/purch.js"></script>
  <script type="module" src="./js/index.js" async></script>
  <script type="text/javascript" src="/dashboard/js/navigationBar.js"async ></script>

</head>

<body>



  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/dashboard/index.php"><span class="glyphicon glyphicon-home iconSize"> </span> Dashboard</a>
    <a href="#IcoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapseble "> <span class="glyphicon glyphicon-certificate iconSize"> </span> ICO</a>
    <ul class="collapse list-unstyled" id="IcoSubmenu">
      <li>
        <a href="./index.php" class="subMenuText">Purchase Token</a>
      </li>
      <li>
        <a href="/ico/purchase_history/index.php" class="subMenuText" >Purchase History</a>
      </li>
    </ul>


    <a href="#WalletSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapseble"> <span class="glyphicon glyphicon-qrcode iconSize"> </span> Wallet</a>
    <ul class="collapse list-unstyled" id="WalletSubmenu">

      <li>

          <li><a href="/withdrawal/index.php" class="subMenuText" >Token Withdrawal</a></li>
          <li><a href="/refund/index.php" class="subMenuText" >Ether Refund</a></li>


      </li>

    </ul>


    <a href="#ReferralSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapseble"> <span class="glyphicon glyphicon-share-alt iconSize"></span> Referral</a>
    <ul class="collapse list-unstyled" id="ReferralSubMenu">
      <li><a href="#" class="subMenuText" > Affilate History</a></li>
    </ul>



    <a href="#SettingsSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapseble"> <span class="glyphicon glyphicon-cog iconSize"> </span> Settings</a>
    <ul class="collapse list-unstyled" id="SettingsSubMenu">
    <li> <a href="/settings/general/index.php" class="subMenuText" > General Setting </a> </li>
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
  <div class="row">
      <div class="block" style="">
        <h2 class="red-text text-center">Investment</h2>
        <br>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="display:flex;align-items:center;justify-content:space-between;">
          <button class="btn bouton-image imgBoutonEther curbtn " data-toggle="buttons" id="ether-button"></button>
          <button class="btn bouton-image imgBoutonBitcoin curbtn " data-toggle="buttons" id="bitcoin-button"></button>

        </div>
      </div>

    </div>
    <!--end of row 1 buttons-->


    <div class="row">
      <div class="block" style="height:auto;padding-bottom:5px;">
        <h2 class="text-center">Purchase details</h2>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button group">
          <div class="" style="margin:5px 0 0px 35px ">
            <span>TOKENS PER 1 <span class="currencyName"></span> = <span id="tokenPerEth"> </span> <span class="tokenName"></span> </span>
            <!--1st id = cryptocurrency 2nd id how many token 3rd id Token name-->
          </div>
          <div id="stageBar" class="container-fluid">
            <div class="container-fluid" style=" margin-top:5px;">
              <ol style="" class="progress-bar-">
                <li class="progress-bar__steps not-current;" style="">
                  <span class="" style="margin-left:40px" id="stage-1pct"></span>
                </li>
                <li class="progress-bar__steps not-current">
                  <span class="" style="margin-left:25px" id="stage-2pct"></span>
                </li>
                <li class="progress-bar__steps current">
                  <span class="" style="margin-left:25px" id="stage-3pct"></span>
                </li>
                <li class="progress-bar__steps not-current" style="width:37%">
                  <span class="" style="margin-left:25px" id="stage-4pct"></span>
                </li>
              </ol>
            </div>
          </div>
          <div class="container-fluid">
            <div id="bonusBar" class="container-fluid" style=" margin-top:50px;">
              <div class="labels">
                <div class="" style="margin-left:10px;"> <span>Bonus</span></div>
                <div class="" style="margin-left:0px;"> <span id="bonus-1pct"></span></div>
                <div class="" style="margin-left:0px;">  <span id="bonus-2pct"></span></div>
                <div class="" style="margin-left:0px;">  <span id="bonus-3pct"></span> </div>
                <div class="" style="padding-right:10px;"> <span id="bonus-4pct"></span></div>
              </div>

              <div style="margin-top:1px;display:flex;align-items:center;justify-content:center;">

                <div class="progress " style="width:618px;border:1px none black; background-color:lightgrey;height:10px;margin-bottom:0px">
                  <div id="progresBarValue" class="progress-bar progBar" style="width:65%;background-color:#00bea3;"></div>
                </div>

              </div>
              <div class="labels">
                <div class="" style="margin-left:10px;"><dt>Ether</dt></div>
                <div class="" style="margin-left:0px;"> <dt> <span id="ether-1E" ></span> </dt></div>
                <div class="" style="margin-left:0px;"> <dt> <span id="ether-2E" ></span> </dt></div>
                <div class="" style="margin-left:0px;"> <dt> <span id="ether-3E" ></span> </dt></div>
                <div class="" style="padding-right:15px;"><dt> <span id="ether-4E" ></span> </dt></div>
              </div>
            </div>


            <br>
            <div class="input-group" style="margin-left:15px;">
              <input type="text" class="form-control" style="text-align:left;" value="1" aria-describedby="basic-addon2" id="inputAmount">
              <span class="input-group-addon" style="text-align: left; width: 44px; height: 34px;" id="basic-addon2"><span class="text-center currencyName" ></span></span>

            </div>

            <div class="digits_purchase_datails" style="display:flex; justify-content:space-between;width:250px;padding-top:5px">
              <div style="margin-left:5px"> = </div>
              <span class="" id="standartPrice"></span>
              <span class="saleBonus1Hide"> + </span>
                <div class="saleBonus1Hide" style="text-align:center">
                  <p class="" id="calcbonus"></p>
                  <p style="margin-top:-15px">Bonus</p>
                </div>
              <span class="saleBonus2Hide"> + </span>

              <div class="saleBonus2Hide" style="text-align:center">

                <span id="saleBonus2"></span>
                <p style="margin-top:-5px">Sale</p>
              </div>

              <span> = </span>
              <span class="" id="tokenAmount"></span><span style="" class="tokenName"></span>

            </div>

            <div class="" style="margin:-15px 0 0 15px">
              <span class="red-text text-center" id="calcbonus"><span id="minimumInvestment" ></span> <span class="tokenName"></span> minimum investment</span>
            </div>

            <div class="container-fluid">
              <h3>Payment Address</h3>
              <input id="paymentAddressInput" type="text" value="" placeholder="" class="form-control inputAddress">
              <!--ADDRESS  ------------------------ ENTRY ID-->
              <h6>You can send <span id="paymentCurrency" ></span> from exchange</h6>
            </div>

            <div class="" id="etherButtonsHide">
              <div style="margin:10px 0 0 10px">


                <div class="container-fluid" style="display:flex;justify-content:space-between; padding: 0 15px 0 15px">
                  <div class="" style="width:250px;">Gas limit</div>
                  <div class="" style="width:250px;">Gas Price</div>
                </div>
                <div class="container-fluid" style="display:flex;justify-content:space-between; padding: 0 15px 0 15px">
                  <div id="gasLimitValue" class="" style="width:250px;"></div>
                  <div id="gasPriceValue" class="" style="width:250px;"> 9 <span>GWEI</span> </div>
                </div>
              </div>

              <div class="container" style="width:620px; display:flex; justify-content: space-between;margin-top:50px">

                <a href="#" class="deactivate" > <button type="button" class="btnw btn-lg myBtn" id="purchase-myetherwallet" >MYETHERWALLET</button> </a>
                <a href="#" class="deactivate" > <button type="button" class="btnw btn-lg myBtn" id="purchase-metamask" >METAMASK</button> </a>

              </div>

            </div>
          </div>


        </div>
      </div>

    </div>
</div>

</div>
</body>

</html>
