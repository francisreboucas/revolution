<?php
/**
 * @package modx
 * @subpackage sources.mysql
 */
$xpdo_meta_map['modMediaSource']= array (
  'package' => 'modx.sources',
  'version' => '1.1',
  'table' => 'media_sources',
  'fields' => 
  array (
    'name' => '',
    'description' => NULL,
    'class_key' => 'sources.modFileMediaSource',
    'properties' => NULL,
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'description' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'class_key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => 'sources.modFileMediaSource',
      'index' => 'index',
    ),
    'properties' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'array',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'name' => 
    array (
      'alias' => 'name',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'name' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'class_key' => 
    array (
      'alias' => 'class_key',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'class_key' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'SourceElement' => 
    array (
      'class' => 'sources.modMediaSourceElement',
      'local' => 'id',
      'foreign' => 'source',
      'cardinality' => 'one',
      'owner' => 'local',
    ),
  ),
);
