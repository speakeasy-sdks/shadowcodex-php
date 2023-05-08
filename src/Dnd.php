<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec;

class Dnd 
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
     * Ends the current user's Do Not Disturb session immediately.
     * 
     * https://api.slack.com/methods/dnd.endDnd - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\DndEndDndRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\DndEndDndSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\DndEndDndResponse
     * @see https://api.slack.com/methods/dnd.endDnd
     */
	
    public function dndEndDnd(
        \shadowcodex\slackspec\Models\Operations\DndEndDndRequest $request,
        \shadowcodex\slackspec\Models\Operations\DndEndDndSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\DndEndDndResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/dnd.endDnd');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\DndEndDndResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->dndEndDndSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->dndEndDndErrorSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Ends the current user's snooze mode immediately.
     * 
     * https://api.slack.com/methods/dnd.endSnooze - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\DndEndSnoozeRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\DndEndSnoozeSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\DndEndSnoozeResponse
     * @see https://api.slack.com/methods/dnd.endSnooze
     */
	
    public function dndEndSnooze(
        \shadowcodex\slackspec\Models\Operations\DndEndSnoozeRequest $request,
        \shadowcodex\slackspec\Models\Operations\DndEndSnoozeSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\DndEndSnoozeResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/dnd.endSnooze');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\DndEndSnoozeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->dndEndSnoozeSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->dndEndSnoozeErrorSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieves a user's current Do Not Disturb status.
     * 
     * https://api.slack.com/methods/dnd.info - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\DndInfoRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\DndInfoSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\DndInfoResponse
     * @see https://api.slack.com/methods/dnd.info
     */
	
    public function dndInfo(
        \shadowcodex\slackspec\Models\Operations\DndInfoRequest $request,
        \shadowcodex\slackspec\Models\Operations\DndInfoSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\DndInfoResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/dnd.info');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\shadowcodex\slackspec\Models\Operations\DndInfoRequest::class, $request, null));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\DndInfoResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->dndInfoSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->dndInfoErrorSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Turns on Do Not Disturb mode for the current user, or changes its duration.
     * 
     * https://api.slack.com/methods/dnd.setSnooze - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\DndSetSnoozeRequestBody $request
     * @param \shadowcodex\slackspec\Models\Operations\DndSetSnoozeSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\DndSetSnoozeResponse
     * @see https://api.slack.com/methods/dnd.setSnooze
     */
	
    public function dndSetSnooze(
        \shadowcodex\slackspec\Models\Operations\DndSetSnoozeRequestBody $request,
        \shadowcodex\slackspec\Models\Operations\DndSetSnoozeSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\DndSetSnoozeResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/dnd.setSnooze');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "form");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\DndSetSnoozeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->dndSetSnoozeSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->dndSetSnoozeErrorSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieves the Do Not Disturb status for up to 50 users on a team.
     * 
     * https://api.slack.com/methods/dnd.teamInfo - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\DndTeamInfoRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\DndTeamInfoSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\DndTeamInfoResponse
     * @see https://api.slack.com/methods/dnd.teamInfo
     */
	
    public function dndTeamInfo(
        \shadowcodex\slackspec\Models\Operations\DndTeamInfoRequest $request,
        \shadowcodex\slackspec\Models\Operations\DndTeamInfoSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\DndTeamInfoResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/dnd.teamInfo');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\shadowcodex\slackspec\Models\Operations\DndTeamInfoRequest::class, $request, null));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\DndTeamInfoResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->defaultSuccessTemplate = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->defaultErrorTemplate = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
}