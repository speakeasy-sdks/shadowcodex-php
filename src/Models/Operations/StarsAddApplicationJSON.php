<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class StarsAddApplicationJSON
{
    /**
     * Channel to add star to, or channel where the message to add star to was posted (used with `timestamp`).
     * 
     * @var ?string $channel
     */
	#[\JMS\Serializer\Annotation\SerializedName('channel')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $channel = null;
    
    /**
     * File to add star to.
     * 
     * @var ?string $file
     */
	#[\JMS\Serializer\Annotation\SerializedName('file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $file = null;
    
    /**
     * File comment to add star to.
     * 
     * @var ?string $fileComment
     */
	#[\JMS\Serializer\Annotation\SerializedName('file_comment')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $fileComment = null;
    
    /**
     * Timestamp of the message to add star to.
     * 
     * @var ?string $timestamp
     */
	#[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timestamp = null;
    
	public function __construct()
	{
		$this->channel = null;
		$this->file = null;
		$this->fileComment = null;
		$this->timestamp = null;
	}
}
