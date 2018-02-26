<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleController
 *
 * @author Rost
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController {
    public function homepage()
    {
        return new Response('OMG! My first page already! WOOO!');
    }
}
