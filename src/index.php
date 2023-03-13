<?php

$env = $_ENV['environment'];
$appVersion = '0.0.11';
$chartVersion = $_ENV['chart_version'];

echo <<<JSON
{
  "env": "{$env}",
  "app_version": "{$appVersion}",
  "chart_version": "{$chartVersion}"
}
JSON;
