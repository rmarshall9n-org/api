<?php

$env = $_ENV['environment'];

echo <<<JSON
{
  "api": "success 0.0.5",
  "env": "{$env}"
}
JSON;
