<?php
    session_start();
    $username=$_POST['username'];
    $_SESSION['username']=$username;
    $link=mysqli_connect("localhost","root","","onechat");
    $sql="SELECT * FROM users ";
    $error=$link->connect_error;
    $flag=0;
    if($result=$link->query($sql)){
        while($row=$result->fetch_assoc()){
            if($username===$row['username']){
                $flag=1;
                break;
            }
        }
        if($flag==1){
            header("Location:revised_contacts_copy.php");
        }
        else{
            ?><span style="font-size:40px"><?php
            echo "<center>no user named <b><i>$username</b></i> exist ,please sign in .... ";
            echo "<br>error could not connect to the database ,<br> click below button to try again ..<br>";
            ?>
            <form action="index.php" method="POST">
            <center>
            <button class="tag_title2">
            Try again , with valid details
            </button>
            </center>
            </form>
            <?php
        }
    }
    
    mysqli_close($link);

?>
<style> 
.tag_title2{
    background-color:#1877F2;
    font-size:24px;
    padding:5px;
    text-align:center;
    box-shadow:2px 2px 4px 4px white ;
    border-radius:10px;
    margin-left:5%;
    color:white;
    margin-top:30px;
    outline:none;
    border:none;
}
</style>

