<?php 
	$seiten_id = 1;
	$seiten_title ="Startseite";
	include_once("includes/header.php");
?>

<div id="startseite" class="container-fluid">
	<div class="span12">
		<?php include_once("views/startseite.php"); ?>
	</div>		
</div>
<div id="service" class="container-fluid">
	<div class="span12">
		<?php include_once("views/service.php"); ?>
	</div>		
</div>
<div id="preise" class="container-fluid">
	<div class="span12">
		<?php include_once("views/preise.php"); ?>
	</div>		
</div>
<div id="kontakt" class="container-fluid">
	<div class="span12">
		<?php include_once("views/kontakt.php"); ?>
	</div>		
</div>
<?php 
	include_once("includes/footer.php");
?>