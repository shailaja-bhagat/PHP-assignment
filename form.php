<?php 
require_once 'Renderable.php';

class Form implements Renderable {
    private $elements;

    public function __construct() {
        $this->elements = [];
    }

    public function addElement(Renderable $element) {
        $this->elements[] = $element;
    }

    public function render() {
        $formHtml = '<form>';
        foreach ($this->elements as $element) {
            $formHtml .= $element->render();
        }
        $formHtml .= '</form>';
        return $formHtml;
    }
}
?>
