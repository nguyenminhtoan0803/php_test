<?php

class Connection
{
    public $var1;
    public $var2;

    protected $link;
    private $dsn, $username, $password;
    /**
     * @var string
     */
    public string $foo = "adf";

    /**
     * @param $dsn
     * @param $username
     * @param $password
     */
    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }

    /**
     *
     * @return void
     */
    private function connect()
    {
        //$this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    public function __sleep()
    {
        return array($this->dsn, $this->username, $this->password);
    }

    public function __wakeup()
    {
        $this->connect();
    }

    public function __serialize(): array
    {
        return [
            'dsn' => $this->dsn,
            'user' => $this->username,
            'pass' => $this->password,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->dsn = $data['dsn'];
        $this->username = $data['user'];
        $this->password = $data['pass'];

        $this->connect();
    }

    public function __toString(): string
    {
        return $this->foo;
    }

    public function __invoke($x)
    {
        var_dump($x);
    }

    /**
     * @param $an_array
     * @return A
     */
    public static function __set_state($an_array)
    {
        $obj = new Connection;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }

    public function __debugInfo() {
        return [
            'propSquared' => $this->dsn ** 2,
        ];
    }
}

$connection = new Connection(12,'toannguyen', '1234');
var_dump(is_callable($connection));
echo $connection;

    $connection->var1 = 5;
    $connection->var2 = 'foo';

    $b = var_export($connection, true);
    var_dump($b);
    $c = $b;
    var_dump($c);

var_dump(new Connection('google.com','toannguyen', '1234'));
?>
