<?php

// Detect environment automatically
$host = $_SERVER["HTTP_HOST"];

if ($host === "localhost") {
  // Localhost
  define("BASE_URL", "/group-project/");
} else {
  // InfinityFree (live server)
  define("BASE_URL", "/");
}
