<!DOCTYPE html>
<html>
<style>
.mySlides {display: none;}
img {vertical-align: middle;}

*{
    margin:0;
    padding:0;
    font-family:'Josefin Sans' , sans-serif;
}
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin: auto;
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:     #2f2626;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color:   #2f2626;
}
.active {
  background-color:   #2f2626;
}
.footer{
    bottom:0px;
    width:100vw;
    height:30vh;
    padding-top:10%;
}

.footer .outer{
    background-color: #2f2626;
    width:100vw;
    height:40vh;
    display:flex;
    align-items:center;
}

.footer .inner{
    width:30%;
    height:50%;
    margin-left:15%;
    border-right:4px solid #AAF7B5;
}

h4{
	 margin-left:8%;
}

.footer a{
    display:block;
    padding:2%;
    color:#FFFFFF;
}
.fa:hover {
    opacity: 0.7;
}




h4{
  color: white;
}
p{
  color: white;
}

</style>
<header>

<ul>
  <li><a class="active" href="Home.php">Home</a></li>
  <li><a href="show_Bus_Ticket_Booking_Information.php">Admin panel</a></li>
</ul>


</div>
<br>

<br>
</header>
<body>
  
<a href="bus.php"><img src="content/bus.png" style="width:323px;height:323px;"></a>
</body>

</html>
