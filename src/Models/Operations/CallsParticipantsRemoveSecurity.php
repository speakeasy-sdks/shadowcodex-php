<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class CallsParticipantsRemoveSecurity
{
	#[SpeakeasyMetadata('security:scheme=true,type=oauth2,name=Authorization')]
    public string $slackAuth;
    
	public function __construct()
	{
		$this->slackAuth = "";
	}
}
