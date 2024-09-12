<?php

// crear una nueva cola
$cola = new SplQueue(); 
// usar "splQueue", significa que utiliza una lista doblemente enlazada internamente, lo que la hace eficiente para insertar y eliminar elementos tanto desde el principio como desde el final de la lista.

// algunos métodos útiles que puedes usar con SplQueue:

// enqueue($value): Inserta un nuevo elemento al final de la cola.
// dequeue(): Elimina y devuelve el elemento al frente de la cola.
// bottom(): Devuelve el primer elemento de la cola (sin eliminarlo).
// top(): Devuelve el último elemento de la cola (sin eliminarlo).
// isEmpty(): Devuelve si la cola está vacía.
// count(): Devuelve el número de elementos en la cola.
// ---------------------------------------------

// agregar elementos a la cola, metodo FIFO
$cola->enqueue("Elemento 1");
$cola->enqueue("Elemento 2");
$cola->enqueue("Elemento 3");

// ver cuántos elementos hay en la cola
echo "Cantidad de elementos en la cola: " . $cola->count() . "</br>";

// ver el primer elemento (sin eliminarlo)
echo "Primer elemento en la cola: " . $cola->bottom() . "</br>";

// eliminar elementos de la cola (FIFO: primero en entrar, primero en salir)
echo "Eliminando: " . $cola->dequeue() . "</br>";
echo "Eliminando: " . $cola->dequeue() . "</br>";

// verificar si la cola está vacía
// isEmpry retorna un balor booleano (T o F).
if ($cola->isEmpty()) {
    echo "La cola está vacía.</br>";
} else {
    echo "Aún quedan elementos en la cola.</br>";
}

// ver el último elemento en la cola (sin eliminarlo)
echo "Último elemento en la cola: " . $cola->top() . "</br>";

?>