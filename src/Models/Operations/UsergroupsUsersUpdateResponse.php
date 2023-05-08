<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class UsergroupsUsersUpdateResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Typical error response
     * 
     * @var ?array<string, array<string, mixed>> $usergroupsUsersUpdateErrorSchema
     */
	
    public ?array $usergroupsUsersUpdateErrorSchema = null;
    
    /**
     * Typical success response
     * 
     * @var ?array<string, array<string, mixed>> $usergroupsUsersUpdateSchema
     */
	
    public ?array $usergroupsUsersUpdateSchema = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->usergroupsUsersUpdateErrorSchema = null;
		$this->usergroupsUsersUpdateSchema = null;
	}
}
