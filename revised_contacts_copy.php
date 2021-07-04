<?php
    session_start();
    // echo $_SESSION['count'];
    $_SESSION['count']=0;
    $username=$_SESSION['username'];

?>












<style>

body{
    font-family:helvetica;
}
.heading_list{
    font-size:40px;

}
.logo{
    color:#1877F2;
}
.content{
    margin-top:60px;
    width:100%;
    float:right;
    background-color:#f2f2f2;
    box-shadow:1px 2px 3px 3px silver;
    border-radius:10px;
}
.search_btn{
    /* height:33px;
    color:white;
    background-color:white;
    border:white; */
    display:none;
}
.search_window{
    width:64%;
    padding-top:2px;
    padding-bottom:2px;
    color:gray;
    font-size:30px;
    box-shadow:1px 2px 3px 3px silver;
    border-radius:10px;
    outline:none;
    border:none;
    height:48px;
}
header{
    height:52px;
    top:0;
    background-color:#1877F2;
    width:100%;
    position:fixed;
}
.burger{
    background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAOVBMVEUAAAD9/f1OTk6enp5qamouLi6ampri4uJRUVFfX19tbW1BQUHp6enl5eUrKysxMTEcHByNjY1HR0e26iQjAAAA7UlEQVR4nO3ctxECQBAEQbTW+QeLTY1FYRxGdwhj7ovFAgAAAAAAAAAAAAD4dDxtRp3O0wXqshy2ni5Q++kmu+kCpUlpUpqUJqVJaVKalCalSWlSmpQmpUlpUpqUJqVJaVKa1HW6yR9u1LftrPtjugAAAAAA37I9lialSWlSmpQmpUlpUpqUJqVJaVKalCalSWlSmpQmpUlpUpqU/wrquR52nC4AAAAAAL97rWYd7tMFytv8stuXJqVJaVKalCalSWlSmpQmpUlpUpqUJqVJaVKalCalSWlS7gzX+FnGdroAAAAAAAAAAAAAAP/hDUiuLQ0UoCMjAAAAAElFTkSuQmCC");
    background-size:100% 100%;
    width:50px;
    height:50px;
    margin:2px;
    position:fixed;
    border-radius:10px;
}
.needed_block{
    display:none;
    margin-top:60px;
    width:28.50%;
    float:left;
    height:75%;
    /* border:4px solid gray; */
    box-shadow:1px 2px 4px 4px silver;
    position:fixed;
    padding:5px;
    outline:none;
    background-color:#f2f2f2;
    border-radius:10px;

}
.elem_title{
    color:white;
    font-size:24px;
    margin-left:60px;

    margin-top:10px;
    margin-bottom:10px;
    position:fixed;
    background-color:#1877F2;
    outline:none;
    border:none;
    /* float:left; */

}
.elem_title2{
    color:white;
    font-size:24px;
    margin-left:150px;
    margin-top:10px;
    margin-bottom:10px;
    position:fixed;
    background-color:#1877F2;
    outline:none;
    border:none;
    /* float:left; */

}
.elem_title3{
    
    margin-left:300px;

}
.elem_title4{
    margin-left:390px;
}
.elem_title5{
    margin-left:460px;
}
.elem_title6{
    margin-left:550px;
}
.elem_title7{
    margin-left:715px;
}
.elem_title8{
    /* float:right; */
    margin-left:1182px;
}
.elem_title9{
    /* float:right; */
    margin-left:1116px;
    width:48px;
    height:48px;
    border-radius:100%;
    border:2px dashed white;
    margin-top:0;
    
}
.dp{
    width:82px;
    height:82px;
    border-radius:100%;
    border:2px dashed #1877F2;
    margin-top:0;
}
.elem_titl{
    width:98%;
    height:40px;
    font-size:24px;
    font-family:helvetica;
    outline:none;
    border:none;
    /* border-bottom:5px solid gray; */
    /* color:#1877F2; */
    color:black;
    text-align:left;
    padding-left:20px;
    margin:5px;
    background-color:white;
    box-shadow:1px 2px 3px 3px silver;
    border-radius:10px;
}
.dp2{
    width:60px;
    height:60px;
    margin:5px;
    border-radius:100%;
    float:left;

}
.profile_name{
    font-family:helvetica;
    font-size:24px;
    text-align:left;
    margin:24px;
    margin-left:10%;
}
.profile_btn{
    /* width:30%; */
    background-color:white;
    border-radius:10px;
    box-shadow:1px 2px 4px 4px silver;
    outline:none;
    border:none;
    width:64%;
    height:20%;
    /* text-align:center; */
    font-size:40px;
    margin-right:6%;
    margin-left:6.50%;
    text-align:left;
    padding-left:5px;
    padding-bottom:5px;

}
.dp3{
    border-radius:100%;
    width:200px;
    height:200px;
    margin:10px;
    border:5px dashed #1877F2;
}
.tag_title{
    background-color:white;
    font-size:32px;
    padding:5px;
    text-align:center;
    margin:20px;
    box-shadow:2px 2px 4px 4px gray ;
    border-radius:10px;
    margin-right:50%;
    margin-left:21%;
    float:left;

}
.tag_title2{
    background-color:#1877F2;
    font-size:24px;
    padding:5px;
    text-align:center;
    box-shadow:2px 2px 4px 4px white ;
    border-radius:10px;
    margin-right:20%;
    margin-left:21%;
    color:white;
    margin-top:30px;
    outline:none;
    border:none;
}
.tag_title3{
    background-color:#1877F2;
    font-size:24px;
    padding:5px;
    text-align:center;
    box-shadow:2px 2px 4px 4px white;
    border-radius:10px;
    color:white;
    float:left;
    margin-left:4%;
    outline:none;
    border:none;
    text-align:center;
    width:40%;
    
}
.inline_tag_title{
    margin-top:30px;
    margin-bottom:30px;
    /* margin-right:35%; */
    margin-left:32%;
    width:40%;
    float:left;
    text-align:center;

}
.user_name{
    font-family:helvetica;
    font-size:30px;
    width:40%;
}
</style>


