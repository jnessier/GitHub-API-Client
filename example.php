<?php

include 'src/Neoflow/GitHubApiClient.php';

$gitHubApiClient = new \Neoflow\GitHubApiClient();

$response = json_decode($gitHubApiClient->call('/repos/WBCE/WBCE_CMS/releases/latest', [
    CURLOPT_USERAGENT => 'WBCE_CMS' // All API requests MUST include a valid User-Agent header. Requests with no User-Agent header will be rejected. GitHub request that you use your GitHub username, or the name of your application, for the User-Agent header value. This allows GitHub to contact you if there are problems.
]), true);

if (isset($response['tag_name'])) {
    echo $response['tag_name'];
}