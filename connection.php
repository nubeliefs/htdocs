<?php

$username ='nubeldem_nubeliefs832';
$password ='2612@Dora@1992';
$server ='localhost';
$db = 'nubeldem_nubdata';
$port = '3306';

$con = mysqli_connect($server,$username,$password,$db,$port);

if(!$con){
    
    ?>
    
    <script>
        
        alert('Error: Unable to connect to database');
    </script>
    
    <?php
}

?>