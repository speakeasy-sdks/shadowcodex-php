<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class ViewsPushRequest
{
    /**
     * Authentication token. Requires scope: `none`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=token')]
    public string $token;
    
    /**
     * Exchange a trigger to post to the user.
     * 
     * @var string $triggerId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=trigger_id')]
    public string $triggerId;
    
    /**
     * A [view payload](/reference/surfaces/views). This must be a JSON-encoded string.
     * 
     * @var string $view
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=view')]
    public string $view;
    
	public function __construct()
	{
		$this->token = "";
		$this->triggerId = "";
		$this->view = "";
	}
}
