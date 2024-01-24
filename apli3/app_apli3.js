//-----EVALUADOR DE UNA FUNCION CON UN VALOR X----
function evaluarFuncion(funcionTexto, valorA) {

    if (!/^[0-9+\-*/().\s]+$/.test(funcionTexto)) {
        console.error("Error: La expresión contiene caracteres no permitidos.");
        return null;
    }

    console.log("funcionTexto antes de la sustitución:", funcionTexto);

    try {
        // Reemplaza "x" en la función con el valor proporcionado
        let expresionA = funcionTexto.replace(/x/g, `(${valorA})`);
        console.log("expresionA después de la sustitución:", expresionA);
        
        // Evalúa la expresión matemática utilizando una función segura
        let resultadoA = evalExpresion(expresionA);
        console.log("resultadoA:", resultadoA);

        // Verifica si el resultado es un número
        if (!isNaN(resultadoA)) {
            // Retorna el resultado numérico
            return resultadoA;
        } else {
            alert("Error: La expresión no se evalúa a un número.");
            return null;
        }
    } catch (error) {
        // Maneja errores durante la evaluación
        alert("Error al evaluar la función:", error);
        return null;
    }
}

// Función segura para evaluar expresiones matemáticas
function evalExpresion(expresion) {
    return Function(`'use strict'; return (${expresion})`)();
}

// ------METODO LAGRANGE ------
function lagrangeG1(funcionTexto,valor0, valor1, valorInter){

    // Verifica que las entradas sean números y no estén vacías
    if (isNaN(valor0) || isNaN(valor1) || isNaN(valorInter)) {
        alert("ERROR: Las entradas deben ser números no vacíos.");
        return NaN;
    }

    //Evaluando los valores en la funcion dada
    let resultado0 = evaluarFuncion(funcionTexto, valor0);
    let resultado1 = evaluarFuncion(funcionTexto, valor1);

    // Verifica si los resultados son números
    if (isNaN(resultado0) || isNaN(resultado1)) {
        alert("ERROR: La función no devuelve un valor numérico.");
        alert("Resultado0:", resultado0);
        alert("Resultado1:", resultado1);
        return NaN;
    }
    
    // Verifica si los denominadores son diferentes de cero
    if (valor0 === valor1 || valor1 === valorInter || valorInter === valor0) {
        alert("ERROR: Denominadores iguales, posible división por cero.");
        return NaN;
    }

    console.log("valor0:", valor0);
    console.log("valor1:", valor1);
    console.log("valorInter:", valorInter);

    // Redondea los valores antes de comparar para evitar problemas de precisión
    let denominador0 = parseFloat(valor0.toFixed(10)) - parseFloat(valor1.toFixed(10));
    let denominador1 = parseFloat(valor1.toFixed(10)) - parseFloat(valor0.toFixed(10));

    console.log("denominador0:", denominador0);
    console.log("denominador1:", denominador1);

    if (denominador0 === 0 || denominador1 === 0) {
        console.error("ERROR: Denominadores iguales, posible división por cero.");
        return NaN;
    }

    // // Calculo de los valores l dentro del polinomio
    // let denominador0 = valor0 - valor1;
    // let denominador1 = valor1 - valor0;

    // if (denominador0 === 0 || denominador1 === 0) {
    //     console.error("ERROR: Denominadores iguales, posible división por cero.");
    //     return NaN;
    // }

    //Calculo de los valores l dentro del polinomio
    let valorL0 = (valorInter - valor1) / (valor0 - valor1);
    let valorL1 = (valorInter-valor0) / (valor1-valor0);

    //Calculo de la interpolacion
    let interpolacion = (valorL0 * resultado0) + (valorL1 * resultado1);

    return interpolacion;

}

function lagrangeG2(funcionTexto,valor0, valor1, valor2, valorInter){
    
    //Evaluando los valores en la funcion dada
    let resultado0 = evaluarFuncion(funcionTexto,valor0);
    let resultado1 = evaluarFuncion(funcionTexto,valor1);
    let resultado2 = evaluarFuncion(funcionTexto,valor2);
    
    //Calculo de los valores l dentro del polinomio
    let valorL0 = ((valorInter-valor1)*(valorInter-valor2))/((valor0-valor1)*(valor0-valor2));
    let valorL1 = ((valorInter-valor0)*(valorInter-valor2))/((valor1-valor0)*(valor1-valor2));
    let valorL2 = ((valorInter-valor0)*(valorInter-valor1))/((valor2-valor0)*(valor2-valor1));

    //Calculo de la interpolacion
    let interpolacion = (valorL0*resultado0)+(valorL1*resultado1)+(valorL2*resultado2);

    return interpolacion;

}

