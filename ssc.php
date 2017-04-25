<!DOCTYPE html>
<html>
<head>

<title>ssc form</title>

<link rel="shortcut icon" type="image/png" href="akt.png"></link>

<script src="myvalidate.js"> </script>
</head>
<body>

<style>

div{
margin-left:5%;
margin-right:5%;

body{
border:3px solid red;
background-color:#FFE1E5;
}

h1{
font-family: Old English Text MT;
}

th{
text-align:left;
}



}

</style>

<table width=100%>
<tr>
<td><img src="akt.png"></img></td>
<div><td><h1><center>Maharashtra State Board Of Secondary And</center><br>
<center>Higher Secondary Education,Pune<center></h1></td></div>
</tr>
</table>

<hr>

<div>
<form method="post" name="ssc_form">
<fieldset>
<legend>Personal Information</legend>
<table bgcolor="white">

<tr>
<th>First Name</th>
<td>:</td>
<td><input type="text" name="fname"  /></td>
</tr>

<tr>
<th>Middle Name</th>
<td>:</td>
<td><input type="text" name="mname"  /></td>
</tr>

<tr>
<th>Last Name</th>
<td>:</td>
<td><input type="text" name="lname" /></td>
</tr>

<tr>
<th>Mother's Name</th>
<td>:</td>
<td><input type="text" name="moname" /></td>
</tr>


<tr>
<th>Gender</th>
<td>:</td>
<td><input type="radio" name="gen" value="f">Female
    <input type="radio" name="gen" value="m">Male
</td>
</tr>

<tr>
<th>BirthDate</th>
<td>:</td>
<td><input type="date" name="dob" ></td>
</tr>


</table>

<fieldset>
<legend>Address Details</legend>
<table bgcolor="white">
<tr>
<th>Address</th>
<td>:</td>
<td><textarea type="text" rows="5" cols="50" name="address" /></textarea></td>
</tr>

<tr>
<th>Pincode</th>
<td>:</td>
<td><input type="text" name="pincode" /></td>
</tr>

<tr>
<th>District</th>
<td>:</td>
<td><select name="district"><option value="no">---Select District</option>
<option value="au">aurangabad</option>
<option value="ak">akola</option>
<option value="am">amravati</option>
<option value="bi">beed</option>
<option value="bh">bhandara</option>
<option value="bu">buldhana</option>
<option value="ch">chandrapur</option>
<option value="dh">dhule</option>
<option value="ga">gadchiroli</option>
<option value="go">gondia</option>
<option value="hi">hingoli</option>
<option value="jg">jalgaon</option>
<option value="jn">jalna</option>
<option value="ko">kolhapur</option>
<option value="la">latur</option>
<option value="mc">mumbai city</option>
<option value="mu">mumbai suburban</option>
<option value="ng">nagpur</option>
<option value="nd">nanded</option>
<option value="nb">nandurbar</option>
<option value="ns">nashik</option>
<option value="os">osmanabad</option>
<option value="pa">parbhani</option>
<option value="pu">pune</option>
<option value="rg">raigad</option>
<option value="rt">ratnagiri</option>
<option value="sn">sangli</option>
<option value="st">satara</option>
<option value="si">sindhudurg</option>
<option value="so">solapur</option>
<option value="th">Thane</option>



</select></td>
</tr>

<tr>
<th>Nationality</th>
<td>:</td>
<td><input type="radio" name="na" value="ind">Indian
    <input type="radio" name="na" value="other">Other
</td>
</tr>
</table>
</fieldset>


<fieldset>
<legend>School Info </legend>
<table bgcolor="white">

<tr>
<th>school Name</th>
<td>:</td>
<td><textarea type="text" rows="5" cols="50" name="schoolname" /></textarea></td>
</tr>

<tr>
<th>Address of school</th>
<td>:</td>
<td><textarea type="text" rows="5" cols="50" name="schooladdress" /></textarea></td>
</tr>

<tr>
<th>Pincode</th>
<td>:</td>
<td><input type="text" name="pincode" /></td>
</tr>

<tr>
<th>Division</th>
<td>:</td>
<td>
<select name="division">
<option value="no">---Select Division---</option>

<option value="AU">Aurangabad</option>
<option value="MU">Mumbai</option>
<option value="NG">Nagpur</option>
<option value="NS">Nashik</option>
<option value="PU">Pune</option>

</select></td>
</tr>

<tr>
<th>District</th>
<td>:</td>
<td><select name="district">
<option value="no">---Select District---</option>

<option value="au">aurangabad</option>
<option value="ak">akola</option>
<option value="am">amravati</option>
<option value="bi">beed</option>
<option value="bh">bhandara</option>
<option value="bu">buldhana</option>
<option value="ch">chandrapur</option>
<option value="dh">dhule</option>
<option value="ga">gadchiroli</option>
<option value="go">gondia</option>
<option value="hi">hingoli</option>
<option value="jg">jalgaon</option>
<option value="jn">jalna</option>
<option value="ko">kolhapur</option>
<option value="la">latur</option>
<option value="mc">mumbai city</option>
<option value="mu">mumbai suburban</option>
<option value="ng">nagpur</option>
<option value="nd">nanded</option>
<option value="nb">nandurbar</option>
<option value="ns">nashik</option>
<option value="os">osmanabad</option>
<option value="pa">parbhani</option>
<option value="pu">pune</option>
<option value="rg">raigad</option>
<option value="rt">ratnagiri</option>
<option value="sn">sangli</option>
<option value="st">satara</option>
<option value="si">sindhudurg</option>
<option value="so">solapur</option>
<option value="th">Thane</option>

