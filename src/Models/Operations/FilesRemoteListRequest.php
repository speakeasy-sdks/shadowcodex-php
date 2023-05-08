<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace shadowcodex\slackspec\Models\Operations;

use \shadowcodex\slackspec\Utils\SpeakeasyMetadata;
class FilesRemoteListRequest
{
    /**
     * Filter files appearing in a specific channel, indicated by its ID.
     * 
     * @var ?string $channel
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=channel')]
    public ?string $channel = null;
    
    /**
     * Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first "page" of the collection. See [pagination](/docs/pagination) for more detail.
     * 
     * @var ?string $cursor
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=cursor')]
    public ?string $cursor = null;
    
    /**
     * The maximum number of items to return.
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * Authentication token. Requires scope: `remote_files:read`
     * 
     * @var ?string $token
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=token')]
    public ?string $token = null;
    
    /**
     * Filter files created after this timestamp (inclusive).
     * 
     * @var ?float $tsFrom
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=ts_from')]
    public ?float $tsFrom = null;
    
    /**
     * Filter files created before this timestamp (inclusive).
     * 
     * @var ?float $tsTo
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=ts_to')]
    public ?float $tsTo = null;
    
	public function __construct()
	{
		$this->channel = null;
		$this->cursor = null;
		$this->limit = null;
		$this->token = null;
		$this->tsFrom = null;
		$this->tsTo = null;
	}
}
