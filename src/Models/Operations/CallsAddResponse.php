<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class CallsAddResponse
{
	
    public string $contentType;
    
    /**
     * Typical error response
     * 
     * @var ?array<string, array<string, mixed>> $defaultErrorTemplate
     */
	
    public ?array $defaultErrorTemplate = null;
    
    /**
     * Typical success response
     * 
     * @var ?array<string, array<string, mixed>> $defaultSuccessTemplate
     */
	
    public ?array $defaultSuccessTemplate = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->defaultErrorTemplate = null;
		$this->defaultSuccessTemplate = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
