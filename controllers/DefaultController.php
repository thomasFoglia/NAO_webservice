<?php

class DefaultController
{
    public function getAction($request) {
        $name_to_search = $request->parameters["name"];
        $data = $this->callAPI($name_to_search);

        header("HTTP/1.1 200 OK");
        return $data;
    }

    public function callAPI($name) {
      $url = "https://www.google.fr/search?q=" . urlencode("linkedin " . $name);
      $response = file_get_contents($url);
      preg_match("/(https:\/\/fr.linkedin.com.*)&/", $response, $l);
      $link = explode('&', $l[0])[0];
      return $link;
    }
}

?>
