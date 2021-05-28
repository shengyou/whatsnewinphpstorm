# PhpStorm Features

This is a collection of overall features in PhpStorm.

- [PHP and Composer](#php-and-composer)
- [Editing](#editing)
- [Code style](#code-style)
- [Static Analyzers](#static-analyzers)
- [Run configurations](#run-configurations)
- [Testing](#testing)
- [Debug](#debug)
- [JSON support](#json-support)
- [HTTP Client](#http-client)

## PHP and Composer

*

## Editing

* Preview PHP and HTML files in the editor

  Open a PHP file, type your code, and you can immediately
  see the result alongside it. Any changes in linked CSS and
  JavaScript files will be reflected in the preview as well.
  In the Editor, there is a new icon in the top-right corner
  that opens a tab for previewing files inside of PhpStorm.
  It works with HTML and PHP files.

  [Demo](../features/preview-in-the-editor/index.php)

* Code With Me

  [Code With Me](https://www.jetbrains.com/code-with-me/) is a
  collaborative development and pair programming. We initially
  introduced it in PhpStorm 2020.3, and this release delivers a
  number of significant improvements. Set the needed level of
  access to your project and share the link with your guests.
  Peers do not even need to have their own IDEs installed to
  collaborate, and the platform features embedded audio and video
  calls, along with chat messaging.

  [Demo](../features/code-with-me/index.php) |
  [Intro](https://blog.jetbrains.com/phpstorm/2020/10/phpstorm-2020-3-eap-5/#code_with_me)
  
## Code Style

* PSR-1 & PSR-2 support

  TBD: description here...

  [Demo]()

* PSR-12 support
  
  TBD: description here...

  [Demo]()
    
## Static Analyzers

* PHPStan support
  
  TBD: description here...

  [Demo]()

* Psalm support

  TBD: description here...

  [Demo]()

## Run configurations

## Testing

## Debug

## JSON support

* JSONPath support

  Use the JSONPath query language to search through JSON
  documents. New actions are available under Edit | Find |
  Evaluate JSONPath.

  [Demo](../features/json-path-support/bookshop.json)

* JSON Lines format support

  PhpStorm now supports the newline-delimited
  [JSON Lines](https://jsonlines.org) format used for working
  with structured data and logs. The IDE will recognize .jsonl,
  .jslines, .ldjson, and .ndjson file types.

  [Demo](../features/json-lines-format-support/ranking.jsonl)

## HTTP Client

* Test your API right inside your IDE
    
    PhpStorm has built-in functionality for HTTP client. That means
    you can trigger HTTP requests in a file extension `.http`. You 
    can use it as a documentation for your team.

    [Demo](http-client/index.php)

* Guzzle integrated with HTTP client

  It'll be awesome to run Guzzle requests with the IDE’s HTTP
  client possible in one click. If the request is supported,
  there will be a gutter icon next to it. Clicking it will
  create a new scratch file with the correct URL, query
  parameters, methods, headers, body, and simple auth.

  [Demo](../features/http-client/guzzle_integration.php) |
  [Intro](https://blog.jetbrains.com/phpstorm/2020/10/phpstorm-2020-3-eap-5/#guzzle_integrated_with_phpstorm_s_http_client)
