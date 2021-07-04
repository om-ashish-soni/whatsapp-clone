
<?php
    session_start();
    $to_be_added=$_POST['person'];
    $username=$_SESSION['username'];
    $link=mysqli_connect('localhost','root','',$username);
    $sql="SELECT * FROM freinds WHERE username='$to_be_added'";
    $flag=1;
    $count=0;
    // echo "hello";
    if($result=$link->query($sql)){
        // echo "in if";
        while($row=$result->fetch_assoc()){
            // echo "in while";
            $count=0;
            $may_be_freind=$row['username'];
            for($i=0;$i<min(strlen($may_be_freind),strlen($to_be_added));$i++){
                // echo "in for";
                // echo $may_be_freind[$i]." ".$to_be_added[$i]." ".$count."<br>";
                if($may_be_freind[$i]===$to_be_added[$i]){

                }
                else{
                    $count++;
                }
            }
            // echo "hello1";
            if($count==0){
                // echo "hello";
                echo "$to_be_added is already your freind";
                $flag=0;
                exit();
            }
            else{
                $count=0;
                // echo "will be added soon";
            }
            
        }
        
        
    }
    $result->free_result();
    echo $flag;
    if($flag==1){
        echo "dont' worry will be added soon";
        
        if(TRUE){    
            $link_friend=$link;
            $sql_to_freind="INSERT INTO freinds (username) VALUES ('$to_be_added')";
            if($link_friend->query($sql_to_freind)==TRUE){
                echo "<br>"."congratulations now you are freind of $to_be_added";
                mysqli_close($link_friend);
                $link_create_table=mysqli_connect("localhost","root","",$username);
                $sql_create_table="CREATE TABLE $to_be_added (
                    username VARCHAR(255),
                    msg VARCHAR(255),
                    date_time VARCHAR(255),
                    is_read VARCHAR(50)
                    )";
                if($link_create_table->query($sql_create_table)){
                    echo "<br>"."chat area created successfully";
                }
                else{
                    echo "<br>"."chat area not created , please try again to add freind";
                }
                mysqli_close($link_create_table);

                $link_in_friend=mysqli_connect("localhost","root","",$to_be_added);
                $sql_in_friend="INSERT INTO freinds (username) VALUES ('$username')";
                if($link_in_friend->query($sql_in_friend)){
                    echo "<br>"."now you are in connection with $to_be_added is also";
                }
                else{
                    echo "<br>"."sorry $to_be_added not want to connect you, please try again";
                }
                mysqli_close($link_in_friend);

                $link_create_table_in_friend=mysqli_connect("localhost","root","",$to_be_added);
                $sql_create_table_in_friend="CREATE TABLE $username(
                    username VARCHAR(255),
                    msg VARCHAR(255),
                    date_time VARCHAR(255),
                    is_read VARCHAR(50)
                )";
                if($link_create_table_in_friend->query($sql_create_table_in_friend)){
                    echo "<br>"."$to_be_added 's chat area created successfully";
                    mysqli_close($link_create_table_in_friend);
                    $link_to_add_in_status_column_of_user=mysqli_connect("localhost","root","",$username);
                    $sql_to_add_in_status_column_of_user="ALTER TABLE status_list ADD $to_be_added varchar(255);";
                    if($link_to_add_in_status_column_of_user->query($sql_to_add_in_status_column_of_user)){
                        echo "<br>"."added $to_be_added in your status_list";
                    }
                    else{
                        echo "<br>"."error, sorry we can't add $to_be_added in your status_list";
                    }
                    mysqli_close($link_to_add_in_status_column_of_user);
                    $link_to_add_in_status_column_of_to_be_added=mysqli_connect("localhost","root","",$to_be_added);
                    $sql_to_add_in_status_column_of_to_be_added="ALTER TABLE status_list ADD $username varchar(255);";
                    if($link_to_add_in_status_column_of_to_be_added->query($sql_to_add_in_status_column_of_to_be_added)){
                        echo "<br>"."added you in $to_be_added 's status_list";
                        header("Location:profiles/profile.php");
                    }
                    else{
                        echo "<br>"."error, sorry we can't add you in $to_be_added 's status_list";
                    }
                    mysqli_close($link_to_add_in_status_column_of_to_be_added);
                }
                else{
                    echo "<br>"."$to_be_added ;s chat area not created , please try again to add freind";
                }
                
            }

            
        }
        else{
            echo "<br>";
            echo "Sorry no users found named "."<b>".$to_be_added."</b>";
        }
        exit();
    }
    mysqli_close($link);



    
?>