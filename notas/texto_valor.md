#  

```php
// script que crea una interfaz para una calculadora. Necesito que el valor por defecto sea distinto del valor logico
// es decir, algo como el value="" de los input o select pero para el button para separar lña vista de mi logica
    public function interfaz(): string {
        $vista = <<<HTML
<section class="interfaz-calculadora">        
<h4 class="pantalla" id="pantalla"><small>'Calcular' 00<hr>+, -, /, *...,</small></h4>        
<div class="calculadora">        
<button class="btn">7</button>
<button class="btn">8</button>
<button class="btn">9</button>
<button class="btn">4</button>
<button class="btn">5</button>
<button class="btn">6</button>
<button class="btn">1</button>
<button class="btn">2</button>
<button class="btn">3</button>
<button class="btn">0</button>
<button class="btn">+</button>
<button class="btn">-</button>
<button class="btn">*</button>
<button class="btn">/</button>
<button class="btn">=</button>
<button class="btn">C</button>
<button class="btn">%</button>
<button class="btn">¿</button>
</div>
HTML;

```