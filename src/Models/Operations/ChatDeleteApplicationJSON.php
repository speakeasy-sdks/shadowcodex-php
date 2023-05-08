<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class ChatDeleteApplicationJSON
{
    /**
     * Pass true to delete the message as the authed user with `chat:write:user` scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with `chat:write:bot` scope.
     * 
     * @var ?bool $asUser
     */
	#[\JMS\Serializer\Annotation\SerializedName('as_user')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $asUser = null;
    
    /**
     * Channel containing the message to be deleted.
     * 
     * @var ?string $channel
     */
	#[\JMS\Serializer\Annotation\SerializedName('channel')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $channel = null;
    
    /**
     * Timestamp of the message to be deleted.
     * 
     * @var ?float $ts
     */
	#[\JMS\Serializer\Annotation\SerializedName('ts')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $ts = null;
    
	public function __construct()
	{
		$this->asUser = null;
		$this->channel = null;
		$this->ts = null;
	}
}
