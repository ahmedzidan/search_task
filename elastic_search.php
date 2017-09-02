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
    "size" => 0,
    'body' => [
        'query' => [
            'term' => [
                'text_entry' => $query
            ]
        ],
        "aggs" => [
            "groupBySpeaker" => [
                "terms" => [
                    "field" => "speaker",
                ],
                "aggs" => [
                    "hits" => [
                        "top_hits" => [
                            "size" => 42,
                        ],
                    ]
                ]
            ]
        ],
    ]
];
$response = $client->search($params);


$results = $response['aggregations']['groupBySpeaker']['buckets'];
$content = array();
foreach ($results as $result) {
    $hits_results = $result['hits']['hits']['hits'];
    $text_entry = "";
    foreach ($hits_results as $key => $hits_result) {
        if ($key == 0) {
            $title = $hits_result['_source']['play_name'];
            $title .= " | ";
            $title .= $hits_result['_source']['speaker'];
            $title .= "<br>";
        }
        $text_entry .= $hits_result['_source']['text_entry'];
        $text_entry .= "<br>";
    }

    $content[] = array(
        'speaker' => $title,
        'text_entry' => $text_entry
    );
}

$response = array('content' => $content);
echo json_encode($response);
