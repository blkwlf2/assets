<?php

interface exportable
{
	function export();
}

class pie_graph_data implements exportable
{
	private $name = "pieChartData";
	private $item_value = array();
	private $item_color = array();
	private $item_highlight = array();
	private $item_label = array();
	private $item_count = 0;
	
	function __construct($pie_data_name)
	{
		$this->name = $pie_data_name;
	}
	
	function add_item($value, $color, $highlight, $label)
	{
		$this->item_count++;
		array_push($this->item_value, $value);
		array_push($this->item_color, $color);
		array_push($this->item_highlight, $highlight);
		array_push($this->item_label, $label);
		return $this->item_count - 1;
	}
	
	function export()
	{
		$out = "//Pie graph\r\n";
		$out .= "var " . $this->name . " = [\r\n";
		
		for ($i = 0; $i < $this->item_count; $i++)
		{
			$out .= "{\r\n";
			$out .= "value: " . $this->item_value[$i] . ",\r\n";
			$out .= "color: \"" . $this->item_color[$i] . "\",\r\n";
			$out .= "highlight: \"" . $this->item_highlight[$i] . "\",\r\n";
			$out .= "label: \"" . $this->item_label[$i] . "\"\r\n";
			
			if ($i == $this->item_count-1)
				$out .= "}\r\n";
			else
				$out .= "},\r\n";
		}
		
		$out .= "];\r\n";
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

?>