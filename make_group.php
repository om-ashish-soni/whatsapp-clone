<?php
session_start();
$username=$_SESSION['username'];
?>
<strong>Select Group members</strong>
<style>
/* 
.container {
  align-items: center;
  justify-content: center
} */
.output{
    border-radius:100%;
    width:200px;
    height:200px;
    border:4px dashed #1877F2;
    margin-top:5px;
    margin-bottom:5px;
    display:none;
    text-align:center;
}
input{
    font-size:24px;
    margin:7px;
    margin-top:5px;
    border-radius:10px;
    box-shadow:1px 2px 4px 4px silver;
    outline:none;
    border:none;
    margin-right:40px;

}  
</style>








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
    margin-left:5px;
    border-radius:100%;
    /* float:left; */
    /* margin-bottom:10px; */
}
.profile_name{
    font-family:helvetica;
    font-size:24px;
    text-align:left;
    float:right;
    margin-right:50%;
    margin-top:15px;
}
.profile_btn{
    /* width:30%; */
    background-color:white;
    border-radius:10px;
    box-shadow:1px 2px 4px 4px silver;
    outline:none;
    border:none;
    width:52%;
    height:10%;
    /* text-align:center; */
    font-size:40px;
    /* margin-right:6%; */
    margin-left:6.50%;
    text-align:left;
    padding-top:10px;
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
    margin-left:5%;
    color:white;
    margin-top:30px;
    outline:none;
    border:none;
}
.tag_title4{
    background-color:#1877F2;
    font-size:24px;
    padding:5px;
    text-align:center;
    box-shadow:2px 2px 4px 4px white ;
    border-radius:10px;
    color:white;
    outline:none;
    border:none;
    float:right;
    position:fixed;
    /* margin-left:36%; */
    margin-right:1%;
    /* margin-top:40%; */
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
    border-radius:10px;
    
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
.create_group{
    float:right;
    position:fixed;
    font-size:24px;
    margin-right:50px;
    margin-left:58%;
    background-color:#1877F2;
    color:white;
    display:none;
    border-radius:10px;
}
.create_group2{
    float:right;
    position:fixed;
    font-size:24px;
    margin-right:50px;
    margin-left:87%;
    background-color:#1877F2;
    color:white;
    display:block;
    border-radius:10px;

}
</style>
<script>
function submit_form(){
    document.getElementById('submit_form').submit();
}
</script>

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
        document.getElementById("create_group").style.display="none";
        document.getElementById("create_group2").style.display="block";


    }
    else{
        document.getElementById("needed_block").style.display="block";
        document.getElementById("content").style.width="70%";
        document.getElementById("create_group").style.display="block";
        document.getElementById("create_group2").style.display="none";


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









<body>

<div class="content" id="content" >
<button onclick="submit_form()" id="create_group" class="create_group">create group</button>
<button onclick="submit_form()" id="create_group2" class="create_group2">create group</button>

<center>

<br>
<form action="validate_group.php" id="submit_form" method="POST" enctype="multipart/form-data">
    <!-- <label>Group name : <label> -->
    <!-- <input class="tag_title4" type="submit" value="create group" > -->
    <br><br>
</center>
    <input type="text" name="group_name" placeholder="Group name : " style="margin-left:25.52%;width:28%;">
    <label onclick="image_appear()" class="tag_title2" for="group_dp" >
    Choose group dp
    </label>
    <br><br>

    <center>
    <?php
        // session_start();
        $username=$_SESSION['username'];
        $list=array("");
        $link=mysqli_connect("localhost","root","",$username);
        $sql="SELECT * FROM freinds";
        $count=1;
        if($result=$link->query($sql)){
            while($row=$result->fetch_assoc()){
                array_push($list,$row['username']);
                // echo $list[$count];
                $count++;
            }
            $result->free_result();
        }
        mysqli_close($link);
        ?>

        
        <image class="output" src="img.png" style="display:none" id="output">
        <input onchange="loadFile(event)" style="display:none" type="file" id="group_dp" accept="image/*" name="img">
        <br><br>
        <?php
        for($i=1;$i<$count;$i++){
            if(isset($list[$i]) && !empty($list[$i])){
            ?><div class="profile_btn"><?php
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
            <div class="container">
            
            <input style="width:30px;height:30px;float:left" type="checkbox" name="<?php echo htmlspecialchars($list[$i]);?>" value="<?php echo htmlspecialchars($list[$i]);?>">
            
            <image class="dp2" src="profiles/<?php echo htmlspecialchars($location) ?>" >
            
            <span class="profile_name"><?php echo htmlspecialchars($list[$i]);?></span>
            </div>
            </div>
            <br>
            <?php
            }
        }

    ?>

</form>
</center>
</div>
<script>
function image_appear(){
    document.getElementById('output').style.display="block";
    
}
var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
    var output = document.getElementById('output');
    output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};
</script>