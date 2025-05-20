<?php

class ScriptJS
{

    public static function btnScript(): string
    {
        return <<<SCRIPT
<script>
    let pantalla = document.getElementById('pantalla');
    let expresion = "";

    document.querySelectorAll('.btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const val = btn.dataset.valor;

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
SCRIPT;
    }
}
