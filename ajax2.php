<?php
if(isset($_POST['data']))
{

?>
<table class="scroll" border="2px">
	
    <tr>
    <td >  Amount  </td>
    <td  >&nbsp;   </td>
    <td  > Talktime </td>
    <td >&nbsp;     </td>
    <td  > Validity </td>
    <td >&nbsp;      </td>
	<td > Description </td>
        
    </tr>
	
	<?php
	include("dbrecharge.php");
	if($_POST['data']=="1")
	{
	$s="Select * from plan_details Where SchemeID='$_POST[data]'";
	
	$rel=mysql_query($s);


	while($r=mysql_fetch_object($rel))
	{
	?>  
<tr>

	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan"><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
    
    
</tr>
<tr>      </tr>

<?php
	}
	}
	if($_POST['data']=="2")
	{
	$s="Select * from plan_details Where SchemeID='$_POST[data]'";
	
	$rel=mysql_query($s);


	while($r=mysql_fetch_object($rel))
	{
	?>  
<tr>

	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan"><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
    
    
</tr>
<tr>      </tr>

<?php
	}
	}
	if($_POST['data']=="3")
	{
	$s="Select * from plan_details Where SchemeID='$_POST[data]'";
	
	$rel=mysql_query($s);


	while($r=mysql_fetch_object($rel))
	{
	?>  
<tr>

	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan"><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
    
    
</tr>
<tr>      </tr>

<?php
	}
	}
	if($_POST['data']=="4")
	{
	$s="Select * from plan_details Where SchemeID='$_POST[data]'";
	
	$rel=mysql_query($s);


	while($r=mysql_fetch_object($rel))
	{
	?>  
<tr>

	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan"><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
    
    
</tr>
<tr>      </tr>

<?php
	}
	}
	if($_POST['data']=="5")
	{
	$s="Select * from plan_details Where SchemeID='$_POST[data]'";
	
	$rel=mysql_query($s);


	while($r=mysql_fetch_object($rel))
	{
	?>  
<tr>

	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan"><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
    
    
</tr>
<tr>      </tr>

<?php
	}
	}
	if($_POST['data']=="6")
	{
	$s="Select * from plan_details Where SchemeID='$_POST[data]'";
	
	$rel=mysql_query($s);


	while($r=mysql_fetch_object($rel))
	{
	?>  
<tr>

	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan"><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
    
    
</tr>
<tr>      </tr>

<?php
	}
	}
	if($_POST['data']=="7")
	{
	$s="Select * from plan_details Where SchemeID='$_POST[data]'";
	
	$rel=mysql_query($s);


	while($r=mysql_fetch_object($rel))
	{
	?>  
<tr>

	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan"><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
    
    
</tr>
<tr>      </tr>

<?php
	}
	}
	if($_POST['data']=="8")
	{
	$s="Select * from plan_details Where SchemeID='$_POST[data]'";
	
	$rel=mysql_query($s);


	while($r=mysql_fetch_object($rel))
	{
	?>  
<tr>

	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan"><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
    
    
</tr>
<tr>      </tr>

<?php
	}
	}
	if($_POST['data']=="9")
	{
	$s="Select * from plan_details Where SchemeID='$_POST[data]'";
	
	$rel=mysql_query($s);


	while($r=mysql_fetch_object($rel))
	{
	?>  
<tr>

	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan"><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20"><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
    
    
</tr>
<tr>      </tr>

<?php
	}
	}
	?>

</table>



<?php
}
else
{
	echo "No plans selected";
}

?>