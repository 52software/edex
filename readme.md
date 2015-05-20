# Edex import script
This packages helps reading different edex files. To learn more about EDEX, please read the (dutch) wiki: http://nl.wikipedia.org/wiki/Edex

It currently supports the following files:
1. Edexll.txt (for students)
2. Edexlk.txt (for teachers)
3. Edexgr.txt (for groups)
4. Edexlg.txt (for the teacher - groups relation)

## Requirements
- PHP >= 5.4

## Code samples

```php
// Init the importer script
$importer = new \Fiftytwo\Edex\Importer();

// Init the importer script with a specified date format
$importer = new \Fiftytwo\Edex\Importer([
    'date_format' => 'dd|mm|yy'
]);

// Read a edexll file into an array
$students = $importer->import( $_FILES['edexll'], 'edexll' );

// Use the laravel 4 facade to read a edexlk file
$teachers = Edex::import( Input::get('edexlk'), 'edexlk' );
```

## Composer

Composer can be used to install this package. Add this row to the require array:

```
"52software/edex": "dev-master" 
```

or you can require it in your console:

```
composer require 52software/edex
```

## Laravel 4
The package is designed to be framework agnostic. But a Laravel 4 Service Provider and facade is included.

Add the following to your app.php providers list:

```
'Fiftytwo\Edex\EdexServiceProvider',
```

And add the following to your app.php aliases list:

```
'Edex'				=> 'Fiftytwo\Edex\Facades\Edex',
```

The package shippes with a config file to publish in laravel.

## Contribute

Feel free to contribute in any way.

## License

Fiftytwo Edex is licensed under the MIT License.

Copyright 2015 52software