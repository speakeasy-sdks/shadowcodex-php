<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class ConversationsOpenApplicationJSON
{
    /**
     * Resume a conversation by supplying an `im` or `mpim`'s ID. Or provide the `users` field instead.
     * 
     * @var ?string $channel
     */
	#[\JMS\Serializer\Annotation\SerializedName('channel')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $channel = null;
    
    /**
     * Boolean, indicates you want the full IM channel definition in the response.
     * 
     * @var ?bool $returnIm
     */
	#[\JMS\Serializer\Annotation\SerializedName('return_im')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $returnIm = null;
    
    /**
     * Comma separated lists of users. If only one user is included, this creates a 1:1 DM.  The ordering of the users is preserved whenever a multi-person direct message is returned. Supply a `channel` when not supplying `users`.
     * 
     * @var ?string $users
     */
	#[\JMS\Serializer\Annotation\SerializedName('users')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $users = null;
    
	public function __construct()
	{
		$this->channel = null;
		$this->returnIm = null;
		$this->users = null;
	}
}
