<?php

class Estilos {

    public function __construct() {

    }
    public static function estils(): string {

        $estils = <<<STYLE
<style>
@import url('https://fonts.cdnfonts.com/css/kg-pdx-blocks');

.interfaz-calculadora {
        width: fit-content;
        margin: 3vh auto;
        padding: 1vh 0.5vw;
        text-align: center;
        border-radius: 0.5vw;
        border: 0.3vw ridge darkslategray;
        background-color: #696969;
        
}
.pantalla {
        width: 14vw;
        height: 11vh;
        border-radius: 0.5vw;
        border: 0.3vw double cadetblue;
        padding: 0.5vh 1vw;
        margin: auto auto;
        text-shadow: 0.2vh 0.2vw 15px antiquewhite;
        background-color: darkslategray;
        color: azure;
        
}
.calculadora {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0.6vw;
        max-width: 24vw;
        margin: 2vh auto;
        border-radius: 0.6vw;
        border: 0.3vw double cadetblue;
        padding: 3vh 2vw;
        background-color: #808080;
    }
.btn {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 5vh;
        border: none;
        border-radius: 0.2vw;
        font-size: 17pt;
        cursor: pointer;
        background-color: dimgray;
        text-shadow: 0vh 0vw 1px azure;
        color: gray;
        font-family: 'KG PDX Blocks', sans-serif;
}
</style>        
STYLE;        

        return $estils;
    }
}
