<?php

global $rootPath;

if(file_exists($_SERVER['DOCUMENT_ROOT']))
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
else
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
