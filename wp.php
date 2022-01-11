<?php

class WpWrapper
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    function getMedia()
    {
        return json_decode(file_get_contents($this->url . 'wp-json/wp/v2/media'));
    }

    function getImageUrlById($id)
    {
        return $this->getMedia()[$id]->source_url;
    }
}
