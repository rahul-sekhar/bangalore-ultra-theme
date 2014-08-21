<?php

define('CACHE_VERSION', '3');
define('CACHE_DIRECTORY', get_template_directory() . '/cache/' . CACHE_VERSION);
define('CACHE_URI', get_template_directory_uri() . '/cache/' . CACHE_VERSION);

if (!file_exists(CACHE_DIRECTORY)) {
    mkdir(CACHE_DIRECTORY, 0775, true);
}