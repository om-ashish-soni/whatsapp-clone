<?php
    session_start();
    // echo $_SESSION['count'];
    $_SESSION['count']=0;
    
    $username=$_SESSION['username'];
    $count=0;
    $group_list=array("");
    $send="talk_with";
    $link_to_group_list=mysqli_connect("localhost","root","",$_SESSION['username']);
    $sql_to_group_list="SELECT * FROM groups";
    if($result=$link_to_group_list->query($sql_to_group_list)){
        while($row=$result->fetch_assoc()){
            array_push($group_list,$row['group_name']);
            // echo $group_list[$count];
            $count++;
        }
        
    }
    for($i=1;$i<=$count;$i++){
        
        ?>
        <!-- <form action="profiles/<?php echo htmlspecialchars($list[$i]); ?>.php" method="POST"> -->
        <form action="profiles/chat copy.php" method="POST" style="margin-left:50px">
            <?php 
                $_SESSION['count']=0;
                // echo $i;
                $_SESSION['group_name']=$group_list[$i];
                $profile_name=$group_list[$i];
                $location="img.png";
                $link_to_access_dp=mysqli_connect("localhost","root","",$profile_name);
                $sql_to_access_dp="SELECT * FROM dp";

                if($result=$link_to_access_dp->query($sql_to_access_dp)){
                    while($row=$result->fetch_assoc()){
                        $location=$row['profile_pic'];
                    }
                    mysqli_close($link_to_access_dp);
                }
            ?>
            <input type="hidden" style="border:white;color:white" name="type" value="group">
            <input type="hidden" style="border:white;color:white" name="msg" value=" ">
            <input type="hidden" style="border:white" name="group_name" value="<?php echo htmlspecialchars($group_list[$i]) ?>">
            <button name="<?php echo htmlspecialchars($i); ?>" type="submit" style="width:70%;height:16%;text-align:center;background-color:white;border:white;font-size:40px">
            <image src="profiles/<?php echo htmlspecialchars($location) ?>" style="border-radius:100%;width:8%;float:left">

            <?php echo $group_list[$i]; ?>
            </button><hr style="margin-right:30%">
            
        </form>
        <?php 
    }
    mysqli_close($link_to_group_list);
    $link=mysqli_connect("localhost","root","",$_SESSION["username"]);
    $sql="SELECT * FROM freinds";
    
    $list=array("");
    $count=0;
    
    if($result=$link->query($sql)){
        while($row=$result->fetch_assoc()){
            array_push($list,$row['username']);
            // echo $list[$count];
            $count++;
        }
        
    }
    for($i=1;$i<=$count;$i++){
        // echo $list[$i]."<br>";
    }
    $unread_list=array(-1000);
    if($count===0){
        echo "<script>alert('Please make connections first to chat with them.')</script>";
        ?>
        <form action="users copy.php" method="POST">
        <h1>
            <center>
            <button type="submit">SEARCH AND MAKE FRIENDS</button>
            </center>
        </h1>
        </from>
        <?php
        // header('Location:users.php');
    }
    for($i=1;$i<=$count;$i++){
        $link_to_read_reciept=mysqli_connect("localhost","root","",$list[$i]);
        
        $unread_count=0;
        $sql_to_read_reciept="SELECT * FROM $username";
        if($result=$link_to_read_reciept->query($sql_to_read_reciept)){
            while($row=$result->fetch_assoc()){
                if(isset($row['msg']) && !empty($row['msg'])){
                    if(isset($row['is_read']) && !empty($row['is_read'])){

                    }
                    else{
                        if($row['is_read']==NULL){
                           if($list[$i]==$row['username']){
                                $unread_count++;
                           }
                        }
                    }
                }
                
            }

        }
        array_push($unread_list,$unread_count);
        mysqli_close($link_to_read_reciept);
        
        // echo $unread_count."<br>";
    }

    for($i=1;$i<=$count;$i++){
        ?>
        <!-- <form action="profiles/<?php echo htmlspecialchars($list[$i]); ?>.php" method="POST"> -->
        <form action="profiles/chat copy.php" method="POST" style="margin-left:50px">
            <?php 
                $_SESSION['count']=0;
                
                // echo $i;
                $_SESSION['talk_with']=$list[$i];
             
                $profile_name=$list[$i];
                $location="img.png";
                $link_to_access_dp=mysqli_connect("localhost","root","",$profile_name);
                $sql_to_access_dp="SELECT * FROM dp";

                if($result=$link_to_access_dp->query($sql_to_access_dp)){
                    while($row=$result->fetch_assoc()){
                        $location=$row['profile_pic'];
                    }
                    mysqli_close($link_to_access_dp);
                }
                
            ?>
            
            <input type="hidden" style="border:white;color:white" name="init" value="space">
            <input type="hidden" style="border:white;color:white" name="type" value="private">
            <input type="hidden" style="border:white;color:white" name="msg" value=" ">
            <input type="hidden" style="border:white" name="talk_with" value="<?php echo htmlspecialchars($list[$i]) ?>">
            <button name="<?php echo htmlspecialchars($i); ?>" type="submit" style="display:inline-block;width:70%;border-right:white;border-top:white;border-down:4px black;height:16%;border-left:white;margin-right:30%;text-align:center;font-size:40px;background-color:white">
            <image src="profiles/<?php echo htmlspecialchars($location) ?>" style="border-radius:100%;width:8%;float:left">
                <?php echo $list[$i]; ?>
                <span style="float:right">
                <?php if($unread_list[$i]>0) echo $unread_list[$i]; ?>
                </span>
            </button>
            
        </form>
        <?php 
    }
?>
