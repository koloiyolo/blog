<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    
    $db = new PDO('mysql:host=db','root','password');
    return $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
?>