<?php namespace Fiftytwo\Edex\Import;

use Exception;

abstract class Import
{
	/**
	 * The uploaded file
	 *
	 * @var string
	 */
	protected $file;

	/**
	 * The contents of the file
	 *
	 * @var array
	 */
	protected $fileContents = [];

	/**
	 * The different length for each field
	 *
	 * @var array
	 */
	protected $lengths = [];

	/**
	 * Default contructor
	 *
	 * @param  string $file
	 */
	public function __construct( $file )
	{
		$this->file = $file;

		$this->read();
	}

	/**
	 * Read the contents of an uploaded file
	 *
	 * @return array
	 */
	protected function read()
	{
		if( $this->file instanceof \Symfony\Component\HttpFoundation\File\UploadedFile )
		{
			if(!$this->file->isReadable())
				throw new Exception('File is not readable');

			$this->fileContents = file( $this->file->getPathname() );

			return;
		}

		if(is_uploaded_file($this->file))
		{
			$this->fileContents = file( $this->file['tmp_name'] );

			return;
		}

		throw new Exception("File type not supported");
	}

	/**
	 * Fetch the file and return the contents
	 *
	 * @return array
	 */
	public function fetch()
	{
		$objects = [];

		foreach($this->fileContents AS $content)
		{
			$row = [];

			$start = 0;
			foreach($this->lengths AS $length)
			{
				$row[] = trim(substr($content, $start, $length));

				$start += $length;
			}

			$objects[] = $row;
		}

		return $objects;
	}
}