# GitHub API-Client
A simple, read-only client for the GitHub API v3, written in PHP.

## Requirement
* PHP >= 7.3
* cURL extension for PHP

## Install
You have 2 options to install the GitHub API-Client.

### Via Composer
```bash
composer require neoflow/github-api-client
```

### Manually
Download and unpack the latest release from [here](https://github.com/Neoflow/GitHub-API-Client/releases). 

## Basic usage
```php
// Include vendor autoload
require_once '../vendor/autoload.php';

// Initialize GitHub API-Client with your identifier
$client = new \Neoflow\GitHubApiClient('Neoflow');

// Send get request to the GitHub API
$response = $client->get('/repos/Neoflow/GitHub-API-ClientS/releases/latest');

// Check response and put out latest release
if ($response['header']['http_code'] === 200) {
    echo 'Latest release: ' . $response['content']['tag_name'];
}
```
**Important** You MUST set an identifier, which will be sent by the client as a User-Agent header. Requests with no 
User-Agent header will be rejected by the GitHub API. GitHub request, that you use your GitHub username, or the name of 
your application. This allows GitHub to contact you, if there are problems. [Read more](https://developer.github.com/v3/#user-agent-required)

## Advanced configuration
The GitHub API-Client supports a few custom options as a secondary argument. 

|Parameter|Description|
|---|---|
|```api['baseUrl]```|Base URL of the GitHub API v3.<br />Default: https://api.github.com|
|```cache['lifetime']```|Cache lifetime of each API request (in seconds).<br />Default: 300|
|```cache['lifetime']```|Cache directory for the cache file.<br />Default: result of ```sys_get_temp_dir()```|
|```curl```|Array of additional cURL options|

If you need to know more, take a look into the code by yourself. It should be easy to understand.

For more information about the GitHub API v3, visit the official [guidelines](https://developer.github.com/v3/).

## Author(s)
* Jonathan Nessier, [Neoflow](https://www.neoflow.ch)

## License
This piece of code is [unlicensed](https://github.com/Neoflow/GitHub-API-Client/blob/master/LICENSE). Use it however you like. 

*Made in Switzerland with :cheese:*