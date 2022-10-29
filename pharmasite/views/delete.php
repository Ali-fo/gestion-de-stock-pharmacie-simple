<?php
	if (isset($_POST['id']))
	{
		$exitMedoc = new medoccontroller();
		$exitMedoc->deleteMedoc();
 	}
?>