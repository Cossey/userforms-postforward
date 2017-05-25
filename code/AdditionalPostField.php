<?php

class AdditionalPostField extends DataObject
{
	private static $db = array(
		'Name' => 'Varchar',
		'Value' => 'Varchar',
	);
	
	private static $summary_fields = array (
		'Name' => 'Name',
		'Value' => 'Value'
	);
	
	private static $has_one = array(
		'UserDefinedForm' => 'UserDefinedForm'
	);
	
	public function getCMSFields() 
	{
		$fields = FieldList::create(
			TextField::create('Name','Name'),
			TextField::create('Value','Value')
		);

		return $fields;
	}
	
	public function getTitle()
	{
		if ($this->Name) {
			return $this->Name;
		}
		return parent::getTitle();
	}
}