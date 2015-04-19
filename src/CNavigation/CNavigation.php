<?php 
	class CNavigation {
		public static function GenerateMenu($menu, $class) {
			$func = null; 
	    if (isset($menu['callback'])) {
	      $func = $menu['callback']; 
	    }
	    $html = "<nav class='$class'>\n";
	    foreach($menu['items'] as $item) {
	    	if (isset($menu['callback']) && call_user_func($menu['callback'], $item['url'])) { 
	    		$item['class'] .= ' selected'; 
	    	}
			$html .= "<a href='{$item['url']}' class='{$item['class']}' title='{$item['title']}'>{$item['text']}</a>\n";
	    }
	    $html .= "</nav>\n";
	    return $html;
	  }
	};

/*	function modifyNavbar($items) {
		$ref = isset($_GET['p']) && isset($items[$_GET['p']]) ? $_GET['p'] : null;
		if($ref) {
			$items[$ref]['class'] .= 'selected'; 
		}
		return $items;
	}
*/