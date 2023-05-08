<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class ChatScheduledMessagesListResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Typical error response if the channel passed is invalid
     * 
     * @var ?array<string, array<string, mixed>> $chatScheduledMessagesListErrorSchema
     */
	
    public ?array $chatScheduledMessagesListErrorSchema = null;
    
    /**
     * Typical success response
     * 
     * @var ?array<string, array<string, mixed>> $chatScheduledMessagesListSchema
     */
	
    public ?array $chatScheduledMessagesListSchema = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->chatScheduledMessagesListErrorSchema = null;
		$this->chatScheduledMessagesListSchema = null;
	}
}
