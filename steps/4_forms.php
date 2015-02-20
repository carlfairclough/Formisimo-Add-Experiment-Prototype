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
$pmsg = 'Configure your tracking settings to get up and running';

if ($user["forms"] == null ) {
	$h1msg = 'High five! We found the code';
	$pmsg = 'Configure your tracking settings to get up and running';
}

if ($user["code"] == false ) {
	$h1msg = "We couldn't find the code at that URL";
	$pmsg = 'This could be because youre using a tool like Google Tag Manager. If youre sure that this is right, specify forms that you would like to track, otherwise, go back';
}


?>

<body>
	<div class="content animated fadeIn">
		<div class="row">
			<div class="col-8 centered">
				<div class="row">
					<div class="col-4">
						<div class="illustration animated fadeIn small-illus mb100 left animated">
						</div>
					</div>
					<div class="col-4">
						<div class="illustration animated fadeIn small-illus mb100">
						</div>
					</div>
					<div class="col-4">
						<div class="illustration main-illus animated fadeInDown small-illus mb100 right">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<h1><?php echo $h1msg; ?></h1>
				<p><?php echo $pmsg; ?></p>
			</div>
		</div>
		<div class="row mb30">
			<div class="col-8 form-table-wrapper pr30 mb30 animated fadeIn">
				<?php include('../modules/formtable.php'); ?>
			</div>
			<div class="col-4 url-rules-wrapper animated fadeIn">
				<?php include('../modules/urlrules.php'); ?>
			</div>
		</div>

		<div class="bottom-notification">
			<div class="row">
				<div class="col-12">
					<p>Is there another form in the process? <a href="#" class="add-another-form">+ Add another form</a></p>
				</div>
			</div>
		</div>
	</div>
</body>