<?php

/**
 * FlyWithRocket.php
 *
 * Implements a strategy
 * @author Indika Piyasena
 * @version 1.0
 */

require_once 'IFlyBehaviour.php';

class FlyWithRocket implements IFlyBehaviour
{

	/**
	 * A way of flying
	 * @return void
	 */
	function fly()
	{
		Print "Flying with a rocket\n";
	}
}

?>