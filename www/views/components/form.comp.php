
<?php 
	$data = ($form->getMethod()=="_POST")?$_POST:$_GET; 
	$form->setData($data);
?>

	<form>
	<?php $form->make() ?>
	</form>

	<!-- TODO: Figure out how to reset -->
	<?php if( !empty($form["config"]["reset"])):?>
		<input type="reset" class="btn btn-danger btn-block" value="<?php echo $form["config"]["reset"];?>">
	<?php endif;?>
