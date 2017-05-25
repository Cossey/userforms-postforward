<?php

class SubmittedFormPostForwardExtension extends DataExtension
{
	public function updateAfterProcess()
	{
		//Get User forms page
		$page = $this->owner->Parent();
		
		if(
			$page->exists()
			&& $this->owner->Values()->exists()
			&& $page->PostForwarding
			&& $page->PostForwardURL
		)
		{
			$postdata = array();
			
			foreach($this->owner->Values() as $field) {
				$postdata[$field->Name] = $field->Value;
			}
			
			foreach($page->AdditionalPostFields() as $pfld) {
				$postdata[$pfld->Name] = $pfld->Value;
			}

			curl_setopt_array($poster = curl_init(), array(
				CURLOPT_URL => $page->PostForwardURL,
				CURLOPT_POSTFIELDS => $postdata,
				CURLOPT_SAFE_UPLOAD => true,
				CURLOPT_RETURNTRANSFER => true,
			));
			curl_exec($poster);
			curl_close($poster);
		}
	}
}