<?php include('../header.php'); ?>
<?php include('../scenarios.php'); ?>

<!-- <pre><?php print_r($user1); ?></pre> -->



<?php

//CHECKING FOR URLS FOR DIFFERENT SCENARIOS

$q = strtolower($_SERVER['QUERY_STRING']);

if ( array_search($q, array_map('strtolower', $user1 ) ) ) { 
	$user = $user1;
	global $user;
} else if ( array_search($q, array_map('strtolower', $user2 ) ) ) {
	$user = $user2; 
	global $user;
} else if ( array_search($q, array_map('strtolower', $user3 ) ) ) {
	$user = $user3; 
	global $user;
} else if ( array_search($q, array_map('strtolower', $user4 ) ) ) {
	$user = $user4; 
	global $user;
} else if ( array_search($q, array_map('strtolower', $user5 ) ) ) {
	$user = $user5; 
	global $user;
} else if ( array_search($q, array_map('strtolower', $user6 ) ) ) {
	$user = $user6; 
	global $user;
} else if ( array_search($q, array_map('strtolower', $user7 ) ) ) {
	$user = $user7; 
	global $user;
} else if ( array_search($q, array_map('strtolower', $user8 ) ) ) {
	$user = $user8; 
	global $user;
} else if ( array_search($q, array_map('strtolower', $user9 ) ) ) {
	$user = $user9; 
	global $user;
} else {
	echo 'NOPE';
};


$h1msg = 'High five! We found the code';

if ($user["forms"] == null ) {
	$h1msg = 'High five! We found the code';
}

if ($user["code"] == false ) {
	$h1msg = "Uh oh, we couldn't find the code at that URL";
}


?>

<div class="row">
	<div class="col-12">
		<h1><?php echo $h1msg; ?></h1>
		<p>Configure your last settings and we'll be ready to collect your data.</p>
	</div>
</div>
<div class="row">
	<div class="col-8 form-table-wrapper pr30">
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