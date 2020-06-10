<?php

use Neoflow\GitHubApiClient;

include '../vendor/autoload.php';

$gitHubApiClient = new GitHubApiClient('Neoflow');

$response = $gitHubApiClient->get('/repos/WBCE/WBCE_CMS/releases/latest');

if ($response['header']['http_code'] === 200) {
    echo 'Latest release: ' . $response['content']['tag_name'];
} else {
    echo 'Something went wrong.<br />';
    echo 'Message for GitHub API: ' . $response['content']['message'];
}
echo '<br /><small>' . $response['header']['url'] . '</small>';
