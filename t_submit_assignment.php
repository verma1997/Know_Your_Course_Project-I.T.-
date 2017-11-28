<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"course_feedback");
$s="select * from upload";
$resource=mysqli_query($con,$s);
$count=mysqli_num_rows($resource);
for($i=0;$i<$count;$i++)
{
	
$row=mysqli_fetch_assoc($resource);
echo "<a href=upload/".$row['file'].">File :".$row['file']."<br></a>";

echo"<hr>";
}

?>