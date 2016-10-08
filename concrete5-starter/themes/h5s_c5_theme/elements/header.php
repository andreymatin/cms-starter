<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!doctype html>
<html lang="<?php echo LANGUAGE?>">
<head>
<?php  Loader::element('header_required'); ?>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->getThemePath(); ?>/favicon.ico">
  
<!-- Main CSS -->
	<link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/custom.css">
	
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
<!-- HTML5 shiv for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<?php
$th = Loader::helper('text');
$page = $th->sanitizeFileSystem($c->getCollectionName(), $leaveSlashes=false);
$pagetype = ($pth = $c->getCollectionTypeHandle()) ? $pth : 'view';
?>
<body class="<?php echo $page; ?> <?php echo $pagetype; ?>">
 
<!-- Header Section -->
	<header>
	
<!-- Top Menu -->
		<nav class="top-menu">
			<ul>
				<?php
					$bt = BlockType::getByHandle('autonav');
					$bt->controller->displayPages = 'top';
					$bt->controller->orderBy = 'display_asc';
					$bt->render('templates/main-menu');
				?>
			</ul>
		</nav>
    
<!-- Logo -->
		<h1 class="logo"><a accesskey="1" href="<?php echo DIR_REL?>/"><?php echo SITE?></a></h1>
	</header>