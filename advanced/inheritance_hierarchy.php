<?php 

interface DatabaseServerInterface {
    public function get_query_language($query_language);
    public function get_database_application($database_application);
}

class Computer {
    public $model;
    private $serial_number; 
    public $storage_capacity;
    protected $nickname;
    private $users;
    public $amt_RAM; 
    public $manufacture_yr; 

    public function get_model($model) {
        echo $model;
    }

    private function get_serial_number($serial_number) {
        echo $serial_number;
    }

    public function print_serial($serial_number) {
        $this->get_serial_number($serial_number);
    }

    public function get_storage_capacity($storage_capacity) {
        echo $storage_capacity;
    }

    protected function get_nickname($nickname) {
        echo $nickname;
    }

    public function print_nickname($nickname) {
        $this->get_nickname($nickname);
    }

    public function get_users($users) {
        foreach ($users as $user) {
            echo $user . " ";
        }
    }

    public function get_RAM($amt_RAM) {
        echo $amt_RAM;
    }

    public function get_year($manufacture_yr) {
        echo $manufacture_yr;
    }
}

class Workstation extends Computer {
    public $LAN_member; 
    private $LAN_address;
    public $graphics_cards; 
    public $operating_sys; 

    public function is_LAN_member($LAN_member) {
        echo $LAN_member;
    }

    private function get_LAN_address($LAN_address) {
        echo $LAN_address;
    }

    public function print_lan_address($LAN_address) {
        $this->get_LAN_address($LAN_address);
    }

    public function num_graphics_cards($graphics_cards) {
        echo $graphics_cards;
    }

    public function get_operating_system($operating_sys) {
        echo $operating_sys;
    }

    public function get_model($model) {
        Computer::get_model($model);
        echo "this is a child class: " . $model;
    }
}

class Mac extends Workstation {
    public $power_connection; 
    protected $has_applecare; 
    public $is_laptop; 
    public $has_touchID; 
    public $is_justin_long; 

    public function get_power_connection($power_connection) {
        echo $power_connection;
    }

    protected function has_applecare($has_applecare) {
        echo $has_applecare;
    }

    public function print_applecare($has_applecare) {
        $this->has_applecare($has_applecare);
    }

    public function is_laptop($is_laptop) {
        echo $is_laptop;
    }

    public function has_touchID($has_touchID) {
        echo $has_touchID;
    }

    public function is_justin_long($is_justin_long) {
        echo $is_justin_long;
    }
}

class PC extends Workstation {
    public $manufacturer; 
    public $is_john_hodgman; 

    public function get_manufacturer($manufacturer) {
        echo $manufacturer;
    }

    public function is_john_hodgman($is_john_hodgman) {
        echo $is_john_hodgman;
    }
}

class Server extends Computer {
    public $services; 
    protected $clients; 
    private $ssh_keys; 
    protected $location; 
    protected $last_request;

    public function get_services($services) {
        foreach ($services as $service) {
            echo $service . " ";
        }
    }

    protected function get_clients($clients) {
        foreach ($clients as $client) {
            echo $client . " ";
        }
    }

    public function print_clients($clients) {
        $this->get_clients($clients);
    }

    private function get_ssh($ssh_keys) {
        foreach ($ssh_keys as $key) {
            echo $key . " ";
        }
    }

    public function print_ssh($ssh_keys) {
        $this->get_ssh($ssh_keys);
    }

    protected function get_location($location) {
        echo $location;
    }

    public function print_location($location) {
        $this->get_location($location);
    }

    protected function get_last_request($last_request) {
        echo $last_request;
    }

    public function print_last_request($last_request) {
        $this->get_last_request($last_request);
    }
}

class WebServer extends Server {
    public $LAN_member; 
    private $LAN_address; 
    protected $load_limit;

    public function is_LAN_member($LAN_member) {
        echo $LAN_member;
    }

    private function get_LAN_address($LAN_address) {
        echo $LAN_address;
    }

    public function print_lan_address($LAN_address) {
        $this->get_LAN_address($LAN_address);
    }

    protected function get_load_limit($load_limit) {
        echo $load_limit;
    }

    public function print_load_limit($load_limit) {
        $this->get_load_limit($load_limit);
    }
}

class DatabaseServer extends Server implements DatabaseServerInterface {
    public $query_language;
    public $database_application;

    public function get_query_language($query_language) {
        echo $query_language;
    }

    public function get_database_application($database_application) {
        echo $database_application;
    }
}