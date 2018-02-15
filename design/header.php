<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo ("Pathfinder | " . $page_title); ?></title>

	<link href="http://www.willamette.edu/~awebster/pf/design/style.css" rel="stylesheet" type="text/css" />
	<link href="http://www.willamette.edu/~awebster/pf/design/print.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="https://www.google.com/jsapi"></script>

	<?php if ($current_page == "Miran")
		{ echo '<script type="text/javascript" src="http://www.willamette.edu/~awebster/pf/miran/spellbook.js"></script>';} ?>
	<?php if ($current_page == "Titiana")
		{ echo '<script type="text/javascript" src="http://www.willamette.edu/~awebster/pf/titiana/spellbook.js"></script>';} ?>
	<?php if ($current_page == "Felurian")
		{ echo '<script type="text/javascript" src="http://www.willamette.edu/~awebster/pf/felurian/spellbook.js"></script>';} ?>
	<?php if ($current_page == "Loot")
		{ echo '<script type="text/javascript" src="http://www.willamette.edu/~awebster/pf/loot/loot.js"></script>';} ?>
	<?php if ($current_page == "Spellbook")
		{ echo '<script type="text/javascript" src="http://www.willamette.edu/~awebster/pf/design/spellbook.js"></script>';} ?>

</head>

<body>

<div id="nav">
	<ul>
		<li><a <?php if ($current_page == "Summary") { ?>class="selected"<?php } ?> href="http://www.willamette.edu/~awebster/pf/" title="Adventure Summary">Summary</a></li> |
		<li><a <?php if ($current_page == "Form") { ?>class="selected"<?php } ?> href="http://www.willamette.edu/~awebster/pf/spellbook.php" title="Add to Spellbook">Add to Spellbook</a></li> |
		<li><a <?php if ($current_page == "Felurian") { ?>class="selected"<?php } ?>href="http://www.willamette.edu/~awebster/pf/felurian/" title="Felurian's Spellbook">Felurian</a></li> |
		<li><a <?php if ($current_page == "Miran") { ?>class="selected"<?php } ?> href="http://www.willamette.edu/~awebster/pf/miran/" title="Miran's Spellbook">Miran</a></li> |
		<li><a <?php if ($current_page == "Titiana") { ?>class="selected"<?php } ?> href="http://www.willamette.edu/~awebster/pf/titiana/" title="Titiana's Spellbook">Titiana</a></li> |
		<li><a <?php if ($current_page == "Spellbook") { ?>class="selected"<?php } ?>href="http://www.willamette.edu/~awebster/pf/group.php" title="Group's Complete Spellbook">Group Spellbook</a></li> |
		<li><a <?php if ($current_page == "Loot") { ?>class="selected"<?php } ?>href="http://www.willamette.edu/~awebster/pf/loot/" title="Group Loot Bag">Group Loot</a></li> |
		<li><a href="http://www.d20pfsrd.com/" title="Pathfinder Source Material" target=_blank>PF SRD</a></li>
	</ul>
</div>

<div id="wrapper">
<a id="top"></a>

	<h1><?php echo $page_title ?></h1>

<?php

	if ($current_page == "Miran" OR $current_page == "Titiana" OR $current_page == "Felurian" OR $current_page == "Spellbook")
		{ echo '<div class="anchors"><p>
				<a href="#' . $current_page . '_NA">Class Abilities</a> |
				<a href="#' . $current_page . '_0">Level 0</a> |
				<a href="#' . $current_page . '_1">Level 1</a> |
				<a href="#' . $current_page . '_2">Level 2</a> |
				<a href="#' . $current_page . '_3">Level 3</a> |
				<a href="#' . $current_page . '_4">Level 4</a> |
				<a href="#' . $current_page . '_5">Level 5</a> |
				<a href="#' . $current_page . '_6">Level 6</a> |
				<a href="#' . $current_page . '_7">Level 7</a> |
				<a href="#' . $current_page . '_8">Level 8</a> |
				<a href="#' . $current_page . '_9">Level 9</a>
			</p></div>'
		;}
	else { echo '&nbsp;' ;}

?>

<div class="content">