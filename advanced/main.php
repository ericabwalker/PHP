<?php 
include 'inheritance_hierarchy.php';

$computer1 = new Computer();
$computer1->get_model("computer model ");
$computer1->print_serial("123456789abc ");
$computer1->get_storage_capacity("156GB ");
$computer1->print_nickname("Bob Mackie ");
$computer1->get_users(array('Sarah ', 'James ', 'Bill '));
$computer1->get_RAM("3289328 ");
$computer1->get_year("2019 ");


$workstation1 = new Workstation();
$workstation1->is_LAN_member(true);
echo " ";
$workstation1->print_lan_address("14028.2390.29 ");
$workstation1->num_graphics_cards(4);
echo " ";
$workstation1->get_operating_system("Catalina ");
$workstation1->get_model("a model computer ");


$macbook1 = new Mac();
$macbook1->get_power_connection("Lightning");
$macbook1->print_applecare(false);
echo " ";
$macbook1->is_laptop(true);
echo " ";
$macbook1->has_touchID(false);
echo " ";
$macbook1->is_justin_long(true);
echo " ";
$macbook1->get_model("MacBook Pro ");


$pc1 = new PC();
$pc1->get_manufacturer("Dell ");
$pc1->is_john_hodgman(true);
echo " ";
$pc1->num_graphics_cards(3);
echo " ";


$server1 = new Server();
$server1->get_services(array("test", "service ")); 
$server1->print_clients(array("Sally", " Jesse ")); 
$server1->print_ssh(array("ssh", "key "));
$server1->print_location("California ");
$server1->print_last_request("GET ");



$webserver1 = new WebServer();
$webserver1->is_LAN_member(true);
echo " ";
$webserver1->print_lan_address("123.45.53 ");
$webserver1->print_load_limit("12GB ");


$databaseserver1 = new DatabaseServer();
$databaseserver1->get_query_language(" MySQL ");
$databaseserver1->get_database_application("Sabre ");

?>