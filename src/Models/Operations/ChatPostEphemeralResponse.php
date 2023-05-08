<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class ChatPostEphemeralResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Typical error response
     * 
     * @var ?array<string, array<string, mixed>> $chatPostEphemeralErrorSchema
     */
	
    public ?array $chatPostEphemeralErrorSchema = null;
    
    /**
     * Typical success response
     * 
     * @var ?array<string, array<string, mixed>> $chatPostEphemeralSuccessSchema
     */
	
    public ?array $chatPostEphemeralSuccessSchema = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->chatPostEphemeralErrorSchema = null;
		$this->chatPostEphemeralSuccessSchema = null;
	}
}
