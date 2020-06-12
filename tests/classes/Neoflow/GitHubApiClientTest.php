<?php declare(strict_types=1);

namespace Neoflow;

use PHPUnit\Framework\TestCase;

final class GitHubApiClientTest extends TestCase
{

    /**
     * @param $client GitHubApiClient
     * @dataProvider additionProvider
     */
    public function testGetNeoflowOrg(GitHubApiClient $client): void
    {
        $response = $client->get('/orgs/neoflow');

        $this->assertEquals("Neoflow", $response['content']['login']);
    }

    /**
     * @param GitHubApiClient $client
     * @dataProvider additionProvider
     */
    public function testGetNotFound(GitHubApiClient $client): void
    {
        $response = $client->get('/absolutely/wrong/url/path');

        $this->assertEquals(404, $response['header']['http_code']);
    }

    public function additionProvider()
    {
        return [
            [new GitHubApiClient('Neoflow')]
        ];
    }
}
