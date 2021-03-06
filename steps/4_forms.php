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

<body style="padding-bottom:100px">
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
				<pre class="mb20 green-text"><?php echo $q; ?></pre>
				<p><?php echo $pmsg; ?></p>
			</div>
		</div>
		<div class="row formandurl mb30 pt30 pb30">
			<div class="col-8 form-table-wrapper pr30 animated fadeIn">
				<?php include('../modules/formtable.php'); ?>
			</div>
			<div class="col-4 url-rules-wrapper animated fadeIn">
				<?php include('../modules/urlrules.php'); ?>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<a href="#" class="button blue right">Finish</a><a href="/steps/3_url.php?<?php echo $q; ?>" class="button grey right mr15">Go back</a>
			</div>
		</div>
	</div>
</body>