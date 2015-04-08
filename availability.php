<?php


	include("dbrecharge.php");
	
	if(isset($_POST['data']))
	{
	
		$select="SELECT Name FROM user_details Where Name='$_POST[data]'";
		//echo  $select;
		$sel=mysql_query($select);
		
		if(mysql_num_rows($sel)==0)
		{
			echo "Username available";
		}
		else
		{
			echo "Username already exists";
		}
		
		
	}
	if(isset($_POST['dat']))
	{
	
		$select="SELECT Mobile_No FROM user_details Where Mobile_No='$_POST[dat]'";
		//echo  $select;
		$sel=mysql_query($select);
		
		if(mysql_num_rows($sel)==0)
		{
			echo "Mobile No available";
		}
		else
		{
			echo "Mobile No already exists";
		}
		
		
	}
	if(isset($_POST['da']))
	{
	
		$select="SELECT Email FROM user_details Where Email='$_POST[da]'";
		//echo  $select;
		$sel=mysql_query($select);
		
		if(mysql_num_rows($sel)==0)
		{
			echo "Email available";
		}
		else
		{
			echo "Email already exists";
		}
		
		
	}
	
	

?>