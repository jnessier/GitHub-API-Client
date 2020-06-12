# GitHub API-Client
An easy-to-use, readonly client for the GitHub API v3, written in PHP.

**Please note** The GitHub API-Client only supports readonly and unauthenticated GET requests, with a rate limit for up 
to 60 requests per hour. If you need a full featured client with support PULL/POST/DELETE requests, try out the well tested and documented 
[php-github-api](https://github.com/KnpLabs/php-github-api).

## ToDo
[ ] Implement UnitTests
[ ] Publish as Composer package

## Requirement
* PHP >= 7.3
* cURL extension for PHP

## Install
You have 2 options to install the GitHub API-Client.

Via Composer:
```bash
composer require neoflow/github-api-client
```

Or manually download the latest release from [here](https://github.com/Neoflow/GitHub-API-Client/releases) and use it
however you want.

## Basic usage
```php
// Include vendor autoload
require_once '../vendor/autoload.php';

// Initialize GitHub API-Client with your identifier
$client = new \Neoflow\GitHubApiClient('Neoflow');

// Send get request to the GitHub API
$response = $client->get('/repos/Neoflow/GitHub-API-Client/releases/latest');

// Check response and put out tag name (version) of the latest release
if ($response['header']['http_code'] === 200) {
    echo 'Latest release: ' . $response['content']['tag_name'];
}
```

**Important** You MUST set an identifier, which will be sent by the client as a User-Agent header. Requests with no 
User-Agent header will be rejected by the GitHub API. GitHub request, that you use your GitHub username, or the name of 
your application. This allows GitHub to contact you, if there are problems. Read more [here](https://developer.github.com/v3/#user-agent-required)
about the restriction.

## Advanced configuration
The GitHub API-Client supports an optional array for custom options as a second constructor argument. If you want to 
know more about it, take a look at the code by yourself. It should be easy to understand and self-explanatory commented.

For more information about the GitHub API v3, visit the official [guidelines](https://developer.github.com/v3/).

## Author(s)
* Jonathan Nessier, [Neoflow](https://www.neoflow.ch)

## License
This piece of software is [unlicensed](https://github.com/Neoflow/GitHub-API-Client/blob/master/LICENSE). Use it however 
you like. 

*Made in Switzerland with :cheese:*