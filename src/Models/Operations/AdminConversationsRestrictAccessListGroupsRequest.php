<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class AdminConversationsRestrictAccessListGroupsRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=channel_id')]
    public string $channelId;
    
    /**
     * The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     * 
     * @var ?string $teamId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=team_id')]
    public ?string $teamId = null;
    
    /**
     * Authentication token. Requires scope: `admin.conversations:read`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=token')]
    public string $token;
    
	public function __construct()
	{
		$this->channelId = "";
		$this->teamId = null;
		$this->token = "";
	}
}
