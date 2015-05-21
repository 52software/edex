<?php namespace Fiftytwo\Edex\Import;

class Edexgr extends Import
{
	/**
	 * The different length for each field
	 *
	 * @var array
	 */
	protected $lengths = [30,1,5,9,4,5];

	/**
	 * The different field names
	 *
	 * @var array
	 */
	protected $fields = ['groepsnaam','jaargroep','groepkey','schooljaar','brincode_school','dependancecode_school'];
}