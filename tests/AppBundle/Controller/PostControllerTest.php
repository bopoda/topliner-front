<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testShowOnlPostsByProjectAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/posts/auto');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Topliner', $crawler->filter('title')->text());
    }
}
