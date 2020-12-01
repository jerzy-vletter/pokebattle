<?php

class pokemon{
	
	
	public $Energytype;
	public $HP;
	public $Attacks;
	public $Weakness;
	public $Resistance;
	
	
	public function __construct($Name, $Energytype, $HP, $Attacks, $Weakness, $Resistance){
		$this->name = $Name;
		$this->Energytype = $Energytype;
		$this->HP = $HP;
		$this->Attacks = $Attacks;
		$this->Weakness = $Weakness;
		$this->Resistance = $Resistance;
		}
	
	public function __toString(){
		return json_encode($this);
		}
	
	}