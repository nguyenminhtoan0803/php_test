<?php
// Declare the interface 'Template'
interface Template
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implement the interface
// This will work
class WorkingTemplate implements Template
{
    private $vars = [];

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        return $template;
    }
}

// This will not work
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (Template::getHtml)
class BadTemplate implements Template
{
    private $vars = [];

    public function setVariable($name, $var)
    {
       return $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        return $template;
    }
}

$bad = new (BadTemplate::class);
//print($bad->setVariable('toan',5));
interface A
{
    public function foo(string $s): string;

    public static function bar(int $i): int;
}

// An abstract class may implement only a portion of an interface.
// Classes that extend the abstract class must implement the rest.
abstract class B implements A
{
    public int $i = 10;
    public function foo(string $s): string
    {
        return $s . PHP_EOL;
    }

    public static function bar(int $i): int{
        return $i;
    }
}

class C extends B
{
}

$c = new C();
echo $c->foo('toan');

?>