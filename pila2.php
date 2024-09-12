<?php

/** Apilar un elemento a la pila
 * @param elemento, el elemento a apilar
 * @param pila, la pila actual
 * @return pila, la pila con el nuevo elemento apilado
 */
function apilar($elemento, $pila)
{
    // Simplemente añadimos el nuevo elemento al final del array
    $pila[] = $elemento; // también se podría usar array_push($pila, $elemento);
    return $pila;
}

/** Obtener el elemento del tope de la pila
 * @param pila, la pila actual
 * @return elemento, el elemento del tope de la pila
 */
function tope($pila)
{
    if(esta_vacia($pila))
    {
        echo "La pila está vacía."; // Mensaje en caso de pila vacía
        return null;
    }

    // Retornamos el último elemento sin quitarlo
    return $pila[count($pila) - 1];
}

/** Mostrar el contenido de la pila
 * @param pila, la pila actual
 */
function mostrar_pila($pila)
{
    if (esta_vacia($pila)) {
        echo "La pila está vacía.</br>";
    } else {
        echo "Contenido de la pila: </br>";
        // Mostrar desde el tope hasta la base
        for ($i = count($pila) - 1; $i >= 0; $i--) {
            echo $pila[$i] . "</br>";
        }
    }
}

/** Verifica si la pila está vacía
 * @param pila, la pila actual
 * @return bool, verdadero si la pila está vacía, falso si no
 */
function esta_vacia($pila)
{
    return count($pila) == 0;
}

// Ejemplo de uso
$pila = [];
$pila = apilar('A', $pila);
$pila = apilar('B', $pila);
$pila = apilar('C', $pila);

mostrar_pila($pila);
echo "El tope de la pila es: " . tope($pila) . "</br>";

?>
