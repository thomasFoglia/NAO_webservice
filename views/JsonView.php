<?php

class JsonView  {
    public function render($content) {
      header('Content-Type: application/json; charset=utf8');
      echo $content;
    }
}
