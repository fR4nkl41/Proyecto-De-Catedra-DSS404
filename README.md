<p align="center"> <img src="https://laravel.com/img/logomark.min.svg" width="120"> </p> <p align="center"> Sistema web desarrollado en Laravel para la gestión administrativa y operativa del gimnasio <strong>IronPulseGym</strong>. </p>
<p align="center">








</p>

# 🏋️ IronPulseGym

Sistema web desarrollado en Laravel para la gestión administrativa y operativa del gimnasio **IronPulseGym**.

---

## 📌 Descripción

IronPulseGym es una aplicación web desarrollada utilizando Laravel, enfocada en la administración de un gimnasio.  
El sistema permitirá gestionar usuarios, autenticación, base de datos y futuras funcionalidades relacionadas con membresías, clientes y entrenamientos.

---

# 👥 Integrantes del Proyecto

| Nombre | Rol |
|---|---|
| Alisson Centeno | Desarrollo y Backend |
| Bryan Hernadez | Base de Datos |
| Manuel Mazariego | Backend y Configuración |
| Meylin Fuentes | CRUD y Panel Administrativo |
|  Francisco  Morales  | Diseño y Vistas Públicas |
---

# 🛠 Tecnologías Utilizadas

- Laravel 11
- PHP
- MySQL
- Composer
- Git & GitHub
- Bootstrap
- XAMPP
- Visual Studio Code

---

# 📋 Requisitos Previos

Antes de ejecutar el proyecto es necesario instalar:

- PHP
- MySQL
- Composer
- Git
- XAMPP
- Visual Studio Code

---

# ⚙️ Configuración de PHP y MySQL

## 1️⃣ Configurar Variables de Entorno

En el buscador de Windows escribir:

```txt
Editar variables del entorno del sistema
```

Luego:

1. Entrar a **Variables de Entorno**
2. Seleccionar la variable **Path**
3. Presionar **Editar**
4. Agregar las siguientes rutas:

```txt
C:\xampp\php
C:\xampp\mysql\bin
```

> Las rutas pueden variar dependiendo de dónde esté instalado XAMPP.

Finalmente presionar:

```txt
Aceptar → Aceptar → Cerrar
```

---

## 2️⃣ Encender MySQL en XAMPP

Abrir el panel de control de XAMPP y encender:

```txt
MySQL
```

---

## 3️⃣ Verificar Instalación

Abrir CMD y ejecutar:

```bash
php -v
```

Luego:

```bash
mysql -u root -p
```

Si aparecen las versiones correctamente, la instalación está funcionando.

---

# 📦 Instalación de Composer

## Descargar Composer

Ingresar al siguiente enlace:

```txt
https://getcomposer.org/download/
```

Descargar:

```txt
Composer-Setup.exe
```

---

## Instalación

Durante la instalación:

- Seleccionar la primera opción cuando aparezca
- Dejar las demás configuraciones por defecto
- Presionar:

```txt
Next → Install
```

---

## Verificar Composer

Cerrar CMD y abrir uno nuevo.

Ejecutar:

```bash
composer -v
```

Si aparece la versión instalada, Composer quedó configurado correctamente.

---

# 🌐 Instalación de Git

## Descargar Git

Ingresar al enlace:

```txt
https://git-scm.com/download/win
```

Descargar e instalar Git.

---

## Configuración Recomendada

Durante la instalación:

- Seleccionar Visual Studio Code como editor predeterminado
- Dejar las demás opciones por defecto

---

## Verificar Git

Abrir CMD y ejecutar:

```bash
git --version
```

---

# 🚀 Creación del Proyecto Laravel

Abrir CMD y dirigirse a la carpeta donde se desea guardar el proyecto.

Ejemplo:

```bash
cd Desktop
```

Luego ejecutar:

```bash
composer create-project laravel/laravel IronPulseGym
```

> Si es la primera vez usando Laravel, las dependencias tardarán algunos minutos en descargarse.

---

