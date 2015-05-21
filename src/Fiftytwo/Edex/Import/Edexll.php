<?php namespace Fiftytwo\Edex\Import;

class Edexll extends Import
{
	/**
	 * The different length for each field
	 *
	 * @var array
	 */
	protected $lengths = [40,10,20,8,1,1,5,5,9,9,4,6,8,8,2,4,5];

	/**
	 * The different field names
	 *
	 * @var array
	 */
	protected $fields = ['achternaam','tussenvoegsel','voornaam','geboortedatum','geslacht','etniciteit','leerlingkey','groepskey','schooljaar','sofinummer','leerlinggewicht','postcodeNL_woonadres','instroomdatum','uitstroomdatum','land_van_herkomst','brincode_school','dependancecode_school'];
}