<?php

namespace Tests\Feature\API;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ModuleSiteControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_modulesite_get_endpoint()
    {

        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjUwMDYvcHJvZHV0b3MvYXBpLWJhbmNvcy1jbXMvcHVibGljL2luZGV4LnBocCIsImlhdCI6MTY3ODczMTcwOSwibmJmIjoxNjc4NzMxNzA5LCJqdGkiOiJ2WWRVdVk1a2hNbmtUQ2tNIiwiaWQiOiIxODI3IiwiaG9zdCI6ImRhdGFiYXNlIiwibmFtZSI6InBkcl9jbXMiLCJ1c2VyIjoiaW5vdmFjYW8iLCJwYXNzd29yZCI6ImlubzQwMjBAIyJ9.skxG2nD5tCXcK5PGqyuOX5WFrRH6XsXbSg-28KwIEpg';
        $response = $this->withHeaders(['Authorization'=>'Bearer '.$token, 'Accept' => 'application/json'])->getJson('v1/modulesite');

        $response->assertStatus(200);
    }
}
