<?php

    //Capture data from original screen
    $product_description = filter_input(INPUT_POST, 'product_description');
    $beer_qty_price= filter_input(INPUT_POST, 'beer_qty_price');
    $member= filter_input(INPUT_POST, 'member');
    $v = filter_input(INPUT_POST, 'purchase_amount', FILTER_VALIDATE_FLOAT);


    // Validation
    if($product_description === FALSE) {
        $error_message = 'Must be a valid product';
    }

    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Beer Purchase Results</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Beer Purchase Results</h1>
            <label>Product Description</label>
            <span><?php echo $product_description; ?><span><br>
            <label>Beer Quantity + Price</label>
            <span><?php echo $beer_qty_price; ?><span><br>
            <label>Purchase Amount</label>
            <span><?php echo $v; ?><span><br>
            <label>Club Member</label>
            <span><?php echo $member; ?><span><br>            
        <form action="index.php" method="post">
            <div id ="buttons" style="position:relative; top:60px;">
                <label>&nbsp;</label>
                <input type="submit" value="Return to Main page"><br>
            </form>
        </main>
    </body>
