<?php 


$connection = mysqli_connect('localhost', 'root', '', 'NOPWATH');

if (isset($_POST['submit'])) {
    $state = $_POST['STATES'];

    $query = "SELECT Percentage of members using hygeine services, Number of household members, FROM statistica WHERE STATES = '".$state."'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error());
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ASSIGNMENT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>
    
                <h2> NUMBER OF PEOPLE WITH ACCESS TO HYGEINE </h2>
                <form action="yodacen414.php" method="post">
                <select class="form-control-sm" name="STATES" id="#select">
                    <option value="">Select State</option>
                    <option value="ABIA">ABIA</option>
                    <option value="ADAMAWA">ADAMAWA</option>
                    <option value="AKWA IBOM">AKWA IBOM</option>
                    <option value="ANAMBRA">ANAMBRA</option>
                    <option value="BAUCHI">BAUCHI</option>
                    <option value="BAYELSA">BAYELSA</option>
                    <option value="BENUE">BENUE</option>
                    <option value="BORNO">BORNO</option>
                    <option value="CROSS RIVER">CROSS RIVER</option>
                    <option value="DELTA">DELTA</option>
                    <option value="EBONYI">EBONYI</option>
                    <option value="EDO">EDO</option>
                    <option value="EKITI">EKITI</option>
                    <option value="ENUGU">ENUGU</option>
                    <option value="GOMBE">GOMBE</option>
                    <option value="IMO">IMO</option>
                    <option value="JIGAWA">JIGAWA</option>
                    <option value="KADUNA">KADUNA</option>
                    <option value="KANO">KANO</option>
                    <option value="KATSINA">KATSINA</option>
                    <option value="KEBBI">KEBBI</option>
                    <option value="KOGI">KOGI</option>
                    <option value="KWARA">KWARA</option>
                    <option value="LAGOS">LAGOS</option>
                    <option value="NASARWA">NASARAWA</option>
                    <option value="NIGER">NIGER</option>
                    <option value="OGUN">OGUN</option>
                    <option value="ONDO">ONDO</option>
                    <option value="OSUN">OSUN</option>
                    <option value="OYO">OYO</option>
                    <option value="PLATEAU">PLATEAU</option>
                    <option value="RIVERS">RIVERS</option>
                    <option value="SOKOTO">SOKOTO</option>
                    <option value="TARABA">TARABA</option>
                    <option value="YOBE">YOBE</option>
                    <option value="ZAMFARA">ZAMFARA</option>
                    <option value="FCT">FCT, ABUJA</option>
                    
                </select>
                <input class="btn btn-primary" type="submit" name="submit" value="CHECK">
          
                </form>

        <br>
    
    
    <h4>
    <?php
        if (isset($_POST['submit'])) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo $state ."<br>" ."<hr>";

                echo "Percentage of members using hygeine services: " .$row["Percentage of members using hygeine services"] ." people" ."<br>";
                echo "Number of household members: " .$row["Number of household members"] ." %" ."<br>";
    

            }
        }
            
        
    ?>

    </h4>
   </div>
</body>
</html>