<?php
$location="img.png";
$username=$_SESSION['username'];
$link=mysqli_connect("localhost","root","",$username);
$sql="SELECT * FROM dp";
if($result=$link->query($sql)){
    while($row=$result->fetch_assoc()){
        $location=$row['profile_pic'];
    }
}
// echo "<script>alert('$location');</script>";
?>



<script>
var click=0;
function appear(){
    click++;
        // document.getElementById("content").style.width="70%";

    if(click%2==0){
        document.getElementById("needed_block").style.display="none";
        document.getElementById("content").style.width="100%";


    }
    else{
        document.getElementById("needed_block").style.display="block";
        document.getElementById("content").style.width="70%";

    }

}
function go_home(){
    document.getElementById("go_home").submit();
}
function all_users(){
    document.getElementById("all_users").submit();
}
function status(){
    document.getElementById("status").submit();
}
function profile(){
    document.getElementById("my_profile").submit();
}
function make_group(){
    document.getElementById("make_group").submit();
}
function about(){
    document.getElementById("about").submit();
}
</script>
<form action="revised_contacts_copy.php" id="go_home" method="POST"></form>
<form action="users copy.php" id="all_users" method="POST"></form>
<form action="profiles/status.php" id="status" method="POST"></form>
<form action="profiles/my_profile.php" id="my_profile" method="POST"></form>
<form action="make_group.php" id="make_group" method="POST"></form>
<form action="about.php" id="about" method="POST"></form>




<header>
<button class="burger" onclick="appear()"></button>
<button class="elem_title" onclick="go_home()">home</button>
<button class="elem_title2" onclick="all_users()">find-friends</button>
<button class="elem_title2 elem_title3" onclick="status()">status</button>
<button class="elem_title2 elem_title4" onclick="go_home()">chat</button>
<button class="elem_title2 elem_title5" onclick="profile()">profile</button>
<button class="elem_title2 elem_title6" onclick="make_group()">create-group</button>
<button class="elem_title2 elem_title7" onclick="about()">about</button>
<image src="profiles/<?php echo htmlspecialchars($location); ?>" class="elem_title2 elem_title9" onclick="profile()">
<button class="elem_title2 elem_title8" onclick="profile()"><?php echo $username?></button>





</header>

