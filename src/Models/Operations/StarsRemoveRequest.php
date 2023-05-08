<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class StarsRemoveRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?StarsRemoveApplicationJSON $requestBody = null;
    
    /**
     * Authentication token. Requires scope: `stars:write`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=token')]
    public string $token;
    
	public function __construct()
	{
		$this->requestBody = null;
		$this->token = "";
	}
}
