<div class="themesetting">
	<?php
	if($setting != ''){
	$settings = json_decode($setting[0]);
	// echo count($settings);
// print_r($settings); exit;
// 	$counter = 1;
	for ($i=0; $i < count($settings); $i++) {
		$groupname = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($settings[$i]->name));
		?>
		<div class="kt-section kt-section--first">
			<div class="kt-section__body">
				<div class="row">
					<label class="col-xl-3"></label>
					<div class="col-lg-9 col-xl-6">
						<h3 class="kt-section__title kt-section__title-sm"><?php echo e($settings[$i]->name); ?>:</h3>
						<input type="hidden" name="module[]" value="<?php echo e($settings[$i]->name); ?>">
					</div>
				</div>
				  <?php for($a=0; $a < count($settings[$i]->groups->fieldname); $a++){ ?>

					<?php for($a=0; $a < count($settings[$i]->groups->fieldname); $a++){
						$fieldname = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($settings[$i]->groups->fieldname[$a]));
					?>

							<?php if($settings[$i]->groups->fieldtype[$a] == 'Boolean'): ?>
							<div class="form-group form-group-sm row">
								<label class="col-xl-3 col-lg-3 col-form-label"><?php echo e($settings[$i]->groups->fieldname[$a]); ?></label>
								<div class="col-lg-9 col-xl-6">
									<span class="kt-switch">
										<?php

										if($settings[$i]->groups->defaultvalue[$a] != ''){
											$boolean = $settings[$i]->groups->defaultvalue[$a];
										}else{
											$boolean = 1;
										}
										 ?>
										<label>
											<input type="checkbox" checked="checked" name="settings[<?php echo e($groupname); ?>][<?php echo e($fieldname); ?>]" value="<?php echo e($boolean); ?>">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<?php elseif($settings[$i]->groups->fieldtype[$a] == 'Color Picker'): ?>
							<div class="form-group form-group-sm row">
								<label class="col-xl-3 col-lg-3 col-form-label"><?php echo e($settings[$i]->groups->fieldname[$a]); ?></label>
								<div class="col-lg-9 col-xl-6">
											<input type="text" class="form-control" name="settings[<?php echo e($groupname); ?>][<?php echo e($fieldname); ?>]" value="<?php echo e($settings[$i]->groups->defaultvalue[$a]); ?>">
								</div>
							</div>

							<?php elseif($settings[$i]->groups->fieldtype[$a] == 'file'): ?>
							<div class="form-group form-group-sm row">
								<label class="col-xl-3 col-lg-3 col-form-label"><?php echo e($settings[$i]->groups->fieldname[$a]); ?></label>
							<div class="col-lg-9 col-xl-6">
										<input type="file" class="form-control" name="settingfile[<?php echo e($groupname); ?>][<?php echo e($fieldname); ?>]">
							</div>
							</div>
							<?php else: ?>
							<div class="form-group form-group-sm row">
								<label class="col-xl-3 col-lg-3 col-form-label"><?php echo e($settings[$i]->groups->fieldname[$a]); ?></label>
							<div class="col-lg-9 col-xl-6">
										<input type="<?php echo e($settings[$i]->groups->fieldtype[$a]); ?>" class="form-control" name="settings[<?php echo e($groupname); ?>][<?php echo e($fieldname); ?>]" value="<?php echo e($settings[$i]->groups->defaultvalue[$a]); ?>">
							</div>
							</div>
							<?php endif; ?>
					<?php } ?>

				</div>
			<?php } ?>
			</div>
		<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
				<?php
			}
		}
	?>
</div>
<?php /**PATH C:\xampp\htdocs\pageBuilder\resources\views/widgets/themeSetting.blade.php ENDPATH**/ ?>