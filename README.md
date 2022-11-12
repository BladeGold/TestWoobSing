Pasos para usar el test:
- Clonar el Repositorio.

```
git clone https://github.com/BladeGold/TestWoobSing.git
```
- Instalar dependencias.
```
composer install
npm install
```
- Generar Key.

```
php artisan key:generate
```
- Agregar los datos de base de datos al archivo .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testwoobsing
DB_USERNAME=root
DB_PASSWORD=
```
-Generar migraciones.

```
php artisan migrate --seed
```
- Activar Servidor.

```
php artisan serve
```
- Verificar la extension **imagick**
```
http://localhost:8000/test
```
*En caso de no existir la extension se debe instalar*
