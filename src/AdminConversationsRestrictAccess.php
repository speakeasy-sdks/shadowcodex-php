<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec;

class AdminConversationsRestrictAccess 
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
     * Add an allowlist of IDP groups for accessing a channel
     * 
     * https://api.slack.com/methods/admin.conversations.restrictAccess.addGroup - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessAddGroupRequestBody $request
     * @param \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessAddGroupSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessAddGroupResponse
     * @see https://api.slack.com/methods/admin.conversations.restrictAccess.addGroup
     */
	
    public function adminConversationsRestrictAccessAddGroup(
        \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessAddGroupRequestBody $request,
        \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessAddGroupSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessAddGroupResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/admin.conversations.restrictAccess.addGroup');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "form");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessAddGroupResponse();
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
	
    /**
     * List all IDP Groups linked to a channel
     * 
     * https://api.slack.com/methods/admin.conversations.restrictAccess.listGroups - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsResponse
     * @see https://api.slack.com/methods/admin.conversations.restrictAccess.listGroups
     */
	
    public function adminConversationsRestrictAccessListGroups(
        \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsRequest $request,
        \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/admin.conversations.restrictAccess.listGroups');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsRequest::class, $request, null));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessListGroupsResponse();
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
	
    /**
     * Remove a linked IDP group linked from a private channel
     * 
     * https://api.slack.com/methods/admin.conversations.restrictAccess.removeGroup - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessRemoveGroupRequestBody $request
     * @param \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessRemoveGroupSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessRemoveGroupResponse
     * @see https://api.slack.com/methods/admin.conversations.restrictAccess.removeGroup
     */
	
    public function adminConversationsRestrictAccessRemoveGroup(
        \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessRemoveGroupRequestBody $request,
        \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessRemoveGroupSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessRemoveGroupResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/admin.conversations.restrictAccess.removeGroup');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "form");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\AdminConversationsRestrictAccessRemoveGroupResponse();
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