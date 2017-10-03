<?php

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

?>