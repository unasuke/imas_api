<?php

class Model_Imas_Idol extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'production_id',
		'cv_id',
		'name',
	    'name_ruby',
		'family_name',
		'family_name_ruby',
		'first_name',
		'first_name_ruby',
		'birth_month',
		'birth_day',
		'gender',
		'is_idol',
	);
	protected static $_table_name = 'imas_idols';

}
