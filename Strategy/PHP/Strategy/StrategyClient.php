<?php
 /**
 * filename.php
 * 
 * Tests the Strategy pattern
 * @author Indika Piyasena
 * @version 1.0
 */

require_once 'Ducks/RubberDuck.php';
require_once 'Behaviours/FlyWithRocket.php';
 
class StrategyClient {

	public function Run()
	{
		$rubberDuck = new RubberDuck();
	    $flyWithRocket = new FlyWithRocket();

	    $success = $rubberDuck->setFlyBehaviour($flyWithRocket);
	    if (!$success)
	    {
		    throw new Exception("The provided strategy does not implement the interface");
	    }

	    $rubberDuck->performFly();
	}
}
