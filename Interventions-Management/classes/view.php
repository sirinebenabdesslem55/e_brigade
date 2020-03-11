<?php
class View {
    private $vars;
    public function construct(){}
    public function render($viewname){
        if (isset($this->vars)){
            extract($this->vars);
        }

        echo '<!doctype html>';
        echo '<html lang="fr">';
        echo '<head>';
        include VIEWS.DS.'includes'.DS.'header.php';
        //include VIEWS.DS.'includes'.DS.'navebar.php';
        echo '</head>';
        echo '<body>';
        include VIEWS.DS.'includes'.DS.'sidebar.php';
        //include VIEWS.DS.'includes'.DS.'divs.php';
        include VIEWS.DS.strtolower($viewname).'.php';
        echo '</body>';
        include VIEWS.DS.'includes'.DS.'footer.php';
        include VIEWS.DS.'includes'.DS.'bs_js.php';
        echo '</html>';

    }
    public function setVar($key, $value = null){
        if (is_array($key)){
            $this->vars = $key;
        } else {
            $this->vars[$key] = $value;
        }
    }
}
?>