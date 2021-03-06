<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
											"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>.:: <?php echo Configure::read('Project.name') ?> ::.</title>

	<?php
		echo $html->charset();
		echo $html->meta("icon");

		echo $html->css(array("default"));
	
		echo $javascript->link(array(
			"jquery",
			"plugins/jquery-ui",
			"default"
		));
		echo $javascript->codeBlock("var webroot = '" . $html->webroot("/") . "';");

		echo $scripts_for_layout;
	?>
</head>
<body>

<?php echo $this->element("../layouts/_menu"); ?>

<div id="content">
	<?php $session->flash(); ?>
	<?php echo $content_for_layout; ?>
</div>

<div id="footer">Created by <?php echo $html->link(Configure::read('Project.name'), Configure::read('Project.url'), array("target" => "_blank")) ?></div>

</body>
</html>
