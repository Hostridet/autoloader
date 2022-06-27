<?php

namespace secclass;
class ClassGoodbye
{
    public function say() {
        echo "Goodbye, I'm ".get_class($this). "!";
        echo'</br>';
    }
}
?>