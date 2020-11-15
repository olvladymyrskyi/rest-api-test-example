<?php

namespace  Yaga\RestProductUpdate\Test\Api;
use Magento\TestFramework\TestCase\WebapiAbstract;
use Magento\Framework\Webapi\Rest\Request;

class UserRepositoryInterfaceTest extends WebapiAbstract
{
    public function testGetList()
    {
        $serviceInfo =  [
            'rest' => [
                'resourcePath' => '/V1/user/search',
                'httpMethod' => Request::HTTP_METHOD_GET,
            ]
        ] ;

        $response = $this->_webApiCall($serviceInfo);

        $this->assertArrayHasKey('search_criteria', $response);
        $this->assertArrayHasKey('total_count', $response);
        $this->assertArrayHasKey('items', $response);

        $this->assertTrue($response['total_count'] > 0);
        $this->assertTrue(count($response['items']) > 0);

        $this->assertNotNull($response['items'][0]['username']);
        $this->assertNotNull($response['items'][0]['firstname']);
        $this->assertNotNull($response['items'][0]['lastname']);

    }
}
