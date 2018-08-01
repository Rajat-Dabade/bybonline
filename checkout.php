<?php

    if(!isset($_GET['productId']) && !isset($_GET['value']) && !isset($_GET['purchaseId']))
    {
        echo "<script type='text/javascript'>
     window.location.href='cart.php'</script>";
     die();
    }

    

    $pagename = "checkout.php";
    include('includes/header.php');
    include_once 'includes/db_config.php';

    if(!isset($_SESSION['name']))
    {
        echo "<script type='text/javascript'>
     window.location.href='login.php'</script>";

     die();
    }

    $db = new Database();
    $conn = $db->getConnection();

    $productId = $_GET['productId'];
    $value = $_GET['value'];
    $purchaseId = $_GET['purchaseId'];

?>
<head>

<link rel="stylesheet" type="text/css" href="css/custom.css">
<style type="text/css">
.SuccessField {
    border-color: #458845 !important;
    -webkit-box-shadow: 0 0 7px #9acc9a !important;
    -moz-box-shadow: 0 0 7px #9acc9a !important;
    box-shadow: 0 0 7px #9acc9a !important;
    background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
}
.btn-xs{
    line-height: 28px;
}
/*login form*/
.login-container{
    margin-top:30px ;
}
.login-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}
.login-container input[type=text], input[type=password],textarea {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}
.login-container-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #357ebd;/*#4d90fe;*/
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}
.login-container-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}
.login-help{
  font-size: 12px;
}
.asterix{
    background:#f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
}
/*
 * BOOTSTRAP
 */
