<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Percentage calculator</title>
	</head>

	<style>
		.main {
            box-shadow: 10px 10px 20px 20px grey;
			background: orange;
			border-radius: 30px;
			width: 50%;
			height: 510px;
			margin-left: 30%;
			margin-top: 5%;

	}

	input{
		/*margin-left: 60%;*/
		border: none;
		border-radius: 18px; 
		font-size: 20px;
		padding: 5px;
		text-align: center;
		margin-left: 30px;
}

h1{
	padding-top: 4%;
	text-align: center;
	font-family: cursive;
	font-size: 30px;
}


.a{
	position: absolute;
	top: 30%;
}

button{
	margin-left: 35px;
	padding: 5px;
	border-radius: 18px;
	width: 30%;
	font-size: 20px;
	background: black;
	color: white;
	cursor: pointer;
	border: none;

	transition: all 0.5s;


}

button:hover{
/*	background: RGB(32,42,68);*/
background: green;
color : orange;
}

img{
	width: 30%;
	height: 50%;
	background: none;
	border-radius: 180px;
	margin-left: 60%;
	overflow: hidden;
	transition: all 0.6s;
}

img:hover{
	
	transform: scale(1.2,1.2);
	cursor: pointer;

}

</style>

	<body>

	<div class="main">

		<h1>Students Grade Calculator</h1>
		<br><br>
<div>
	<img src="think3.png">
		

	</div>
	<div class="a">
		<input id="demo1" type="text" name="" placeholder="Maths ">
	<br><br>
		<input id = "demo2" type="text" name="" placeholder="Computer Science">
	<br><br>
		<input id = "demo3" type="text" placeholder="Physics">
	<br><br>

		<input id = "demo4" type="text" 
		placeholder="English">
	<br><br><br>	

<button onclick="funexpr()">
		Result
	</button>

<p id="pr" style="margin-left: 400px; font-size: 20px; font-weight: bold; color: white; "></p>


<p id="gr" style="margin-left: 400px; font-size: 20px; font-weight: bold; color: white;position: absolute; top: 90%; "></p>


</div>

	</div>

	
<script>
	var funexpr = () => {
	var sub1 = parseInt(document.getElementById('demo1').value);
	var sub2 = parseInt(document.getElementById('demo2').value);
	var sub3 = parseInt(document.getElementById('demo3').value);
	var sub4 = parseInt(document.getElementById('demo4').value);

	var res = sub1 + sub2 + sub3 + sub4;
	var percentage = (res/400)*100;

	var a = document.getElementById('pr').innerHTML = `Out of 400 your total marks : ${res} <br> Percentage : ${percentage}`



if(res>=100 && res<=200){
	document.getElementById('gr').innerHTML = "your grade is D"
}
else if(res>=200 && res<=300){
	document.getElementById('gr').innerHTML = "your grade is C"

}

else if(res>=300 && res<=400){
	document.getElementById('gr').innerHTML = "your grade is B";
}

else{
		document.getElementById('gr').innerHTML = "your grade is A";
}

}
	
</script>

	</body>
	</html>








