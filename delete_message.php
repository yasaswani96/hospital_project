<?php
include "php/db.php";

if(isset($_GET['id']))
{
    $id = (int)$_GET['id'];

    mysqli_query($conn,"DELETE FROM contact_messages WHERE message_id='$id'");

    header("Location: manage_messages.php");
    exit();
}
?>