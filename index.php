<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App title -->
    <title>Gabriel Lucas</title>

    <!-- Link css file -->
    <head>

</head>
    <script  src="code.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="style/duh.css">
      <link href="assets/css2/all.min.css" rel="stylesheet">

</head>


<body>
    
    <!-- Navigation bar -->
    <header class="header">
        <!-- Logo -->
        <a href="#" class="logo">GL</a>

        <!-- Hamburger icon -->
        <input class="side-menu" type="checkbox" id="side-menu"/>
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>

        <!-- Menu -->
        <nav class="nav">
            <ul class="menu">
                <li><a href="#">About me</a></li>
                <li><a href="#">Works</a> </li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content -->
    <main>
        <article>
            <h1 style="text-align: center;">
                Gabriel Lucas
            </h1>
            <center>
            <img src="images/mypic.jpg" id="mypic" >
            <br>
           
        </article>
        <div class="me" style="text-align: center;">
        	
<h2>SOFTWARE DEVELOPER & TEACHER</h2><br>
 
 </center>
        </div>
<div class="container">
<p style="color:'grey'">
	Hello! I'm Gabriel Lucas, a passionate software developer and computer teacher. I love creating digital solutions and helping others navigate the exciting world of technology. Let's explore the digital realm together!
</p>

<br><br>
<center>
<button id="next">What do i offer?</button><br><br>
<script>
$(document).ready(function(){
  $("#next").click(function(){
    $(".skills").css({"display": "flex"});
  });
});
</script>
</div>
<div class="title"><center><h3>WHAT I OFFER </h3></center></div>
<div class="skills">
<div class="mobile">
	<p>Mobile app developer</p><br><br>
	<i class="fas fa-mobile"></i><br><br>
    <p> I'm a mobile apps developer. I write code to create computer programs and apps that solve problems and make life easier  </p>


</div>
<div class="web">
	<p>website app developer</p><br><br>
	<i class="fas fa-laptop"></i><br><br>
    <p> 'm a web developer. I build and maintain websites, making sure they look good and work smoothly on the internet. Think of me as a digital architect, constructing the online spaces you visit every day  </p>

</div>
<div class="teaching">
	<p>Teacher</p><br><br>
	<i class="fas fa-user"></i><br><br>
    <p> I'm a computer teacher. I teach people how to use computers, software, and the internet effectively. My goal is to make technology easy to understand and help my students become confident and skilled in using it for work and everyday tasks  </p>

</div>

	</div>

<div class="projects" style="text-align:cennter">
	<h3>HERE ARE MY PROJECTS</h3>
</div>

	
<div class="footer">
	<div id="contacts">
		<center>
	<h3>CONTACT ME </h3><center></div>
	<div class="media">
		<ul><p><i class="fas fa-phone"></i> &nbsp;&nbsp; +255 687 999 366</p><br>
		<p><i class="fab fa-instagram"></i> &nbsp;&nbsp; Instagram</p><br>
		<p><i class="fab fa-github"></i> &nbsp;&nbsp;github</p><br>
		<p><i class="fab fa-google"></i> &nbsp;&nbsp;Luckgab2208@gmail.com</p><ul><br>
	</div>

</div>
    </main>

</body>
<style type="text/css">
	
</style>

</html>