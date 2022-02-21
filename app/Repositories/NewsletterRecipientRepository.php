<?php

namespace App\Repositories;

use App\Interfaces\NewsletterRecipientRepositoryInterface;
use App\Models\NewsletterRecipient;
use Illuminate\Support\Collection;

class NewsletterRecipientRepository implements NewsletterRecipientRepositoryInterface
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
     * Return all Newsletter Recipients in the database
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return NewsletterRecipient::all();
    }

    /**
     * Store a new newsletter recipient in the database
     *
     * @param array $attributes
     * @return NewsletterRecipient
     */
    public function store(array $attributes): NewsletterRecipient
    {
        return NewsletterRecipient::create($attributes);
    }
}
