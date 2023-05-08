<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class TeamProfileGetRequest
{
    /**
     * Authentication token. Requires scope: `users.profile:read`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=token')]
    public string $token;
    
    /**
     * Filter by visibility.
     * 
     * @var ?string $visibility
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=visibility')]
    public ?string $visibility = null;
    
	public function __construct()
	{
		$this->token = "";
		$this->visibility = null;
	}
}
