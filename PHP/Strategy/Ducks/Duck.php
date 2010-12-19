<?php
 /**
 * Duck.php
 * 
 * An abstract Duck
 * @author Indika Piyasena <indika@webmolecule.co.za>
 * @version 1.0
 */
 
abstract class Duck {

	protected $flyBehaviour;

	public function setFlyBehaviour($flyBehaviour)
	{
		$this->flyBehaviour = $flyBehaviour;
	}

	public function performFly()
	{
		$this->flyBehaviour->fly();
	}


}
