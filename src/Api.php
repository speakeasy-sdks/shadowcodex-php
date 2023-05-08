<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec;

class Api 
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
     * Checks API calling code.
     * 
     * https://api.slack.com/methods/api.test - API method documentation
     * 
     * @param \shadowcodex\slackspec\Models\Operations\ApiTestRequest $request
     * @param \shadowcodex\slackspec\Models\Operations\ApiTestSecurity $security
     * @return \shadowcodex\slackspec\Models\Operations\ApiTestResponse
     * @see https://api.slack.com/methods/api.test
     */
	
    public function apiTest(
        \shadowcodex\slackspec\Models\Operations\ApiTestRequest $request,
        \shadowcodex\slackspec\Models\Operations\ApiTestSecurity $security,
    ): \shadowcodex\slackspec\Models\Operations\ApiTestResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/api.test');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\shadowcodex\slackspec\Models\Operations\ApiTestRequest::class, $request, null));
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \shadowcodex\slackspec\Models\Operations\ApiTestResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiTestSuccessSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiTestErrorSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, array<string, mixed>>', 'json');
            }
        }

        return $response;
    }
}