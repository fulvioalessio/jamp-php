<?php
/**
* Object HEADER
* @author	Alyx Association <info@alyx.it>
* @version	2.0.2
* @package	Object
* @copyright	Alyx Association 2008-2010
* @license GNU Public License
* You can find documentation and sourcecode on the JAMP official website
* http://jamp.alyx.it/
*/

class ClsObj_header extends ClsObject {
	/**
	* @var $container Array contenente gli oggetti gestiti
	*/
	var $child = array();

	/**
	* Construct
	* @param string $id ID object
	*/
	public function __construct($id)
	{
		unset($this->property);
		$this->property["id"] 	 = array("value" => $id,  "inherit" => false, "html" => true);
		$this->property["class"]	= array("value" => null, "inherit" => false, "html" => true);
		$this->property["value"] = array("value" => null, "inherit" => false, "html" => false);
	}

	/**
	* Generate the code pdf
	* @param string $pdf Class PDF
	*/
	public function codePDF($pdf)
	{
	}

	/**
	* Generate the code text
	*/
	public function codeTXT()
	{
	}

	/**
	* Generate the header (pdf)
	* @param string $pdf Class PDF
	*/
	public function headerPDF($pdf)
	{
		foreach ($this->child as $obj) $obj->codePDF($pdf);
	}

	/**
	* Generate the code html
	* @param string $tab Tabs
	*/
	public function codeHTML($tab = "")
	{
		$code = "\n$tab<header ".$this->getProperty("html", true, false).">";
		if (!empty($this->property["value"]["value"])) $code .= "\n\t".$tab.$this->property["value"]["value"];
		foreach ($this->child as $obj) $code .= $obj->codeHTML($tab."\t");
		$code .= "\n$tab</header>";
		return $code;
	}

	/**
	* The function is called after each setting of a property
	* @param string $name Name property
	*/
	protected function setPropertyAfter($name)
	{
	}
}
?>