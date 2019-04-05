
<?php 
//TODO: Fix extract in view, should have variable $form
	$form = $this->data['form'];
	if(isset($_POST) || isset($_GET)) {
		$data = ($form->getForm()->getMethod()==="_POST")?$_POST:$_GET; 
		$form->setData($data);
		var_dump($data);
	}
?>

	<?php $form->make() ?>

	<!-- TODO: Figure out how to reset -->
	<!-- <?php //if( !empty($form["config"]["reset"])):?> -->
		<!-- <input type="reset" class="btn btn-danger btn-block" value="<?php echo $form["config"]["reset"];?>"> -->
	<!-- <?php //endif;?> -->
