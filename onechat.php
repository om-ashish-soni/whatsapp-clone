<?php
if (isset($_POST['submit'])){
/* Attempt MySQL server connection. Assuming
you are running MySQL server with default
setting (user 'root' with no password) */
$link = mysqli_connect("localhost",
			"root", "", "onechat");

// Check connectiongkhj
if($link === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
}

// Escape user inputs for security
$un= mysqli_real_escape_string(
	$link, $_REQUEST['uname']);
$m = mysqli_real_escape_string(
	$link, $_REQUEST['msg']);
date_default_timezone_set('Asia/Kolkata');
$ts=date('y-m-d h:ia');

// Attempt insert query execution
$sql = "INSERT INTO chats (uname, msg, dt)
		VALUES ('$un', '$m', '$ts')";
if(mysqli_query($link, $sql)){
	;
} else{
	echo "ERROR: Message not sent!!!";
}
// Close connection
mysqli_close($link);
}
?>
<html>
<head>
<style>
*{
	box-sizing:border-box;
}
body{
	background-color:black;
	font-family:sans-serif;
	
	font-size: :30px;
}
#container{
	width:500px;
	height:700px;
	background:;
	margin:0 auto;
	font-size:0;
	border-radius:5px;
	overflow:hidden;
}
main{
	width:500px;
	height:700px;
	display:inline-block;
	font-size:15px;
	vertical-align:top;
}
main header{
	height:100px;
	text-align:center;
	
	padding:30px 30px 60px 50px;
	background-color:;
	border: 4px solid violet;
	border-radius:24px;
	font-family:sans-serif;
	text-shadow: 0 15px 6px violet;
	border-radius:500px;
	box-shadow: 2px 4px 9px 8px violet;
}
main header > *{
	display:inline-block;
	vertical-align:top;
}
main header img:first-child{
	width:24px;
	margin-top:8px;
}
main header img:last-child{
	width:24px;
	margin-top:8px;
}
main header div{
	margin-left:90px;
	margin-right:90px;
}
main header h2{
	font-size:25px;
	margin-top:5px;
	text-align:center;
	color:#FFFFFF;
}
main .inner_div{
	padding-left:0;
	margin-right:5px;
	overflow:auto;
	
	height:470px;
	background-image:url();
	background-position:center;
	border-radius:100px;box-shadow: 9px 4px 4px 4px #FFA07A;
	background: transparent;
}
main .inner_div::-webkit-scrollbar { width: 0 !important }
main .triangle{
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 8px 8px 8px;
	border-color: transparent transparent
	black transparent;
	margin-left:20px;
	clear:both;
}
main .message{
	text-shadow: 0 9px 8px white;
	padding:10px;
	color:white;
	margin-left:15px;
	background-color:;
	line-height:20px;
	max-width:90%;
	display:inline-block;
	text-align:left;
	border-radius:5px;
	clear:both;
	font-size: 20px;
	border-radius:500px;box-shadow: 2px 4px 9px 8px orange;
}
main .triangle1{
	
}
main .message1{
	text-shadow: 0 9px 8px white;
	padding:10px;
	font-size: 20px;
	margin-right:15px;
	margin:15px;
	color:white;
	background-color:;
	line-height:20px;
	max-width:90%;
	display:inline-block;
	text-align:left;
	border-radius:5px;
	float:right;
	clear:both;
	border-radius:500px;box-shadow: 2px 4px 9px 8px red;
}

main footer{
	height:120px;
	padding:20px 20px 10px 10px;
		
	border-radius:16px;	
}
main footer .input1{
color:white;
	background-color: black;
	resize:none;
	border:100%;
	display:block;
	width:98%;
	height:50px;
	border-radius:52px;
	padding:20px;
	font-size:30px;
	margin-bottom:13px;
	border-radius:500px;box-shadow: 2px 4px 9px 8px #FF69B4;
}
main footer .input3{
color:white;
	background-color: black;
	resize:none;
	border:100%;
	display:inline;
	width:140%;
	height:50px;
	border-radius:52px;
	padding:20px;
	font-size:30px;
	margin-bottom:13px;
	margin-left:20px;
	border-radius:500px;box-shadow: 2px 4px 9px 8px #FF69B4; 
}
main footer .input2{
	resize:none;
	border:100%;
	display:block;
	width:40%;
	height:50px;
	border-radius:500px;
	padding:20px;
	font-size:13px;
	margin-bottom:13px;
	margin-left:100px;
	background-color: black;
	text-align:center;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDsHN5eymNTNAe3S0eRDAg034vU16zxjgtug&usqp=CAU");
	background-size: 50px 50px;
	box-shadow: 2px 4px 4px 2px #FF69B4; 
}
}
main footer textarea::placeholder{
	color:#ddd;
}

</style>
<body onload="show_func()">
<div id="container">
	<main>

		<header>
			
			<div>
				<h2 style="font-size:40px">one chat</h2>
			</div>
			
		</header>
		<br><br>
<script>
function show_func(){

var element = document.getElementById("chathist");
	element.scrollTop = element.scrollHeight;

}
</script>

<form id="myform" action="onechat.php" method="POST" >
<div class="inner_div" id="chathist">
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "onechat";
$con = new mysqli($host, $user, $pass, $db_name);

$query = "SELECT * FROM chats";
$run = $con->query($query);
$i=0;

while($row = $run->fetch_array()) :
if($i==0){
$i=5;
$first=$row;
?>
<div id="triangle1" class="triangle1"></div>
<div id="message1" class="message1">
<span style="color:white;float:right;">
<?php echo $row['msg']; ?></span> <br/>
<div>
<span style="color:black;float:left;
font-size:10px;clear:both;">
	<?php echo $row['uname']; ?>,
		<?php echo $row['dt']; ?>
</span>
</div>
</div>
<br/><br/>
<?php
}
else
{
if($row['uname']!=$first['uname'])
{
?>
<div id="triangle" class="triangle"></div>
<div id="message" class="message">
<span style="color:white;float:left;">
<?php echo $row['msg']; ?>
</span> <br/>
<div>
<span style="color:white;float:right;
		font-size:12px;clear:both;">
<?php echo $row['uname']; ?>,
		<?php echo $row['dt']; ?>
</span>
</div>
</div>
<br/><br/>
<?php
}
else
{
?>
<div id="triangle1" class="triangle1"></div>
<div id="message1" class="message1">
<span style="color:white;float:right;">
<?php echo $row['msg']; ?>
</span> <br/>
<div>
<span style="color:white;float:right;
		font-size:12px;clear:both;">
<?php echo $row['uname']; ?>,
	<?php echo $row['dt']; ?>
</span>
</div>
</div>
<br/><br/>
<?php
}
}
endwhile;
?>
</div>
<br>
	<footer>
		<table>
		<tr>
		<th>
			<input class="input1" type="text"
					id="uname" name="uname"
					placeholder="From">
		</th>
		<th>
			<input class="input3" id="msg" name="msg"
				rows='9' cols='50'
				placeholder="Type your message">
			</input></th>
		<th>
			<input class="input2" type="submit"
			id="submit" name="submit" value="" style="background-color:black;">
			</input>
			
		</th>			
		</tr>
		</table>		
	</footer>
</form>
</main>	
</div>

</body>
</html>

