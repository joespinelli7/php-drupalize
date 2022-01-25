<?php

//w/ namespaces, you typically match the namespace of a class to its directory although it is not required
namespace Batman\Robin\Spiderman\Superman;

use DateTime;

class Greeting {
    public function getMessage() {
        echo "Welcome to Pet world🐶🌎";

//        DateTime() is a core class but since you're calling in inside of a namespaced class and namespaces work like
//        directories, you have essentialled moved DateTime to this namespace (Batman\Robin\Spiderman\Superman\DateTime)
//        (uncomment to see error)
//        $dt = new DateTime();

//        2 ways to fix it:
//        1. Use fully qualified class name:
//        $dt = new \DateTime();

//        2. Add use statement at top of file to reference the class:
//        (then you can call on it the same way you initially called it, on line 15)
//        $dt = new DateTime();
//        echo $dt->getTimestamp();
    }
}

?>