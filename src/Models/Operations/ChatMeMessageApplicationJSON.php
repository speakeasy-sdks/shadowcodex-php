<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class ChatMeMessageApplicationJSON
{
    /**
     * Channel to send message to. Can be a public channel, private group or IM channel. Can be an encoded ID, or a name.
     * 
     * @var ?string $channel
     */
	#[\JMS\Serializer\Annotation\SerializedName('channel')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $channel = null;
    
    /**
     * Text of the message to send.
     * 
     * @var ?string $text
     */
	#[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $text = null;
    
	public function __construct()
	{
		$this->channel = null;
		$this->text = null;
	}
}
