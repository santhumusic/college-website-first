<?php
//PHP code to sent contact form to both client and owner
if (isset($_POST['submit'])) { //Check if user enter data 
    $mailto= "santhoshpodili874@gmail.com"; //My email address
    $from = $_POST['email']; //Senders email address
    $name = $_POST['name']; //User name
    $subject2 = "Your Message Submitted Successfully | HMA WebDesign"; //This is for client
    $message="Client Name: ". $name. "Wrote the Following Message". "/n/n". $_POST['message'];
    $message2 = "Dear ". $name. "/n/n" "Thank You for contacting us! We'll get back to you shortly"; //Thi
    $headers "From: ". $from; // User entered email address
    $headers2 = "From: ". Smailto; //This will receive to client
    $result = mail (Smailto, $subject, $message, $headers); //send email to website owner
    $result2 = mail($from, $subject2, $message2, $headers2); //send email to User as well
    if ($result) { //if email is submitted successfullysuccessfully
        echo '<script type="text/javascript">alert("Message was sent Successfully,We will contact you sortly!") </script>';
} else {
    echo '<script type="text/javascript">alert("Submission failed! Try gain ") </script>';
}


<!DOCKTYPE html>
<html>
<head>
<script type="text/javascript" src="vaildate.js"></script>
</head>
<body>
<form action="#" name="gokul junior college" onSubmit="return(vaildate());">

<table cellpadding="2" width="20%" bgcolor="#ff0cb44f" align="center" cellspacing="2">
  
<tr>
<td colspan=2>
<center><font size=4><b>GOKUL JUNIOR COLLEGE ADMISSION FORM</b></font></center>
</td>
</tr>
<tr>
<td>ɴᴀᴍᴇ</td>
<td><input type=text name=textnames id="textname" size="30"></td></tr>
<tr>
<td>ғᴀᴛʜᴇʀ ɴᴀᴍᴇ</td>
<td><input type=text name="fathername"
 ="fathername" size="30"></td></tr>
<tr>
<td>ᴘᴏsᴛᴀʟ ᴀᴅᴅʀᴇss</td>
<td><input type="text" name="paddress" id="paddress" size="30"></td>
</tr>

<tr>
<td>ᴘᴇʀsᴏɴᴀʟ ᴀᴅᴅʀᴇss</td>
<td><input type="text" name="personaladdress id="personaladdress" size="30"></td>
</tr>

<tr>
<td>ɢᴇɴᴅᴇʀ</td>
<td><input type="radio" name="gender" value="male" size="1">ᴍᴀʟᴇ<input type ="radio" name="gender" value="female" size="1">ғᴇᴍᴀʟᴇ</td>
</tr>

<tr>
<td>sᴛᴀᴛᴇ</td>
<td><select state="State">
<option value="-1" selected>sᴇʟᴇᴄᴛ ʏᴏᴜʀ sᴛᴀᴛᴇ...</option>
<option value="Punjab" selected>PUNJAB</option>
<option value="Andhra pradesh" selected>ANDHRA PRADES</option>
<option value="Tamil Nadu" selected>TAMIL NADU</option>
<option value="Kerala" selected>KERALA</option>
<option value="Rajasthan" selected>RAJASTHAN</option>
<option value="Benguluru" selected>BENGULURU</option>
<option value="Assam" selected>ASSAM</option>
<option value="New Delhi" selected>NEW DELHI</option>
<option value="Goa" selected>GOA</option>
<option value="odisha" selected>ODISHA</option>
<option value="ᴛᴇʟᴀɴɢᴀɴᴀ" selected>TELANGANA</option>
</select></td>
</tr>


<tr>
<td>ᴅɪsᴛʀɪᴄᴛ</td>
<td><select state="District">
<option value="-1" selected>sᴇʟᴇᴄᴛ ʏᴏᴜʀ sᴛᴀᴛᴇ...</option>
<option value="hyderabad" selected>HYDERABAD</option>
<option value="ranga reddy" selected>RANGA REDDY</option>
<option value="mulugu" selected>MULUGU</option>
<option value="nalagonda" selected>NALAGONDA</option>
<option value="Khammamam" selected>KHAMMAMAM</option>
<option value="Bhadadri kothagudem" selected>BHADADRI KOTHAGUDEM</option>
<option value="Warangal" selected>WARANGAL</option>
<option value="Naryanpet" selected>NARYANPET</option>
</select></td>
</tr>

<tr>
<td>ɢʀᴏᴜᴘs ᴏғғᴇʀᴇᴅ</td>
<td><select state="Groups Offered">
<option value="-1" selected>sᴇʟᴇᴄᴛ ʏᴏᴜʀ ɢʀᴏᴜᴘ...</option>
<option value="Cec" selected>CEC</option>
<option value="Mpc" selected>MPC</option>
<option value="Bipc" selected>BIPC</option>
<option value="Mec" selected>MEC</option>
</select></td>
</tr>

  <button type="submit"></button>
</form>
</form>
</tr>
</table>
</body>
</html>
