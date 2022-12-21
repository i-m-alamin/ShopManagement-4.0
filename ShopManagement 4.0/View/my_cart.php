<?php
session_start();
require "../Control/db_connect.php";
?>  
 <!DOCTYPE html>  
 <html>  
 <head>
    <title>Shopping Cart</title>
    <link rel='stylesheet' href='../css/cart.css' type='text/css' media='all' />
</head>
 
      <body>  
           <br />   
                <?php   
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>
                               <th width="20%">Item ID  Item Name</th> 
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   

    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
         $total = $total + $value['Price'];
        echo "
        <tr>
                <td> $value[ID] $value[Item_Name]</td>
                <td> <input type='number' value='$value[Quantity]' min='1' max='10'></td>                
                <td>    $value[Price]</td>    
                <td>    $value[Price]</td>    
                <td style='display:inline'>
                <form action='cart.php' method='POST' >
                    <button name='remove_item'>Remove</button>
                    <input type='hidden' name = 'id' value='$value[ID]'>
                </form></td>
            </tr> <br>";
        
        }
    }


    ?>

    <div>
        <h3>Total: <?php echo "$total" ?></h3>
    </div>
    <div style="clear:both;"></div>
        <div class="message_box" style="margin:10px 0px;">
            <?php echo "<h2>TONG SHOPPING CART</h2>"; ?>
        </div>
        <div class=" row">
            <div class="title">
                <a href="productslist.php"><input name="back" class="btn" type="button" value="Back">
        </div>



</body>

</html>