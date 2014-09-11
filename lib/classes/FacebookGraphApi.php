<?php
/* A quick class thrown together to access the facebook graph api easily */

class FacebookGraphAPI {
  private $access_token;
  private $timeout;
  private $fields;
  private $url;

  public function __construct(array $config) {
    $this->access_token = $config['appId'] . '|' . $config['secret'];

    if (isset($settings['timeout'])) {
        $this->timeout = $timeout;
    }
    else {
        $this->timeout = 10;
    }
  }

  public function setUrl($url) {
    $this->url = "https://graph.facebook.com/" . $url;
    return $this;
  }

  public function setFields(array $fields) {
    $this->fields = $fields;
    return $this;
  }

  public function performRequest() {
    $url = $this->url . '?access_token=' . $this->access_token;
    if ($this->fields) {
       $url .= '&' . http_build_query($this->fields);
    }

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => $this->timeout
    );

    $feed = curl_init();
    curl_setopt_array($feed, $options);
    $json = curl_exec($feed);
    curl_close($feed);

    return $json;
  }
}

?>