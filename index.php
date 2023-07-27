<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shop Verifikation</title>
        <meta name="description" content="That should be a Magento Customer Verification lets see if that shit works">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/styles.css">
</head>
    <body>
        <head>
            <div class="background"><div>
            <img src="media/LogoohneText.png"> 
            <h1 class="Title"> Kalenderliebe Benutzer Verifikation</h1>
            <p class="Sub-Title">Bestellverifizierung für den Kalenderliebe Shop</p>
        </head>
        <div class="sub-form">
            <form method="post">
                <fieldset>
                    <label id="email"><input name="magemail" type="email" placeholder="example@email.com" required></input>Ihre Shop Email Adresse </label>
                    <label id="password"><input name="magepass" type="password" placeholder="123456789" required></input>Ihr Shop Passwort</label>
                    <label id="vat-number"><input name="vatnumber" for="vat-number" placeholder="EU123456" type="text" required ></input>Ihre Umsatzsteuer Nummer</label>
                </fieldset>
        <button type="submit" class="submit" onclick="history.back()" for="sub-form">Senden</button>
<?php

    // Getting Values from the Form Field is more Difficult than anticipated 
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $magemail = $_POST['magemail'];
        $magepass = $_POST['magepass'];
        $vatnumber = $_POST['vatnumber'];
    }

    // database details
    $host = "localhost";
    $username = "mysql";
    $password = "";
    $dbname = "kunden_test";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO kunden VALUES ('$magemail', '$magepass', '$vatnumber')";
  
    // // send query to the database to add values and confirm if successful
    // $rs = mysqli_query($con, $sql);
    // if($rs)
    // {
    //     echo "Connection Successfull";
    // }
  
    // close connection
    mysqli_close($con);

?>
            </form>
        </div>
    </body>
</html>
