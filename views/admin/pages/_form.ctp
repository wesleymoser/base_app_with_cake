<?php
	echo $form->input("id");
	echo $form->input("name", array("class" => "{required:true}"));
	echo $fck->input("body");
	echo $form->input("parent_id", array("type" => "hidden", "value" => 0));
?>