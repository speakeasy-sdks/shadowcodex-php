<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class AdminConversationsDisconnectSharedResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Typical error response
     * 
     * @var ?array<string, array<string, mixed>> $adminConversationsDisconnectSharedErrorSchema
     */
	
    public ?array $adminConversationsDisconnectSharedErrorSchema = null;
    
    /**
     * Typical success response
     * 
     * @var ?array<string, array<string, mixed>> $adminConversationsRenameSchema
     */
	
    public ?array $adminConversationsRenameSchema = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->adminConversationsDisconnectSharedErrorSchema = null;
		$this->adminConversationsRenameSchema = null;
	}
}
