<?php
    // class BaseClass {
    //     function __construct() {
    //         print "In BaseClass constructor\n";
    //     }
    // }

    // class SubClass extends BaseClass {
    //     function __construct() {
    //         parent::__construct();
    //         print "In SubClass constructor\n";
    //     }
    // }

    // class OtherSubClass extends BaseClass {
    //     // inherits BaseClass's constructor
    // }

    // // In BaseClass constructor
    // $obj = new BaseClass();

    // // In BaseClass constructor
    // // In SubClass constructor
    // $obj = new SubClass();

    // // In BaseClass constructor
    // $obj = new OtherSubClass();
  
    class Product {

        private ?int $id;
        private ?string $name;

        private function __construct(?int $id = null, ?string $name = null) {
            $this->id = $id;
            $this->name = $name;
        }

        public static function fromBasicData(int $id, string $name): static {
            $new = new static($id, $name);
            return $new;
        }

        public static function fromJson(string $json): static {
            $data = json_decode($json);
            return new static($data['id'], $data['name']);
        }

        public static function fromXml(string $xml): static {
            // Custom logic here.
            $data = simplexml_load_string($xml);
            $new = new static();
            $new->id = $data['id'];
            $new->name = $data['name'];
            return $new;
        }
    }

    $p1 = Product::fromBasicData(5, 'Widget');
    $p2 = Product::fromJson($p1->$name);
    $p3 = Product::fromXml($some_xml_string); 
?> 