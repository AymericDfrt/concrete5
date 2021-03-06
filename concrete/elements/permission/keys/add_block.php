<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $included = $permissionAccess->getAccessListItems(PermissionKey::ACCESS_TYPE_INCLUDE); ?>
<?php $excluded = $permissionAccess->getAccessListItems(PermissionKey::ACCESS_TYPE_EXCLUDE); ?>
<?php $btl = new BlockTypeList();
$blockTypes = $btl->get();
?>
<?php $form = Loader::helper('form'); ?>

<?php if (count($included) > 0 || count($excluded) > 0) {
    ?>

<?php if (count($included) > 0) {
    ?>

<h4><?php echo t('Who can add what?')?></h4>

<?php foreach ($included as $assignment) {
    $entity = $assignment->getAccessEntityObject();
    ?>


<div class="form-group">
	<label class="control-label"><?php echo $entity->getAccessEntityLabel()?></label>
	<?php echo $form->select('blockTypesIncluded[' . $entity->getAccessEntityID() . ']', array('A' => t('All Block Types'), 'C' => t('Custom')), $assignment->getBlockTypesAllowedPermission())?>
	<div class="inputs-list" <?php if ($assignment->getBlockTypesAllowedPermission() != 'C') {
    ?>style="display: none"<?php 
}
    ?>>
		<?php foreach ($blockTypes as $bt) {
    ?>
			<div class="checkbox"><label><input type="checkbox" name="btIDInclude[<?php echo $entity->getAccessEntityID()?>][]" value="<?php echo $bt->getBlockTypeID()?>" <?php if (in_array($bt->getBlockTypeID(), $assignment->getBlockTypesAllowedArray())) {
    ?> checked="checked" <?php 
}
    ?> /> <?php echo t($bt->getBlockTypeName())?></label></div>
		<?php 
}
    ?>
	</div>
</div>

<?php 
}
}
    ?>


<?php if (count($excluded) > 0) {
    ?>

<h3><?php echo t('Who can\'t add what?')?></h3>

<?php foreach ($excluded as $assignment) {
    $entity = $assignment->getAccessEntityObject();
    ?>


<div class="form-group">
    <label class="control-label"><?php echo $entity->getAccessEntityLabel()?></label>
	<?php echo $form->select('blockTypesExcluded[' . $entity->getAccessEntityID() . ']', array('N' => t('No Block Types'), 'C' => t('Custom')), $assignment->getBlockTypesAllowedPermission())?>
	<div class="inputs-list" <?php if ($assignment->getBlockTypesAllowedPermission() != 'C') {
    ?>style="display: none"<?php 
}
    ?>>
		<?php foreach ($blockTypes as $bt) {
    ?>
        <div class="checkbox"><label><input type="checkbox" name="btIDExclude[<?php echo $entity->getAccessEntityID()?>][]" value="<?php echo $bt->getBlockTypeID()?>" <?php if (in_array($bt->getBlockTypeID(), $assignment->getBlockTypesAllowedArray())) {
    ?> checked="checked" <?php 
}
    ?> /> <span><?php echo t($bt->getBlockTypeName())?></span></label></div>
		<?php 
}
    ?>
	</div>
</div>



<?php 
}
}
    ?>

<?php 
} else {
    ?>
	<p><?php echo t('No users or groups selected.')?></p>
<?php 
} ?>

<script type="text/javascript">
$(function() {
	$("#ccm-tab-content-custom-options select").change(function() {
		if ($(this).val() == 'C') {
			$(this).parent().find('div.inputs-list').show();
		} else {
			$(this).parent().find('div.inputs-list').hide();
		}
	});
});
</script>