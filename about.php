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
<style>
        .signin_form{
            width:30%;
            /* margin-left:50px; */
            display:none;
            margin-right:50px;
            float:right;
            margin-top:5%;
            /* padding:40px; */
            /* border:4px dashed gray; */
            background-color:white;
            border-radius:10px;
            box-shadow:2px 4px 9px 8px gray;
        }
        .login_form{
            width:30%;
            /* margin-left:50px; */
            margin-right:50px;
            float:right;
            margin-top:5%;
            /* padding:40px; */
            /* border:4px dashed gray; */
            background-color:white;
            border-radius:10px;
            box-shadow:2px 4px 9px 8px gray;
        }
        input{
            font-size:24px;
            margin:7px;
            border-radius:10px;
            box-shadow:1px 2px 4px 4px silver;
            outline:none;
            border:none;
        }  
        .banner{
            /* margin-top:1%; */
            width:0px;
            margin-left:1%;
            float:left;
            font-family:helvetica;
            /* font-family:Klavika; */
            /* border:5px solid black; */
            font-size:48px;
            color:#1877F2;
        }
        .speciality{
            font-size:40px;
            margin-left:1%;
            font-family:helvetica;
            color:black;
            display:inline;
            width:40%;
            float:left;
            /* margin-right:42%; */
            margin-top:12%;
            text-align:left;

        }
        .submit{
            font-family:helvetica;
            color:white;
            background-color:#1877F2;
            font-size:20px;
            padding:5px;
            outline:none;
            border:none;
            border-radius:10px;
            width:68%;
            box-shadow:1px 2px 4px 4px silver;
        }
        .go_to_signin{
            background-color:#25D366;
            font-family:helvetica;
            color:white;
            font-size:20px;
            padding:5px;
            outline:none;
            border:none;
            border-radius:10px;
            width:68%;
            box-shadow:1px 2px 4px 4px white;
            margin-bottom:10px;
            

        }
        .go_to_login{
            background-color:#25D366;
            font-family:helvetica;
            color:white;
            font-size:20px;
            padding:5px;
            outline:none;
            border:none;
            border-radius:10px;
            width:68%;
            box-shadow:1px 2px 4px 4px white;
            margin-bottom:10px;
            

        }
        .label_file{
            /* background-color:tomato; */
            font-family:helvetica;
            color:white;
            font-size:24px;
            border:none;
            background-color:gray;
            border-radius:10px;
            padding:5px;
            outline:none;
            border:none;
            margin-top:10px;
            margin-bottom:10px;
            width:80%;
            box-shadow:1px 2px 4px 4px silver;
        }
        .output{
            border-radius:100%;
            width:200px;
            border:4px dashed #1877F2;
            margin-top:5px;
            margin-bottom:5px;
            display:none;
        }
        .or{
            color:silver;
            font-family:helvetica;

        }
    </style>


<style>

</style>


<div class="content" id="content">
<div class="banner">
    
    <h1 class="logo">
    form&nbsp;messenger
    </h1>
    </div>
    <div class="speciality">
    <p>
    <span style="color:#1877F2"> form messenger </span> helps you to connect with world and share your feelings.
    </p>
    </div>
</div>