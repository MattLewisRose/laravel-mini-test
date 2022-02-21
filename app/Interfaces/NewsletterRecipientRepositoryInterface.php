<?php

namespace App\Interfaces;

interface NewsletterRecipientRepositoryInterface
{
    function find();

    function store();
}
