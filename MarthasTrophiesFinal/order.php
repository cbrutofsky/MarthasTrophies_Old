<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $ordernum = $_POST['orders'];
        for(int i = $ordernum; i > 0; i++){
            echo "<label for="item">Item Number</label>";
            echo "<input type="text" id="item" name="item"><br>";
            echo "<label for="quantity">Quantity</label>";
            echo "<input min="1" type="number" id="quantity" name="quantity" value="1"/>";
            echo "<label for="engraving">Text for Engraving</label>";
            echo "<input type="text" id="engraving" name="engraving">";
            echo "<label for="comments">Extra Comments or Changes</label>";
            echo "<input type="text" id="comments" name="comments">";
            echo "<label for="date">Pickup Date</label>";
            echo "<input type="date" id="date" name="date">";
        }
    }
?>


            