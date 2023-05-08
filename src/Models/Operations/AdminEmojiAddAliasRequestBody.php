<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class AdminEmojiAddAliasRequestBody
{
    /**
     * The alias of the emoji.
     * 
     * @var string $aliasFor
     */
	#[SpeakeasyMetadata('form:name=alias_for')]
    public string $aliasFor;
    
    /**
     * The name of the emoji to be aliased. Colons (`:myemoji:`) around the value are not required, although they may be included.
     * 
     * @var string $name
     */
	#[SpeakeasyMetadata('form:name=name')]
    public string $name;
    
    /**
     * Authentication token. Requires scope: `admin.teams:write`
     * 
     * @var string $token
     */
	#[SpeakeasyMetadata('form:name=token')]
    public string $token;
    
	public function __construct()
	{
		$this->aliasFor = "";
		$this->name = "";
		$this->token = "";
	}
}
