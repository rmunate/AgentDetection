# Agent Detection | Descubrimiento y Análisis de Información del Agente de Conexión

La biblioteca `Agent Detection` ofrece una amplia gama de métodos que te permiten descubrir y analizar la información del agente de conexión en tu aplicación.

⚙️ Esta librería es compatible con versiones de Laravel 8.0 y superiores ⚙️

[![Laravel 8.0+](https://img.shields.io/badge/Laravel-8.0%2B-orange.svg)](https://laravel.com)
[![Laravel 9.0+](https://img.shields.io/badge/Laravel-9.0%2B-orange.svg)](https://laravel.com)
[![Laravel 10.0+](https://img.shields.io/badge/Laravel-10.0%2B-orange.svg)](https://laravel.com)

![LOGO](src/Resources/Logo.png)

📖 [**DOCUMENTACIÓN EN INGLÉS**](README.md) 📖

## Tabla de Contenido
## Tabla de Contenido
1. [Instalación](#instalación)
2. [Introducción](#introducción)
3. [Métodos Disponibles](#métodos-disponibles)
   - [Obtener Agente](#obtener-agente)
   - [Validar si es una conexión Móvil](#validar-si-es-una-conexión-móvil)
   - [Validar si es una conexión de escritorio](#validar-si-es-una-conexión-de-escritorio)
   - [Validar si es un iPhone](#validar-si-es-un-iphone)
   - [Validar si es un Macintosh](#validar-si-es-un-macintosh)
   - [Validar si es un Linux](#validar-si-es-un-linux)
   - [Validar si es un Android](#validar-si-es-un-android)
   - [Validar si es un Windows](#validar-si-es-un-windows)
   - [Validar si es un Windows Phone](#validar-si-es-un-windows-phone)
   - [Validar si es un iPod](#validar-si-es-un-ipod)
   - [Validar si es un iPad](#validar-si-es-un-ipad)
   - [Validar si es un iMac](#validar-si-es-un-imac)
   - [Validar si es una Tablet](#validar-si-es-una-tablet)
   - [Validar si es un Crawler (Robot)](#validar-si-es-un-crawler-robot)
   - [Validar si el Agente Coincide con una Expresión](#validar-si-el-agente-coincide-con-una-expresión)
   - [Validar si el Agente se conecta desde una IP o Puerto específico](#validar-si-el-agente-se-conecta-desde-una-ip-o-puerto-específico)
   - [Obtener el Sistema Operativo del Cliente de Conexión](#obtener-el-sistema-operativo-del-cliente-de-conexión)
   - [Obtener los Datos del Navegador](#obtener-los-datos-del-navegador)
   - [Obtener los Datos del Robot](#obtener-los-datos-del-robot)
4. [Creador](#creador)
5. [Licencia](#licencia)


## Instalación
Para instalar la librería, puedes hacerlo fácilmente a través de Composer.
```shell
composer require rmunate/agent-detection
```

## Introducción
Esta sencilla biblioteca te permite obtener detalles específicos sobre el agente de conexión, lo que te permitirá mejorar la experiencia del usuario en función de los datos de la conexión. Por ejemplo, si detectas que se trata de una conexión móvil, puedes invitar al usuario a descargar la aplicación móvil si tu sistema cuenta con ella. Del mismo modo, puedes ofrecer una experiencia más personalizada para los usuarios de Android o IPhone, diferenciar opciones, menús y otros elementos entre usuarios de escritorio y dispositivos móviles.

Esta biblioteca también aprovecha la funcionalidad del paquete https://github.com/JayBizzle/Crawler-Detect, lo que te permite determinar si se trata de un bot, rastreador o araña. En resumen, tienes un sinfín de posibilidades a tu disposición.

## Métodos Disponibles
A continuación, se enumeran los métodos disponibles en la biblioteca. Asegúrate de tener la última versión instalada en tu sistema para poder utilizar cualquiera de los siguientes métodos o directivas disponibles.

### Obtener Agente
`Agent::get()` Retorna el agente de conexión actual, detectado por el servidor.

```php
use Rmunate\AgentDetection\Agent;

Agent::get();
//"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36"
```

### Validar si es una conexión Móvil
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isMobile()) {
    # Es una Conexión Móvil...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isMobile()) {
    # Es una Conexión Móvil...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsMobile
    <h1>Es una Conexión Móvil</h1>
@else
    <h1>No es una Conexión Móvil</h1>
@endIfAgentIsMobile
```

### Validar si es una conexión de escritorio
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isDesktop()) {
    # Es una Conexión de Escritorio...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isDesktop()) {
    # Es una Conexión de Escritorio...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsDesktop
    <h1>Es Conexión de Escritorio</h1>
@else
    <h1>No es Conexión de Escritorio</h1>
@endIfAgentIsDesktop
```

### Validar si es un iPhone

Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isIPhone()) {
    # Es un iPhone...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isIPhone()) {
    # Es un iPhone...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsIPhone
    <h1>Es un iPhone</h1>
@else
    <h1>No es un iPhone</h1>
@endIfAgentIsIPhone
```

### Validar si es un Macintosh
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isMacintosh()) {
    # Es un Macintosh...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isMacintosh()) {
    # Es un Macintosh...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsMacintosh
    <h1>Es un Macintosh</h1>
@else
    <h1>No es un Macintosh</h1>
@endIfAgentIsMacintosh
```

### Validar si es un Linux
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isLinux()) {
    # Es un Linux...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isLinux()) {
    # Es un Linux...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsLinux
    <h1>Es un Linux</h1>
@else
    <h1>No es un Linux</h1>
@endIfAgentIsLinux
```

### Validar si es un Android
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isAndroid()) {
    # Es un Android...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isAndroid()) {
    # Es un Android...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsAndroid
    <h1>Es un Android</h1>
@else
    <h1>No es un Android</h1>
@endIfAgentIsAndroid
```

### Validar si es un Windows
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isWindows()) {
    # Es un Windows...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isWindows()) {
    # Es un Windows...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsWindows
    <h1>Es un Windows</h1>
@else
    <h1>No es un Windows</h1>
@endIfAgentIsWindows
```

### Validar si es un Windows Phone
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isWindowsPhone()) {
    # Es un Windows Phone...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isWindowsPhone()) {
    # Es un Windows Phone...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsWindowsPhone
    <h1>Es un Windows Phone</h1>
@else
    <h1>No es un Windows Phone</h1>
@endIfAgentIsWindowsPhone
```

### Validar si es un iPod
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isIpod()) {
    # Es un iPod...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isIpod()) {
    # Es un iPod...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsIpod
    <h1>Es un iPod</h1>
@else
    <h1>No es un iPod</h1>
@endIfAgentIsIpod
```

### Validar si es un iPad
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isIpad()) {
    # Es un iPad...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isIpad()) {
    # Es un iPad...
} 
```
Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsIpad
    <h1>Es un iPad</h1>
@else
    <h1>No es un iPad</h1>
@endIfAgentIsIpad
```

### Validar si es un iMac
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isIMac()) {
    # Es un iMac...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isIMac()) {
    # Es un iMac...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsIMac
    <h1>Es un iMac</h1>
@else
    <h1>No es un iMac</h1>
@endIfAgentIsIMac
```

### Validar si es una Tablet
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isTablet()) {
    # Es una Tablet...
} 

// Asignándole un agente personalizado
if (Agent::set("Mozilla/5.0...")->isTablet()) {
    # Es una Tablet...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsTablet
    <h1>Es una Tablet</h1>
@else
    <h1>No es una Tablet</h1>
@endIfAgentIsTablet
```

### Validar si es un Crawler (Robot)
Puedes realizar esta validación desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.
Puedes usar `isCrawler()` ó `isRobot()`

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual
if (Agent::detect()->isCrawler()) { //Agent::detect()->isRobot()
    # Es un Crawler (Robot)...
} 

// Asignándole un agente personalizado
if (Agent::set("User-Agent del Crawler")->isCrawler()) { //Agent::set("User-Agent del Crawler")->isRobot()
    # Es un Crawler (Robot)...
} 
```
Directiva Blade: Esta directiva valida el agente de conexión en uso y, en función de esto, actúa como una condición.

```php
@ifAgentIsCrawler //@ifAgentIsRobot
    <h1>Es un Crawler (Robot)</h1>
@else
    <h1>No es un Crawler (Robot)</h1>
@endIfAgentIsCrawler //@endIfAgentIsRobot
```

### Validar si el Agente Coincide con una Expresión
Puedes realizar esta validación personalizada utilizando el método `match($expresion)` desde los controladores o directamente desde la vista a través de la directiva Blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

// Detectando el Agente Actual 
if (Agent::detect()->match('Firefox')) {
    # El Agente contiene la expresión...
} 

// Asignándole un agente personalizado
if (Agent::set("User-Agent personalizado")->match('Firefox')) {
    # El Agente contiene la expresión...
} 
```

Directiva Blade: Esta directiva valida el agente de conexión en uso contiene una expresión personalizada y, en función de esto, actúa como una condición.

```php
@ifAgentMatch('Firefox')
    <h1>El Agente contiene la expresión</h1>
@else
    <h1>El Agente no contiene la expresión</h1>
@endIfAgentMatch
```

### Validar si el Agente se conecta desde una IP o Puerto específico
Para obtener la dirección IP de origen de la solicitud, puedes utilizar el siguiente código en PHP:

```php
use Rmunate\AgentDetection\Agent;

$ip = Agent::remoteAddress(); //'127.0.0.1'
$puerto = Agent::remotePort(); //55660
```

Directiva Blade: Esta directiva valida si la solicitud proviene de una IP específica.

```php
@ifAgentRemoteIp('127.0.0.1')
    <h1>IP Autorizada</h1>
@else
    <h1>IP No Autorizada</h1>
@endIfAgentRemoteIp
```

Directiva Blade: Esta directiva valida si la solicitud proviene de un puerto específico.
```php
@ifAgentRemotePort('55660')
    <h1>Puerto Autorizado</h1>
@else
    <h1>Puerto No Autorizado</h1>
@endIfAgentRemotePort
```

### Obtener el Sistema Operativo del Cliente de Conexión
Para obtener el nombre del sistema operativo del cliente de conexión, puedes utilizar el siguiente método:

```php
use Rmunate\AgentDetection\Agent;

$so = Agent::detect()->clientOS(); // Mac | Windows...
// Devolverá el nombre del sistema operativo
```

### Obtener los Datos del Navegador
Para obtener los datos del navegador del cliente de conexión, puedes utilizar el siguiente método en PHP:

```php
use Rmunate\Server\Agent;

$browser = Agent::detect()->browser();
```
Este código devolverá un arreglo con información sobre el navegador, que incluye el nombre del navegador, la versión y la plataforma. Por ejemplo:

```php
array:3 [▼
   "name" => "Apple Safari"
   "version" => "537.36"
   "platform" => "Macintosh"
]
```

### Obtener los Datos del Robot
Para obtener los datos del robot que puede existir dentro del cliente de conexión, puedes utilizar el siguiente método en PHP:

```php
use Rmunate\Server\Agent;

//$robotData = $agente = Agent::intersect()->getIfIsCrawler();
//null

$robotData = $agente = Agent::set('Mozilla/5.0 (compatible; Sosospider/2.0; +http://help.soso.com/webspider.htm)')->getIfIsCrawler();
// "Sosospider"

```

## Creador
- 🇨🇴 Raúl Mauricio Uñate Castro
- Correo electrónico: raulmauriciounate@gmail.com

## Licencia
Este proyecto se encuentra bajo la [Licencia MIT](https://choosealicense.com/licenses/mit/).

🌟 ¡Apoya Mis Proyectos! 🚀

¡Realiza las contribuciones que veas necesarias, el código es totalmente tuyo. Juntos podemos hacer cosas asombrosas y mejorar el mundo del desarrollo. Tu apoyo es invaluable. ✨

Si tienes ideas, sugerencias o simplemente deseas colaborar, ¡estamos abiertos a todo! ¡Únete a nuestra comunidad y forma parte de nuestro viaje hacia el éxito! 🌐👩‍💻👨‍💻