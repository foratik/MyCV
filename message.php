 <?php error_reporting (E_ALL ^ E_NOTICE); ?> 
 <html>
 

       <title>   
           Contact me!
       </title> 
	   <style>
    .my-footer{
    background-color:#8F6FD3;
    color:#fff;
    padding:5px;
    text-align:center;
    }
	.my-header{
    background-color:#5793F6;
    color:#fff;
    padding:5px;
    text-align:center;
    }
</style>	   
       <body style="background-color: #A6CDEC;">
	   
	   <header class="my-header">
	   
	   
  <a href="home.html" > <font  face="b koodak" size="6">
  Home Page </font> </a>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   

  <a href="cv.html" > <font  face="b koodak" size="6">
  About me! </font> </a>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <a href="skills.html" > <font  face="b koodak" size="6"> 
  My Skills! </font> </a>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <a href="message.php" > <font  face="b koodak" size="6"> 
  Contact me! </font> </a>
 
</header>
	   
	   <p>
	   <font  face="b koodak" style="text-align:right"  size="6">
	   Send message to Saeed Forati
	   </font>
	   </p>
	   
           <form>
   <table style="text-align:right"> <tr> <td>
   <font face="b koodak" style= "text-align:right" "font-weight: bold; "  > 
   First name : </font> </td> 
   <td>&nbsp;&nbsp;<input type="text" value="" name="fname"/></td>
   </tr> <tr> <td> <font face="b koodak" style="font-weight: bold; " >
   Last name : </font> </td>
   <td> &nbsp;&nbsp; <input type="text" value="" name="lname"/> </td> </tr>
   <tr> <td> <font face="b koodak" style="font-weight: bold; " >
   Email :  </font></td>
   <td>&nbsp;&nbsp;<input type="text" value="" name="email"/></td> </tr>
   </table>
   <br><br>
   <table><tr><td><font face="b koodak" style="font-weight: bold; " >
   </font></td><td> &nbsp;&nbsp;<textarea name="WMessage" rows="5" cols="30"></textarea> message 
   </td> </tr></table>
   
   
   <button onclick="myFunction()" >submit</button>
   <?PHP
 
        $message = $_GET["WMessage"];
		$name = $_GET["fname"];
		$family = $_GET["lname"];
		$mail = $_GET["email"];
		$n=count (glob ('message*.txt')) + 1;
        $file = fopen("message$n.txt", "w");
        fwrite($file, "First Name : ".$name."\n" );
		fwrite($file, "Last Name : ".$family."\n" );
		fwrite($file, "Email : ".$mail."\n" );
		fwrite($file, "Message : ".$message."\n" );
        fclose($file);
		
    
   ?>
   <br><br><br><br><br><br><br><br>
   <script>
function myFunction() {
  let text = "Are you sure to send message?";
  if (confirm(text) == true) {
    text = "Your message successfully sent to Saeed.";
  } else {
    text = "You canceled sending message!";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
   <!-- <input type="submit" value="ثبت پیام"/>  -->
   </form>
 
  <footer class="my-footer">
  <p>Telegram : t.me/s_4aT&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp;&nbsp;&nbsp;&nbsp; Mail : Saeed.Forati.K@gmail.com</p>
 </footer>
       </body>
  </html>