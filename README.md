# api-usuarios

API simple de usuarios (sin autenticación​ :open_mouth:).

## Running

1. Crea una base de datos en tu gestor favorito (Postgres, MySQL, SQL Server, etc.)

2. Renombra el archivo **.env.example** :point_right: **.env**

3. Cambia las claves de acceso según tu gestor de bases de datos en el archivo **.env**

   ```bash
   ...
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=homestead
   DB_USERNAME=homestead
   DB_PASSWORD=secret
   ...
   ```

4. Ejecuta las migraciones:

   ```bash
   php artisan migrate
   ```

   > Opcional: Ejecuta los *seeder* para generar registros aleatorios en las tablas de la base de datos
   >
   > `php artisan  db:seed`