## 📂 Acceder al Proyecto

```bash
cd IronPulseGym
```

---

## ▶️ Ejecutar el Proyecto

```bash
php artisan serve
```

Abrir en el navegador:

```txt
http://127.0.0.1:8000
```

Si aparece la pantalla inicial de Laravel, el proyecto funciona correctamente.

---

# 🗄 Base de Datos

La base de datos utilizada debe llamarse:

```txt
ironpulsegym
```

Esto es importante para mantener la misma configuración en todos los equipos.

---

# 🔧 Configuración del Archivo `.env`

Abrir el archivo `.env` y modificar los siguientes campos:

---

## Configuración General

```env
APP_NAME=IronPulseGym
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
```

---

## Configuración de Base de Datos

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ironpulsegym
DB_USERNAME=root
DB_PASSWORD=
```

> Si algún integrante utiliza otro puerto de MySQL, deberá modificar `DB_PORT`.

---

# 🛣 Rutas Principales

Las rutas principales se encuentran en:

```txt
routes/web.php
```

Ahí se configuran las vistas y navegación del sistema.

---

# 🔐 Vistas de Autenticación

Ubicación:

```txt
resources/views/auth
```

Archivos creados:

```txt
login.blade.php
registro.blade.php
```

Estas vistas contienen:

- Inicio de sesión
- Registro de usuarios

---

# 🚪 Botón de Logout

Código utilizado:

```php
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-outline-warning">
        Cerrar sesión
    </button>
</form>
```

---

# ⚡ Middleware en Laravel 11

En Laravel 11, gran parte de la configuración middleware viene integrada automáticamente.

Archivo relacionado:

```txt
bootstrap/app.php
```

La configuración funciona mediante:

```php
withRouting()
```

Y las rutas definidas en:

```txt
routes/web.php
```

---

# 🧠 Controladores

Los controladores se crean dentro de:

```txt
app/Http/Controllers
```

Aquí se maneja:

- Lógica del sistema
- Validaciones
- Conexión entre vistas y base de datos

---

# 🔧 Configuración de Git

Antes de subir cambios a GitHub, cada integrante debe configurar su identidad.

Ejecutar:

```bash
git config --global user.name "TuNombre"
```

```bash
git config --global user.email "tucorreo@gmail.com"
```

---

# 📤 Inicializar Git en el Proyecto

```bash
git init
```

```bash
git add .
```

```bash
git commit -m "Configuración inicial del proyecto"
```

---

# 🔗 Conectar con GitHub

```bash
git branch -M main
```

```bash
git remote add origin https://github.com/fR4nkl41/Proyecto-De-Catedra-DSS404.git
```

```bash
git push -u origin main
```

---

# 📁 Estructura Principal del Proyecto

```txt
IronPulseGym/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── vendor/
│
├── .env
├── artisan
├── composer.json
├── composer.lock
├── package.json
└── README.md
```

---

# 🧰 Comandos Útiles

## Levantar servidor

```bash
php artisan serve
```

---

## Instalar dependencias

```bash
composer install
```

---

## Actualizar dependencias

```bash
composer update
```

---

## Ejecutar migraciones

```bash
php artisan migrate
```

---

## Limpiar caché

```bash
php artisan config:clear
```

```bash
php artisan cache:clear
```

---

# ✅ Estado Actual del Proyecto

Actualmente el proyecto cuenta con:

- Configuración inicial Laravel
- Sistema de autenticación básico
- Conexión MySQL
- Configuración GitHub
- Vistas iniciales Login y Registro
- Middleware básico configurado

---

# 📌 Recomendaciones

- Mantener actualizado el repositorio antes de trabajar
- Usar ramas para funcionalidades grandes
- No modificar el archivo `.env.example`
- Verificar siempre que MySQL esté encendido
- Ejecutar `composer install` al descargar el proyecto

---

# 🔗 Repositorio Oficial

```txt
https://github.com/fR4nkl41/Proyecto-De-Catedra-DSS404.git
```
