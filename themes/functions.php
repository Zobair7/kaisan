<?php
/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $ka = CKaisan::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($ka->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($ka->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($ka->request, true)) . "</pre>";
  return $html;
}


/**
* Prepend the base_url.
*/
function base_url($url) {
  return $ka->request->base_url . trim($url, '/');
}


/**
* Return the current url.
*/
function current_url() {
  return $ka->request->current_url;
}
