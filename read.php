<?php
include("./connectdb.php");
$sql = "SELECT * FROM `PRO2_Aanmeldingen`";
$result = mysqli_query($conn, $sql);
$records = "";
while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr>
                <th scope='row'>" . $record["id"] . "<td>" . $record["burgerservicenummer"] . "</td>
                <td>" . $record["E-mail"] . "</td>
                <td>" . $record["Voornaam"] . "</td>
                <td>" . $record["geboortedatum"] . "</td>
                <td>" . $record["Mobiele nummer"] . "</td>
                <td>
                    <a href='./delete.php?id=" .  $record["id"]  ."'>
                    <img src='./img/b_drop.png' alt='kruisje'>
                </td>
                </tr>";
}

?>
<div class="col-12">
    <table class="table table-dover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">burgerservicenummer</th>
                <th scope="col">E-mail</th>
                <th scope="col">Voornaam</th>
                <th scope="col">geboortedatum</th>
                <th scope="col">Mobiele nummer</th>
            </tr>
        </thead>
        <tbody>
            <?php
echo $records;
?>
        </tbody>
    </table>
</div>