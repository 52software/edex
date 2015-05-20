<?php

Route::get('edex/create-test-files', function()
{
	$students = [
		[
			'Aikema',
			'',
			'Quinn',
			'18/11/14',
			'J',
			0,
			'71111',
			'51111',
			'2015-2016',
			'',
			'',
			'3785LE',
			'',
			'',
			'NL',
			'4111',
			''
		],
		[
			'Roorda',
			'',
			'Manuel',
			'20/01/14',
			'J',
			0,
			'71112',
			'51111',
			'2015-2016',
			'',
			'',
			'',
			'',
			'',
			'NL',
			'4111',
			''
		],
		[
			'Boer',
			'de',
			'Julian',
			'28/08/14',
			'J',
			0,
			'71113',
			'51111',
			'2015-2016',
			'',
			'',
			'',
			'',
			'',
			'NL',
			'4111',
			''
		],
		[
			'Boer',
			'',
			'Vera',
			'19/08/06',
			'M',
			0,
			'71114',
			'51112',
			'2015-2016',
			'',
			'',
			'',
			'',
			'',
			'NL',
			'4111',
			''
		],
		[
			'Boer',
			'',
			'Hugo',
			'30/05/08',
			'J',
			0,
			'71115',
			'51111',
			'2015-2016',
			'',
			'',
			'',
			'',
			'',
			'NL',
			'4111',
			''
		]
	];

	$teachers = [
		[
			'Boer',
			'',
			'Wilmar',
			'61111',
			'4111',
			''
		]
	];

	$groups = [
		[
			'Groep 8',
			8,
			'51112',
			'2015-2016',
			'4111',
			''
		],
		[
			'Groep 7',
			8,
			'51111',
			'2015-2016',
			'4111',
			''
		]
	];

	$group_teacher = [
		[
			'61111',
			'51111',
			'2015-2016',
			'4111',
			''
		],
		[
			'61111',
			'51112',
			'2015-2016',
			'4111',
			''
		]
	];

	

	echo '<h1>EDEXLL.TXT</h1>';

	$output = '';
	foreach($students AS $student)
	{
		$lengths = [40,10,20,8,1,1,5,5,9,9,4,6,8,8,2,4,5];
		foreach($lengths AS $i => $length)
		{
			if(!array_key_exists($i, $student))
				break;
			
			$student[$i] = $student[$i] . str_repeat(' ', $length - strlen($student[$i]));
		}

		$output .= implode('', $student) . "\n";
	}

	echo '<textarea cols="200" rows="10">' . $output . '</textarea>';



	echo '<h1>EDEXLK.TXT</h1>';

	$output = '';
	foreach($teachers AS $teacher)
	{
		$lengths = [40,10,20,5,4,5];
		foreach($lengths AS $i => $length)
		{
			if(!array_key_exists($i, $teacher))
				break;
			
			$teacher[$i] = $teacher[$i] . str_repeat(' ', $length - strlen($teacher[$i]));
		}

		$output .= implode('', $teacher) . "\n";
	}

	echo '<textarea cols="200" rows="10">' . $output . '</textarea>';



	echo '<h1>EDEXGR.TXT</h1>';

	$output = '';
	foreach($groups AS $group)
	{
		$lengths = [30,1,5,9,4,5];
		foreach($lengths AS $i => $length)
		{
			if(!array_key_exists($i, $group))
				break;
			
			$group[$i] = $group[$i] . str_repeat(' ', $length - strlen($group[$i]));
		}

		$output .= implode('', $group) . "\n";
	}

	echo '<textarea cols="200" rows="10">' . $output . '</textarea>';



	echo '<h1>EDEXLG.TXT</h1>';

	$output = '';
	foreach($group_teacher AS $gt)
	{
		$lengths = [5,5,9,4,5];
		foreach($lengths AS $i => $length)
		{
			if(!array_key_exists($i, $gt))
				break;
			
			$gt[$i] = $gt[$i] . str_repeat(' ', $length - strlen($gt[$i]));
		}

		$output .= implode('', $gt) . "\n";
	}

	echo '<textarea cols="200" rows="10">' . $output . '</textarea>';

});