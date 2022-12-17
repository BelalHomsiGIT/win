<?php
    try{
        $conn = mysqli_connect('localhost', 'root', '', 'win');
    }catch(Exception $e){
        echo "ERROR: " . $e->getMessage();
    }