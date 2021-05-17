# 🎲 ROYAL DICE 🎲

## Casino Online

### Documentación
[GitHub Pages](https://ies-jaume-balmes.github.io/2020-21-DAW2-M12-Royal-Dice/)

### Integrantes:
Pol Balada Rigol

Pau Pereda Tornero

Francisco Chávez Romero

### Tutor:
Juanma Sánchez



# Instalación

## Requisitos

- Xampp (Arrancar el servidor web Apache y MySQL)
- Descargar el proyecto dentro del directorio xampp/htdocs.

## Creación de la Base de Datos

- Entra a http://localhost/phpmyadmin/ y crea una base de datos con el nombre 'royaldice'.
- Después accede desde el Símbolo de sistema (En Windows) o terminal (Linux) al directorio del proyecto
- Una vez allí ejecuta el comando ```php artisan migrate```.

# Uso
- Cuando ya tengamos la migración podremos acceder desde el navegador a través de localhost. Debería ser un enlace parecido a este http://localhost/2020-21-DAW2-M12-Royal-Dice/public/ 
- Para poder acceder a nuestro casino online deberíamos primero registrarnos y después iniciar sesión. 
- Una vez conseguido esto ya podríamos navegar y jugar a los distintos juegos de nuestro casino, ir a la pagina de perfil para cambiar la contraseña (En desarrollo) o ir a la pagina del cajero para añadir tantas fichas como nuestra cartera nos lo permita.