</select></td>
</tr>

</table>
</fieldset>








</fieldset>
<br>
<fieldset>
<legend>Marks</legend>
ENTER SSC MARKS:-
<table width="100%" border="1 px solid black">

<tr>
<th>03 English (1st LANG)</th>
<td>:</td>
<td><input type="number" name="english" /></td>
</tr>

<tr>
<th>15 Hindi (2/3 LANG)</th>
<td>:</td>
<td><input type="number" name="hindi" /></td>
</tr>

<tr>
<th>16 Marathi (2/3 LANG)</th>
<td>:</td>
<td><input type="number" name="marathi" /></td>
</tr>

<tr>
<th>71 Mathematics</th>
<td>:</td>
<td><input type="number" name="maths" /></td>
</tr>

<tr>
<th>72 Science & Technology</th>
<td>:</td>
<td><input type="number" name="science" /></td>
</tr>

<tr>
<th>73 Social Sciences</th>
<td>:</td>
<td><input type="number" name="socialscience" /></td>
</tr>

<tr>
<th> K7 Information Technology(Grade)</th>
<td>:</td>
<td><input type="number" name="it"/></td>
</tr>

<tr>
<th>P1 Health and Physical Education(Grade)</th>
<td>:</td>
<td><input type="number"  name="health" /></td>
</tr>

<tr>
<th>P6Social Service(Grade)</th>
<td>:</td>
<td><input type="number"   name="socialservice" /></td>
</tr>

<tr>
<th>R6 Personality Development(Grade)</th>
<td>:</td>
<td><input type="number"   name="perdevelopment" /></td>
</tr>

<tr>
<th>38 Environment Education (Grade)</th>
<td>:</td>
<td><input type="number" name="evs"/></td>
</tr>


</table>
</fieldset>






<br>

<fieldset>
<legend>REQUIRED</legend>
<table>
<tr>
<th>Seat No.</th>
<td>:</td>
<td><input type="text" name="seatno"></th>
</tr>
<tr>
<th>Centre No.</th>
<td>:</td>
<td><input type="text" name="centerno"></th>
</tr>
<tr>
<th>School Info.</th>
<td>:</td>
<td><textarea type="text" name="schoolinfo"></textarea></th>
</tr>
</table>
</fieldset>
<?php
    
		
	if(isset($_POST['submit']))
{
$firstname=$_POST["fname"];
$middlename=$_POST["mname"];
$lastname=$_POST["lname"];
$mothername=$_POST["moname"];
$gender=$_POST["gen"];
$birthdate=$_POST["dob"];

$address=$_POST["address"];
$pincode=$_POST["pincode"];
$district=$_POST["district"];
$nationality=$_POST["na"];

$schoolname=$_POST["schoolname"];
$schooladdress=$_POST["schooladdress"];
$pincode=$_POST["pincode"];
$division=$_POST["division"];
$district=$_POST["district"];

$english=$_POST["english"];
$hindi=$_POST["hindi"];
$marathi=$_POST["marathi"];
$maths=$_POST["maths"];
$science=$_POST["science"];
$socialscience=$_POST["socialscience"];
$it=$_POST["it"];
$health=$_POST["health"];
$socialservice=$_POST["socialservice"];
$perdevelopment=$_POST["perdevelopment"];
$evs=$_POST["evs"];

$seatno=$_POST["seatno"];
$centerno=$_POST["centerno"];
$schoolinfo=$_POST["schoolinfo"];

include "connect.php";

$sql = "INSERT INTO personalinfo VALUES('$firstname','$middlename','$lastname','$mothername','$gender','$birthdate')";
      $result = mysql_query($sql);
	  
$sql = "INSERT INTO addressdetails VALUES('$address','$pincode','$district','$nationality')";
      $result = mysql_query($sql);
	 
$sql = "INSERT INTO schoolinfo VALUES('$schoolname','$schooladdress','$pincode','$division','$district')";
      $result = mysql_query($sql);

$sql = "INSERT INTO marks VALUES('$english','$hindi','$marathi','$maths','$science','$socialscience','$it','$health','$socialscience','$perdevelopment','$evs')";
      $result = mysql_query($sql);

$sql = "INSERT INTO required VALUES('$seatno','$centerno','$schoolinfo')";
      $result = mysql_query($sql);
		
		echo "<h2><font color=green>Member successfully added</font></h2>";
}
?>
<center>
<table>
<?php
    
		
	if(isset($_POST['display']))
{

include "connect.php";

$sql = "Select * from personalinfo";

      
		$result = mysql_query($sql);
		   $row = mysql_num_rows($result);

if ($row > 0) {
    // output data of each row
		
	   echo "<tr><th>First name</th><th>Middle Name</th><th>Last Name</th><th>Mother's name</th><th>Gender</th><th>Date of Birth</th></tr>";
    while($row =  mysql_fetch_assoc($result)) {
        echo "<tr><td>" . $row["firstname"]."</td><td>" . $row["middlename"]."</td><td>".$row["lastname"]."</td><td>".$row["mothername"]."</td><td>".$row["gender"]."</td><td>".$row["birthdate"]."</td></tr>";
    }

} else {
    echo "0 results";
}
}
?>
</table>
</center>
<br>


<center><input type="submit" name="submit" value="Submit" >
<input type="submit" name="display" value="Display" >
<button type="reset" name="reset" value="reset">Reset</center>
</form>
</div>
</body>
</html>
