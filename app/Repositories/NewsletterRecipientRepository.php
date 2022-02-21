<?php

namespace App\Repositories;

use App\Http\Requests\NewsletterRecipientSubmitRequest;
use App\Models\NewsletterRecipient;

class NewsletterRecipientRepository
{
    /**
     * Return a model matching the given ID
     *
     * @param integer $id
     * @return NewsletterRecipient|null
     */
    public function find(int $id): NewsletterRecipient|null
    {
        return NewsletterRecipient::find($id);
    }

    /**
     * Store a new newsletter recipient in the database
     *
     * @param NewsletterRecipientSubmitRequest $request
     * @return NewsletterRecipient
     */
    public function store(NewsletterRecipientSubmitRequest $request): NewsletterRecipient
    {
        return NewsletterRecipient::create($request->validated);
    }
}
