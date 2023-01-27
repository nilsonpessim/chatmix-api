<?php 

namespace Nilsonpessim\ChatmixWhatsApp;

class Message {

    private $url;
    private $curl;
    private $header;
    private $ssl;

    function __construct($url)
    {
        $this->url = $url;
        $this->curl = curl_init();
        $this->header = array();
        $this->ssl = false;
    }

    public function sendMessage()
    {
        curl_setopt_array($this->curl, [
            CURLOPT_URL            => $this->url,
            CURLOPT_HTTPHEADER     => $this->header,
            CURLOPT_SSL_VERIFYPEER => $this->ssl,
            CURLOPT_RETURNTRANSFER => 1
        ]);

        return curl_exec($this->curl);
        curl_close($this->curl);
    }
}