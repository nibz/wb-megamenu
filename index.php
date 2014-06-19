<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php if(defined('DEFAULT_CHARSET')) { echo DEFAULT_CHARSET; } else { echo 'utf-8'; }?>" /> 

<title><?php page_title(' - ' , '[PAGE_TITLE] [SPACER] [WEBSITE_TITLE]'); ?></title>

<meta name="description" content="<?php page_description(); ?>" />
<meta name="keywords" content="<?php page_keywords(); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="<?php echo TEMPLATE_DIR; ?>/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo TEMPLATE_DIR; ?>/css/dcmegamenu.css" rel="stylesheet" type="text/css" />
<?php if(function_exists('register_frontend_modfiles')) {register_frontend_modfiles('css'); } ?>

<!-- Skins, you dont have to load them all -->
<link href="<?php echo TEMPLATE_DIR; ?>/css/skins/basic.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_DIR; ?>/css/skins/black.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_DIR; ?>/css/skins/gray.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_DIR; ?>/css/skins/blue.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_DIR; ?>/css/skins/green.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_DIR; ?>/css/skins/light_blue.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_DIR; ?>/css/skins/orange.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_DIR; ?>/css/skins/red.css" rel="stylesheet" type="text/css" />
<link href="<?php echo TEMPLATE_DIR; ?>/css/skins/white.css" rel="stylesheet" type="text/css" />

<!-- including jquery HAS TO BE FIRST -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>

<!-- including scripts-->
<script src="<?php echo TEMPLATE_DIR; ?>/js/jquery.dcmegamenu.1.3.4.min.js"></script>
<script src="<?php echo TEMPLATE_DIR; ?>/js/jquery.hoverIntent.minified.js"></script>
<?php if(function_exists('register_frontend_modfiles')) {register_frontend_modfiles('js');} ?>

