# LOG GLOBAL - clent/log

El paquete permite al sistema crear una log global a tu aplicacion

## Instalación

Puedes instalar este paquete a través de Composer. Asegúrate de tener Composer instalado en tu sistema. Para poder descargar este paquete es necesario ejecutar estos pasos previos : 

1. **Edita el Archivo `composer.json`:**
   Abre el archivo `composer.json` en la raíz de tu proyecto Laravel.

2. **Agrega el Repositorio VCS:**
   Dentro del archivo `composer.json`, busca la sección `"repositories"` (si no existe, créala) y agrega un nuevo objeto JSON que represente tu repositorio VCS. Aquí hay un ejemplo:

   ```json
   "repositories": [
       {
           "type": "vcs",
            "url":   "git@github.com:clent-csanchez/log.git"
       }
   ]

2. **Agrega el paquete a require del proyecto :**
   Dentro del archivo `composer.json`, busca la sección `"require"` (si no existe, créala) y agrega un nuevo objeto JSON que represente el paquete que vas a descargar desde el repo vsc. Aquí hay un ejemplo:
   
   ```json
    "require": {
        "clent/log" : "dev-master"
    },

3. **Instala el paquete en el proyecto :**
    Para instalar el proyecto, se ejecuta el comando:
```bash
    composer update clent/log
```
4. **Publica el service provider de paquete :**
    Es necesario publicar el service provider para cargar el archivo de configuracion `log.php` que sera creado en tu proyecto, necesario para que funcione correctamente. Se publica con el comando : 
    
```bash
    php artisan vendor:publish --provider="Clent\Log\GlobalLogServiceProvider"
```
    Es posible que si el archivo federado.php existe no cargue nuevas configuraciones si el paquete es actualizado. En este caso correr el comando :
```bash
    php artisan vendor:publish --provider="Clent\Log\GlobalLogServiceProvider" --force
```

4. **Crear tabla tb_log**
    Copia la estructura de la tabla clent_cotizadores.tb_log y pegarla en tu BD. los campos son :
    ```plaintext
        `id`
        `fecha`
        `usuario`
        `modulo`
        `accion`
        `ip`
        `detalles`
    ```

    Enjoy!