<?php include('../header.php'); ?>
<?php include('../scenarios.php'); 

$h1msg = 'Tell us the URL';
$pmsg = 'Tell us where we can find the form you would like to track. The page <i>must</i> have the tracking code.';

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
	// nothing :)
};


if ( $q != null && $user["code"] == false ) {
	$h1msg = 'Uh Oh! Code not found';
	$pmsg = 'We couldn&#39;t find the code at the URL specified. If you&#39;re absolutely sure that it&#39;s there, then <a href=""> set up the experiment anyway</a>';
}



?>

<body>
	<div class="content animated fadeIn">
		<div class="row">
			<div class="col-8 centered">
				<div class="row">
					<div class="col-4">
						<div class="illusSmall">
						</div>
					</div>
					<div class="col-4">
						<div class="illusSmall">
						</div>
					</div>
					<div class="col-4">
						<div class="illusSmall">
						</div>
					</div>
				</div>

				<h1><?php echo $h1msg; ?></h1>
				<p><?php echo $pmsg; ?></p>

				<input type="text" name="url" class="pl15 pr15 mb15 mt30" value="<?php echo strtolower($_SERVER['QUERY_STRING']); ?>"></input>
				<a class="secondary mt-20">Set up your experiment without checking</a><a class="button blue right submit-url mt-20">Check URL</a>
			</div>
		</div>
	</div>
</body>