<?php

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
}

function urlIs($pageUrl)
{
  return $_SERVER["REQUEST_URI"] === $pageUrl;
}
