<?php
require("connect.php");

if (PHP_VERSION>='5')
 require_once('domxml-php4-to-php5.php');

// Start XML file, create parent node
$doc = domxml_new_doc("1.0");
$node = $doc->create_element("marcador");
$parnode = $doc->append_child($node);

// Opens a connection to a MySQL server
$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the marcador table
$query = "SELECT * FROM marcador WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // Add to XML document node
  $node = $doc->create_element("marker");
  $newnode = $parnode->append_child($node);

  $newnode->set_attribute("id", $row['id']);
  $newnode->set_attribute("Nombre", $row['Nombre']);
  $newnode->set_attribute("Ubicacion", $row['Ubicacion']);
  $newnode->set_attribute("Latitud", $row['Latitud']);
  $newnode->set_attribute("Longitud", $row['Longitud']);
  //$newnode->set_attribute("Tipo", $row['Tipo']);
  $newnode->set_attribute("Encargado", $row['Encargado']);
}

$xmlfile = $doc->dump_mem();
echo $xmlfile;

?>