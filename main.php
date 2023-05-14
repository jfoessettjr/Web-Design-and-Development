<?php
    if (!isset($product_description)) { $product_description = ''; }
    if (!isset($list_price)) { $list_price = ''; }
    if (!isset($sales_taxI)) {$sales_taxI = ''; }
    if (!isset($local_taxI)) {$local_taxI = ''; }
    if (!isset($discount_percent)) { $discount_percent = ''; }
    
?>
<html>
    <head>
        <title>MyBeer Discounts</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
<body>
    <main>
        <h1>Beer Discount</h1>
        <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php } //End If Statement ?>

        <form action="beerdiscount.php" method="post">
            <div id="data">
                <!-- Product Description -->
                <label>Product Description:</label>
                <input type="text" name="product_description"
                    value="<?php echo htmlspecialchars($product_description); ?>"><br>
                <!-- List Price -->
                <label>List Price:</label>
                <input type="text" name="list_price"
                    value="<?php echo htmlspecialchars($list_price); ?>"><br>
                <!-- Sales Tax -->
                <label>Sales Tax:</label>
                <input type="text" name="sales_taxI"
                    value="<?php echo htmlspecialchars($sales_taxI); ?>"><br>
                <!-- Local Tax -->
                <label>Local Tax:</label>
                <input type="text" name="local_taxI"
                    value="<?php echo htmlspecialchars($local_taxI); ?>"><br>
                <!-- Discount Percentage -->
                <label>Discount Percent:</label>
                <input type="text" name="discount_percent"
                    value="<?php echo htmlspecialchars($discount_percent); ?>">
                <span>%</span><br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
            </div>
        </form>
    </main>
</body>
</html>