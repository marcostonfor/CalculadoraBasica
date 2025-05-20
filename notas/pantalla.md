# ¡Perfecto! Me alegra que ya funcione el diseño. Ahora vamos a implementar una **pantalla** que muestre:

* Los **botones pulsados** (expresión).
* El **resultado** cuando se pulsa `=`.

Y lo haremos **sin recargar la página**, usando **AJAX** con `fetch()` en JavaScript. Si luego quieres eliminar JS, lo adaptamos, pero para algo dinámico como esto es lo ideal.

---

## ✅ 1. Estructura visual

Vamos a añadir una **pantalla de texto** arriba de la calculadora:

### 🎯 Resultado esperado

```
+------------------------+
|  12 + 5 * 2            | <- pantalla
+------------------------+
|  [7] [8] [9] [/]       |
|  [4] [5] [6] [*]       |
|  [1] [2] [3] [-]       |
|  [0] [C] [=] [+]       |
```

---

## 🧱 Paso a paso

### 📄 `InterfazBotones.php`

```php
class InterfazBotones {
    public function interfaz(): string {
        return <<<HTML
<div class="pantalla" id="pantalla">0</div>
<div class="calculadora">
    <button class="btn">7</button>
    <button class="btn">8</button>
    <button class="btn">9</button>
    <button class="btn">/</button>
    <button class="btn">4</button>
    <button class="btn">5</button>
    <button class="btn">6</button>
    <button class="btn">*</button>
    <button class="btn">1</button>
    <button class="btn">2</button>
    <button class="btn">3</button>
    <button class="btn">-</button>
    <button class="btn">0</button>
    <button class="btn">C</button>
    <button class="btn">=</button>
    <button class="btn">+</button>
</div>
<script>
let pantalla = document.getElementById('pantalla');
let expresion = "";

document.querySelectorAll('.btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const val = btn.textContent;

        if (val === 'C') {
            expresion = "";
            pantalla.textContent = "0";
        } else if (val === '=') {
            fetch('procesar.php', {
                method: 'POST',
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "expresion=" + encodeURIComponent(expresion)
            })
            .then(res => res.text())
            .then(resultado => {
                pantalla.textContent = resultado;
                expresion = resultado;
            });
        } else {
            expresion += val;
            pantalla.textContent = expresion;
        }
    });
});
</script>
HTML;
    }
}
```

---

### 📄 `Estilos.php` (añade esto a los estilos)

```php
.pantalla {
    background: #eee;
    padding: 10px;
    font-size: 24px;
    text-align: right;
    margin: 10px auto;
    max-width: 240px;
    box-sizing: border-box;
    border: 1px solid #ccc;
}
```

---

### 📄 `procesar.php` (nuevo archivo)

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expresion = $_POST['expresion'] ?? '';

    // Evaluar de forma segura
    $expresion = preg_replace('/[^0-9\+\-\*\/\.\(\)]/', '', $expresion);

    try {
        eval('$resultado = ' . $expresion . ';');
        echo $resultado;
    } catch (Throwable $e) {
        echo 'Error';
    }
}
```

> ⚠️ **Nota de seguridad**: Usamos `eval()` con sanitización básica. No lo uses en producción sin validaciones más estrictas. Para una versión más segura se puede usar una librería matemática en lugar de `eval`.

---

## ✅ Resultado

* Pantalla que muestra los botones pulsados.
* Resultado mostrado al pulsar `=`.
* Sin recargar la página gracias a `fetch()`.

---

¿Quieres que te lo separe en clases también (por ejemplo, una clase `Calculadora` que procese las operaciones)?
