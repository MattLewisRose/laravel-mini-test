<?php

namespace App\Interfaces;

use App\Http\Requests\NewsletterRecipientSubmitRequest;
use App\Models\NewsletterRecipient;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

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
     * Return all newsletter recipients in the database
     *
     * @return Collection
     */
    function all(): Collection;

    /**
     * Store a new Newsletter Recipient in the database
     *
     * @param array $attributes
     * @return Response
     */
    function store(array $attributes): NewsletterRecipient;
}
