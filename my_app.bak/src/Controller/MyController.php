<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController
{
    /**
     * @Route("/")
     *
     * @return void
     */
    public function index()
    {
        return new Response("test ");
    }
}
