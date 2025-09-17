<?php
echo "1) ¿Para que se utiliza el ruteo en una aplicación web?
<br>
Sirve para determinar que contenido mostrar según la URL que se visita. Asocia las URLs a lo que se está refiriendo la pantalla. Cada solicitud del usuario es dirigida mediante un método HTTP a un componente de código encargado de atenderlas.
<br>
<br>

2) ¿Qué ventajas tiene la generación de URLs semánticas?
<br>
Hacen que sean fáciles de entender para los usuarios, su posicionamiento web es mejor, da información acerca de la estructura del sitio, mas fácil para compartir y se ven mejor al imprimirlas en folletos, por ejemplo, o se deben publicar en algún lado. Son 'amigables'
<br>
<br>

3) ¿Qué es y que nos permite hacer el archivo .htaccess?
<br>
Ese archivo permite hacer el ruteo de aplicaciones (entre otras cosas en esas app). Es un archivo de configuración del servidor Apache. Redirige el request(solicitud) a un único archivo
<br>
<pre>
< IfModule mod_rewrite.c>
    RewriteEngine On  //permite reescritura de URLs//
    RewriteCond %{REQUEST_FILENAME} -f [OR] //si existe archivo se RewriteRule
    RewriteCond %{REQUEST_FILENAME} -d
<br>
    RewriteRule \.(?:css|js|jpe?g|gif|png)$ - [L]    | contenido estático sea accedido
    RewriteRule ^(.*)$ router.php?action=$1 [QSA,L]  | por método
< /IfModule>
</pre>
";
?>