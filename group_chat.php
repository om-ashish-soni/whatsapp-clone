<style>
.sent{
    font-size:30px;
    float:right;
}
.received{
    font-size:30px;
    float:left;
}
.tiny{
    font-size:20px;
}
</style>
<?php
session_start();

$_SESSION['talk_with']=$_POST['talk_with'];


$username=$_SESSION['username'];
$other=$_SESSION['talk_with'];
$username=strtolower($username);
$other=strtolower($other);
echo $username;
echo " <----> ";
echo $other;

$msg=$_POST['msg'];
date_default_timezone_set('Asia/Kolkata');
$date_time=date('y-m-d h:ia');
$index=0;
// if($_SESSION['count']==0){
//     access the previous database
//     store it into an array and increment index
//     print array[$index]
// }
if(isset($msg)&& !empty($msg)){
    $link_to_me=mysqli_connect("localhost","root","",$username);
    //push_array()
    if($link_to_me->connect_error){
        echo $link->connect_error;
    }
    else{
        echo "<br>".$username." ".$other;
        echo "<br>"."connected to database";
        $sql_to_me="INSERT INTO $other (username,msg,date_time) VALUES ('$username','$msg','$date_time')";
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";
        if($link_to_me->query($sql_to_me)){
            echo "<br>"."inserted msg successfully";
            echo '<script>alert("message sent successfully")</script>';
    
        }
        else{
            echo "<br>"."not inserted msg";
            echo '<script>alert("check your internet connection, message will be sent later")</script>';
        }
    }
    
    mysqli_close($link_to_me);
    
    $link_to_other=mysqli_connect("localhost","root","",$other);
    $sql_to_other="INSERT INTO $username (username,msg,date_time) VALUES ('$username','$msg','$date_time')";
    if($link_to_other->query($sql_to_other)){
        echo '<script>alert("message delivered by $other successfully")</script>';
    }
    else{
        echo '<script>alert("message is not delivered by $other ,it will be delievered later")</script>';
    }
    mysqli_close($link_to_other);
    echo "<h1>";
}
else{
    
}



?>
<script>
function show_func(){

var element = document.getElementById("chathist");
	element.scrollTop = element.scrollHeight;

}
</script>
<form action="chat.php" method="POST">
    <div class="inner_div" id="chathist">
        <?php
            
            $link=mysqli_connect("localhost","root","",$username);
            $sql="SELECT * FROM $other";
            if($result=$link->query($sql)){
                while($row=$result->fetch_assoc()){
                    if($row['msg']===" "){

                    }
                    else if($row['username']===$_SESSION['username']){
                        ?><div class="sent"><?php
                        echo $row['msg']."<br>";
                        ?><div class="tiny"><?php
                        echo $row['username']." ";
                        echo $row['date_time']."<br></div></div><br><br><br>";
                    }
                    else{
                        ?><div class="received"><?php
                        echo $row['msg']."<br>";
                        ?><div class="tiny"><?php
                        echo $row['username']." ";
                        echo $row['date_time']."<br></div></div><br><br><br>";
                    }
                }
            }
            else{
                echo $link->error;
            }
        ?>
    </div>
    <input style="width:80%;font-size:30px;" type="text" name="msg" placeholder="type your message here.." placeholder="type your message here.."></input>
    <input style="border:white;width:1%;height:1%;color:white" name="talk_with" value="<?php echo htmlspecialchars($other) ?>">
    <input  style="background-color:white;border:white" type="submit" value="">
</form>