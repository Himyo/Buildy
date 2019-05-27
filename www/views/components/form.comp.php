<?php
	if(isset($_POST) || isset($_GET)) {
		$data = ($config->getForm()->getMethod() === "POST") ? $_POST : $_GET;
        $config->setData($data);
	}
    $config->make();
?>

