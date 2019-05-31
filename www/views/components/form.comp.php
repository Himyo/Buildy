<?php
	if(isset($_POST) || isset($_GET)) {
		$data = ($form->getForm()->getMethod() === "POST") ? $_POST : $_GET;
        $form->setData($data);
	}
    $form->make();
?>

