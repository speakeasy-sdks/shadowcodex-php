<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class AdminConversationsSetConversationPrefsResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Typical error response
     * 
     * @var ?array<string, array<string, mixed>> $adminConversationsSetConversationPrefsErrorSchema
     */
	
    public ?array $adminConversationsSetConversationPrefsErrorSchema = null;
    
    /**
     * Typical success response
     * 
     * @var ?array<string, array<string, mixed>> $adminConversationsSetConversationPrefsSchema
     */
	
    public ?array $adminConversationsSetConversationPrefsSchema = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->adminConversationsSetConversationPrefsErrorSchema = null;
		$this->adminConversationsSetConversationPrefsSchema = null;
	}
}
