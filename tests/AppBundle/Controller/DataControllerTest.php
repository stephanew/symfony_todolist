<?php
/**
 * Created by PhpStorm.
 * User: stephanew
 * Date: 2018/4/8
 * Time: 下午3:19
 */



namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DataControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/data/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Todo list', $crawler->filter('h1')->text());
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'data/2/show');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Content', $crawler->filter('h1')->text());
    }

    public function testNew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'data/new');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Content creation', $crawler->filter('h1')->text());
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'data/2/edit');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Content edit', $crawler->filter('h1')->text());
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'data/2/delete');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Todo list', $crawler->filter('h1')->text());
    }
}
