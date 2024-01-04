<?php

namespace Crocciari;

/**
 * A classe HtmlChars converte letras e números em suas respectivas entidades HTML.
 */
class HtmlChars {

    /** @var array Armazena as correspondências entre letras/números e suas entidades HTML. */
    private $chars;

    // Constantes para valores ASCII
    const ASCII_UPPER_A = 65;
    const ASCII_UPPER_Z = 90;
    const ASCII_LOWER_A = 97;
    const ASCII_LOWER_Z = 122;
    const ASCII_ZERO = 48;
    const ASCII_NINE = 57;

    /**
     * Construtor da classe HtmlChars.
     * Inicializa o array $chars com as correspondências entre letras/números e suas entidades HTML.
     */
    public function __construct()
    {
        $this->chars = array();

        // Gerando correspondências para letras maiúsculas
        for ($i = self::ASCII_UPPER_A; $i <= self::ASCII_UPPER_Z; $i++) {
            $letter = chr($i);
            $this->chars[$letter] = "&#$i;";
        }

        // Gerando correspondências para letras minúsculas
        for ($i = self::ASCII_LOWER_A; $i <= self::ASCII_LOWER_Z; $i++) {
            $letter = chr($i);
            $this->chars[$letter] = "&#$i;";
        }

        // Gerando correspondências para números
        for ($i = self::ASCII_ZERO; $i <= self::ASCII_NINE; $i++) {
            $number = chr($i);
            $this->chars[$number] = "&#$i;";
        }
    }

    /**
     * Obtém a entidade HTML correspondente para uma única letra ou número.
     *
     * @param string $letter A letra ou número a ser convertido.
     * @return string A entidade HTML correspondente ou uma string vazia se não houver correspondência.
     */
    public function get(string $letter): string {

        if (isset($this->chars[$letter])) {
            return $this->chars[$letter];
        }

        return "";
    }

    /**
     * Converte uma string em suas correspondentes entidades HTML.
     * 
     * @param string $string A string a ser convertida.
     * @return string A string resultante após a conversão.
     */
    public function getString(string $string): string {

        $result = "";

        $letters = str_split($string);

        foreach ($letters as $value) {
            $result .= $this->get($value);
        }

        return $result;
    }

}
