<?php
/**
 * prjNull-v2 :: Release 01613139
 * ----------------------------------------
 * The beauty of null. Luv it <3.
 *
 * Developed by Merijn K
 * Contact: merijn795@gmail.com
 */
 
 namespace isNull;
 
 Trait iNullz {
	public static function traitNull()
	{
		try {
			/**
			 * Try to return null! If you can't return
			 * return null!!!!! LOL
			 */
			 
			 return 'null';
		} catch (Exception $e)  {
			return 'null';
		}
	}
	
 }
 
 class iNull {
	/**
	 * Represent the null of the future.
	 *
	 * @var $cleanNull
	 *
	 */
	 
	private $cleanNull = 'null';
 
	/**
	 * If a null won't be rly null,
	 * we must make it null.
	 *
	 * const E_IS_NOT_NULL
	 *
	 */
	 
	const E_IS_NOT_NULL = 0;
	
	/**
	 * This is to get JSON data
	 * and return it
	 * 
	 * @var $json
	 *
	 */
	 
	 private $json;
	
	
	public function dispatch() {
		/**
		 * Check if the null is really null
		 * and not defined as char
		 *
		 * @var $cleanNull
		 *
		 */
		 
		if ($this->cleanNull !== null || null === null) {
			$this->E_IS_NOT_NULL = 1;
		}
		
		if ($this->E_IS_NOT_NULL === 1) {
			$theNull = $this->getJSON("null.json");
			
			
			/**
			 * Got the JSON-encoded null.
			 * now, set it back to a null xD
			 */
			 
			 
			 $newNull = json_decode($theNull);
			 
			 if ($newNull !== null || $newNull !== 'null') {
				/**
				 * ARG!! It's not a real null, just a string :(.
				 * Let's store it in a session ;o
				 */
				 
				 $_SESSION['null'] = $newNull;
			 
			 }
			 
			 /**
			  * Loaded from a session. Now we gonna make it in an
			  * array.
			  */
			  
			$gayNull = function($fuckNull) {
				return $fuckNull;
			};
			
			if (is_string($gayNull($_SESSION['null']))) {
				/**
				 * Redefine the null and check if it is true in
				 * the Trait.
				 */
				 
				 $otherNull = $gayNull($_SESSION['null']);
				 
				 if ($otherNull == iNullz::traitNull()) {
					try {
						/**
						 * Try to create more nullz.
						 */
						 
						 $nullCombiner = true;
						 
						 (!($nullCombiner) ? $b = 'null' : $b = 'null');
					} catch (Exception $e) {
						return 'null';
					}
				 }
				 
				 if ($b === 'null' || null === null) {
					/**
					 * Check if we have a user session. So yes, we may do a for(); loop
					 * and then we will destroy the session.
					 */
					 
					 if(isset($_SESSION['null'])) {
						/**
						 * YEY! Let's do teh loop and kill teh session brah ;)
						 */
						 
					
						 for ($i = 0; $i <= 2000; ++$i) {
							echo '<marquee>', $b, '</marquee>';
						 }
						 
						 unset($_SESSION['null']);
					 }
				 }
			
			}
 		}
		
	}
	
	public function getJSON($data) {
		/**
		 * Get JSON-data and fetch it
		 */
		 
		 $this->json = new \stdClass();
		 $this->json = file_get_contents($data);
		 
		 return $this->json;
		 
	}
	
 }
 
 
 ?>