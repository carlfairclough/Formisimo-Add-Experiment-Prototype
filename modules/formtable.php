

<?php

// LOAD EACH FORM AS ITS OWN AREA.
// ONLY DISPLAY THE VERY FIRST FORM.

$len = count($array);
foreach($user["forms"] as $index => $form ) { ?>
		<div class="form-table <?php if ($index != 0) { ?>hide<?php } else { ?> visible <?php } ?>">
			<div class="title-row">
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
				<?php foreach($user["forms"] as $form ) { ?>
					<div class="tr">
						<div class="td">
							<input type="radio" name="radio-choice-1" id="radio-choice-1" tabindex="2" value="choice-1">
						</div>
						<div class="td">
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
			</div>
		</div>
<?php }; ?>


