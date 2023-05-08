<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class AdminConversationsConvertToPrivateApplicationJSON
{
    /**
     * The channel to convert to private.
     * 
     * @var string $channelId
     */
	#[\JMS\Serializer\Annotation\SerializedName('channel_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $channelId;
    
	public function __construct()
	{
		$this->channelId = "";
	}
}
