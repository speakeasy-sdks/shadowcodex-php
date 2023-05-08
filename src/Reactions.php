<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec;

class Reactions 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * Adds a reaction to an item.
     * 
     * https://api.slack.com/methods/reactions.add - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\ReactionsAddRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\ReactionsAddSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\ReactionsAddResponse
     * @see https://api.slack.com/methods/reactions.add
     */
	
    public function reactionsAdd(
        \shadowcodex\slackspec\Models\Operations\ReactionsAddRequest $request,
        \shadowcodex\slackspec\Models\Operations\ReactionsAddSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\ReactionsAddResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/reactions.add');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\ReactionsAddResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->reactionsAddSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->reactionsAddErrorSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Gets reactions for an item.
     * 
     * https://api.slack.com/methods/reactions.get - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\ReactionsGetRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\ReactionsGetSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\ReactionsGetResponse
     * @see https://api.slack.com/methods/reactions.get
     */
	
    public function reactionsGet(
        \shadowcodex\slackspec\Models\Operations\ReactionsGetRequest $request,
        \shadowcodex\slackspec\Models\Operations\ReactionsGetSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\ReactionsGetResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/reactions.get');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\shadowcodex\slackspec\Models\Operations\ReactionsGetRequest::class, $request, null));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\ReactionsGetResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->reactionsGetSuccessSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, mixed>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->reactionsGetErrorSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Lists reactions made by a user.
     * 
     * https://api.slack.com/methods/reactions.list - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\ReactionsListRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\ReactionsListSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\ReactionsListResponse
     * @see https://api.slack.com/methods/reactions.list
     */
	
    public function reactionsList(
        \shadowcodex\slackspec\Models\Operations\ReactionsListRequest $request,
        \shadowcodex\slackspec\Models\Operations\ReactionsListSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\ReactionsListResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/reactions.list');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\shadowcodex\slackspec\Models\Operations\ReactionsListRequest::class, $request, null));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\ReactionsListResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->reactionsListSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->reactionsListErrorSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Removes a reaction from an item.
     * 
     * https://api.slack.com/methods/reactions.remove - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\ReactionsRemoveRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\ReactionsRemoveSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\ReactionsRemoveResponse
     * @see https://api.slack.com/methods/reactions.remove
     */
	
    public function reactionsRemove(
        \shadowcodex\slackspec\Models\Operations\ReactionsRemoveRequest $request,
        \shadowcodex\slackspec\Models\Operations\ReactionsRemoveSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\ReactionsRemoveResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/reactions.remove');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\ReactionsRemoveResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->reactionsRemoveSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->reactionsRemoveErrorSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
}