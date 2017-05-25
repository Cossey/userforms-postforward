<?php

class UserFormsPostForwardExtension extends DataExtension
{
	private static $db = array(
		'PostForwarding' => 'Boolean',
		'PostForwardURL' => 'Varchar'
	);
	
	private static $has_many = array(
        'AdditionalPostFields' => 'AdditionalPostField'
    );
	
	public function updateCMSFields(FieldList $fields)
    {
		$fields->insertAfter(
			new Tab('PostForward', 'POST Forwarding'),
			'Submissions'
		);

		
		$fields->addFieldsToTab("Root.PostForward", array (
			$PostForwarding = CheckBoxField::create('PostForwarding', 'Enable POST Forwarding'),
			$PostForwardURL = TextField::create('PostForwardURL', 'Forward POST URL'),
			$POEndPoints = GridField::create('AdditionalPostFields', 'Additional Fields', $this->owner->AdditionalPostFields(), GridFieldConfig_RecordEditor::create())
		));
		$PostForwardURL->setRightTitle('Enter the URL to HTTP POST the form data to.');
		
		return $fields; 
	}
}