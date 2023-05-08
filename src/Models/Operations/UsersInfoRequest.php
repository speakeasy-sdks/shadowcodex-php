<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class UsersInfoRequest
{
    /**
     * Set this to `true` to receive the locale for this user. Defaults to `false`
     * 
     * @var ?bool $includeLocale
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=include_locale')]
    public ?bool $includeLocale = null;
    
    /**
     * Authentication token. Requires scope: `users:read`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=token')]
    public string $token;
    
    /**
     * User to get info on
     * 
     * @var ?string $user
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user')]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->includeLocale = null;
		$this->token = "";
		$this->user = null;
	}
}
