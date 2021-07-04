<?php
    session_start();
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
        <form action="profiles/chat.php" method="POST" style="margin-left:50px">
            <?php 
                $_SESSION['count']=0;
                // echo $i;
                $_SESSION['group_name']=$group_list[$i];
            ?>
            <input type="hidden" style="border:white;color:white" name="type" value="group">
            <input type="hidden" style="border:white;color:white" name="msg" value=" ">
            <input type="hidden" style="border:white" name="group_name" value="<?php echo htmlspecialchars($group_list[$i]) ?>">
            <button name="<?php echo htmlspecialchars($i); ?>" type="submit" style="width:100%;height:16%;text-align:left;font-size:40px"><?php echo $group_list[$i]; ?></button>
            
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
        
        ?>
        <!-- <form action="profiles/<?php echo htmlspecialchars($list[$i]); ?>.php" method="POST"> -->
        <form action="profiles/chat.php" method="POST" style="margin-left:50px">
            <?php 
                $_SESSION['count']=0;
                
                // echo $i;
                $_SESSION['talk_with']=$list[$i];
                
            ?>
            <input type="hidden" style="border:white;color:white" name="type" value="private">
            <input type="hidden" style="border:white;color:white" name="msg" value=" ">
            <input type="hidden" style="border:white" name="talk_with" value="<?php echo htmlspecialchars($list[$i]) ?>">
            <button name="<?php echo htmlspecialchars($i); ?>" type="submit" style="width:100%;height:16%;text-align:left;font-size:40px"><?php echo $list[$i]; ?></button>
            
        </form>
        <?php 
    }
?>
