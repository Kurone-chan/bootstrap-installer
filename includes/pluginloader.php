<?php

  $cssPluginDir = scandir("../resources/plugins/css");
  $jsPluginDir = scandir("../resources/plugins/js");
  
  foreach($cssPlugin as $cssPluginDir)
  {
	  echo '<link href="//' . $sitehost . '/resources/plugins/css/' . $cssPlugin . '/plugin.css" rel="stylesheet">';
  }
  
  foreach($jsPlugin as $jsPluginDir)
  {
	  echo '<script src="//' . $sitehost . '/resources/plugins/js/' . $jsPlugin . '/plugin.js"></script>';
  }

?>