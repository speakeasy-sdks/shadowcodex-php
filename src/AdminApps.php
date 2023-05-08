<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec;

class AdminApps 
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
     * Approve an app for installation on a workspace.
     * 
     * https://api.slack.com/methods/admin.apps.approve - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\AdminAppsApproveRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\AdminAppsApproveSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\AdminAppsApproveResponse
     * @see https://api.slack.com/methods/admin.apps.approve
     */
	
    public function adminAppsApprove(
        \shadowcodex\slackspec\Models\Operations\AdminAppsApproveRequest $request,
        \shadowcodex\slackspec\Models\Operations\AdminAppsApproveSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\AdminAppsApproveResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/admin.apps.approve');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\AdminAppsApproveResponse();
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
     * Restrict an app for installation on a workspace.
     * 
     * https://api.slack.com/methods/admin.apps.restrict - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictResponse
     * @see https://api.slack.com/methods/admin.apps.restrict
     */
	
    public function adminAppsRestrict(
        \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictRequest $request,
        \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/admin.apps.restrict');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\AdminAppsRestrictResponse();
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