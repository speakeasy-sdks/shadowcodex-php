<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;


class RemindersCompleteApplicationJSON
{
    /**
     * The ID of the reminder to be marked as complete
     * 
     * @var ?string $reminder
     */
	#[\JMS\Serializer\Annotation\SerializedName('reminder')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reminder = null;
    
	public function __construct()
	{
		$this->reminder = null;
	}
}
