<?php
/**
 * Default Options for Subscribe2 Post
 * 
 * This class is using a Singleton Pattern to enable the use of a default option set, avoiding having to completely reset the plugin after adding some new settings. Thus, it's aimed at developers.
 * 
 * @author Fabian Wolf
 * @license GNU GPL v3
 */

class s2p_default_options {
	/**
	 * Plugin instance.
	 *
	 * @see get_instance()
	 * @type object
	 */
	//protected static $instance = NULL;

	public static function init() {
		global $s2p_default_options;
		
	
		if( !isset($s2p_default_options ) ){
			$s2p_default_options = new self();
		} 
		
		$s2p_default_options->load_options();
		
		
		
	}
	
	function __construct() {
		// nothing to do here .. yet
	}	
	
	
	protected function load_options() {
		include( S2PATH . 'include/options.php');
	}

	public function get_options() {
		
		
		return $this->subscribe2_options;
	}

}


s2p_default_options::init();

echo s2p_default_options::get_options();


