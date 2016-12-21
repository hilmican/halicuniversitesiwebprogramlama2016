<?php

class ders{

	private $saat="09:00";

	function yaz($metin)
	{
		echo $metin;
	}

	public function getDersSaat()
	{
		return $this->saat;
	}
}

?>