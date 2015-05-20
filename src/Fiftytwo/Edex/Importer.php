<?php namespace Fiftytwo\Edex;

use Exception;

class Importer
{
	/**
	 * The config holder
	 *
	 * @var array
	 */
	public $config = [
		'date_format' => 'dd/mm/yy'
	];

	/**
     * Creates new instance of the EDEX Importer
     *
     * @param  array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_replace($this->config, $config);
    }

    /**
     * Read a file and return an array with users
     *
     * @param  something $file
     * @param  string $type
     */
    public function import( $file, $type = 'edexll' )
    {
    	switch(strtolower($type))
    	{
    		case 'edexgr':
    		case 'edexlk':
    		case 'edexlg':
    		case 'edexll':
    			$class = '\Fiftytwo\Edex\Import\\' . ucfirst(strtolower($type));
    			$import = new $class( $file );
    			break;
    		default:
    			throw new Exception("Type {$type} not supported by this importer");
    	}

    	return $import->fetch();
    }

    /**
     * Get or set a config variable
     *
     * @param  string $name
     * @param  mixed $value
     * @return mixed
     */
    public function config($name, $value = null)
   	{
   		if(!is_null($value))
   			$this->config[$name] = $value;
   			
   		return $this->config[$name];
   	}
}