function lagrangeG3(funcionTexto,valor0, valor1, valor2, valor3, valorInter){
    
    //Evaluando los valores en la funcion dada
    let resultado0 = evaluarFuncion(funcionTexto,valor0);
    let resultado1 = evaluarFuncion(funcionTexto,valor1);
    let resultado2 = evaluarFuncion(funcionTexto,valor2);
    let resultado3 = evaluarFuncion(funcionTexto,valor3);

    //Calculo de los valores l dentro del polinomio
    let valorL0 = ((valorInter-valor1)*(valorInter-valor2)*(valorInter-valor3))/((valor0-valor1)*(valor0-valor2)*(valor0-valor3));
    let valorL1 = ((valorInter-valor0)*(valorInter-valor2)*(valorInter-valor3))/((valor1-valor0)*(valor1-valor2)*(valor1-valor3));
    let valorL2 = ((valorInter-valor0)*(valorInter-valor1)*(valorInter-valor3))/((valor2-valor0)*(valor2-valor1)*(valor2-valor3));
    let valorL3 = ((valorInter-valor0)*(valorInter-valor1)*(valorInter-valor2))/((valor3-valor0)*(valor3-valor1)*(valor3-valor2));

    //Calculo de la interpolacion
    let interpolacion = (valorL0*resultado0)+(valorL1*resultado1)+(valorL2*resultado2)+(valorL3*resultado3);

    return interpolacion;

}

// Obtén los elementos por sus IDs
var txtGrado = document.getElementById("grado-polinomio");
var txtFuncion = document.getElementById("funcion-lagrange")

var btnVerificarLagrange = document.getElementById("btn-verificar-lagrange");
var btnCalcularLagrange = document.getElementById("btn-calcular-lagrange");

var inputX0 =  document.getElementById("valor-x0-la");
var inputX1 =  document.getElementById("valor-x1-la");
var inputX2 =  document.getElementById("valor-x2-la");
var inputX3 =  document.getElementById("valor-x3-la");

var inputValor =  document.getElementById("valor-interpolar");
var resLagrange =  document.getElementById("resultado-lagrange");

resLagrange.readOnly = true;

btnVerificarLagrange.addEventListener("click", function() {

    var grado = parseInt(txtGrado.value);

    if (isNaN(grado)){
        
        alert("ERROR: los valores solo pueden ser 1, 2 o 3");
        
    }else if (grado === 1) {

        inputX2.disabled = true;
        inputX3.disabled = true; 

    }else if(grado === 2){

        inputX2.disabled = false;
        inputX3.disabled = true;

    }else if(grado === 3){

        inputX2.disabled = false;
        inputX3.disabled = false;

    }else if (grado < 1 || grado >3){
        
        alert("ERROR: los valores solo pueden ser 1, 2 o 3");

    }
});

btnCalcularLagrange.addEventListener("click", function() {

    var grado = parseInt(txtGrado.value);

    var inpVal = parseInt(inputValor.value);
    
    var inpX0 = parseInt(inputX0.value);
    var inpX1 = parseInt(inputX1.value);
    var inpX2 = parseInt(inputX2.value);
    var inpX3 = parseInt(inputX3.value);

    
        
    if (grado == 1 && !isNaN(inpX0) && inpX0 !== "" && !isNaN(inpX1) && inpX1 !== "") {

        resLagrange.value = lagrangeG1(txtFuncion.textContent, inpX0, inpX1, inpVal);
        resLagrange.readOnly = true;

    }else if(grado == 2 && !isNaN(inpX0) && inpX0 !== "" && !isNaN(inpX1) && inpX1 !== "" && !isNaN(inpX2) && inpX2 !== ""){

        resLagrange.value = lagrangeG2(txtFuncion.textContent, inpX0, inpX1, inpX2, inpVal);
        resLagrange.readOnly = true;

    }else if(grado == 3 && !isNaN(inpX0) && inpX0 !== "" && !isNaN(inpX1) && inpX1 !== "" && !isNaN(inpX2) && inpX2 !== "" && !isNaN(inpX3) && inpX3 !== ""){

       resLagrange.value = lagrangeG3(txtFuncion.textContent, inpX0, inpX1, inpX2, inpX3, inpVal);
       resLagrange.readOnly = true;

    }else if ((isNaN(inpVal)) || txtFuncion.textContent == "" || grado < 1 || grado > 3){

        alert("ERROR: Porfavor ingresa los valores completos");

    } 
});