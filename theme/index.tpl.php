<!doctype html>
<html lang='<?=$lang?>'>
	<head>
		<meta charset='utf-8'/>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?=get_title($title)?></title>
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
		<?php foreach($stylesheets as $val): ?>
		<link rel='stylesheet' type='text/css' href='<?=$val?>'/>
		<?php endforeach; ?>
		<link rel='shortcut icon' href='favicon.ico'/>
		<script src='<?=$modernizr?>'></script>
	</head>
	<body>
		<?php if (isset($top)) { echo $top; } ?>
		<div id='wrapper'>
			<div id='header'><?=$header?></div>
			<?= CNavigation::GenerateMenu($menu, "navbar"); ?> 
			<div id='main'><?=$main?></div>
			<div id='footer'><?=$footer?></div>
		</div>
		<?php 
			if(isset($jquery)):
		?>
			<script src='<?=$jquery?>'></script>
		<?php endif; ?>
		<?php 
			if(isset($javascript_include)):
				foreach($javascript_include as $val): ?>
				<script src='<?=$val?>'></script>
			<?php 
				endforeach; 
			endif; 
		?>
		<?php if (isset($javascript_include['jquery'])): ?>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<?php 
			endif;
			if(isset($google_tag_manager)): ?>
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=<?=$google_tag_manager?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>
			(function(w,d,s,l,i){w[l]=w[l]||[];
				w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
				var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
				j.async=true;
				j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-KPSQSH');
		</script>
		<?php 
			endif; 
			if(isset($google_analytics)): 
		?>		
		<script>
			var _gaq=[['_setAccount','<?=$google_analytics?>'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
		<?php 
			endif; 
		?>
	</body>
</html>