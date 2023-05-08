<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class AdminTeamsSettingsInfoRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=team_id')]
    public string $teamId;
    
    /**
     * Authentication token. Requires scope: `admin.teams:read`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=token')]
    public string $token;
    
	public function __construct()
	{
		$this->teamId = "";
		$this->token = "";
	}
}
