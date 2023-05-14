<?php
    //Capture Data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
    $sales_taxI = filter_input(INPUT_POST, 'sales_taxI', FILTER_VALIDATE_INT);
    $local_taxI = filter_input(INPUT_POST, 'local_taxI', FILTER_VALIDATE_INT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_INT);

    //Validate the Data
    $error_message = ''; //Baseline Data
    if (empty($product_description)) {
        $error_message .='Product Description is a required field.<br>';
    }

    //Validate the List Price
    if ($list_price === FALSE) {
        $error_message .= 'List price must be a valid number.<br>';
    } else if($list_price <= 0) {
        $error_message .= 'List price must be greater than 0.<br>';
    }
    //Validate the Sales Tax
    if ($sales_taxI === FALSE) {
        $error_message .= 'Sales tax must be a valid whole number.<br>';
    } else if($sales_taxI <= 0) {
        $error_message .= 'Sales tax must be greater than 0.<br>';
    }
    //Validate the Local Tax
    if ($local_taxI === FALSE) {
        $error_message .= 'Local Tax must be a valid whole number.<br>';
    }
    //Validate Discount Price
    if ($discount_percent === FALSE) {
        $error_message .= 'Discount Percentage must be a valid whole number.<br>';
    } else if($discount_percent <= 0) {
        $error_message .= 'Discount Percentage must be greater than 0.<br>';
    }
    
    if ($error_message != '') {
        include('main.php');
        exit();
    }

    //Calculate Discount
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    //Calculate Sales Tax
    $sales_tax = $sales_taxI * .01;

    //Calculate Local Tax
    $local_tax = $local_taxI * .01;

    //Identify Sales
    $sales_total = $discount_price + $sales_tax + $local_tax;

    //Formatting
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);
    $sales_tax_percent_formatted = $sales_taxI."%";
    $sales_tax_formatted = "$".number_format($sales_tax, 2);
    $local_tax_percent_formatted = $local_taxI. "%";
    $local_tax_formatted = "$".number_format($local_tax, 2);
    $sales_total_formatted = "$".number_format($sales_total, 2);
    ?>
<html>
    <head>
        <title>MyBeer Discounts</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Beer Discount</h1>

            <label>Product Description:</label>
            <span><?php echo htmlspecialchars($product_description); ?></span><br>

            <label>List Price:</label>
            <span><?php echo htmlspecialchars($list_price_formatted); ?></span><br>

            <label>Standard Discount:</label>
            <span><?php echo htmlspecialchars($discount_percent_formatted); ?></span><br>

            <label>Discount Amount:</label>
            <span><?php echo $discount_formatted; ?></span><br>

            <label>Discount Price:</label>
            <span><?php echo $discount_price_formatted; ?></span><br>

            <br>

            <label>Local Tax Rate:</label>
            <span><?php echo $local_tax_percent_formatted; ?></span><br>

            <label>Local Tax Amount:</label>
            <span><?php echo $local_tax_formatted; ?></span><br>

            <label>Sales Tax Rate:</label>
            <span><?php echo $sales_tax_percent_formatted; ?></span><br>

            <label>Sales Tax Amount:</label>
            <span><?php echo $sales_tax_formatted; ?></span><br>

            <label>Sales Total:</label>
            <span><?php echo $sales_total_formatted; ?></span><br>
        </main>
    </body>
</html>