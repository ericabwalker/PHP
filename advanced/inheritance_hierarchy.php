<?php 

class Computer {
    public $model;
    private $serial_number; 
    public $storage_capacity;
    protected $nickname;
    private $users;
    public $amt_RAM; 
    public $manufacture_yr; 
}

class Workstation extends Computer {
    public $LAN_member; 
    private $LAN_address;
    public $graphics_cards; 
    public $operating_sys; 
}

class Mac extends Workstation {
    public $power_connection; 
    protected $has_applecare; 
    public $is_laptop; 
    public $has_touchID; 
    public $is_justin_long; 
}

class PC extends Workstation {
    public $manufacturer; 
    public $is_john_hodgman; 
}

class Server extends Computer {
    public $services; 
    protected $clients; 
    private $ssh_keys; 
    protected $location; 
    protected $last_request;
}

class WebServer extends Server {
    public $LAN_member; 
    private $LAN_address; 
    protected $load_limit;
}

class DatabaseServer extends Server {
    public $query_language;
    public $database_application;
}

?>