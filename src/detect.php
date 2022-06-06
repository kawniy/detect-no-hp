<?php
/**
 * Detect no hp melalui jaringan internet
 * Support provider: Tri, Other = Soon
 */

class Detect {

  public $url = 'http://bimaplus.tri.co.id';
    
  /**
   * noTri
   *
   * @return void
   */
  public function noTri() {
    $url = $this->url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    $data = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($data, true);
    foreach ($json as $key => $value) {
      $result = $value;
    }
    return $result;
  }
}