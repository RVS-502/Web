<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_apli3.css"/>
    <title>APLI3</title>
    <script src="app_apli3.js"></script>
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
        <p><strong>Instrucciones</strong></p>
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
        <p>Para realizar este metodo se necesitan dos puntos a y b, los cuales se verifica que al evaluarlos en la funcion dada estos presenten imagenes de signos opuestos</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
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
            <p><strong>Ingreso de datos</strong></p>
            Ingrese Funcion a evaluar <input class="Dato" type="text">
            <br>
            Ingrese valor a <input class="Dato" type="text">
            <br>
            Ingrese valor b <input class="Dato" type="text">
            <br>
            <input type="button" value="Verificar">
        </div>
    </div>
    <br>
    <div class="Method" id="div-Newton">
        <h2 class="subtitle">Método de Newton</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <div class="Method" id="div-Secante">
        <h2 class="subtitle">Método de la Secante</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <div class="Method" id="div-Posicion-Falsa">
        <h2 class="subtitle">Método de la Posicion Falsa</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <div class="Method" id="div-Punto-Fijo">
        <h2 class="subtitle">Método del Punto Fijo</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <div class="Method" id="div-Steffensen">
        <h2 class="subtitle">Método Steffensen</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <div class="Method" id="div-Muller">
        <h2 class="subtitle">Método Muller</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <div class="Method" id="div-Lagrange">
        <h2 class="subtitle">Método Lagrange</h2>
        <h3>Instrucciones</h3>
        <ul>
            <li>Indicar el Grado del polinomio (este puede ser Grado 1, 2 o 3).</li>
            <li>Ingresar los datos en los cuadros correspondientes.</li>
            <li>Click en el Boton Calcular para ver resultado.</li>
            <li><i>Nota: No olvidar la forma correcta de ingresar las funciones para que funcione correctamente el programa.</i></li>
        </ul>
        <br>
        <div class="Datos-Metodo">
            Grado Polinimio<input id="grado-polinomio" type="text"></input>
            <input type="button" id="btn-verificar-lagrange" value="Verificar">
            <br>
            Ingrese Funcion <input type="text" id="funcion-lagrange"placeholder="2*x+5">
            Valor a interpolar <input id="valor-interpolar" type="text"><br>
            Xo <input id="valor-x0-la" type="text">
            X1 <input id="valor-x1-la" type="text">
            X2 <input id="valor-x2-la" type="text">
            X3 <input id="valor-x3-la" type="text">
            <br>
            <br>
            <input type="button" id="btn-calcular-lagrange" value="Calcular"><br>
            El Resultado de la interpolacion es: <input type="text"  id="resultado-lagrange"></input>
        </div>
    </div>
    <br>
    <div class="Method" id="div-Neville">
        <h2 class="subtitle">Método Neville</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <div class="Method" id="div-Dif-Divididas">
        <h2 class="subtitle">Método Diferencias Divididas de Newton</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <h2 class="subtitle2">Sistema de Ecuaciones Lineales</h2>
    <br>
    <div class="Method" id="div-Jacobi">
        <h2 class="subtitle">Método Jacobi</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <div class="Method" id="div-Gauss-Seidel">
        <h2 class="subtitle">Método Gauss-Seidel</h2>
        <p>Instruccion</p>
        <br>
        <div class="Algoritmo">
            <p><strong>Algoritmo</strong></p>
        </div>
        <div class="Datos-Metodo"></div>
    </div>
    <br>
    <footer>
        <div id="Footer">
            <ul>
                <li>Copyright no hay jejejeje</li>
            </ul>
        </div>
    </footer>
</body>
</html>