<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\TwitterClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;

class TweetController extends AbstractController
{
    #[Route('/tweet', name: 'app_tweet')]
    public function tweet(Security $security, $twitterClient, Request $request): Response
    {
        $user = $security->getUser();
        $key = 'abc';
        $status = 'Greatly overrated';
        // fetch $user, $key, $status from the POST'ed data
        $twitterClient->tweet($user, $key, $status);
    }
}
