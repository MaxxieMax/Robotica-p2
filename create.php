<?php
// echo var_dump($_POST);

// echo "mijn schooldingetje is: " . $_POST["number"];
// echo "mijn naam is: " . $_POST["firstname"];
// echo "mijn naam is: " . $_POST["email"];
// echo "mijn naam is: " . $_POST["firstname"];
// echo "mijn naam is: " . $_POST["firstname"] . "<br>";
?>

<?php
include("./connectdb.php");

    $number = $_POST["number"];
    $email = $_POST["email"];
    $firstname = $_POST["firstname"];
    $date = $_POST["date"];
    $Mnumber = $_POST["Mnumber"];


    $query = "INSERT INTO `aanmeldingen` (`burgerservicenummer`,
                                `E-mail`,
                                `Voornaam`,
                                `geboortedatum`,
                                `Mobiele nummer`)
                         VALUES ('$number',
                                '$email',
                                '$firstname',
                                '$date',
                                '$Mnumber')";


mysqli_query($conn, $query);

header("Refresh: 1; index.php?content=homepage")
?>

<div class="col-6">
    <h3>uw gegevens zijn verwerkt!</h3>
</div>

<div class="col-6">
    <img src="./img/duimpie.jfif" alt="duimpie">
</div>