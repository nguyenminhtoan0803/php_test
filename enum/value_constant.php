<?php

enum Direction implements ArrayAccess
{
    case Up;
    case Down;

    public function offsetExists(mixed $offset): bool
    {

        return $offset = 'short'?true:false;
    }

    public function offsetGet(mixed $offset): mixed
    {
        return self::offsetSet($offset, $this);
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {

    }

    public function offsetUnset(mixed $offset): void
    {
    }
}

enum Foo
{
    case Bar;
}

enum Baz:int
{
    case Beep = 5;
}

print_r(Foo::Bar);
print_r(Baz::Beep);
?>