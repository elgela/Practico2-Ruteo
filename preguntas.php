<!--
1) ¿Para que se utiliza el ruteo en una aplicación web?

Sirve para determinar que contenido mostrar según la URL que se visita. Asocia las URLs a lo que se está refiriendo la pantalla

2) ¿Qué ventajas tiene la generación de URL's semánticas?

Hacen que sean fáciles de entender para los usuarios, su posicionamiento web es mejor, da información acerca de la estructura del sitio, mas fácil para compartir y se ven mejor al imprimirlas en folletos, por ejemplo, o se deben publicar en algún lado. Son "amigables"

3) ¿Qué es y que nos permite hacer el archivo .htaccess?

Ese archivo permite hacer el ruteo de aplicaciones (entre otras cosas en esas app). Es un archivo de configuración del servidor Apache. Redirige el request(solicitud) a un único archivo

<IfModule mod_rewrite.c>
    RewriteEngine On  //permite reescritura de URLs//
    RewriteCond %{REQUEST_FILENAME} -f [OR] //si existe archivo se RewriteRule
    RewriteCond %{REQUEST_FILENAME} -d

    RewriteRule \.(?:css|js|jpe?g|gif|png)$ - [L]    | contenido estático sea accedido
    RewriteRule ^(.*)$ router.php?action=$1 [QSA,L]  | por método
</IfModule>

-->