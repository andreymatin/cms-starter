<?php  defined('C5_EXECUTE') or die(_("Access Denied."));

$navItems = $controller->getNavItems();


/*** STEP 1 of 2: Determine all CSS classes (only 2 are enabled by default, but you can un-comment other ones or add your own) ***/
foreach ($navItems as $ni) {
	$classes = array();

	if ($ni->isCurrent) {
		//class for the page currently being viewed
		$classes[] = 'active';
	}

	if ($ni->hasSubmenu) {
		//class for items that have dropdown sub-menus
		$classes[] = 'has-flyout';
	}
	
	//Put all classes together into one space-separated string
	$ni->classes = implode(" ", $classes);
}


//*** Step 2 of 2: Output menu HTML ***/

foreach ($navItems as $ni) {

	echo '<li class="' . $ni->classes . '">'; //opens a nav item

	if ($ni->hasSubmenu) {
		echo '<a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a><a href="' . $ni->url . '" class="flyout-toggle"><span> </span></a>';
	} else {
		echo '<a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a>';
	}

	if ($ni->hasSubmenu) {
		echo '<ul class="flyout">'; //opens a dropdown sub-menu
	} else {
		echo '</li>'; //closes a nav item
		echo str_repeat('</ul></li>', $ni->subDepth); //closes dropdown sub-menu(s) and their top-level nav item(s)
	}
}