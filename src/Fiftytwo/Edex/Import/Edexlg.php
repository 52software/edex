<?php namespace Fiftytwo\Edex\Import;

class Edexlg extends Import
{
	/**
	 * The different length for each field
	 *
	 * @var array
	 */
	protected $lengths = [5,5,9,4,5];

	/**
	 * The different field names
	 *
	 * @var array
	 */
	protected $fields = ['leerkrachtkey','groepkey','schooljaar','brincode_school','dependancecode_school'];
}