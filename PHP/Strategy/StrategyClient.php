<?php
 /**
 * filename.php
 * 
 * Description of class
 * @author Indika Piyasena <indika@webmolecule.co.za>
 * @version 1.0
 */

require_once 'Ducks/RubberDuck.php';
require_once 'Behaviours/FlyWithRocket.php';
 
class StrategyClient {

	public function Run()
	{
		$rubberDuck = new RubberDuck();
	    $flyWithRocket = new FlyWithRocket();
	    $rubberDuck->setFlyBehaviour($flyWithRocket);
	    $rubberDuck->performFly();
	}
}
