<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class AdminConversationsRestrictAccessRemoveGroupRequestBody
{
    /**
     * The channel to remove the linked group from.
     * 
     * @var string $channelId
     */
	#[SpeakeasyMetadata('form:name=channel_id')]
    public string $channelId;
    
    /**
     * The [IDP Group](https://slack.com/help/articles/115001435788-Connect-identity-provider-groups-to-your-Enterprise-Grid-org) ID to remove from the private channel.
     * 
     * @var string $groupId
     */
	#[SpeakeasyMetadata('form:name=group_id')]
    public string $groupId;
    
    /**
     * The workspace where the channel exists. This argument is required for channels only tied to one workspace, and optional for channels that are shared across an organization.
     * 
     * @var string $teamId
     */
	#[SpeakeasyMetadata('form:name=team_id')]
    public string $teamId;
    
    /**
     * Authentication token. Requires scope: `admin.conversations:write`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('form:name=token')]
    public string $token;
    
	public function __construct()
	{
		$this->channelId = "";
		$this->groupId = "";
		$this->teamId = "";
		$this->token = "";
	}
}
