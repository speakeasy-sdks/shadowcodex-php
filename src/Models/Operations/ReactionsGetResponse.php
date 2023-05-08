<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class ReactionsGetResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Typical error response
     * 
     * @var ?array<string, array<string, mixed>> $reactionsGetErrorSchema
     */
	
    public ?array $reactionsGetErrorSchema = null;
    
    /**
     * Typical success response
     * 
     * @var ?array<string, mixed> $reactionsGetSuccessSchema
     */
	
    public ?array $reactionsGetSuccessSchema = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->reactionsGetErrorSchema = null;
		$this->reactionsGetSuccessSchema = null;
	}
}
