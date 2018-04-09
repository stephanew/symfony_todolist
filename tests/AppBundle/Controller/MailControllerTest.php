<?php
/**
 * Created by PhpStorm.
 * User: stephanew
 * Date: 2018/4/8
 * Time: 下午3:38
 */

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MailControllerTest extends WebTestCase
{
    /*public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mail/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }*/

    public function testNew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mail/new?content_id=2');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Mail creation', $crawler->filter('h1')->text());
    }

}