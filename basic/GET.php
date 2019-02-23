<?php
    $nameCode = $_GET['name'];
    $countryCode = $_GET['country'];
    // echo 'Hi '.$nameCode;
    // echo ' From '.$countryCode;

//page1.php?name=James&country=Thailand
?>
<div>
    <h1>Profile</h1>
    Hi <b><?php echo $nameCode; ?></b>
    From <u><?php echo $countryCode; ?></u>
    <hr />
</div>