<?php

class pokemon{
	
	public $Name;
	public $Energytype;
	public $HP;
	public $Attack1;
	public $Attack2;
	public $Weakness;
	public $Resistance;
	
	
	public function __construct($Name, $Energytype, $HP, $Attack1, $Attack2, $Weakness, $Resistance){
		$this->Name = $Name;
		$this->Energytype = $Energytype;
		$this->HP = $HP;
		$this->Attack1 = $Attack1;
		$this->Attack2 = $Attack2;
		$this->Weakness = $Weakness;
		$this->Resistance = $Resistance;
		}
		
		
		
		
	public function __toString(){
		return json_encode($this);
		}
	
	}
//reminder of all moves on the screen (will be deleted later)
if ($Name = 'Pika'){
	echo 'Moves for Pikachu'. '<br>';
}

if ($Attack1 = 'Electric Ring'){
	echo 'Electric Ring deals 50 damage'. '<br>';
}

if ($Attack2 = 'Pikapunch'){
	echo 'Pikapunch deals 20 damage'. '<br>'. '<br>';
}

if ($Name = 'charcoal'){
	echo 'Moves for Charmeleon'. '<br>';
}	

if ($attack1 = 'Head Butt'){
	echo 'Head Butt deals 10 damage'. '<br>';
}

if ($Attack2 = 'Flare'){
	echo 'Flare deals 30 damage'. '<br>'. '<br>';
}