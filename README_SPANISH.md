# Agent Detection | Descubrimiento y Análisis de Información del Agente de Conexión

La biblioteca `Agent Detection` ofrece una amplia gama de métodos que te permiten descubrir y analizar la información del agente de conexión en tu aplicación.

⚙️ Esta librería es compatible con versiones de Laravel 8.0 y superiores ⚙️

[![Laravel 8.0+](https://img.shields.io/badge/Laravel-8.0%2B-orange.svg)](https://laravel.com)
[![Laravel 9.0+](https://img.shields.io/badge/Laravel-9.0%2B-orange.svg)](https://laravel.com)
[![Laravel 10.0+](https://img.shields.io/badge/Laravel-10.0%2B-orange.svg)](https://laravel.com)

![LOGO](https://github.com/rmunate/PHPInfoServer/assets/91748598/f1ee8001-aa76-49c3-82ad-49014b28fd61)

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

En resumen, tienes un sinfín de posibilidades a tu disposición.

## Métodos Disponibles

| Método | Descripción |
| ------ | ----------- |
| `Agent::get()` | Retorna el agente de conexión actual, detectado por el servidor. |
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