<div class="needed_block" id="needed_block">
<image src="profiles/<?php echo htmlspecialchars($location); ?>" class="dp" onclick="profile()">
<br><br>
<button class="elem_titl" onclick="profile()"><?php echo $username?></button>
<br>
<button class="elem_titl" onclick="go_home()">home</button>
<br>
<button class="elem_titl" onclick="all_users()">find friends</button>
<br>
<button class="elem_titl" onclick="status()">status</button>
<br>
<button class="elem_titl" onclick="go_home()">chat</button>
<br>
<button class="elem_titl" onclick="profile()">profile</button>
<br>
<button class="elem_titl" onclick="make_group()">create group</button>
<br>
<button class="elem_titl" onclick="about()">about</button>
<br>

</div>











<div class="content" id="content">
<?php

    $global_list=array("");
    $type_list=array("");
    $date_time_list=array("");
    $total_unread_list=array("");
    $image_location_list=array("");
    $last_msg_list=array("");
    $flag_type_list=array("");

    $username=$_SESSION['username'];
    $count=0;
    $group_list=array("");
    $send="talk_with";
    $end_msg=NULL;
    $end_user=NULL;
    $dt=NULL;
    $link_to_group_list=mysqli_connect("localhost","root","",$_SESSION['username']);
    $sql_to_group_list="SELECT * FROM groups";
    if($result=$link_to_group_list->query($sql_to_group_list)){
        while($row=$result->fetch_assoc()){
            array_push($global_list,$row['group_name']);
            array_push($type_list,"group");
            array_push($flag_type_list,"group_name");
            $count++;
            // echo $global_list[$count];
            $link_to_last_msg=mysqli_connect("localhost","root","",$global_list[$count]);
            $sql_to_last_msg="SELECT * FROM chats";
            if($result1=$link_to_last_msg->query($sql_to_last_msg)){
                $bug_fixer_group=0;
                while($row1=$result1->fetch_assoc()){
                    if(isset($row1['msg']) && !empty($row1['msg']) && $row1['msg']!==" "){
                        $end_msg=$row1['msg'];
                        $end_user=$row1['username'];
                        $dt=$row1['date_time'];
                        $bug_fixer_group++;
                    }
                    // echo $end_msg."<br>";
                    // echo $dt."<br>";
                    
                }
                if($bug_fixer_group>0){
                    if($end_user==$username){
                        $end_user="You";
                    }
                    $end_msg=$end_user." : ".$end_msg;
                }
                else{
                    $end_msg=" ";
                    $dt=" ";
                }
                array_push($last_msg_list,$end_msg);
                array_push($date_time_list,$dt);
                
            }
            else{
                array_push($last_msg_list,"default");
                array_push($date_time_list,"default");
                
            }
            $link_to_access_dp=$link_to_last_msg;
            $sql_to_access_dp="SELECT * FROM dp";

            if($result2=$link_to_access_dp->query($sql_to_access_dp)){
                while($row2=$result2->fetch_assoc()){
                    $location=$row2['profile_pic'];
                    array_push($image_location_list,$row2['profile_pic']);
                }
                mysqli_close($link_to_access_dp);
            }
            else{
                array_push($image_location_list,"img.png");
            }
            // echo $group_list[$count];
            $link_to_read_reciept=mysqli_connect("localhost","root","",$global_list[$count]);
        
            $unread_count=0;
            $sql_to_read_reciept="SELECT * FROM chats";
            if($result3=$link_to_read_reciept->query($sql_to_read_reciept)){
                while($row3=$result3->fetch_assoc()){
                    if($row3['msg']!==" " && isset($row3['msg']) && !empty($row3['msg'])){
                        // echo $global_list[$count]."inside<br>";
                        // echo $row3['msg'];
                        if(isset($row3[$username]) && !empty($row3[$username])){

                        }
                        else{
                                $unread_count++;
                            }
                            // if($row3[$username]==NULL){
                            // if($global_list[$count]==$row3['username']){
                                    // $unread_count++;
                            // }
                            // }
                    }
                    else{
                        // echo "outside<br>";
                    }
                    
                }

            }
            array_push($total_unread_list,$unread_count);
            mysqli_close($link_to_read_reciept);
            // array_push($total_unread_list,"default");
        }
        
    }
    mysqli_close($link_to_group_list);
    $link=mysqli_connect("localhost","root","",$_SESSION["username"]);
    $sql="SELECT * FROM freinds";
    
    $list=array("");
    $end_p_msg=NULL;
    $end_user=NULL;
    $dtp=NULL;
    if($result=$link->query($sql)){
        while($row=$result->fetch_assoc()){
            array_push($list,$row['username']);
            array_push($global_list,$row['username']);
            array_push($type_list,"private");
            array_push($flag_type_list,"talk_with");
            // echo $list[$count];
            $count++;
            
            $link_to_last_msg=mysqli_connect("localhost","root","",$global_list[$count]);
            $sql_to_last_msg="SELECT * FROM $username";
            if($result1=$link_to_last_msg->query($sql_to_last_msg)){
                $bug_fixer=0;
                while($row1=$result1->fetch_assoc()){
                
                if(isset($row1['msg']) && !empty($row1['msg']) && $row1['msg']!==" "){
                    $end_p_msg=$row1['msg'];
                    $end_user=$row1['username'];
                    // $obj_dtp=new date_create_from_format('Y-m-d H:i:s',$row1['date_time']);
                    $dtp=$row1['date_time'];
                    $bug_fixer++;
                }
                    // echo $end_p_msg."<br>";
                    // echo $dtp."<br>";
                }
                if($bug_fixer>0){
                    // echo $bug_fixer."<br>";
                    if($end_user==$username){
                    $end_user="You";
                    }
                    $end_p_msg=$end_user." : ".$end_p_msg;
                }
                else{
                    $end_p_msg=" ";
                    $dtp=" ";
                }
                array_push($last_msg_list,$end_p_msg);

                array_push($date_time_list,$dtp);
            }

            else{
                array_push($last_msg_list,"default");
                array_push($date_time_list,"default");
                
            }
            $link_to_access_dp=$link_to_last_msg;

            $sql_to_access_dp="SELECT * FROM dp";

            if($result2=$link_to_access_dp->query($sql_to_access_dp)){
                while($row2=$result2->fetch_assoc()){
                    $location=$row2['profile_pic'];
                    // if(file_exists()){

                    // }
                    array_push($image_location_list,$location);
                }
                mysqli_close($link_to_access_dp);
            }
            else{
                array_push($image_location_list,"img.png");
            }
            // echo $group_list[$count];
            $link_to_read_reciept=mysqli_connect("localhost","root","",$global_list[$count]);
        
            $unread_count=0;
            $sql_to_read_reciept="SELECT * FROM $username";
            if($result3=$link_to_read_reciept->query($sql_to_read_reciept)){
                while($row3=$result3->fetch_assoc()){
                    if(isset($row3['msg']) && !empty($row3['msg']) ){
                        if(isset($row3['is_read']) && !empty($row3['is_read'])){

                        }
                        else{
                            if($row3['is_read']==NULL){
                            if($global_list[$count]==$row3['username']){
                                    $unread_count++;
                            }
                            }
                        }
                    }
                    
                }

            }
            array_push($total_unread_list,$unread_count);
            mysqli_close($link_to_read_reciept);
        }
        
    }
    // echo $count;
    /*
    $global_list=array("");
    $type_list=array("");
    $date_time_list=array("");
    $total_unread_list=array("");
    $image_location_list=array("");
    $last_msg_list=array("");
    */
    $new_global_list=array("");
    $new_type_list=array("");
    $new_date_time_list=array("");
    $new_total_unread_list=array("");
    $new_image_location_list=array("");
    $new_last_msg_list=array("");
    $sorted_date_time_list=array("");
    $new_flag_type_list=array("");
    for($i=1;$i<=$count;$i++){
        array_push($sorted_date_time_list,$date_time_list[$i]);
        // echo $global_list[$i];
        // echo "<br>&nbsp;&nbsp;$type_list[$i]";
        // echo "<br>&nbsp;&nbsp;$date_time_list[$i]";
        // echo "<br>&nbsp;&nbsp;$total_unread_list[$i]";
        // echo "<br>&nbsp;&nbsp;$image_location_list[$i]";
        // echo "<br>&nbsp;&nbsp;$last_msg_list[$i]";
        // echo "<br><br><br>";


    }
    sort($sorted_date_time_list);

    // $sorted_date_time_list=array_reverse($sorted_date_time_list);
    // $new_date_time_list=$sorted_date_time_list;
    for($i=$count;$i>=1;$i--){
        $pos=array_search($sorted_date_time_list[$i],$date_time_list);
        array_push($new_global_list,$global_list[$pos]);
        array_push($new_type_list,$type_list[$pos]);
        array_push($new_total_unread_list,$total_unread_list[$pos]);
        array_push($new_image_location_list,$image_location_list[$pos]);
        array_push($new_last_msg_list,$last_msg_list[$pos]);
        array_push($new_date_time_list,$date_time_list[$pos]);
        array_push($new_flag_type_list,$flag_type_list[$pos]);
        $global_list[$pos]=NULL;
        $type_list[$pos]=NULL;
        $total_unread_list[$pos]=NULL;
        $image_location_list[$pos]=NULL;
        $last_msg_list[$pos]=NULL;
        $date_time_list[$pos]=NULL;
        $flag_type_list[$pos]=NULL;
        
    }

    for($i=1;$i<=$count;$i++){
        // echo $new_global_list[$i];
        // echo "<br>&nbsp;&nbsp;$new_flag_type_list[$i]";
        // echo "<br>&nbsp;&nbsp;$new_type_list[$i]";
        // echo "<br>&nbsp;&nbsp;$new_date_time_list[$i]";
        // echo "<br>&nbsp;&nbsp;$new_total_unread_list[$i]";
        // echo "<br>&nbsp;&nbsp;$new_image_location_list[$i]";
        // echo "<br>&nbsp;&nbsp;$new_last_msg_list[$i]";
        // echo "<br><br><br>";
        if(isset($new_global_list[$i]) && !empty($new_global_list[$i])){

        ?>
        <form action="profiles/chat copy.php" method="POST" style="margin-left:5px">
            
            <input type="hidden" style="border:white;color:white" name="init" value="space">
            <input type="hidden" style="border:white;color:white" name="type" value="<?php echo htmlspecialchars($new_type_list[$i]) ?>">
            <input type="hidden" style="border:white;color:white" name="msg" value=" ">
            <input type="hidden" style="border:white" name="<?php echo htmlspecialchars($new_flag_type_list[$i]) ?>" value="<?php echo htmlspecialchars($new_global_list[$i]) ?>">
            <button class="profile_btn" name="<?php echo htmlspecialchars($i); ?>" id="<?php echo htmlspecialchars($new_global_list[$i]) ?>" type="submit" style="width:82%;">
            <image src="profiles/<?php echo htmlspecialchars($new_image_location_list[$i]) ?>" style="border-radius:100%;width:60px;height:60px;;float:left;margin-left:5px">
                <span style="font-size:30px;margin-left:20px;float:left">
                <?php echo $new_global_list[$i]; ?>
                </span>

                <span style="float:right;font-size:20px;background-color:#1877F2;border-radius:50px;color:white;">
                <?php if($new_total_unread_list[$i]>0) echo "&nbsp".$new_total_unread_list[$i]."&nbsp"; ?>
                </span>
                <br>
                <p>
                <span style="font-size:20px;float:left;margin-left:90px;">
                <?php
                    $trimmed_msg=substr($new_last_msg_list[$i],0,20);
                    // echo $new_last_msg_list[$i];
                    $owner=substr($new_last_msg_list[$i],0,strpos($new_last_msg_list[$i],':'));
                    $loc_file=pathinfo($new_last_msg_list[$i], PATHINFO_EXTENSION);
                    $loc_file=strtolower($loc_file);
                    if($loc_file=="jpg" || $loc_file=="png" || $loc_file=="jpeg"){
                        echo $owner.": ";
                        echo "photo";
                    }
                    else{
                        echo $trimmed_msg;
                        if(strlen($new_last_msg_list[$i])>20){
                            echo "...";
                        }
                    }
                    
                ?>
                </span>
                <span style="font-size:20px;float:right;margin-left:20px;">
                <?php
                    $time_stamp=substr($new_date_time_list[$i],-8,-3);
                    echo $time_stamp;
                ?>
                </span>
                </p>
            </button>
            
        </form>
        <?php
        }
    }

    // echo "1st".($date_time_list[4]>$date_time_list[1])."<br>";
    // echo "2nd".($date_time_list[4]<$date_time_list[1])."<br>";
    // echo "3rd".($date_time_list[4]==$date_time_list[1]);


 ?>
 </div>