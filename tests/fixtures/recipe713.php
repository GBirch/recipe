<?php
// @codingStandardsIgnoreFile
/**
 * @file
 * A database agnostic dump for testing purposes.
 *
 * This file was generated by the Drupal 8.0 db-tools.php script.
 */

use Drupal\Core\Database\Database;

$connection = Database::getConnection();
$connection->schema()->createTable('field_config', array(
  'fields' => array(
    'id' => array(
      'type' => 'serial',
      'not null' => TRUE,
      'size' => 'normal',
    ),
    'field_name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '32',
    ),
    'type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
    ),
    'module' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'active' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'storage_type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
    ),
    'storage_module' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'storage_active' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'locked' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'data' => array(
      'type' => 'blob',
      'not null' => TRUE,
      'size' => 'normal',
    ),
    'cardinality' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'translatable' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'deleted' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
  ),
  'primary key' => array(
    'id',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->schema()->createTable('field_config_instance', array(
  'fields' => array(
    'id' => array(
      'type' => 'serial',
      'not null' => TRUE,
      'size' => 'normal',
    ),
    'field_id' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
    ),
    'field_name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '32',
      'default' => '',
    ),
    'entity_type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '32',
      'default' => '',
    ),
    'bundle' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'data' => array(
      'type' => 'blob',
      'not null' => TRUE,
      'size' => 'normal',
    ),
    'deleted' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
  ),
  'primary key' => array(
    'id',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->schema()->createTable('languages', array(
  'fields' => array(
    'language' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '12',
      'default' => '',
    ),
    'name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '64',
      'default' => '',
    ),
    'native' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '64',
      'default' => '',
    ),
    'direction' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'enabled' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'plurals' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'formula' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'domain' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'prefix' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'weight' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'javascript' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '64',
      'default' => '',
    ),
  ),
  'primary key' => array(
    'language',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('languages')
  ->fields(array(
    'language',
    'name',
    'native',
    'direction',
    'enabled',
    'plurals',
    'formula',
    'domain',
    'prefix',
    'weight',
    'javascript',
  ))
  ->values(array(
    'language' => 'en',
    'name' => 'English',
    'native' => 'English',
    'direction' => '0',
    'enabled' => '1',
    'plurals' => '0',
    'formula' => '',
    'domain' => '',
    'prefix' => '',
    'weight' => '0',
    'javascript' => '',
  ))
  ->values(array(
    'language' => 'is',
    'name' => 'Icelandic',
    'native' => 'Íslenska',
    'direction' => '0',
    'enabled' => '1',
    'plurals' => '0',
    'formula' => '',
    'domain' => 'is.drupal.org',
    'prefix' => 'is',
    'weight' => '0',
    'javascript' => '',
  ))
  ->execute();

$connection->schema()->createTable('node', array(
  'fields' => array(
    'nid' => array(
      'type' => 'serial',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'vid' => array(
      'type' => 'int',
      'not null' => FALSE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '32',
      'default' => '',
    ),
    'language' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '12',
      'default' => '',
    ),
    'title' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'uid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'status' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '1',
    ),
    'created' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'changed' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'comment' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'promote' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'sticky' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'tnid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
    'translate' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
  ),
  'primary key' => array(
    'nid',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('node')
->fields(array(
  'nid',
  'vid',
  'type',
  'language',
  'title',
  'uid',
  'status',
  'created',
  'changed',
  'comment',
  'promote',
  'sticky',
  'tnid',
  'translate',
))
->values(array(
  'nid' => '1',
  'vid' => '1',
  'type' => 'recipe',
  'language' => 'und',
  'title' => 'Salt water',
  'uid' => '1',
  'status' => '1',
  'created' => '1372914408',
  'changed' => '1372914408',
  'comment' => '2',
  'promote' => '1',
  'sticky' => '0',
  'tnid' => '0',
  'translate' => '0',
))
->values(array(
  'nid' => '2',
  'vid' => '2',
  'type' => 'recipe',
  'language' => 'en',
  'title' => 'English recipe',
  'uid' => '1',
  'status' => '1',
  'created' => '1372914408',
  'changed' => '1372914408',
  'comment' => '2',
  'promote' => '1',
  'sticky' => '0',
  'tnid' => '2',
  'translate' => '0',
))
->values(array(
  'nid' => '3',
  'vid' => '3',
  'type' => 'recipe',
  'language' => 'is',
  'title' => 'Islandic recipe',
  'uid' => '1',
  'status' => '1',
  'created' => '1372914408',
  'changed' => '1372914408',
  'comment' => '2',
  'promote' => '1',
  'sticky' => '0',
  'tnid' => '2',
  'translate' => '0',
))
->execute();

$connection->schema()->createTable('node_comment_statistics', array(
  'fields' => array(
    'nid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
    'cid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'last_comment_timestamp' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'last_comment_name' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => '60',
    ),
    'last_comment_uid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'comment_count' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
  ),
  'primary key' => array(
    'nid',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('node_comment_statistics')
->fields(array(
  'nid',
  'cid',
  'last_comment_timestamp',
  'last_comment_name',
  'last_comment_uid',
  'comment_count',
))
->values(array(
  'nid' => '1',
  'cid' => '0',
  'last_comment_timestamp' => '1372914408',
  'last_comment_name' => NULL,
  'last_comment_uid' => '1',
  'comment_count' => '0',
))
->values(array(
  'nid' => '2',
  'cid' => '0',
  'last_comment_timestamp' => '1372914408',
  'last_comment_name' => NULL,
  'last_comment_uid' => '1',
  'comment_count' => '0',
))
->values(array(
  'nid' => '3',
  'cid' => '0',
  'last_comment_timestamp' => '1372914408',
  'last_comment_name' => NULL,
  'last_comment_uid' => '1',
  'comment_count' => '0',
))
->execute();

$connection->schema()->createTable('node_revision', array(
  'fields' => array(
    'nid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
    'vid' => array(
      'type' => 'serial',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'uid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'title' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'log' => array(
      'type' => 'text',
      'not null' => TRUE,
      'size' => 'normal',
    ),
    'timestamp' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'status' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '1',
    ),
    'comment' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'promote' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'sticky' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
  ),
  'primary key' => array(
    'vid',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('node_revision')
->fields(array(
  'nid',
  'vid',
  'uid',
  'title',
  'log',
  'timestamp',
  'status',
  'comment',
  'promote',
  'sticky',
))
->values(array(
  'nid' => '1',
  'vid' => '1',
  'uid' => '1',
  'title' => 'Salt water',
  'log' => '',
  'timestamp' => '1372914408',
  'status' => '1',
  'comment' => '2',
  'promote' => '1',
  'sticky' => '0',
))
->values(array(
  'nid' => '2',
  'vid' => '2',
  'uid' => '1',
  'title' => 'English recipe',
  'log' => '',
  'timestamp' => '1372914408',
  'status' => '1',
  'comment' => '2',
  'promote' => '1',
  'sticky' => '0',
))
->values(array(
  'nid' => '3',
  'vid' => '3',
  'uid' => '1',
  'title' => 'Islandic recipe',
  'log' => '',
  'timestamp' => '1372914408',
  'status' => '1',
  'comment' => '2',
  'promote' => '1',
  'sticky' => '0',
))
->execute();

$connection->schema()->createTable('node_type', array(
  'fields' => array(
    'type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '32',
    ),
    'name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'base' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
    ),
    'module' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
    ),
    'description' => array(
      'type' => 'text',
      'not null' => TRUE,
      'size' => 'normal',
    ),
    'help' => array(
      'type' => 'text',
      'not null' => TRUE,
      'size' => 'normal',
    ),
    'has_title' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'title_label' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'custom' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'modified' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'locked' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'disabled' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'orig_type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
  ),
  'primary key' => array(
    'type',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('node_type')
->fields(array(
  'type',
  'name',
  'base',
  'module',
  'description',
  'help',
  'has_title',
  'title_label',
  'custom',
  'modified',
  'locked',
  'disabled',
  'orig_type',
))
->values(array(
  'type' => 'recipe',
  'name' => 'Recipe',
  'base' => 'recipe',
  'module' => 'recipe',
  'description' => 'Share your favorite recipes with your fellow cooks.',
  'help' => '',
  'has_title' => '1',
  'title_label' => 'Title',
  'custom' => '0',
  'modified' => '0',
  'locked' => '1',
  'disabled' => '0',
  'orig_type' => 'recipe',
))
->execute();

$connection->schema()->createTable('recipe', array(
  'fields' => array(
    'nid' => array(
      'type' => 'serial',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'source' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => '255',
    ),
    'yield' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
    ),
    'yield_unit' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '64',
      'default' => '',
    ),
    'description' => array(
      'type' => 'text',
      'not null' => FALSE,
      'size' => 'normal',
    ),
    'instructions' => array(
      'type' => 'text',
      'not null' => FALSE,
      'size' => 'normal',
    ),
    'notes' => array(
      'type' => 'text',
      'not null' => FALSE,
      'size' => 'normal',
    ),
    'preptime' => array(
      'type' => 'int',
      'not null' => FALSE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
    'cooktime' => array(
      'type' => 'int',
      'not null' => FALSE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
  ),
  'primary key' => array(
    'nid',
  ),
  'mysql_character_set' => 'utf8mb4',
));

$connection->insert('recipe')
->fields(array(
  'nid',
  'source',
  'yield',
  'yield_unit',
  'description',
  'instructions',
  'notes',
  'preptime',
  'cooktime',
))
->values(array(
  'nid' => '1',
  'source' => 'John Doe',
  'yield' => '1',
  'yield_unit' => 'Servings',
  'description' => 'Basic salt water.',
  'instructions' => "Combine water and salt in a glass.\r\n\r\nStir.",
  'notes' => 'Do not consume!',
  'preptime' => '1',
  'cooktime' => '2',
))
->values(array(
  'nid' => '2',
  'source' => 'John Doe',
  'yield' => '1',
  'yield_unit' => 'Servings',
  'description' => 'A test recipe with English set as the language.',
  'instructions' => "Example instructions.",
  'notes' => 'Example notes.',
  'preptime' => '1',
  'cooktime' => '2',
))
->values(array(
  'nid' => '3',
  'source' => 'Johann Doe',
  'yield' => '1',
  'yield_unit' => 'Servings',
  'description' => 'A test recipe with Islandic set as the language.',
  'instructions' => "Islandic instructions.",
  'notes' => 'Islandic notes.',
  'preptime' => '1',
  'cooktime' => '2',
))
->execute();

$connection->schema()->createTable('recipe_ingredient', array(
  'fields' => array(
    'id' => array(
      'type' => 'serial',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'name' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => '255',
    ),
    'link' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
  ),
  'primary key' => array(
    'id',
  ),
  'mysql_character_set' => 'utf8mb4',
));

$connection->insert('recipe_ingredient')
->fields(array(
  'id',
  'name',
  'link',
))
->values(array(
  'id' => '1',
  'name' => 'water',
  'link' => '0',
))
->values(array(
  'id' => '2',
  'name' => 'salt',
  'link' => '0',
))
->execute();

$connection->schema()->createTable('recipe_node_ingredient', array(
  'fields' => array(
    'id' => array(
      'type' => 'serial',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'nid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'unit_key' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'quantity' => array(
      'type' => 'float',
      'not null' => FALSE,
      'size' => 'normal',
    ),
    'ingredient_id' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'weight' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'note' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
  ),
  'primary key' => array(
    'id',
  ),
  'mysql_character_set' => 'utf8mb4',
));

$connection->insert('recipe_node_ingredient')
->fields(array(
  'id',
  'nid',
  'unit_key',
  'quantity',
  'ingredient_id',
  'weight',
  'note',
))
->values(array(
  'id' => '1',
  'nid' => '1',
  'unit_key' => 'cup',
  'quantity' => '2',
  'ingredient_id' => '1',
  'weight' => '0',
  'note' => 'cold',
))
->values(array(
  'id' => '2',
  'nid' => '1',
  'unit_key' => 'tablespoon',
  'quantity' => '1',
  'ingredient_id' => '2',
  'weight' => '1',
  'note' => '',
))
->values(array(
  'id' => '3',
  'nid' => '2',
  'unit_key' => 'cup',
  'quantity' => '2',
  'ingredient_id' => '1',
  'weight' => '0',
  'note' => 'cold',
))
->values(array(
  'id' => '4',
  'nid' => '3',
  'unit_key' => 'cup',
  'quantity' => '2',
  'ingredient_id' => '1',
  'weight' => '0',
  'note' => 'cold',
))
->execute();

$connection->schema()->createTable('role', array(
  'fields' => array(
    'rid' => array(
      'type' => 'serial',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '64',
      'default' => '',
    ),
    'weight' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
  ),
  'primary key' => array(
    'rid',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('role')
->fields(array(
  'rid',
  'name',
  'weight',
))
->values(array(
  'rid' => '1',
  'name' => 'anonymous user',
  'weight' => '0',
))
->values(array(
  'rid' => '2',
  'name' => 'authenticated user',
  'weight' => '1',
))
->values(array(
  'rid' => '3',
  'name' => 'administrator',
  'weight' => '2',
))
->execute();

$connection->schema()->createTable('role_permission', array(
  'fields' => array(
    'rid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'permission' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'module' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
  ),
  'primary key' => array(
    'rid',
    'permission',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->schema()->createTable('system', array(
  'fields' => array(
    'filename' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '12',
      'default' => '',
    ),
    'owner' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'status' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'bootstrap' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'schema_version' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '-1',
    ),
    'weight' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'info' => array(
      'type' => 'blob',
      'not null' => FALSE,
      'size' => 'normal',
    ),
  ),
  'primary key' => array(
    'filename',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('system')
->fields(array(
  'filename',
  'name',
  'type',
  'owner',
  'status',
  'bootstrap',
  'schema_version',
  'weight',
  'info',
))
->values(array(
  'filename' => 'modules/locale/locale.module',
  'name' => 'locale',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7005',
  'weight' => '0',
  'info' => 'a:13:{s:4:"name";s:6:"Locale";s:11:"description";s:119:"Adds language handling functionality and enables the translation of the user interface to languages other than English.";s:7:"package";s:4:"Core";s:7:"version";s:4:"7.40";s:4:"core";s:3:"7.x";s:5:"files";a:1:{i:0;s:11:"locale.test";}s:9:"configure";s:30:"admin/config/regional/language";s:7:"project";s:6:"drupal";s:9:"datestamp";s:10:"1444866674";s:5:"mtime";i:1444866674;s:12:"dependencies";a:0:{}s:3:"php";s:5:"5.2.4";s:9:"bootstrap";i:0;}',
))
->values(array(
  'filename' => 'modules/node/node.module',
  'name' => 'node',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7015',
  'weight' => '0',
  'info' => 'a:15:{s:4:"name";s:4:"Node";s:11:"description";s:66:"Allows content to be submitted to the site and displayed on pages.";s:7:"package";s:4:"Core";s:7:"version";s:4:"7.40";s:4:"core";s:3:"7.x";s:5:"files";a:2:{i:0;s:11:"node.module";i:1;s:9:"node.test";}s:8:"required";b:1;s:9:"configure";s:21:"admin/structure/types";s:11:"stylesheets";a:1:{s:3:"all";a:1:{s:8:"node.css";s:21:"modules/node/node.css";}}s:7:"project";s:6:"drupal";s:9:"datestamp";s:10:"1444866674";s:5:"mtime";i:1444866674;s:12:"dependencies";a:0:{}s:3:"php";s:5:"5.2.4";s:9:"bootstrap";i:0;}',
))
->values(array(
  'filename' => 'sites/default/modules/recipe/recipe.module',
  'name' => 'recipe',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7004',
  'weight' => '0',
  'info' => 'a:11:{s:4:"name";s:6:"Recipe";s:11:"description";s:28:"Collect and display recipes.";s:7:"package";s:6:"Recipe";s:4:"core";s:3:"7.x";s:7:"version";s:7:"7.x-1.3";s:7:"project";s:6:"recipe";s:9:"datestamp";s:10:"1335415286";s:12:"dependencies";a:0:{}s:3:"php";s:5:"5.2.4";s:5:"files";a:0:{}s:9:"bootstrap";i:0;}',
))
->values(array(
  'filename' => 'modules/user/user.module',
  'name' => 'user',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7018',
  'weight' => '0',
  'info' => 'a:15:{s:4:"name";s:4:"User";s:11:"description";s:47:"Manages the user registration and login system.";s:7:"package";s:4:"Core";s:7:"version";s:4:"7.40";s:4:"core";s:3:"7.x";s:5:"files";a:2:{i:0;s:11:"user.module";i:1;s:9:"user.test";}s:8:"required";b:1;s:9:"configure";s:19:"admin/config/people";s:11:"stylesheets";a:1:{s:3:"all";a:1:{s:8:"user.css";s:21:"modules/user/user.css";}}s:7:"project";s:6:"drupal";s:9:"datestamp";s:10:"1444866674";s:5:"mtime";i:1444866674;s:12:"dependencies";a:0:{}s:3:"php";s:5:"5.2.4";s:9:"bootstrap";i:0;}',
))
->execute();

$connection->schema()->createTable('users', array(
  'fields' => array(
    'uid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
    'name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '60',
      'default' => '',
    ),
    'pass' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'mail' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => '254',
      'default' => '',
    ),
    'theme' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'signature' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'signature_format' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => '255',
    ),
    'created' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'access' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'login' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'status' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'timezone' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => '32',
    ),
    'language' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '12',
      'default' => '',
    ),
    'picture' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'init' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => '254',
      'default' => '',
    ),
    'data' => array(
      'type' => 'blob',
      'not null' => FALSE,
      'size' => 'normal',
    ),
  ),
  'primary key' => array(
    'uid',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('users')
->fields(array(
  'uid',
  'name',
  'pass',
  'mail',
  'theme',
  'signature',
  'signature_format',
  'created',
  'access',
  'login',
  'status',
  'timezone',
  'language',
  'picture',
  'init',
  'data',
))
->values(array(
  'uid' => '1',
  'name' => 'admin',
  'pass' => '$S$D/HVkgCg1Hvi7DN5KVSgNl.2C5g8W6oe/OoIRMUlyjkmPugQRhoB',
  'mail' => 'admin@local.host',
  'theme' => '',
  'signature' => '',
  'signature_format' => NULL,
  'created' => '0',
  'access' => '1444945097',
  'login' => '1444945097',
  'status' => '1',
  'timezone' => NULL,
  'language' => '',
  'picture' => '0',
  'init' => '',
  'data' => 'a:1:{s:7:"contact";i:1;}',
))
->execute();

$connection->schema()->createTable('users_roles', array(
  'fields' => array(
    'uid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
    'rid' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
      'unsigned' => TRUE,
    ),
  ),
  'primary key' => array(
    'uid',
    'rid',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('users_roles')
->fields(array(
  'uid',
  'rid',
))
->values(array(
  'uid' => '1',
  'rid' => '3',
))
->execute();

$connection->schema()->createTable('variable', array(
  'fields' => array(
    'name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'value' => array(
      'type' => 'blob',
      'not null' => TRUE,
      'size' => 'normal',
    ),
  ),
  'primary key' => array(
    'name',
  ),
  'mysql_character_set' => 'utf8',
));

$connection->insert('variable')
->fields(array(
  'name',
  'value',
))
->values(array(
  'name' => 'recipe_default_unit',
  'value' => 's:3:"cup";',
))
->values(array(
  'name' => 'recipe_fraction_display',
  'value' => 's:10:"{%d }%d/%d";',
))
->values(array(
  'name' => 'recipe_ingredient_name_normalize',
  'value' => 's:1:"0";',
))
->values(array(
  'name' => 'recipe_unit_display',
  'value' => 's:1:"1";',
))
->execute();
