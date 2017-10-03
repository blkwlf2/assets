<?php

interface exportable
{
	function export();
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

?>