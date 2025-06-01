> # Panel Administrador  |  VEN AL CENTRO Y GANA 2025

>![UADY logo](https://github.com/hjanssena/CanacoLaravel/blob/2d1a35f1d57979e0bd8ef6b244c0a0b5002ff615/ReadmeAssets/Logo_UADY.png)

---
### Diseño de Software

### Equipo
 - Hugo de Jesús Janssen Aguilar (Video: https://youtu.be/tUmQZSOUBSM)
 - Edwing Mauricio Molina Chim (Video: https://www.youtube.com/watch?v=nMtM25UzZIU)

## Requisitos Funcionales
#### Gestión de Establecimientos por el Administrador
- El sistema debe proporcionar una interfaz para el administrador donde pueda:
	-   Visualizar la lista de establecimientos registrados.
	-   Aceptar o rechazar cada solicitud de participación.
-   El sistema debe notificar al establecimiento su estatus (aceptado/rechazado) vía correo electrónico.
-   Tener un reporte de rechazados, aceptados y status en PDF
#### Generación de Ganadores
-   El sistema debe permitir al administrador generar una lista de 130 ganadores de forma aleatoria a partir de los participantes registrados con participaciones válidas. 
-   La lista de ganadores debe poder exportarse a un archivo PDF.
-   La generación de ganadores debe realizarse a través de la interfaz web del administrador.
-   UI para verificar que los ganadores sean válidos.

## Artefactos
### FlutterFlow
#### Diagrama de flujo ganadores
<img src="https://github.com/hjanssena/CanacoLaravel/blob/2d1a35f1d57979e0bd8ef6b244c0a0b5002ff615/ReadmeAssets/Flujo_Ganadores.jpeg" height="500" border="50"/>

#### Diagrama de flujo comercios
<img src="https://github.com/hjanssena/CanacoLaravel/blob/a5198a33b180f6e24111f47023ce74c1aa87f040/ReadmeAssets/Flujo_Comercios.jpeg" height="500" border="50"/>

#### Mockup
<img src="https://github.com/hjanssena/CanacoLaravel/blob/2d1a35f1d57979e0bd8ef6b244c0a0b5002ff615/ReadmeAssets/Mockup.jpeg" height="500" border="50"/>

#### Diagrama ER
<img src="https://github.com/hjanssena/CanacoLaravel/blob/2d1a35f1d57979e0bd8ef6b244c0a0b5002ff615/ReadmeAssets/ER.png" height="500" border="50"/>

###  Laravel
#### Diagrama de clases
<img src="https://github.com/hjanssena/CanacoLaravel/blob/2d1a35f1d57979e0bd8ef6b244c0a0b5002ff615/ReadmeAssets/Clases.jpg" height="500" border="50"/>

## Vistas
### FlutterFlow
#### Vista ganadores
<img src="https://github.com/hjanssena/CanacoLaravel/blob/993265bc7be23e1f33fd8b133edc54f386dd71bc/ReadmeAssets/Flutter-Ganadores.png" height="500" border="50"/>

#### Vista comercios
<img src="https://github.com/hjanssena/CanacoLaravel/blob/993265bc7be23e1f33fd8b133edc54f386dd71bc/ReadmeAssets/Flutter-Comercios.png" height="500" border="50"/>

### Laravel
#### Vista ganadores
<img src="https://github.com/hjanssena/CanacoLaravel/blob/993265bc7be23e1f33fd8b133edc54f386dd71bc/ReadmeAssets/LaravelGanadores.png" height="500" border="50"/>

#### Vista comercios
<img src="https://github.com/hjanssena/CanacoLaravel/blob/993265bc7be23e1f33fd8b133edc54f386dd71bc/ReadmeAssets/LaravelComercios.png" height="500" border="50"/>

## Comparacion Laravel vs Flutterflow

- En la herramienta de Flutterflow se pudo observar la rapidez para el desarrollo del panel de administrador por el manejo de componentes que solo arrastramos dentro de otros, esto nos dejó más tiempo para el diseño de la base de datos y otras cosas ya que al ser Low-Code nos ahorró mucho tiempo en comparación con el framework Laravel que tomo un poco más de tiempo al estar codificando y ejecutando cada vez para visualizarlo cosa que no era completamente necesaria en Flutterflow que ya te mostraba como estaba quedando la IU. 

- Ahora hablando de practicidad y tiempo de desarrollo Flutterflow es una excelente herramienta para crear programas más rápido y sin tanta planificación detrás ya que también al estar basada en Flutter te permite crear apps multiplataforma, cosa que con laravel tendrías que usar otro framework como Flutter para hacerlo multiplataforma o elegir para una sola plataforma. 

- Pero hablando de lo que se puede y te deja hacer cada uno, es otra cosa, porque Flutterflow al generarte automáticamente el código y no permitirte verlo si no pagas su versión premium te deja bastantes limitaciones con lo que puedes hacer ya que al ser componentes ya creados no se pueden modificar mucho lo que te deja con la única opción de crear los tuyos propios en código Dart cosa que, si no lo sabes te toca aprenderlo, cosa que en este punto ya sería mejor usar Flutter directamente cosa que nos pasó a nosotros que tuvimos que crear nuestros propios componentes en Dart por lo poco práctico que era hacerlo en flutterflow completamente, ya que nos limitaba bastante y se nos hacía más fácil hacer el código desde cero. Pero con Laravel el mejor framework para php se nos hizo más práctico y nos dejaba tener control total de lo que hacía el programa, esto debido a que Laravel maneja más simple las cosas como la base de datos a la cual podemos acceder muy fácil y nos permite manipular mejor la información cosa que no nos dejaba hacer Flutterflow y tiene mejor apariencia en Laravel ya que nos deja libre acceso para modificar la UI como nos plazca, debido a que usa Blades que son el motor de plantillas oficial del framework y nos permite crear vistas (interfaces de usuario) usando una sintaxis simple y elegante que se integra con el código PHP de forma limpia porque como está pensado para web te permite usar los mismas herramientas para web como HTML,  CSS , JavaScript, insertar código PHP o si no quieres usar Blades usas otra cosa para el Front-End. 

- Hablando del lenguaje en que están basados cada uno, Laravel al ser un framework de PHP es mucho más fácil de aprender en comparación con Dart en el que está basado Flutterflow y que si quieres hacer algo más complejo es un poco más difícil ya que es por componentes por lo que tienes que saber bien cómo funciona cada componente y con cual es compatible cada uno para no tener errores cosa que no pasa en laravel que es mucho más fácil al ser tipado dinámico lo que nos permite mayor flexibilidad al codificar. 

- En conclusión depende mucho del proyecto, el tiempo y el presupuesto, que hablando del tiempo no vario mucho por lo familiarizados que estábamos con cada lenguaje, que en el caso de Flutterflow al ser Low-Code, por la facilidad de arrastrar componentes y al codificar en Dart tardamos 3 a 4 días aproximadamente debido a que nosotros creamos widgets personalizados por lo restringido que estaba Flutterflow para personalización, y en Laravel al tener bastante conocimiento en PHP, HTML y por la sencilles del framework nos tomó 2 días, aunque también influyo que ya teníamos diseñada la base de datos y configuradas todas las herramientas en Supabase que usamos en Flutterflow y fue más fácil al ya tener todo listo y nada más conectar con  Laravel nos tomó menos tiempo. Por ello si depende mucho del proyecto que usar para desarrollar Software y como se plantea el proyecto si viendo a largo o corto plazo. 

## Atributos de calidad

### Laravel
- Ahora hablando de atributos de calidad si cambia mucho la cosa entre uno y otro. Primero hablemos de Laravel. En este framework, se pueden ver los siguientes atributos de calidad:   
	- Mantenibilidad: Se ve en el diagrama de clases y ya que laravel maneja MVC es más fácil de estructurar las capas del programa. Lo que lo diferencia de Flutterflow que al ser código generado no está bien estructurado en capas y genera código poco legible para el desarrollador.  

	 - Confiabilidad: Se ve en los diagramas de flujo lo que pasa por cada camino y que se cumple con lo que requiere el sistema. Aclarar por qué se ve en los diagramas de flujo. 

	- Usabilidad: Por la sencillez de la UI consideramos que es  bastante simple entender que hace cada componente. Para comprobarlo tenemos que hacer pruebas enfocadas con usuarios finales. 

	- Flexibilidad: Al estar bien estructurado y separado por capas es muy fácil de modificar y adaptarse a cualquier cambio como base de datos o nuevas funcionalidades porque cada función hace una cosa por lo que también se ve el principio de SOLID Single Responsibility y Open/Closed. 

### FlutterFlow
- En Flutterflow se pueden apreciar los siguientes atributos de calidad, Usabilidad y confiabilidad, portabilidad y usabilidad. 

	- Confiabilidad: aplica lo mismo que con laravel, sigue el mismo diagrama de flujo. 

	- Usabilidad: Aplica lo mismo que con Laravel. 

	- Portabilidad: Se diferencia de Laravel ya que Flutterflow nos deja hacer el programa multiplataforma debido al motor  Skia de Flutter que usa donde solo pintan la IU, lo que nos permite ejecutar el programa en distintos entornos lo que lo diferencia de Laravel que necesita otras herramientas front end para poder ser portable.


#### Proyecto de FlutterFlow
https://shoes-ubkden.flutterflow.app

