<?php

$env = $_ENV['environment'];

echo <<<JSON
{
  "api": "success 0.0.3",
  "env": "{$env}"
}
JSON;