<script type="text/javascript">
$(document).ready(function($){
    $('.basic ul.mega-menu').dcMegaMenu();
    $('.black ul.mega-menu').dcMegaMenu();
    $('.gray ul.mega-menu').dcMegaMenu();
    $('.blue ul.mega-menu').dcMegaMenu();
    $('.orange ul.mega-menu').dcMegaMenu();
    $('.red ul.mega-menu').dcMegaMenu();
    $('.green ul.mega-menu').dcMegaMenu();
    $('.light-blue ul.mega-menu').dcMegaMenu();
    $('.white ul.mega-menu').dcMegaMenu();

	//build dropdow
	var menu = '.basic ul.mega-menu, .black ul.mega-menu, .gray ul.mega-menu, .blue ul.mega-menu, .orange ul.mega-menu, .red ul.mega-menu, .green ul.mega-menu, .light-blue ul.mega-menu, .white ul.mega-menu';
	var menu_href = '.basic ul.mega-menu li a'
	var menu_select = '.basic ul.mega-menu select, .black ul.mega-menu select, .gray ul.mega-menu select, .blue ul.mega-menu select, .orange ul.mega-menu select, .red ul.mega-menu select, .red ul.mega-menu select, .green ul.mega-menu select, .light-blue ul.mega-menu select, .white ul.mega-menu select';
	$("<select />").appendTo(menu);
	
	// Create default option "Go to..."
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "Please choose page"
	}).appendTo(menu_select);	
	
	// Populate dropdowns with the first menu items
	$(menu_href).each(function() {
	 	var el = $(this);
	 	$("<option />", {
	     	"value"   : el.attr("href"),
	    	"text"    : el.text()
	 	}).appendTo(menu_select);
	});
	
	//make responsive dropdown menu actually work			
  	$(menu_select).change(function() {
    	window.location = $(this).find("option:selected").val();
  	});	
  	$(".mega-menu select").each(function(){
	  $(this).wrap('<div class="selectwrap"><div class="selectbox"/>');
		$(this).after("<span class='selecttext'></span><span class='select-arrow'></span>");
		var val = $(this).children("option:selected").text();
		$(this).next(".selecttext").text(val);
		$(this).change(function(){
			var val = $(this).children("option:selected").text();
			$(this).next(".selecttext").text(val);
		});
	});					
});
</script>
</head>
<body>
<div id="wrapper">
	<div id="back">
		<a href="http://nibz.nl/template/mega-menu/" class="back-button">&#60; Back to my site - Mega Menu info</a>
	</div>
	<br>
	<b>Basic: (minimal styling)<b><br>
	<div class="basic">
     	<?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL|SM2_NUMCLASS|SM2_PRETTY, '<li id="p[page_id]"><a href="[url]" class="[class]">[if(level=4){<span>- </span>}][if(level=5){<span>-- </span>}][menu_title]</a>', '</li>', '[ul]', '</ul>', false, '<ul class="mega-menu">');?>
	</div>
     <br>
     <b>Black:<b><br>
     <div class="black">
     	<?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL|SM2_NUMCLASS|SM2_PRETTY, '<li id="p[page_id]"><a href="[url]" class="[class]">[if(level=4){<span>- </span>}][if(level=5){<span>-- </span>}][menu_title]</a>', '</li>', '[ul]', '</ul>', false, '<ul class="mega-menu">');?>
     </div>
     <br>
     <b>Gray:<b><br>
     <div class="gray">
     	<?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL|SM2_NUMCLASS|SM2_PRETTY, '<li id="p[page_id]"><a href="[url]" class="[class]">[if(level=4){<span>- </span>}][if(level=5){<span>-- </span>}][menu_title]</a>', '</li>', '[ul]', '</ul>', false, '<ul class="mega-menu">');?>
     </div>
     <br>
     <b>Blue:<b><br>
     <div class="blue">
     	<?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL|SM2_NUMCLASS|SM2_PRETTY, '<li id="p[page_id]"><a href="[url]" class="[class]">[if(level=4){<span>- </span>}][if(level=5){<span>-- </span>}][menu_title]</a>', '</li>', '[ul]', '</ul>', false, '<ul class="mega-menu">');?>
     </div>
     <br>
     <b>Orange:<b><br>
     <div class="orange">
     	<?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL|SM2_NUMCLASS|SM2_PRETTY, '<li id="p[page_id]"><a href="[url]" class="[class]">[if(level=4){<span>- </span>}][if(level=5){<span>-- </span>}][menu_title]</a>', '</li>', '[ul]', '</ul>', false, '<ul class="mega-menu">');?>
     </div>
     <br>
     <b>Red:<b><br>
     <div class="red">
     	<?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL|SM2_NUMCLASS|SM2_PRETTY, '<li id="p[page_id]"><a href="[url]" class="[class]">[if(level=4){<span>- </span>}][if(level=5){<span>-- </span>}][menu_title]</a>', '</li>', '[ul]', '</ul>', false, '<ul class="mega-menu">');?>
     </div>
     <br>
     <b>Green:<b><br>
     <div class="green">
     	<?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL|SM2_NUMCLASS|SM2_PRETTY, '<li id="p[page_id]"><a href="[url]" class="[class]">[if(level=4){<span>- </span>}][if(level=5){<span>-- </span>}][menu_title]</a>', '</li>', '[ul]', '</ul>', false, '<ul class="mega-menu">');?>
     </div>
     <br>
     <b>Light-blue:<b><br>
     <div class="light-blue">
     	<?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL|SM2_NUMCLASS|SM2_PRETTY, '<li id="p[page_id]"><a href="[url]" class="[class]">[if(level=4){<span>- </span>}][if(level=5){<span>-- </span>}][menu_title]</a>', '</li>', '[ul]', '</ul>', false, '<ul class="mega-menu">');?>
     </div>
     <br>
     <b>White:<b><br>
     <div class="white">
     	<?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL|SM2_NUMCLASS|SM2_PRETTY, '<li id="p[page_id]"><a href="[url]" class="[class]">[if(level=4){<span>- </span>}][if(level=5){<span>-- </span>}][menu_title]</a>', '</li>', '[ul]', '</ul>', false, '<ul class="mega-menu">');?>
     </div>
     <br>
     <div id="content">
     	<h1><?php echo PAGE_TITLE; ?> - Demo no actual content!</h1>
	    <?php page_content(1); ?>
     </div>
     <br>
     <div id="back">
		 <a href="http://nibz.nl/template/mega-menu/" class="back-button">&#60; Back to my site - Mega Menu info</a>
	 </div>
</div>

</body>
</html>