<?php namespace Fiftytwo\Edex\Import;

class Edexlk extends Import
{
	/**
	 * The different length for each field
	 *
	 * @var array
	 */
	protected $lengths = [40,10,20,5,4,5];

	/**
	 * The different field names
	 *
	 * @var array
	 */
	protected $fields = ['achternaam','tussenvoegsel','voornaam','leerkrachtkey','brincode_school','dependancecode_school'];
}