<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class FilesDeleteRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?FilesDeleteApplicationJSON $requestBody = null;
    
    /**
     * Authentication token. Requires scope: `files:write:user`
     * 
     * @var ?string $token
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=token')]
    public ?string $token = null;
    
	public function __construct()
	{
		$this->requestBody = null;
		$this->token = null;
	}
}
