
#Prueba Técnica: Administrar Librería
Este es un repositorio creado para demostrar mis habilidades en el desarrollo de aplicaciones web utilizando Laravel, PHP, Docker Desktop, MySQL Workbench, Livewire, SweetAlert y Tailwind.

La prueba consistió en desarrollar una aplicación para administrar una librería, incluyendo las siguientes funcionalidades:

Crear cuenta de usuario
Iniciar sesión
Crear un libro
Editar un libro
Borrar un libro
Buscar libros (vista lista pero funcionalidad pendiente)

####Instalación

####Clona el repositorio:
bash
Copy code
git clone https://github.com/mi-usuario/administrar-libreria.git
Instala las dependencias:
bash
Copy code
composer install
npm install
Crea un archivo .env a partir del ejemplo .env.example:
bash
Copy code
cp .env.example .env
Genera una nueva clave de aplicación:
bash
Copy code
php artisan key:generate
Configura las variables de entorno para la conexión a la base de datos:
makefile
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_la_bd
DB_USERNAME=usuario
DB_PASSWORD=contraseña
Ejecuta las migraciones y los seeders:
bash
Copy code
php artisan migrate --seed
Ejecuta el servidor:
bash
Copy code
php artisan serve
Funcionalidades 

####Crear cuenta de usuario
La aplicación permite a los usuarios registrarse en la plataforma. Para hacerlo, deben proporcionar un nombre de usuario, un correo electrónico y una contraseña. La validación se realiza en el servidor, y se utiliza la librería SweetAlert para mostrar mensajes de éxito o error al usuario.

####Iniciar sesión
La aplicación permite a los usuarios iniciar sesión utilizando su correo electrónico y contraseña. Si el usuario no tiene una cuenta, puede registrarse mediante el enlace "Registrarse aquí". Una vez que un usuario ha iniciado sesión, la aplicación lo redirige al listado de libros.

####Crear un libro
Los usuarios pueden crear nuevos libros mediante el botón "Crear libro" en la página de listado. Para hacerlo, deben proporcionar un título, una descripción y una imagen (opcional). La validación se realiza en el servidor, y se utiliza la librería SweetAlert para mostrar mensajes de éxito o error al usuario.

####Editar un libro
Los usuarios pueden editar los libros existentes mediante el botón "Editar" en la página de listado. Para hacerlo, deben proporcionar un título, una descripción y una imagen (opcional). La validación se realiza en el servidor, y se utiliza la librería SweetAlert para mostrar mensajes de éxito o error al usuario.

####Borrar un libro
Los usuarios pueden eliminar los libros existentes mediante el botón "Eliminar" en la página de listado. Se muestra una confirmación antes de eliminar el libro. Si el usuario confirma la eliminación, se elimina el libro y se muestra un mensaje de éxito mediante la librería SweetAlert.

####Buscar libros
La página de listado incluye un campo de búsqueda que permite a los usuarios buscar libros por título o descripción. La funcionalidad aún no ha sido implementada, pero la vista ya se encuentra disponible