<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class UsergroupsUsersListRequest
{
    /**
     * Allow results that involve disabled User Groups.
     * 
     * @var ?bool $includeDisabled
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=include_disabled')]
    public ?bool $includeDisabled = null;
    
    /**
     * Authentication token. Requires scope: `usergroups:read`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=token')]
    public string $token;
    
    /**
     * The encoded ID of the User Group to update.
     * 
     * @var string $usergroup
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=usergroup')]
    public string $usergroup;
    
	public function __construct()
	{
		$this->includeDisabled = null;
		$this->token = "";
		$this->usergroup = "";
	}
}
