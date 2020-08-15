<?php
    //FUEL QUOTE HISTORY DISPLAY PAGE
?>


<!DOCTYPE html>
<html>
    
    <head>
        <title>Fuel Quote History</title>          
          <link href="styles/fuel_quote_history.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    
    <body>

        <h1>Fuel Quote History</h1>
        <br>
        <table>
            <tr>
                <th>No.</th>
                <th>Gallons Requested</th>
                <th>Delivery Date</th>                
                <th>Suggested Price / Gallon</th>
                <th>Total Amount Due</th>
                <th>Date Created</th>
            </tr>
            <?php
                session_start();
                include_once 'processes/fuel_quote_controller.php';
                
                //init classes
                $user = new User1();
                $f_quote = new Fuel_quote();
                $db = new DB();            
                $userID = $_SESSION['id'];

              
                $query1 = mysqli_query($db->link(), "SELECT * FROM fuel_quotes WHERE userid = $userID");
                if($query1->num_rows > 0){
                    $i = 1;
                    while($row = $query1->fetch_assoc()) {
                        echo "<tr><td>" .$i. "</td><td>" . $row["gallons_requested"] . "</td><td>"
                        . $row["delivery_date"]. "</td><td>" . $row["suggested_price"] . "</td><td>" . $row["total_amount_due"] . "</td><td>" . $row["created_date"] . "</td></tr>";
                        $i = $i + 1;
                    }
                    echo "</table>";
                } else { echo "0 results"; }
                
            ?>
            
        <br><br>
        <div class="Buttons">
        <button onclick="location.href='fuel_quote.php'"type="button">Generate New Quote</button>
        <button onclick="location.href='logout.php'"type="button">Logout</button>
        </div>
    </body>
</html>

