<?php include('../header.php'); ?>
<?php include('../scenarios.php'); ?>

<!-- <pre><?php print_r($user1); ?></pre> -->

<?php $user = $user1; 
global $user;
?>


<div class="row">
	<div class="col-12">
		<h1>High five! We found the code</h1>
		<p>Configure your last settings and we'll be ready to collect your data.</p>
	</div>
</div>
<div class="row">
	<div class="col-8 form-table-wrapper">
		<?php include('../modules/formtable.php'); ?>
	</div>
	<div class="col-4">
		<?php include('../modules/urlrules.php'); ?>
	</div>
	<a class="next-step" href="#">Code added</a>
</div>

<div class="bottom-notification">
	<div class="row">
		<div class="col-12">
			<p>Is there another form in the process? <a href="#" class="add-another-form">+ Add another form</a></p>
		</div>
	</div>
</div>