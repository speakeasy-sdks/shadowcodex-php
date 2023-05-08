<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class UsergroupsUsersListResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Standard failure response when used with an invalid token
     * 
     * @var ?array<string, array<string, mixed>> $usergroupsUsersListErrorSchema
     */
	
    public ?array $usergroupsUsersListErrorSchema = null;
    
    /**
     * Standard success response when used with a user token
     * 
     * @var ?array<string, array<string, mixed>> $usergroupsUsersListSchema
     */
	
    public ?array $usergroupsUsersListSchema = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->usergroupsUsersListErrorSchema = null;
		$this->usergroupsUsersListSchema = null;
	}
}
