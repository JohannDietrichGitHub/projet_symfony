<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class first_Controller 
{
    #[Route('/')]
    public function testpage() : Response
    {
        return new Response('testest');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null) : Response
    {
        if ($slug) 
        { 
            $title = str_replace('_', ' ', $slug);
        }
        else 
        {
            $title = 'tout';
        }
        return new Response('multi url : ' .$title);

    }

}

?>