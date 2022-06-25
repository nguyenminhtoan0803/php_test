<?php

interface Colorful
{
    public function color(): string;
}

trait Rectangle
{
    public function shape(): string
    {
        return "Rectangle";
    }
}

enum Suit:string implements Colorful
{
    use Rectangle;

    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';

    /**
     * @throws Exception
     */
    public function color(): string
    {
        return match ($this) {
            Suit::Diamonds => 'Red',
            Suit::Clubs, Suit::Spades => 'Black',
            self::Hearts => throw new Exception('To be implemented'),
        };
    }

//    public function shape(): string
//    {
//        return "Rectangle";
//    }
}

/*$result = 'D';
$suit = Suit::from($result);
// Invalid data throws a ValueError: "X" is not a valid scalar value for enum "Suit"
print $suit->value;

$suit = Suit::tryFrom('C') ?? Suit::Spades;
// Invalid data returns null, so Suit::Spades is used instead.
print $suit->value;*/

enum Size
{
    case Small;
    case Medium;
    case Large;

    public const Huge = self::Large;
    public static function fromLength(int $dm): object
    {
        return match(true) {
            $dm < 50 => self::Small,
            $dm < 100 => self::Medium,
            default => Size::Large,
        };
    }
}

//ar_dump(Size::Large->fromLength(99));
echo Suit::Diamonds->shape();
?>
