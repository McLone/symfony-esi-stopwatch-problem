<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

final class EsiTest
{
    public function __invoke(): Response
    {
        return new Response('Test');
    }
}
