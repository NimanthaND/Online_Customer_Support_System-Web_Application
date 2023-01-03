<?php
    include_once 'config.php';
?>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/companyPage.css">
</head>

<body>

    <div class="companypagebody" style="background-image: url(pictures/companiesbg.jpg);">


        <div class="pricerangetab ">
            <h1>
                Price Range
            </h1>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Rs.0.00 - Rs.5000.00</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Rs.0.00 - Rs.5000.00</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Rs.0.00 - Rs.5000.00</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Rs.0.00 - Rs.5000.00</label><br>

        </div>

        <div class="starratingtab ">
            <h1>
                Star rating
            </h1>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">1  Star</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">2  Star</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">3  Star</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">4  Star</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">5  Star</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Unrated</label><br>

        </div>

        <div class="facilitiestab ">
            <h1>
                Facilities
            </h1>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Service 1</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Service 2</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Service 3</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Service 4</label><br>

        </div>

        <div class="bedpref ">
            <h1>
                Bed preference
            </h1>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Twin beds</label><br>

            <input type="radio" id="#" name="#" value="#">
            <label for="#">Double Bed</label><br>


        </div>



<div class="companypagesearchbar">
    <input type="text" placeholder="Search...">
    <button type="submit">Search</button>
</div>
    <?php
    $sql = "SELECT * FROM services";
    $result = $conn -> query($sql);
    if($result -> num_rows>0){
        while($row = $result -> fetch_assoc()){
           echo" <div class='hotelsadstab'>
                <ul>
                    <li>
                        <div class='hotelads'>
                            <img src='R_uploads/".$row['pic']."' alt='hlogo'>
            
                            <div class='hoteladstital'>
                                <h3>".$row['companyName']."</h3>
                                <h5>LKR-".$row['price']."</h5>
                            
            
                                <a href='Resrvation.html'>
                                <button>Button</button></a>
                                
                            </div>
            
                        </div>
                    </li>
                </ul>
            </div>";
        }
    }
        
        
        ?>
    </div>

    
    </body>

</html>