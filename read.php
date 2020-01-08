<?php
include("./connectdb.php");
$sql = "SELECT * FROM `aanmeldingen`";
$result = mysqli_query($conn, $sql);
$records = "";
while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr>
                <td scope='row'>" . $record["burgerservicenummer"] . "</td>
                <td>" . $record["E-mail"] . "</td>
                <td>" . $record["Voornaam"] . "</td>
                <td>" . $record["geboortedatum"] . "</td>
                <td>" . $record["Mobiele nummer"] . "</td>
                </tr>";
}

?>
<div class="col-12">
    <table class="table table-dover">
        <thead>
            <tr>
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