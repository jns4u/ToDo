<?php 
class example{
	public $vartest = "example property\n";

	public function __toString(){
		echo "echoing out variable.\n";
		return $this->getProperty();
	}

	public function __construct(){
		echo "class is ".__CLASS__." for instantiating constructor.";
	}

	public function __destruct(){
		echo "class is ".__CLASS__." while garbage collection.";
	}
	
	public function getProperty(){
		return $this->vartest;
	}

	public function setProperty($setvar){
		$this->vartest = $setvar;
	}
}

class NewExample extends example{
	public $newVar = "this is new variable from class ".__CLASS__."\n";

	public function __construct(){		
		echo "class is ".__CLASS__." for instantiating constructor.";
	}

	public function __destruct(){
		echo "class is ".__CLASS__." while garbage collection.";
	}

	public function getNewProperty(){
		echo $this->newVar;
	}
}

$obj = new NewExample;
echo $obj->getNewProperty();
echo $obj->getProperty();
//echo $obj;						// call to __toString()

/**
echo $obj->getProperty();
$obj->setProperty("latest property value\n");
echo $obj->getProperty();
unset($obj);
echo "\nEOF\n";
**/
?>
