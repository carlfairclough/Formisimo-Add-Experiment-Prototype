

<?php

// LOAD EACH FORM AS ITS OWN AREA.
// ONLY DISPLAY THE VERY FIRST FORM.
$n = 0;

if ( $user["forms"] == null ) { ?>
	
	<div class="manual-form">
		<div class="title-row pr20 pl20">
			<h2>Define a form that you would like to track <a href="#">Scan again</a></h2>
		</div>
		<div class="relative ml20 mr20 mb30 mt30">
			<label>Form name <i class="info">info</a></label>
			<input type="text" placeholder="Form name" class="pl20 pr20 mt10 form-name-field"></input><button class="button blue form-name-save">Save</button>
		</div>
	</div>

<?php 
} else {
	foreach($user["forms"] as $index => $form ) { ?>
		<div class="form-table <?php if ($index != 0) { ?>hide<?php } else { ?> visible <?php } ?>">
			<div class="title-row pr20 pl20">
				<h2>Which form would you like to track? <a href="#" class="scan-again">Scan again</a></h2>
			</div>
			<div class="table-actual">
				<div class="table-head">
					<div class="td">&nbsp;</div>
					<div class="td thead-name">
						Name
					</div>
					<div class="td thead-id">
						ID
					</div>
					<div class="td thead-elems">
						Elements
					</div>
				</div>
				<?php foreach($user["forms"] as $form ) { $n++; ?>
					<div class="tr">
						<div class="td">
							<input type="radio" name="radio-choice" id="radio-choice-<?php echo $n; ?>" tabindex="2" value="choice-1" <?php if ( $n == 1 ) { ?>  checked="checked" <?php }; ?>>
							<label for="radio-choice-<?php echo $n; ?>"><span class="fakeBox"></span></label>
						</div>
						<div class="td id-cell">
							<?php echo $form["name"]; ?>
						</div>
						<div class="td">
							<?php echo $form["ID"]; ?>
						</div>
						<div class="td">
							<?php echo $form["elements"]; ?>
						</div>
					</div>
				<?php }; ?>
				<div class="tr form-input relative">
					<div class="td form-input">
						<input type="radio" name="radio-choice" id="radio-choice-n" tabindex="2" value="choice-n">
						<label for="radio-choice-n"><span class="fakeBox"></span></label>
					</div>
					<div class="td id-cell form-input">
						Define form name
					</div>
					<div class="td form-input">
						<div class="form-input-wrap">
							<input type="text" class="pl20 pr20"></input>
							<button class="button blue form-name-save">Save</button>
						</div>
						
					</div>
					<div class="td form-input">
						
					</div>
				</div>
			</div>
		</div>
<?php 
	}; 
}; 

?>

<div class="manual-form hide">
	<div class="title-row pr20 pl20">
		<h2>Define a form that you would like to track <a href="#">Scan again</a></h2>
	</div>
	<div class="relative ml20 mr20 mb30 mt30">
		<label>Form name <i class="info">info</a></label>
		<input type="text" placeholder="Form name" class="pl20 pr20 mt10 form-name-field"></input><button class="button blue form-name-save">Save</button>
	</div>
</div>


