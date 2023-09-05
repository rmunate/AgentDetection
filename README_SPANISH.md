# Agent Detection | Descubrimiento y Análisis de Información del Agente de Conexión

La biblioteca `Agent Detection` ofrece una amplia gama de métodos que te permiten descubrir y analizar la información del agente de conexión en tu aplicación.

⚙️ Esta librería es compatible con versiones de Laravel 8.0 y superiores ⚙️

[![Laravel 8.0+](https://img.shields.io/badge/Laravel-8.0%2B-orange.svg)](https://laravel.com)
[![Laravel 9.0+](https://img.shields.io/badge/Laravel-9.0%2B-orange.svg)](https://laravel.com)
[![Laravel 10.0+](https://img.shields.io/badge/Laravel-10.0%2B-orange.svg)](https://laravel.com)

![LOGO](src/Resources/Logo.png)

📖 [**DOCUMENTACIÓN EN INGLÉS**](README.md) 📖

## Tabla de Contenido
1. [Instalación](#instalación)
2. [Métodos Disponibles](#métodos-disponibles)
3. [Uso](#uso)
4. [Creador](#creador)
5. [Licencia](#licencia)

## Instalación
Para instalar la librería, puedes hacerlo fácilmente a través de Composer.
```shell
composer require rmunate/agent-detection
```

## Introducción
Esta sencilla librería te permite obtener detalles específicos del agente de conexión, lo que te permitirá mejorar la experiencia del usuario en función de los datos de la conexión. Por ejemplo, si detectas que es una conexión móvil, puedes invitar al usuario a descargar la aplicación móvil si tu sistema cuenta con ella. Asimismo, puedes ofrecer una experiencia más personalizada para los usuarios de Android o diferenciar opciones, menús y otros elementos para usuarios de escritorio o dispositivos móviles.

Esta libreria tambien aprovecha la funcionalidad del paquete https://github.com/JayBizzle/Crawler-Detect, para que puedas determinar si se trata de un bot, rastreador o araña.


En resumen, tienes un sinfín de posibilidades a tu disposición.

## Métodos Disponibles
Los siguientes metodos podran ser usados desde cualquier clase, controlador, servicio, etc, escrito en PHP.

### Obtener Agente
`Agent::get()` Retorna el agente de conexión actual, detectado por el servidor.

```php
use Rmunate\AgentDetection\Agent;

Agent::get();
//"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36"
```

### Validar si es una conexion Movil
Esta validacion es posible realizarla desde los controladores o directamente desde la vista a traves de la directiva blade suministrada.

```php
use Rmunate\AgentDetection\Agent;

//Detectando el Agente Actual
if (Agent::detect()->isMobile()) {
    # Es Conexión Movil...
} 

//Asignandole un agente
```

Directiva Blade
```php
@ifAgentIsMobile
    <h1>Es Conexión Movil</h1>
@else
    <h1>No Es Conexión Movil</h1>
@endIfAgentIsMobile
```


| `Agent::detect()->isMobile()` | Valida si el agente proviene de un dispositivo móvil. |
| `Agent::detect()->isDesktop()` | Retorna `true` si el usuario está accediendo desde un dispositivo de escritorio. |
| `Agent::detect()->isIPhone()` | Retorna `true` si el agente del usuario corresponde a un iPhone. |
| `Agent::detect()->isMacintosh()` | Retorna `true` si el agente del usuario corresponde a un sistema operativo Macintosh. |
| `Agent::detect()->isLinux()` | Retorna `true` si el agente del usuario corresponde a un sistema operativo Linux (PC o sistemas Android). |
| `Agent::detect()->isAndroid()` | Retorna `true` si el agente del usuario corresponde a un sistema Android. |
| `Agent::detect()->isWindows()` | Retorna `true` si el agente del usuario corresponde a un sistema operativo Windows. |
| `Agent::detect()->isWindowsPhone()` | Retorna `true` si el agente del usuario corresponde a un sistema operativo Windows Phone. |
| `Agent::detect()->isIpod()` | Retorna `true` si el agente del usuario corresponde a un iPod. |
| `Agent::detect()->isIpad()` | Retorna `true` si el agente del usuario corresponde a un iPad. |
| `Agent::detect()->isIMac()` | Retorna `true` si el agente del usuario corresponde a un iMac. |
| `Agent::detect()->clientOS()` | Retorna el nombre del sistema operativo del cliente actual. |
| `Agent::detect()->browser()` | Retorna información sobre el navegador utilizado por el cliente (Nombre, Versión y Plataforma).|
| `Agent::detect()->remoteAddress()` | Retorna la IP en uso en la conexión al sistema. |
| `Agent::detect()->remotePort()` | Retorna el puerto en uso en la conexión al sistema. |
| `Agent::detect()->isCrawler()` | Retorna `true` si es un detecta robots/arañas/rastreadores a través del encabezado user agenty http_from.  |
| `Agent::detect()->isRobot()` | Retorna `true` si es un detecta robots/arañas/rastreadores a través del encabezado user agenty http_from.  |
| `Agent::detect()->getRobot()` | Retorna el nombre del robot/araña/rastreador encontrado.  |

## Directivas Blade
De igual manera si requieres emplear estas validaciones en las plantillas blade, podras usar las siguientes.

### Validar si es una conexion movil.
```
@agentIsMobile()
    <h1>Conexion Movil</h1>
@endAgentIsMobile()
```

### Validar si es una conexion de escritorio.
```
@agentIsDesktop()
    <h1>Conexion Movil</h1>
@endAgentIsDesktop()
```

### Validar si es una conexion es realizada desde un Iphone.
```
@agentIsIPhone()
    <h1>Conexion Movil</h1>
@endAgentIsIPhone()
```

### Validar si es una conexion desde un Macintosh
```
@agentIsMacintosh()
    <h1>Conexion Movil</h1>
@endAgentIsMacintosh()
```

### Validar si la conexion es desde un sistema operativo Linux
```
@agentIsLinux()
    <h1>Conexion Movil</h1>
@endAgentIsLinux()
```

### Validar si la conexion es desde un sistema operativo Android
```
@agentIsAndroid()
    <h1>Conexion Movil</h1>
@endAgentIsAndroid()
```

### Validar si la conexion es desde un sistema operativo Windows
```
@agentIsWindows()
    <h1>Conexion Movil</h1>
@endAgentIsWindows()
```

### Validar si la conexion es desde un sistema operativo Windows Mobile
```
@agentIsWindowsPhone()
    <h1>Conexion Movil</h1>
@endAgentIsWindowsPhone()
```

### Validar si la conexion es desde un sistema operativo Ipod
```
@agentIsIpod()
    <h1>Conexion Movil</h1>
@endAgentIsIpod()
```

### Validar si la conexion es desde un sistema operativo Ipad
```
@agentIsIpad()
    <h1>Conexion Movil</h1>
@endAgentIsIpad()
```

### Validar si la conexion es desde un sistema operativo IMac
```
@agentIsIMac()
    <h1>Conexion Movil</h1>
@endAgentIsIMac()
```

### Validar si la conexion es desde una dirección ip especifica
```
@agentRemoteIp("200.12.100.10")
    <h1>Conexion Movil</h1>
@endAgentRemoteIp()
```

### Validar si la conexion es desde un puerto especifico
```
@agentRemotePort("8080")
    <h1>Conexion Movil</h1>
@endAgentRemotePort()
```



Con esta potente herramienta, podrás obtener datos de la conexión en tu aplicación y ofrecer diferentes experiencias dependiendo del sistema, navegador o dispositivo que utilice el usuario al conectarse.

## Uso

¿Quieres validar si es una conexión móvil?
```php
use Rmunate\Server\Agent;

if (Agent::detect()->isMobile()) {
    // Es conexión móvil
} else {
    // Es conexión de escritorio
}
```

¿Necesitas conocer los datos del navegador?
```php
use Rmunate\Server\Agent;

$browser = Agent::detect()->browser();
// array:3 [▼
//   "name" => "Apple Safari"
//   "version" => "537.36"
//   "platform" => "Macintosh"
// ]
```

## Creador
- 🇨🇴 Raúl Mauricio Uñate Castro
- Correo electrónico: raulmauriciounate@gmail.com

## Licencia
Este proyecto se encuentra bajo la [Licencia MIT](https://choosealicense.com/licenses/mit/).

🌟 ¡Apoya Mis Proyectos! 🚀

¡Realiza las contribuciones que veas necesarias, el código es totalmente tuyo. Juntos podemos hacer cosas asombrosas y mejorar el mundo del desarrollo. Tu apoyo es invaluable. 💖✨

Si tienes ideas, sugerencias o simplemente deseas colaborar, ¡estamos abiertos a todo! ¡Únete a nuestra comunidad y forma parte de nuestro viaje hacia el éxito! 🌐👩‍💻👨‍💻