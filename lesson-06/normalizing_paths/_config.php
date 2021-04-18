<?php

  // Set our absolute path references
  $dir = dirname(__FILE__) . '\_includes';
  set_include_path($dir);

  // Set our absolute link path reference (absolute URLs)
  $document_root = realpath($_SERVER["DOCUMENT_ROOT"]);
  $application_root = dirname(__FILE__);
  $link_path = str_replace($document_root, '', $application_root);
  define('BASE_PATH', $link_path);
  
?>