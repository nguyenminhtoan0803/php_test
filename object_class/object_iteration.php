<?php

class ArrayAccessImpl implements ArrayAccess {

    private $data = array();

    public function offsetUnset($index) {}

    public function offsetSet($index, $value) {
//    echo ("SET: ".$index."<br>");

        if(isset($data[$index])) {
            unset($data[$index]);
        }

        $u = &$this->data[$index];
        if(is_array($value)) {
            $u = new ArrayAccessImpl();
            foreach($value as $idx=>$e)
                $u[$idx]=$e;
        } else
            $u=$value;
    }

    public function offsetGet($index) {
//    echo ("GET: ".$index."<br>");

        if(!isset($this->data[$index]))
            $this->data[$index]=new ArrayAccessImpl();

        return $this->data[$index];
    }

    public function offsetExists($index) {
//    echo ("EXISTS: ".$index."<br>");

        if(isset($this->data[$index])) {
            if($this->data[$index] instanceof ArrayAccessImpl) {
                if(count($this->data[$index]->data)>0)
                    return true;
                else
                    return false;
            } else
                return true;
        } else
            return false;
    }

}

    $data = new ArrayAccessImpl();

    $data['string']="Just a simple string";
    $data['number']=33;
    $data['array']['another_string']="Alpha";
    $data['array']['some_object']=new stdClass();
    $data['array']['another_array']['x']['y']="LOL @ Whoever said it can't be done !";
    $data['blank_array']=array();

    echo "'array' Isset? "; print_r(isset($data['array'])); echo "<hr />";
    echo "<pre>"; print_r($data['array']['non_existent']); echo "</pre>If attempting to read an offset that doesn't exist it returns a blank object! Use isset() to check if it exists!<br>";
    echo "'non_existent' Isset? "; print_r(isset($data['array']['non_existent'])); echo "<br />";
    echo "<pre>"; print_r($data['blank_array']); echo "</pre>A blank array unfortunately returns similar results :(<br />";
    echo "'blank_array' Isset? "; print_r(isset($data['blank_array'])); echo "<hr />";
    echo "<pre>"; print_r($data); echo "</pre> (non_existent remains in the structure. If someone can help to solve this I'll appreciate it)<hr />";

    echo "Display some value that exists: ".$data['array']['another_string'];

?>