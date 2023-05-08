<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class PinsAddApplicationJSON
{
    /**
     * Channel to pin the item in.
     * 
     * @var string $channel
     */
	#[\JMS\Serializer\Annotation\SerializedName('channel')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $channel;
    
    /**
     * Timestamp of the message to pin.
     * 
     * @var ?string $timestamp
     */
	#[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timestamp = null;
    
	public function __construct()
	{
		$this->channel = "";
		$this->timestamp = null;
	}
}
