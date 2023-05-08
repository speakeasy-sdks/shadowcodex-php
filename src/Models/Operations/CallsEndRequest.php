<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class CallsEndRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public CallsEndApplicationJSON $requestBody;
    
    /**
     * Authentication token. Requires scope: `calls:write`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=token')]
    public string $token;
    
	public function __construct()
	{
		$this->requestBody = new \shadowcodex\slackspec\Models\Operations\CallsEndApplicationJSON();
		$this->token = "";
	}
}
