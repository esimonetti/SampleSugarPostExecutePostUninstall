<?php
$manifest = array (
  'id' => 'es_post_actions',
  'built_in_version' => '7.9.1.0',
  'name' => 'Sample Post Actions',
  'description' => 'Sample Post Actions',
  'version' => '0.1',
  'author' => 'Enrico Simonetti',
  'is_uninstallable' => true,
  'published_date' => '2017-10-06 19:15:12',
  'type' => 'module',
  'acceptable_sugar_versions' => 
  array (
    'exact_matches' => 
    array (
    ),
    'regex_matches' => 
    array (
      0 => '^7.9.[\\d]+.[\\d]+$',
    ),
  ),
);
$installdefs = array();
$installdefs['post_execute'] = array( 
    '<basepath>/scripts/post_execute.php',
);
$installdefs['post_uninstall'] = array( 
    '<basepath>/scripts/post_uninstall.php',
);
