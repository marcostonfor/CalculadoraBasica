<?php
require_once './scriptJS.php';
class InterfazBotones {

    public function __construct() {
        
    }

    public function interfaz(): string {
        $vista = <<<HTML
<section class="interfaz-calculadora">        
<h4 class="pantalla" id="pantalla"><small>'Calcular' 00<hr>+, -, /, *...,</small></h4>        
<div class="calculadora">        
<button class="btn" data-valor="7">7</button>
<button class="btn" data-valor="8">8</button>
<button class="btn" data-valor="9">9</button>
<button class="btn" data-valor="4">4</button>
<button class="btn" data-valor="5">5</button>
<button class="btn" data-valor="6">6</button>
<button class="btn" data-valor="1">1</button>
<button class="btn" data-valor="2">2</button>
<button class="btn" data-valor="3">3</button>
<button class="btn" data-valor="0">0</button>
<button class="btn" data-valor="+">+</button>
<button class="btn" data-valor="-">-</button>
<button class="btn" data-valor="*">&times;</button>
<button class="btn" data-valor="/">&divide;</button>
<button class="btn" data-valor="=">=</button>
<button class="btn" data-valor="C">C</button>
<button class="btn" data-valor="%"><small>MOD</small></button>
<button class="btn" data-valor="">¿</button>
</div>
HTML;
$btnRender = ScriptJS::btnScript();

        return $vista . $btnRender;
    }
}

