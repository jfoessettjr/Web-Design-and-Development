<?php
    if (!isset($product_description)) { $product_description = ''; }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beer Purchasing App</title>
        <link rel="stylesheet" type="text/css" href="main.css"> 
</head>
<body>
    <main>
        <h1>Beer Purchasing Calculator</h1>
        <?php if (!empty($error_message)) { ?>
            <p> class="error"><?php echo $error_message; ?></p>
        <?php } //end if ?>
        <form action="display_results.php" method="post">
            <div id ="data">
            <label>Product Description:</label>
                <input type="text" name="product_description"
                    value="<?php echo htmlspecialchars($product_description); ?>"><br>               
            <label for="beer_qty_price">Beer Quantity + Price:</label>
                <select name="beer_qty_price" id="beer_qty_price">
                    <option value="6 Pack Bottles $12.99">6 Pack Bottles $12.99</option>
                    <option value="6 Pack Cans $11.99">6 Pack Cans $11.99</option>
                    <option value="Case (24) Bottles $23.99">Case (24) Bottles $23.99</option>
                    <option value="Case (24) Cans $21.99">Case (24) Cans $21.99</option>
                    <option value="Case (12) Cans (12) Bottles $22.99">Case (12) Cans (12) Bottles $22.99</option>
                    </select><br>
                    <label>Purchase Amount</label>
                <select name="purchase_amount">
                    <?php for ($v = 1; $v <=12 ; $v += 1) : ?>
                        <option value="<?php echo $v; ?>" >
                            <?php echo $v; ?>
                        </option>
                    <?php endfor; ?>
                    </select><br>
                    <label for="member">Club Member?</label>
                <select name="member" id="member">
                    <option value="Club Member 2% Discount">Club Member 2% Discount</option>
                    <option value="Not a Club Member Yet!">Not a Club Member Yet!</option>
                    </select><br>
            </div>

            <div id ="buttons">
                <label>&nbsp;</label>
                <input type="checkbox" name="age">Over 21? 
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Verfiy and Calculate"><br>
            </form>
    </body>