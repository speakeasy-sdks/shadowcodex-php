<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class FilesDeleteResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Typical error response
     * 
     * @var ?array<string, array<string, mixed>> $filesDeleteErrorSchema
     */
	
    public ?array $filesDeleteErrorSchema = null;
    
    /**
     * Typical success response
     * 
     * @var ?array<string, array<string, mixed>> $filesDeleteSchema
     */
	
    public ?array $filesDeleteSchema = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->filesDeleteErrorSchema = null;
		$this->filesDeleteSchema = null;
	}
}
