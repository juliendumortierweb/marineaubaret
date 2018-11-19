<?php

class Model {

	public function hydrate ($donnees)
	{
		foreach ($donnees as $key => $value)
		{
			$method ='set'.ucfirst($key);
			if(method_exists($this, $method))
			{
				$this -> $method($value);
			}
		}
	}
}