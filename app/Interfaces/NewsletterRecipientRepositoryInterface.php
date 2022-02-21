<?php

namespace App\Interfaces;

use App\Http\Requests\NewsletterRecipientSubmitRequest;
use App\Models\NewsletterRecipient;
use Illuminate\Http\Response;

interface NewsletterRecipientRepositoryInterface
{
    /**
     * Find a Newspaper Recipient given the submitted ID
     *
     * @param integer $id
     * @return NewsletterRecipient|null
     */
    function find(int $id): NewsletterRecipient|null;

    /**
     * Store a new Newsletter Recipient in the database
     *
     * @param NewsletterRecipientSubmitRequest $request
     * @return Response
     */
    function store(NewsletterRecipientSubmitRequest $request): Response;
}
