<?php
    // Ganesh Program
    $connect = mysqli_connect('localhost','root','');
    $checkdbSelect = mysqli_select_db($connect,'TechnoNews');
/*
    if($checkdbSelect) 
    {
        echo "Connected to database. Please go ahead.";
    } else {
        echo "SOmething went wrong. Please fix ASAP.";
    }*/