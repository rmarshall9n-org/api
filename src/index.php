<?php

$env = $_ENV['environment'];

echo <<<JSON
{
  "api": "success v3",
  "env": "{$env}"
}
JSON;
