<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use \GuzzleHttp\Client;

class UserTest extends TestCase
{
    public $id, $token;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected function &gst()
    {
        static $token = null;
        return $token;
    }

    protected function &gsid()
    {
        static $id = null;
        return $id;
    }
    public function testEmployeeRegister()
    {
        $client = new Client();
        $url = 'http://localhost:8000/';
        $response = $client->post(
            $url . 'api/v1/u/register',
            array(
                'form_params' => array(
                    'email' => 'test@gmail.com',
                    'username' => 'test',
                    'fullname' => 'Test User',
                    'password' => 'testpassword',
                    'password_confirmation' => 'testpassword',
                ),
            )
        );

        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('token', $data);

    }

    public function testEmployeeLogin()
    {
        $client = new Client();
        $url = 'http://localhost:8000/';
        $response = $client->post(
            $url . 'api/v1/u/login',
            array(
                'form_params' => array(
                    'username' => 'test',
                    'password' => 'testpassword',
                ),
            )
        );

        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('token', $data);

        $token = &$this->gst();
        $token = $data['token'];

        $id = &$this->gsid();
        $id = $data['details']['id'];
    }

    public function testEmployeeLogout()
    {
        $token = &$this->gst();
        $client = new Client();
        $url = 'http://localhost:8000/';
        $response = $client->request('GET', $url . 'api/v1/u/logout', [
            'headers' => ['Authorization' => 'Bearer ' . $token],
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('status', $data);

    }

    public function testEmployeeDelete()
    {
        $id = &$this->gsid();
        $client = new Client();
        $url = 'http://localhost:8000/';
        $response = $client->request('GET', $url . 'api/v1/u/delete/' . $id);
        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('deleted', $data);

    }

}