.container{
    border: none;
}
.panel-footer{
    background:#fff;
}
.btn{
    border-radius: 1px;
}
.btn-sm, .btn-group-sm > .btn{
    border-radius: 1px;
}
.input-sm, .form-horizontal .form-group-sm .form-control{
    border-radius: 1px;
}
.panel-info {
    border-color: #999;
}
.panel-heading {
    border-top-left-radius: 1px;
    border-top-right-radius: 1px;
}
.panel {
    border-radius: 1px;
}
.panel-info > .panel-heading {
    color: #eee;
    border-color: #999;
}
.panel-info > .panel-heading {
    background-image: linear-gradient(to bottom, #555 0px, #888 100%);
}
hr {
    border-color: #999 -moz-use-text-color -moz-use-text-color;
}
.panel-footer {
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
    border-top: 1px solid #999;
}
.btn-link {
    color: #888;
}
hr{
    margin-bottom: 10px;
    margin-top: 10px;
}
/** MEDIA QUERIES **/
@media only screen and (max-width: 989px){
    .span1{
        margin-bottom: 15px;
        clear:both;
    }
}
@media only screen and (max-width: 764px){
    .inverse-1{
        float:right;
    }
}
@media only screen and (max-width: 586px){
    .cart-titles{
        display:none;
    }
    .panel {
        margin-bottom: 1px;
    }
}
.form-control {
    border-radius: 1px;
}
@media only screen and (max-width: 486px){
    .col-xss-12{
        width:100%;
    }
    .cart-img-show{
        display: none;
    }
    .btn-submit-fix{
        width:100%;
    }
    
}
/*
@media only screen and (max-width: 777px){
    .container{
        overflow-x: hidden;
    }
}*/
</style>       
</head>
<body>
<div class="container wrapper">
            <hr>
                <h1 align = "center" id="user-head">Checkout</h1>
            <hr>  
            <br> 
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="checkoutdown.php">


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Review Order <div class="pull-right"><small><a class="afix-1" href="#" style="color:#fff;">Edit Cart</a></small></div>
                        </div>
                        <div class="panel-body">
                            
                            <?php 

                                switch ($value) {
                                    case 'cake':
                                        
                                        $query = "SELECT * from cake where product_Id = '$productId'";

                                        $q = $conn->query($query);

                                        if($q->setFetchMode(PDO::FETCH_ASSOC))
                                        {
                                            while ($r = $q->fetch()){

                                                $name = $r['name'];
                                                $image = $r['image'];
                                                $price = $r['price'];

                                                ?>

                                                <div class="form-group" style="padding: 1em;margin: 0.35em;">
                                                    <div class="form-group">
                                                        <div class="col-sm-3 col-xs-3">
                                                            <img class="img-responsive" src="<?php echo $image; ?>" />
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <div class="col-xs-12"><?php echo $name; ?></div>
                                                            <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 text-right">
                                                            <h4><span>$</span><?php echo $price; ?></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                        }    

                                        break;
                                    
                                    case 'bread':
                                        
                                        $query = "SELECT * from bread where product_Id = '$productId'";

                                        $q = $conn->query($query);

                                        if($q->setFetchMode(PDO::FETCH_ASSOC))
                                        {
                                            while ($r = $q->fetch()){

                                                $name = $r['name'];
                                                $image = $r['image'];
                                                $price = $r['price'];

                                                ?>

                                                <div class="form-group" style="padding: 1em;margin: 0.35em;">
                                                    <div class="form-group">
                                                        <div class="col-sm-3 col-xs-3">
                                                            <img class="img-responsive" src="<?php echo $image; ?>" />
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <div class="col-xs-12"><?php echo $name; ?></div>
                                                            <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 text-right">
                                                            <h4><span>$</span><?php echo $price; ?></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                        }    

                                        break;

                                        case 'cookies':
                                        
                                        $query = "SELECT * from cookies where product_Id = '$productId'";

                                        $q = $conn->query($query);

                                        if($q->setFetchMode(PDO::FETCH_ASSOC))
                                        {
                                            while ($r = $q->fetch()){

                                                $name = $r['name'];
                                                $image = $r['image'];
                                                $price = $r['price'];

                                                ?>

                                                <div class="form-group" style="padding: 1em;margin: 0.35em;">
                                                    <div class="form-group">
                                                        <div class="col-sm-3 col-xs-3">
                                                            <img class="img-responsive" src="<?php echo $image; ?>" />
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <div class="col-xs-12"><?php echo $name; ?></div>
                                                            <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 text-right">
                                                            <h4><span>$</span><?php echo $price; ?></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                        }    

                                        break;

                                        case 'pastries':
                                        
                                        $query = "SELECT * from pastries where product_Id = '$productId'";

                                        $q = $conn->query($query);

                                        if($q->setFetchMode(PDO::FETCH_ASSOC))
                                        {
                                            while ($r = $q->fetch()){

                                                $name = $r['name'];
                                                $image = $r['image'];
                                                $price = $r['price'];

                                                ?>

                                                <div class="form-group" style="padding: 1em;margin: 0.35em;">
                                                    <div class="form-group">
                                                        <div class="col-sm-3 col-xs-3">
                                                            <img class="img-responsive" src="<?php echo $image; ?>" />
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <div class="col-xs-12"><?php echo $name; ?></div>
                                                            <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 text-right">
                                                            <h4><span>$</span><?php echo $price; ?></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                        }    

                                        break;


                                }


                            ?>

                            
                           

                            <div class="form-group" style="padding: 1em;margin: 0.35em;"><hr />
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <strong>Order Total</strong>
                                        <div class="pull-right"><span>$</span><span><?php echo $price; ?></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="padding-left: 1em;margin: 0.2em;">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <br>

                

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Address</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h2 style="padding-bottom: 0.6em; padding-top: 0.6em;">Shipping Address</h2 style="padding: 1em;">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="" required />
                                    <input type="hidden" name="purchaseId" value="<?php echo $purchaseId; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Pin Code:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="pin_code" class="form-control" value="" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Mobile Number:</strong></div>
                                <div class="col-md-12"><input type="text" name="mobile_number" class="form-control" value="" required /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Cake Message:</strong></div>
                                <div class="col-md-12"><input type="text"  name="cake_message" class="form-control" value="" /></div>
                                
                            </div>
                        </div>

                    </div>
                    <!--SHIPPING METHOD END-->
                
                </div>
                
                </form>
            </div>
            <div class="row cart-footer">
        
            </div>
    </div>

<?php
include('includes/footer.php');
?>