<?php

namespace secclass;
class ClassHello
{
    public function say() {
        echo "Hello, I'm ".get_class($this). "!";
        echo'</br>';
    }
}

?>