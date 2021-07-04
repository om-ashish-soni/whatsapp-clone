<!-- <?php
        session_start();
        $_SESSION['count']=TRUE;
        $freind=$_POST['person'];
        $link=mysqli_connect("localhost","root","","chat_app");
        $sql="SELECT * FROM users WHERE username='$freind'";
        $freind_list="";
        echo "hello";
        echo $freind;
        if($result=$link->query($sql)){
            echo "welcome";
            while($row=$result->fetch_assoc()){
                $freind_list.=$row["username"];
                $freind_list.="\n";
            }
            $_SESSION['freinds']=$freind_list;
            echo $freind_list;
            $result->free_result();
        }
        mysqli_close($link);
    ?> -->