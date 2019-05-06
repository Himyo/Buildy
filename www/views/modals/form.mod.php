
<?php 
	$data = ($form->getMethod()=="POST")?$_POST:$_GET;
	echo $form->getForm()->getMethod();
	$form->setData($data);
?>

	<?php $form->make() ?>

	<!-- TODO: Figure out how to reset -->
	<!-- ?php //if( !empty($form["config"]["reset"])):?> -->
		<!-- <input type="reset" class="btn btn-danger btn-block" value="<?php echo $form["config"]["reset"];?>"> -->
	<!-- ?php //endif;?> -->
