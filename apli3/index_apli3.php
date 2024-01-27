<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_apli3.css"/>
    <title>APLI3</title>
    <h1 id="Top">Matematica Aplicada 3</h1>
</head>
<body>
    <nav id="Menu-bar">
        <ul>
            <li class="Menu"><a href="#Top">Inicio</a></li>
            <li class="Menu"><a href="#div-Biseccion">Biseccion</a></li>
            <li class="Menu"><a href="#div-Newton">Newton</a></li>
            <li class="Menu"><a href="#div-Secante">Secante</a></li>
            <li class="Menu"><a href="#div-Posicion-Falsa">Posicion Falsa</a></li>
            <li class="Menu"><a href="#div-Punto-Fijo">Punto Fijo</a></li>
            <li class="Menu"><a href="#div-Steffensen">Steffensen</a></li>
            <li class="Menu"><a href="#div-Muller">Muller</a></li>
            <li class="Menu"><a href="#div-Lagrange">Lagrange</a></li>
            <li class="Menu"><a href="#div-Neville">Neville</a></li>
            <li class="Menu"><a href="#div-Dif-Divididas">Dif. Divididas</a></li>
            <li class="Menu"><a href="#div-Jacobi">Jacobi</a></li>
            <li class="Menu"><a href="#div-Gauss-Seidel">Gauss-Seidel</a></li>
            <li class="Menu"><a href="#Footer">Contact</a></li>
        </ul>
    </nav>
    <br>
    <div class="Instrucciones">
        <h3>Instrucciones Generales</h3>
        <lu>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </lu>
    </div>
    <br>
    <div class="Method" id="div-Biseccion">
        <h2 class="subtitle">Método Biseccion</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Newton">
        <h2 class="subtitle">Método de Newton</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> Tener un punto inicial cercano a la raiz <strong>"X<sub>n</sub>"</strong></li>
                <li> Calcular <strong><var>f '( x )</var></strong></li>
                <li> Calcular la aproximacion a la raiz por el corte con el eje de las <strong>"x"</strong> de la recta tangente<ul>
                    <li><strong>x<sub>n+1</sub> = x<sub>n</sub> - ( f ( x<sub>n</sub> ) ) / ( f '( x<sub>n</sub> ) )</strong></li>
                </ul></li>
                <li> Calcular el Error del metodo <strong>E = | x<sub>n</sub> - x<sub>n+1</sub> |</strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el punto x<sub>n+1</sub> y luego iniciar otra iteracion hasta que <span><strong>Error < Tolerancia</strong></span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Secante">
        <h2 class="subtitle">Método de la Secante</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> Tener un punto inicial que encierre a la Raiz <strong>( x<sub>n-1</sub> , x<sub>n</sub> )</strong></li>
                <li> Calcular la aproximacion a la raiz por el Corte con el eje de las <strong>"x"</strong> de la Recta Secante<ul>
                    <li>x<sub>n+1</sub> = x<sub>n</sub> - [ f ( x<sub>n</sub> ) * ( x<sub>n</sub> - x<sub>n-1</sub> )] / [ f ( x<sub>n</sub> ) - f ( x<sub>n-1</sub> )] </li>
                </ul></li>
                <li> Calcular el Error del metodo <strong>E = | x<sub>n</sub> - x<sub>n+1</sub> |</strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 2 para cambiar el intervalo tomando en cuenta x<sub>n+1</sub> y luego iniciar otra iteracion hasta que <span><strong>Error < Tolerancia</strong></span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Posicion-Falsa">
        <h2 class="subtitle">Método de la Posicion Falsa</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Punto-Fijo">
        <h2 class="subtitle">Método del Punto Fijo</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Steffensen">
        <h2 class="subtitle">Método Steffensen</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Muller">
        <h2 class="subtitle">Método Muller</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Lagrange">
        <h2 class="subtitle">Método Lagrange</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Indicar el Grado del polinomio (este puede ser Grado 1, 2 o 3).</li>
                <li>Ingresar los datos en los cuadros correspondientes.</li>
                <li>Click en el Boton Calcular para ver resultado.</li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="grado-polinomio">Grado Polinimio: </label>
            <input id="grado-polinomio" type="text" placeholder="1, 2 o 3"></input>
            <input type="button" id="btn-verificar-lagrange" value="Verificar">
            <label for="funcion-lagrange">Ingrese Funcion: </label>
            <input type="text" id="funcion-lagrange" placeholder="Ejemplo: 2*x+5">
            <label for="max-decimales">Maximos Decimales: </label>
            <input id="max-decimales" type="text" placeholder="Solo enteros positivos"></input>
            <br>
            <label for="valor-interpolar" >Valor a interpolar: </label>
            <input id="valor-interpolar" type="text">
            <br>
            <label for="valor-x0-la">Xo: </label>
            <input id="valor-x0-la" type="text">
            <label for="valor-x1-la">X1: </label>
            <input id="valor-x1-la" type="text">
            <label for="valor-x2-la">X2: </label>
            <input id="valor-x2-la" type="text">
            <label for="valor-x3-la">X3: </label>
            <input id="valor-x3-la" type="text">
            <br>
            <br>
            <input type="button" id="btn-calcular-lagrange" value="Calcular"><br>
            El Resultado de la interpolacion es: <input type="text"  id="resultado-lagrange"></input>
        </div>
    </div>
    <br>
    <div class="Method" id="div-Neville">
        <h2 class="subtitle">Método Neville</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Dif-Divididas">
        <h2 class="subtitle">Método Diferencias Divididas de Newton</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <h2 class="subtitle2">Sistema de Ecuaciones Lineales</h2>
    <div class="Method" id="div-Jacobi">
        <h2 class="subtitle">Método Jacobi</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Gauss-Seidel">
        <h2 class="subtitle">Método Gauss-Seidel</h2>
        <div class="Instrucciones">
            <h3>Instrucciones</h3>
            <ul>
                <li>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</li>
                <li></li>
                <li></li>
                <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
            </ul>
        </div>
        <div class="Algoritmo">
            <h3>Algoritmo</h3>
            <ol>
                <li> f(a) y f(b) de <strong>signos opuestos.</strong></li>
                <li> Calcular la aproxiumacion a la raiz <strong><var>P = (a+b)/2</var></strong></li>
                <li> Calcular el cambio del intervalo.<ul>
                    <li>Si f(a) * f(p) > 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [p,b].</li>
                    <li>Si f(a) * f(p) < 0, cambia el valor de "a" por el de "p", En la siguiente iteracion [a,p].</li>
                </ul></li>
                <li> Calcular el Error del metodo <strong><var>E = (b-a)/2</var></strong></li>
                <li> Calcular Error < Tolerancia. <ul>
                    <li>Si <strong>Error < Tolerancia</strong>, se encontro la raiz con el numero de cifras consecutivas especifica.</li>
                    <li>Si <strong>Error > Tolerancia</strong>, regresar al paso 3 para cambiar el intervalo y luego iniciar otra iteracion hasta que <span> Error < Tolerancia</span>.</li>
                </ul></li>
            </ol>
        </div>
        <br>
        <div class="Datos-Metodo">
            <h3>Datos a Ingresar</h3>
            <label for="funcion-biseccion">Ingrese funcion: </label>
            <input id="funcion-biseccion" type="text">
            <label for="valor-a-biseccion">Valor a: </label>
            <input id="valor-a-biseccion" type="text">
            <label for="valor-b-biseccion">Valor b: </label>
            <input id="valor-b-biseccion" type="text">
            <br>
            <input type="button" value="Calcular">
        </div>
    </div>
    <br>
    <footer>
        <div id="Footer">
            <ul>
                <li>Copyright no hay jejejeje</li>
            </ul>
        </div>
    </footer>

    <script src="app_apli3.js"></script>
</body>
</html>