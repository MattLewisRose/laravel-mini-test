<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRecipientSubmitRequest;
use App\Interfaces\NewsletterRecipientRepositoryInterface;
use Illuminate\Http\Response;

class NewsletterRecipientController extends Controller
{
    public function __construct(
        private NewsletterRecipientRepositoryInterface $newsletterRecipientRepository
    ) {
        //
    }

    /**
     * Undocumented function
     *
     * @param NewsletterRecipientSubmitRequest $request
     * @return JsonResponse
     */
    public function store(NewsletterRecipientSubmitRequest $request): Response
    {
        $this->newsletterRecipientRepository->store($request->validated());
        return Response('Newsletter Recipient stored', 200);
    }
}
