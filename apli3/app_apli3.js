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
var maxDecimalesD = document.getElementById("max-decimales")
var resLagrange =  document.getElementById("resultado-lagrange");

resLagrange.readOnly = true;


//-----EVALUADOR DE UNA FUNCION CON UN VALOR X----
function evaluarFuncion(funcionTexto, valorA) {


    // if (!/^[0-9+\-*/().\s]+$/.test(funcionTexto)) {
    //     console.error("Error: La expresión contiene caracteres no permitidos.");
    //     return null;
    // }
    
    console.log("funcionTexto antes de la sustitución:", funcionTexto);

    try {
        // Reemplaza "x" en la función con el valor proporcionado
        let expresionA = funcionTexto.replace(/x/g, `(${(valorA)})`);
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
function lagrangeG1(funcionTexto, valor0, valor1, valorInter, maxDecimales){

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

    // Redondea los valores antes de comparar para evitar problemas de precisión
    let denominador0 = parseFloat(valor0.toFixed(maxDecimales)) - parseFloat(valor1.toFixed(maxDecimales));
    let denominador1 = parseFloat(valor1.toFixed(maxDecimales)) - parseFloat(valor0.toFixed(maxDecimales));

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
    console.log("maximo de decimales", maxDecimales);
    return interpolacion.toFixed(maxDecimales);

}

function lagrangeG2(funcionTexto,valor0, valor1, valor2, valorInter, maxDecimales){
    
    // Verifica que las entradas sean números y no estén vacías
    if (isNaN(valor0) || isNaN(valor1) || isNaN(valor2) ||isNaN(valorInter)) {
        alert("ERROR: Las entradas deben ser números no vacíos.");
        return NaN;
    }

    //Evaluando los valores en la funcion dada
    let resultado0 = evaluarFuncion(funcionTexto,valor0);
    let resultado1 = evaluarFuncion(funcionTexto,valor1);
    let resultado2 = evaluarFuncion(funcionTexto,valor2);

    if (isNaN(resultado0) || isNaN(resultado1) || isNaN(resultado2)) {
        alert("ERROR: La función no devuelve un valor numérico.");
        alert("Resultado0:", resultado0);
        alert("Resultado1:", resultado1);
        alert("Resultado1:", resultado2);
        return NaN;
    }
    
    //Calculo de los valores l dentro del polinomio
    let valorL0 = ((valorInter-valor1)*(valorInter-valor2))/((valor0-valor1)*(valor0-valor2));
    let valorL1 = ((valorInter-valor0)*(valorInter-valor2))/((valor1-valor0)*(valor1-valor2));
    let valorL2 = ((valorInter-valor0)*(valorInter-valor1))/((valor2-valor0)*(valor2-valor1));

    //Calculo de la interpolacion
    let interpolacion = (valorL0*resultado0)+(valorL1*resultado1)+(valorL2*resultado2);

    return interpolacion.toFixed(maxDecimales);

}

function lagrangeG3(funcionTexto,valor0, valor1, valor2, valor3, valorInter, maxDecimales){
    
    // Verifica que las entradas sean números y no estén vacías
    if (isNaN(valor0) || isNaN(valor1) || isNaN(valor2) || isNaN(valor3) ||isNaN(valorInter)) {
        alert("ERROR: Las entradas deben ser números no vacíos.");
        return NaN;
    }

    //Evaluando los valores en la funcion dada
    let resultado0 = evaluarFuncion(funcionTexto,valor0);
    let resultado1 = evaluarFuncion(funcionTexto,valor1);
    let resultado2 = evaluarFuncion(funcionTexto,valor2);
    let resultado3 = evaluarFuncion(funcionTexto,valor3);

    if (isNaN(resultado0) || isNaN(resultado1) || isNaN(resultado2)|| isNaN(resultado3)) {
        alert("ERROR: La función no devuelve un valor numérico.");
        alert("Resultado0:", resultado0);
        alert("Resultado1:", resultado1);
        alert("Resultado1:", resultado2);
        alert("Resultado1:", resultado3);
        return NaN;
    }

    //Calculo de los valores l dentro del polinomio
    let valorL0 = ((valorInter-valor1)*(valorInter-valor2)*(valorInter-valor3))/((valor0-valor1)*(valor0-valor2)*(valor0-valor3));
    let valorL1 = ((valorInter-valor0)*(valorInter-valor2)*(valorInter-valor3))/((valor1-valor0)*(valor1-valor2)*(valor1-valor3));
    let valorL2 = ((valorInter-valor0)*(valorInter-valor1)*(valorInter-valor3))/((valor2-valor0)*(valor2-valor1)*(valor2-valor3));
    let valorL3 = ((valorInter-valor0)*(valorInter-valor1)*(valorInter-valor2))/((valor3-valor0)*(valor3-valor1)*(valor3-valor2));

    //Calculo de la interpolacion
    let interpolacion = (valorL0*resultado0)+(valorL1*resultado1)+(valorL2*resultado2)+(valorL3*resultado3);

    return interpolacion.toFixed(maxDecimales);

}



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

    var inpVal = parseFloat(inputValor.value);
    
    var inpX0 = parseFloat(inputX0.value);
    var inpX1 = parseFloat(inputX1.value);
    var inpX2 = parseFloat(inputX2.value);
    var inpX3 = parseFloat(inputX3.value);

    var funcionEval = txtFuncion.value;

    var maxDeci = parseInt(maxDecimalesD.value)
        
    if (grado == 1 && !isNaN(inpX0) && inpX0 !== "" && !isNaN(inpX1) && inpX1 !== "") {

        resLagrange.value = lagrangeG1(funcionEval, inpX0, inpX1, inpVal, maxDeci);
        resLagrange.readOnly = true;

    }else if(grado == 2 && !isNaN(inpX0) && inpX0 !== "" && !isNaN(inpX1) && inpX1 !== "" && !isNaN(inpX2) && inpX2 !== ""){

        resLagrange.value = lagrangeG2(funcionEval, inpX0, inpX1, inpX2, inpVal, maxDeci);
        resLagrange.readOnly = true;

    }else if(grado == 3 && !isNaN(inpX0) && inpX0 !== "" && !isNaN(inpX1) && inpX1 !== "" && !isNaN(inpX2) && inpX2 !== "" && !isNaN(inpX3) && inpX3 !== ""){

       resLagrange.value = lagrangeG3(funcionEval, inpX0, inpX1, inpX2, inpX3, inpVal, maxDeci);
       resLagrange.readOnly = true;

    }else if ((isNaN(inpVal)) || funcionEval == "" || grado < 1 || grado > 3){

        alert("ERROR: Porfavor ingresa los valores completos");

    } 
});