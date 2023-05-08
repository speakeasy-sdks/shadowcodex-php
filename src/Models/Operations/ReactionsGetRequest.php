<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class ReactionsGetRequest
{
    /**
     * Channel where the message to get reactions for was posted.
     * 
     * @var ?string $channel
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=channel')]
    public ?string $channel = null;
    
    /**
     * File to get reactions for.
     * 
     * @var ?string $file
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=file')]
    public ?string $file = null;
    
    /**
     * File comment to get reactions for.
     * 
     * @var ?string $fileComment
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=file_comment')]
    public ?string $fileComment = null;
    
    /**
     * If true always return the complete reaction list.
     * 
     * @var ?bool $full
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=full')]
    public ?bool $full = null;
    
    /**
     * Timestamp of the message to get reactions for.
     * 
     * @var ?string $timestamp
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=timestamp')]
    public ?string $timestamp = null;
    
    /**
     * Authentication token. Requires scope: `reactions:read`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=token')]
    public string $token;
    
	public function __construct()
	{
		$this->channel = null;
		$this->file = null;
		$this->fileComment = null;
		$this->full = null;
		$this->timestamp = null;
		$this->token = "";
	}
}
