

<?php 

//echo $ADName;exit;
?>
<script language="javascript" type="text/javascript">
<?php
if($_SESSION['msg']!=""){ ?>
	alert('<?php  echo $_SESSION['msg'] . $_SESSION['ADMIN'];?>');
	<?php $_SESSION['msg']=""; } ?>
</script>
<?php
include ('isvalid.php');
if(!isset($ADName))
{
	
	header("Location:index.php");
	exit;
}

?>