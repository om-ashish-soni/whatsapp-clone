<?php
    $link=mysqli_connect("localhost","root","");
    $sql="CREATE DATABASE onechat";
    if($link->query($sql)){
        echo "db onechat created successfully";
    }
    else{
        $link->error;
    }
    mysqli_close($link);

    $link_to_table=mysqli_connect("localhost","root","","onechat");
    $sql_to_table="CREATE TABLE users(
        username VARCHAR(50)   
    )";
    if($link_to_table->query($sql_to_table)){
        echo "users table created successfully";
    }
    else{
        echo $link_to_table->error;
    }
    mysqli_close($link_to_table);
    $link_to_chats=mysqli_connect("localhost","root","","onechat");
    $sql_to_chats="CREATE TABLE chats(
        uname VARCHAR(50),
        msg VARCHAR(255),
        dt VARCHAR(255)
    )";
    if($link_to_chats->query($sql_to_chats)){
        echo "chats table for global chat created successfully";
    }
    else{
        echo $link_to_chats->error;
    }
    header('Location:signin.php');
    exit();
?>