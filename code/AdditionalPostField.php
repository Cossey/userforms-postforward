<?php

class AdditionalPostField extends DataObject
{
	private static $db = array(
		'Name' => 'Varchar',
		'Value' => 'Varchar',
	);
	
	private static $summary_fields = array (
		'Name',
		'Value',
	);
	
	public function fieldLabels($includerelations = true)
	{
		$labels = parent::fieldLabels(true);
		
		$labels['Name'] = _t('AdditionalPostField.Name', 'Name');
		$labels['Value'] = _t('AdditionalPostField.Value', 'Value');
		
		return $labels;
	}
	
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