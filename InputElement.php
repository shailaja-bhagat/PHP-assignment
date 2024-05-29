<?php

require_once 'Renderable.php';

class InputElement implements Renderable {
    public function render() {
        return '<input type="text" />';
    }
}
?>