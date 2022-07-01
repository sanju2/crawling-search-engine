<?php
    require 'vendor/autoload.php';

    $client = new \Goutte\Client();

    $crawler = $client->request('GET', 'https://www.imdb.com/title/tt4881806/reviews?ref_=tt_ov_rt');

    $results = [];
    $results = $crawler->filter('.title')->each(function ($node) use ($results) {
        array_push($results, $node->text());
        return $results;
    });

    print_r($results);
?>