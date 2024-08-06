<p align="center"><a href="https://filamentphp.com/" target="_blank"><img src="https://filamentphp.com/build/assets/rocket-0d392ed0.webp" width="400" alt="Filament Logo"></a></p>

# Aplicación de Alquiler de Películas

Bienvenido al repositorio de la aplicación de alquiler de películas. Esta aplicación permite a los usuarios alquilar películas, ver detalles de películas, gestionar alquileres, y más. Está construida con [FilamentPHP](https://filamentphp.com/), un elegante panel de administración para Laravel.

## Funcionalidades Principales

### Para Usuarios

- **Registro y Autenticación**
  - Los usuarios pueden registrarse y autenticarse en la aplicación para acceder a las funciones de alquiler.
  
- **Visualización de Películas**
  - Los usuarios pueden navegar por la lista de películas disponibles, ver detalles, y filtrar por categorías.

- **Alquiler de Películas**
  - Los usuarios pueden alquilar películas, ya sea usando dinero o puntos acumulados.
  - Películas premium requieren puntos específicos para ser alquiladas.

- **Gestión de Alquileres**
  - Los usuarios pueden ver el historial de sus alquileres y el estado actual (pendiente, devuelta, atrasada).
  - Los usuarios pueden consultar la fecha límite para devolver las películas alquiladas.

### Para Administradores

- **Gestión de Películas**
  - Los administradores pueden añadir, editar y eliminar películas.
  - Pueden definir detalles como el título, descripción, precio, puntos necesarios, y stock.

- **Visualización de Alquileres**
  - Los administradores pueden ver todas las películas alquiladas, incluyendo quién las alquiló, la fecha de alquiler y el plazo de devolución.
  
- **Gestión de Stock**
  - Los administradores pueden actualizar el stock de las películas para reflejar la disponibilidad actual.

## Tecnologías Utilizadas

- **Laravel**: Framework PHP para el desarrollo de aplicaciones web.
- **FilamentPHP**: Panel de administración para Laravel, utilizado para crear interfaces de administración intuitivas.
- **PostgreSQL**: Sistema de gestión de bases de datos relacional utilizado para almacenar la información de la aplicación.

## Instalación

1. **Clonar el Repositorio**
    git clone https://github.com/tuusuario/nombre-repositorio.git

2. **Instalar dependencias**
    composer install

3. **Configurar el Entorno**
    cp .env.example .env

4. **Generar Clave de Aplicación**
    php artisan key:generate

5. **Iniciar Servidor**
    php artisan serve
