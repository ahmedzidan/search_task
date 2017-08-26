<?php

header('AMP-Access-Control-Allow-Source-Origin: http://localhost');

use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$query = $_POST['booksearch'];


$hosts = [
    'http://elastic:changeme@localhost:9200'
];
$client = ClientBuilder::create()
        ->setHosts($hosts)
        ->build();


# Searching

$params = [
    'index' => 'shakespeare',
    'type' => 'line',
    'body' => [
        'query' => [
            'match' => [
                'text_entry' => $query
            ]
        ],
        "sort" => [
            "speaker" => [
                'order' => 'desc'
            ]
        ],
    ]
];
$response = $client->search($params);
$result = $response['hits']['hits'];

$result_count = count($result);
$content = array();
for ($i = 0; $i < $result_count; $i++) {
    $content[] = array(
        'speaker' => $result[$i]['_source']['speaker'],
        'text_entry' => $result[$i]['_source']['text_entry']
    );
}

$response = array('content' => $content);
echo json_encode($response);
