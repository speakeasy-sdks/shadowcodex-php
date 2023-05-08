<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class ChatDeleteResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Typical error response
     * 
     * @var ?array<string, array<string, mixed>> $chatDeleteErrorSchema
     */
	
    public ?array $chatDeleteErrorSchema = null;
    
    /**
     * Typical success response
     * 
     * @var ?array<string, array<string, mixed>> $chatDeleteSuccessSchema
     */
	
    public ?array $chatDeleteSuccessSchema = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->chatDeleteErrorSchema = null;
		$this->chatDeleteSuccessSchema = null;
	}
}
