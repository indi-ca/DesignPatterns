<?php
 /**
 * Duck.php
 * 
 * An abstract Duck
 * This class can be seen as the context of the strategy
 * @author Indika Piyasena
 * @version 1.0
 */
 
abstract class Duck {

	protected $flyBehaviour;

	/**
	 * Set an flyBehaviour
	 * @param  $flyBehaviour IFlyBehaviour
	 * @return bool TRUE, if the provided parser implements IFlyBehaviour
	 */
	public function setFlyBehaviour($flyBehaviour)
	{
		if (is_a($flyBehaviour, 'IFlyBehaviour'))
		{
			$this->flyBehaviour = $flyBehaviour;
		    return TRUE;
		}
		else
		{
			//log_message('error', ': the provided flyBehaviour does not implement IFlyBehaviour');
		    return FALSE;
		}
	}

	public function performFly()
	{
		$this->flyBehaviour->fly();
	}


}
