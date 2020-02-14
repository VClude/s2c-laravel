<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \GuzzleHttp\Client;
use Tests\TestCase;

class FileTest extends TestCase
{
    
    protected function &gsfp()
    {
        static $filepath = null;
        return $filepath;
    }

    protected function &gsdir()
    {
        static $dir = null;
        return $dir;
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFileUpload()
    {
        $client = new Client();
        $url = 'http://127.0.0.1:8000/';
        $response = $client->request('POST', $url . 'api/v1/file/upload', [
            'multipart' => [
                [
                    'name'     => 'directory',
                    'contents' => 'test'
                ],
                [
                    'name'     => 'file',
                    'contents' => fopen($url. 'storage/test/testfile.zip', 'r')
                ]
            ]
        ]);

        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('status', $data);

        $filename = &$this->gsfp();
        $filename = $data['file'];

        $dir = &$this->gsdir();
        $dir = $data['folder'];
    }


    public function testFileDelete()
    {
        $dir = &$this->gsdir();
        $file = &$this->gsfp();
        $client = new Client();
        $url = 'http://127.0.0.1:8000/';
        $response = $client->post(
            $url . 'api/v1/file/delete',
            array(
                'form_params' => array(
                    'directory' => $dir,
                    'file' => $file
                ),
            )
        );

        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('status', $data);

    }
}
