<ul id="menu">
	<?php foreach ($pages as $page) { ?>
	<li><?php echo $html->link($page['Page']['name'], array("controller" => "pages", "action"=>"show", $page['Page']['permalink'])); ?></li>
	<?php } ?>
</ul>