<?php

/*function gen_one_to_three(): Generator
{
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}*/


/*$input = <<<'EOF'
1;PHP;Likes dollar signs
2;Python;Likes whitespace
3;Ruby;Likes blocks
EOF;*/
/**
 * @param $input
 * @return Generator
 */
/*function input_parser($input): Generator
{
    foreach (explode("\n", $input) as $line) {
        $fields = explode(';', $line);
        $id = array_shift($fields);

        yield $id => $fields;
    }
}

foreach (input_parser($input) as $id => $fields) {
    echo "$id:\n";
    echo "    $fields[0]\n";
    echo "    $fields[1]\n";
}*/

/*function gen_three_nulls() {
    foreach (range(1, 3) as $i) {
        yield;//return null
    }
}

var_dump(iterator_to_array(gen_three_nulls()));
*/
//yield reference
/**
 * @return Generator
 */
/*function &gen_reference(): Generator
{

    $value = 3;

    while($value > 0) {
        yield $value;
    }
}
foreach (gen_reference() as &$number) {
    echo(--$number);
}*/

function count_to_ten(): Generator
{
    yield 1;
    yield 2;
    yield from [3, 4];
    yield from new ArrayIterator([5, 6]);
    yield from seven_eight();
    return yield from nine_ten();
}

function seven_eight(): Generator
{
    yield 7;
    yield from eight();
}

function eight(): Generator
{
    yield 8;
}

function nine_ten(): Generator
{
    yield 9;
    return 10;
}

$gen = count_to_ten();
foreach ($gen as $num) {
    echo "$num ";
}
echo $gen->getReturn();

?>