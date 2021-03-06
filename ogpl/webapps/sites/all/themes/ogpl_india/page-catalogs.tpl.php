<?php
	global $base_url;
	    global $theme_key;
    $themes = list_themes();
    $theme_object = $themes[$theme_key];
 	$theme_name=$theme_object->name;
  
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php global $base_url;?>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<link href="<?php echo $base_url."/".path_to_theme();?>/high.css" rel="alternate stylesheet" type="text/css" media="screen" title="change" />
<?php 
//drupal_add_css($path = NULL, $type = 'theme', $media = 'all', $preprocess = TRUE);
//drupal_add_css(drupal_get_path('theme', 'nic') . 'small.css'); 
?>
<?php print $scripts; ?>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
</head>

<body class="innerPages">
	<span>
		<a class="skipnav" href="#mainNav">Skip to navigation</a>
		<a class="skipnav" href="#mainContent">Skip to main content</a>
	</span>
	<!--top panel start here -->
	<div id="topPanel">
		<div class="mid">
			<!--goi-->
			 <div style="float: left; width: auto;">
              <?php print $header_flag; ?>
			  </div>
            <!--goi -->
				
			<!--accessibility panel start here -->
			<div class="accessPan">
				<ul>
					<!--flags options -->
					<li>OTHER COUNTRY SITES</li>
                    <li class="flags">
						<?php print $header_flags; ?>
                    </li>
                    <!--flags options -->
					<li class="resize">
						<?php print $text_resize; ?>
					</li>
					<!--text resizing option -->
						
					<!--color contrast options -->
					<li class="contrast">
						<a href="javascript:void(0);" class="dark" onclick="chooseStyle('change', 60);"><img src="<?php echo $base_url."/".path_to_theme();?>/images/texthighContrast.gif" alt="High Contrast View"/></a>
						<a href="javascript:void(0);" class="light" onclick="chooseStyle('none', 60);"><img src="<?php echo $base_url."/".path_to_theme();?>/images/textNormal.gif" alt="Standard Contrast View"/></a>
					</li>
					<!--color contrast options -->
					<li class="feedback"><a href="<?php echo $base_url;?>/feedback" title="Feedback">Feedback</a></li>
					<li><a href="<?php echo $base_url;?>/rssfeeds" title="RSS Feeds" class="rss">RSS Feeds</a></li>
					<li class="share">
                    <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style ">
                            <a class="addthis_button_compact add-this-link" href="http://www.addthis.com/bookmark.php" title="Bookmark and Share">Share+</a>
                        </div>
                    <!-- AddThis Button END -->
					</li>
					<li><a href="<?php echo $base_url;?>/sitemap" title="Sitemap" class="sitemap">Sitemap</a></li>
					<?php 
					global $user;
					if ($user->uid) {
					echo "<li><a href='$base_url/logout'>Log out</a></li>";
					}
					?>
				</ul>
			</div>
			<!--accessibility panel end here -->
		</div>
	</div>
	<!--top panel end here -->
	<!--logo panel start here -->
	<div id="logoPanel">
		<div class="mid">
			<div class="left">
				<!--logo start here -->
				<div class="logoPan">
					<h1>
					<div class="logo">
					<?php
					// Prepare header
					$site_fields = array();
					if ($site_name) {
						$site_fields[] = check_plain($site_name);
					}
					if ($site_slogan) {
						$site_fields[] = check_plain($site_slogan);
					}
					$site_title = implode(' ', $site_fields);
					if ($site_fields) {
						$site_fields[0] = '<span>'. $site_fields[0] .'</span>';
					}
					$site_html = implode(' ', $site_fields);
					
					if ($logo || $site_title) {
						print '<a href="'. check_url($front_page) .'" title="'. $site_title .'">';
					if ($logo) {
						print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo-image" />';
					}
					print '</a>';
					}
					?>
					</div>
					<!--logo end here -->
					
					</h1>
				</div>
				<!--logo start here -->
				
				<!--search form start here -->
				<div class="searchPan">
					<?php print $search_box; ?>
				</div>
				<!--search form end here -->
			</div>
		</div>
	</div>
	<!--logo panel end here -->
    <!--nav panel start here -->
	<div id="navPanel">
		<div class="mid">
			<?php print $banner_links;?>	
			<div class="spacer"></div>
		</div>
	</div>
	<!--nav panel end here -->    
	<!--body panel start here -->
	<div id="bodyPanel">
		<div id="outerContainer">
			<div class="mid">
				<?php if ($search_filter){ print'<div id="leftPanel"><div class="container">'.$search_filter.'</div></div>';}?>
				<!--content panel start here -->
				<div id="contentPanel">
					<div class="mainContent">
						<!--breadcrumb start here -->
						<?php print $breadcrumb ?>
						<!--<div class="breadcrumb">
							<ul>
								<li><a href="index.html" title="Home" class="home">Home</a></li>
								<li title="Link to Us">Open Data Sites</li>
							</ul>
						</div>-->
						<!--breadcrumb end here -->
						
						<!--page icons start here -->
						<!--<div class="pageIcons">
							<ul class="icons">
								<li><a href="#"><img src="<?php //echo $base_url."/".path_to_theme();?>/images/icon-printer.gif" alt="Print" title="Print" /></a></li>
								<li><a href="#"><img src="<?php //echo $base_url."/".path_to_theme();?>/images/icon-email.gif" alt="Email" title="Email" /></a></li>
								<li><a href="#"><img src="<?php //echo $base_url."/".path_to_theme();?>/images/icon-pdf.gif" alt="PDF" title="PDF" /></a></li>
							</ul>
							
						</div>-->
						<!--page icons end here -->
						
						<!--main heading start here -->
						<div class="mainHeading">
						<?php if ($title){ print '<h1'. ($tabs ? ' class="page-title"' : '') .'>'. $title .'</h1>';}?>
						</div>
						<!--main heading end here -->                    
						<div class="contentArea mainContainer">
							<div class="top">
								<div class="mid"></div>
							</div>
							
							<!--content -->
							<div class="bottom">							
							<?php print $content;?>
							</div>
							<!--content -->
							
							<!--bottom links start here -->
							<div class="contentArea bottomLink">
								<div class="mid"></div>
								<?php print $footer;?>
							</div>
							<!--bottom links end here -->
						</div>
						
						
					</div>
				</div>
				<!--content panel end here -->
			</div>
		</div>

		<!--footer start here -->
		<div id="footer">
			<div class="left">
					<?php print $footer_links;?>
				<p>Copyright &copy; 2011-2012 <a href="#">Government of India</a></p>
			</div>
			<a title="OPEN.GOV.CC" class="logo">OPEN.GOV.CC</a>
		</div>
		<!--footer end here -->
	</div>
	<!--body panel end here -->
</body>
<?php
print $closure;
?>
</html>