<?php

require_once 'Renderable.php';

class TextElement implements Renderable {
    private $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function render() {
        return '<p>' . htmlspecialchars($this->text) . '</p>';
    }
}
?>
