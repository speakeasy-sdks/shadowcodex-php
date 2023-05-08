<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec;

class AdminInviteRequestsDenied 
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
     * List all denied workspace invite requests.
     * 
     * https://api.slack.com/methods/admin.inviteRequests.denied.list - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListResponse
     * @see https://api.slack.com/methods/admin.inviteRequests.denied.list
     */
	
    public function adminInviteRequestsDeniedList(
        \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListRequest $request,
        \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/admin.inviteRequests.denied.list');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListRequest::class, $request, null));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\AdminInviteRequestsDeniedListResponse();
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