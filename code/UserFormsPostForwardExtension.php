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
			new Tab('PostForward', _t('UserDefinedForm.PostForwarding.POSTFWD', 'POST Forwarding')),
			'Submissions'
		);

		
		$fields->addFieldsToTab("Root.PostForward", array (
			$PostForwarding = CheckBoxField::create('PostForwarding', _t('UserDefinedForm.PostForwarding.ENABLE' ,'Enable POST Forwarding')),
			$PostForwardURL = TextField::create('PostForwardURL', _t('UserDefinedForm.PostForwarding.FWDURL', 'Forward URL')),
			$POEndPoints = GridField::create('AdditionalPostFields', _t('UserDefinedForm.PostForwarding.ADDITIONALFIELDS' , 'Additional Fields'), $this->owner->AdditionalPostFields(), GridFieldConfig_RecordEditor::create())
		));
		$PostForwardURL->setRightTitle(_t('UserDefinedForm.PostForwarding.FWDURLINFO', 'Enter the URL to HTTP POST the form data to.'));
		
		return $fields; 
	}
}