<?php
 /**
 * RubberDuck.php
 * 
 * A implementation of Duck
 * @author Indika Piyasena <indika@webmolecule.co.za>
 * @version 1.0
 */

require_once 'Duck.php';
 
class RubberDuck extends Duck {

	/**
     * Constructor
     */
    public function __construct()
    {
	    print "RubberDuck: constructing\n";
    }

}
