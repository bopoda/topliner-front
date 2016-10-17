<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/user/login');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('topliner', $crawler->filter('title')->text());
    }
}
