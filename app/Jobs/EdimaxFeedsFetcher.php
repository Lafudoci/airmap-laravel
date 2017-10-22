<?php

namespace App\Jobs;

use App\Datasource\Edimax;

class EdimaxFeedsFetcher extends FeedsFetcher
{
    public function feedResource()
    {
        return Edimax::feedResource();
    }

    public function parseFeed(array $raw){
        return Edimax::parse($raw);
    }

    public function filter(array $raw)
    {
        return $raw['type'] != "lass-airbox";
    }

    public function feeds(array $data)
    {
        return $data['devices'];
    }
}
