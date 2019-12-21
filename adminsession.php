

<?php 

//echo $UName;exit;
?>
<script language="javascript" type="text/javascript">
<?php
if($_SESSION['msg']!=""){ ?>
	alert('<?php  echo $_SESSION['msg'] . $_SESSION['USER'];?>');
	<?php $_SESSION['msg']=""; } ?>
</script>
<?php
include ('isvalid.php');
if(!isset($UName))
{
	
	header("Location:index.php");
	exit;
}

?>