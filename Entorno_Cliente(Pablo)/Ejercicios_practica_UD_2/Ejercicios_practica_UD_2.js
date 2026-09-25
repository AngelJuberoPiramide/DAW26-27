/*1- Declara 6 variables a las que asignaremos los siguientes valores. 1357, 135.7, 135e7, 0b1010, 0o1357 y 0x1A57.
Una vez creadas muestra por consola los valores almacenados y el tipo de dato que nos indica el operador typeof.*/

/*
let numero1 = 1357;
let numero2 = 135.7;
let numero3 = 135e7;
let numero4 = 0b1010;
let numero5 = 0o1357;
let numero6 = 0x1A57;

console.log(numero1, typeof numero1);
console.log(numero2, typeof numero2);
console.log(numero3, typeof numero3);
console.log(numero4, typeof numero4);
console.log(numero5, typeof numero5);
console.log(numero6, typeof numero6);
*/

/*2- Pide al usuario un  número utilizando el método prompt(), guarda ese dato en una variable.
OJO guardarlo de manera que sea un tipo  Number no un String. Compruébalo mostrando por consola el tipo de dato guardado  con el operador typeof.*/

/*
let numero = Number(prompt("Introduce un número:"));

console.log(numero);
console.log(typeof numero);
*/

/*3- Pide al usuario dos números con prompt() sin convertirlos. Muestra por consola el resultado de sumarlos con el operador +.
A continuación, convierte ambos valores a Number y vuelve a sumarlos, mostrando ahora el resultado correcto.*/

/*
let numero1 = prompt("Introduce el primer número:");
let numero2 = prompt("Introduce el segundo número:");

console.log(numero1 + numero2);
numero1 = Number(numero1);
numero2 = Number(numero2);
console.log(numero1 + numero2);
*/

/*4- Pide al usuario que te indique su nombre, apellidos ,  edad y un número del 1 al 10.
Almacena cada dato en una variable diferente. A continuación muestra la siguiente información.
A) Por consola una frase que incluya su nombre , apellidos y la edad.
B) En el documento html incluye con formato h3 la misma información.
C) En un alert muestra la siguiente información “Dentro de número años tendras x años”.
Ayuda: usa los backticks para crear un template literal que te permita hacer este ejercicio.
*/

/*
let nombre = prompt("Introduce tu nombre:");
let apellidos = prompt("Introduce tus apellidos:");
let edad = Number(prompt("Introduce tu edad:"));
let numero = Number(prompt("Introduce un número del 1 al 10:"));

console.log(`Te llamas ${nombre} ${apellidos} y tienes ${edad} años.`);
document.write(`<h3>Te llamas ${nombre} ${apellidos} y tienes ${edad} años.</h3>`);
alert(`Dentro de ${numero} años tendrás ${edad + numero} años.`);
*/

/*5- Pide al usuario su nombre, una afición y si le gusta programar usando confirm().
Muestra en un párrafo del documento un texto que combine los tres datos usando un único template literal.*/

let nombre = prompt("Introduce tu nombre:");
let aficion = prompt("Introduce una afición");
let programar = confirm("Le gusta programar?");

