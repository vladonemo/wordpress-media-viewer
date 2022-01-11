<?php

class WpWrapper
{
    private $url;
    private $params;

    public function __construct($url, $params)
    {
        $this->url = $url;
        $this->params = $params;
    }

    function getMedia()
    {
        return json_decode(file_get_contents($this->url . 'wp-json/wp/v2/media'.$this->params));
    }

    function getImageUrlById($id)
    {
        $mediaArray = $this->getMedia();
        $media = $mediaArray[$id] ?? $mediaArray['0'] ?? (object)array('source_url' => false);
        return $media->source_url;
    }
}
