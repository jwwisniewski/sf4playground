<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ThirdController
{
    public function index(): Response
    {
        return new Response('Really works!');
    }
}