<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class DndInfoRequest
{
    /**
     * Authentication token. Requires scope: `dnd:read`
     * 
     * @var ?string $token
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=token')]
    public ?string $token = null;
    
    /**
     * User to fetch status for (defaults to current user)
     * 
     * @var ?string $user
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user')]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->token = null;
		$this->user = null;
	}
}
