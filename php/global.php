<?php

interface exportable
{
	function export();
}

function quick_nav()
{
	$nav = new navigation();
	$nav->add_nav_item("Dashboard","gauge","/index.php");
	$nav->add_nav_item("Assets","camera","/assets.php");
	$nav->add_nav_item("Activity","clock","#");
	$nav->add_nav_item("Events","calendar","#");
	$nav->add_nav_item("Finances","chart-area","#");
	$nav->add_nav_item("Hiring","user-add","#");
	$nav->export();
}

class page_header implements exportable
{
	private $sub_title = "";
	private $item_link = array();
	private $item_count = 0;
	
	function __construct($subtitle)
	{
		$this->sub_title = $subtitle;
	}
	
	function add_stylesheet($link)
	{
		$this->item_count++;
		array_push($this->item_link, $link);
		return $this->item_count - 1;
	}
	
	function export()
	{
		echo "<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n";
		echo "<meta charset=\"utf-8\">\r\n";
		echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n";
		echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n";
		echo "<meta name=\"description\" content=\"TF Visuals - Admin panel\">\r\n";
		echo "<meta name=\"keywords\" content=\"TF Visuals, Video, Lighting, EDM\">\r\n";
		echo "<title>TF Visuals | " . $this->sub_title . "</title>\r\n";
		echo "<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.ico\" />\r\n";
		
		for ($i = 0; $i < $this->item_count; $i++)
		{
			echo "<link href=\"" . $this->item_link[$i] . "\" rel=\"stylesheet\" />\r\n";
		}
		
		echo "</head>\r\n<body>\r\n";
	}
	
	function export_footer()
	{
		echo "<footer class=\"footer-main\">\r\n"; 
		echo "&copy; 2017 <strong>TF Visuals</strong> -Asset Management-\r\n";
		echo "</footer>\r\n";
	}
	
	function export_end()
	{
		echo "</body>\r\n</html>\r\n";
	}
}

class navigation implements exportable
{
	private $nav_item_name = array();
	private $nav_item_link = array();
	private $nav_item_icon = array();
	private $nav_item_count = 0;
	
	function add_nav_item($name, $icon, $link)
	{
		$this->nav_item_count++;
		array_push($this->nav_item_name, $name);
		array_push($this->nav_item_icon, $icon);
		array_push($this->nav_item_link, $link);
		return $this->nav_item_count - 1;
	}
	
	function export()
	{
		$out = "<ul id=\"side-nav\" class=\"main-menu navbar-collapse collapse\">\r\n";
		
		for ($i = 0; $i < $this->nav_item_count; $i++)
		{
			$set_active = "";
			
			if ($_SERVER["PHP_SELF"] == $this->nav_item_link[$i])
			{
				$set_active = " class=\"active\"";
			}
		
			$out .= "<li" . $set_active . "><a href=\"" . $this->nav_item_link[$i] . "\">";
			$out .= "<i class=\"icon-" . $this->nav_item_icon[$i] . "\"></i>";
			$out .= "<span class=\"title\">" . $this->nav_item_name[$i] . "</span></a></li>\r\n";
		}
		
		$out .= "</ul>\r\n";
		echo $out;
	}
}

class message_list implements exportable
{
	private $item_name = array();
	private $item_image = array();
	private $item_content = array();
	private $item_datetime = array();
	private $item_count = 0;
	
	function add_message($name, $image, $content, $datetime)
	{
		$this->item_count++;
		array_push($this->item_name, $name);
		array_push($this->item_image, $image);
		array_push($this->item_content, $content);
		array_push($this->item_datetime, $datetime);
		return $this->item_count - 1;
	}
	
	function export()
	{
		$out = "<li class=\"notifications dropdown\">\r\n";
		$out .= "<a data-close-others=\"true\" data-hover=\"dropdown\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">";
		$out .= "<i class=\"icon-mail\"></i><span class=\"badge badge-secondary\">" . $this->item_count . "</span></a>\r\n";
		$out .= "<ul class=\"dropdown-menu pull-right\">\r\n<li class=\"first\">\r\n";
		$out .= "<div class=\"dropdown-content-header\"><i class=\"fa fa-pencil-square-o pull-right\"></i> Messages</div>\r\n";
		$out .= "</li>\r\n<li>\r\n<ul class=\"media-list\">\r\n";
		
		for ($i = 0; $i < $this->item_count; $i++)
		{
			
			$out .= "<li class=\"media\">\r\n";
			$out .= "<div class=\"media-left\"><img alt=\"\" class=\"img-circle img-sm\" src=\"" . $this->item_image[$i] . "\"></div>\r\n";
			$out .= "<div class=\"media-body\">\r\n";
			$out .= "<a class=\"media-heading\" href=\"#\">\r\n";
			$out .= "<span class=\"text-semibold\">" . $this->item_name[$i] . "</span>\r\n";
			$out .= "<span class=\"media-annotation pull-right\">" . $this->item_datetime[$i] . "</span>\r\n";
			$out .= "</a>\r\n";
			$out .= "<span class=\"text-muted\">" . $this->item_content[$i] . "</span>\r\n";
			$out .= "</div>\r\n</li>\r\n";
		}
		
		$out .= "</ul>\r\n</li><li class=\"external-last\"><a class=\"danger\" href=\"#\">All Messages</a></li></ul></li>\r\n";
		echo $out;
	}
}

class typical_dropdown implements exportable
{
	private $item_link = array("#","#","#");
	private $item_icon = array("arrows-ccw","list","chart-pie");
	private $item_label = array("Update data","Detailed log","Statistics");
	private $item_count = 3;
	
	private $item_divider = array();
	private $item_divider_count = 0;
	
	function clear()
	{
		unset($this->item_link);
		unset($this->item_icon);
		unset($this->item_label);
		$this->item_link = array();
		$this->item_icon = array();
		$this->item_label = array();
		$this->item_count = 0;
	}
	
	function add_item($link, $icon, $label)
	{
		$this->item_count++;
		array_push($this->item_link, $link);
		array_push($this->item_icon, $icon);
		array_push($this->item_label, $label);
		return $this->item_count - 1;
	}
	
	function add_divider()
	{
		$this->item_divider_count++;
		array_push($this->item_divider, $this->item_count);
		return $this->item_count;
	}
	
	private function ex_dropdown()
	{
		$out = "<ul class=\"dropdown-menu dropdown-menu-right\">\r\n";
		
		for ($i = 0; $i < $this->item_count; $i++)
		{
			for ($u = 0; $u < $this->item_divider_count; $u++)
			{
				if ($i == $this->item_divider[$u])
				{
					$out .= "<li class=\"divider\"></li>\r\n";
				}
			}
			
			$out .= "<li><a href=\"" . $this->item_link[$i] . "\"><i class=\"icon-" . $this->item_icon[$i] . "\"></i> " . $this->item_label[$i] . "</a></li>\r\n";
		}
		
		$out .= "</ul>\r\n";
		return $out;
	}
	
	function export()
	{
		$out = $this->ex_dropdown();
		echo $out;
	}
	
	function export_gear()
	{
		$out = "<li class=\"dropdown\">\r\n";
		$out .= "<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\" aria-expanded=\"false\"><i class=\"icon-cog icon-2x\"></i></a>\r\n";
		$out .= $this->ex_dropdown();
		$out .= "</li>\r\n";
		echo $out;
	}
}

?>