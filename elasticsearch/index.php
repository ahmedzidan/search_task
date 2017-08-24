<?php


use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$client = ClientBuilder::create()
                    ->setHosts(['192.168.99.100'])
                    ->build();


# Indexing a document

// $params = [
//     'index' => 'books',
//     'type' => 'books',
//     'body' => [ 'book_name' => 'ssss', 'book_description' => 'sssss']
// ];
//
// $response = $client->index($params);


# Getting a document

// $params = [
//     'index' => 'books',
//     'type' => 'books',
//     'id'  => 'AVY_iVNwGOkYbLNl90-E'
//
// ];
// $response = $client->get($params);

# Updating a document

// $params = [
//     'index' => 'developers',
//     'type'  => 'developer',
//     'id'    => 'AVY_iVNwGOkYbLNl90-E',
//     'body' => [
//             'doc' => ['name' => 'Kemal', 'last_name' => 'Yen']
//           ]
// ];
//
// $response = $client->update($params);

# Searching

$params = [
    'index' => 'books',
    'type' => 'books',
    'body' => [
        'query' => [
            'match' => [
                'book_name' => 'sss'
            ]
        ]
    ]
];
$response = $client->search($params);


var_dump($response);
