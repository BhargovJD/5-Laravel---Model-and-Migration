1. Database: in .env: DB_DATABASE=laravel
2. php artisan config:Cache
3. php artisan migrate
4. Creating table using migration:
   ->php artisan make:migration create_customers_table. Will reflect in Databases/Migrations
   ->php artisan migrate
   ->php artisan migrate:rollback
   ->php artisan migrate

    ->Some times realtio table does not work. Run this:php artisan migrate:refresh
    -> Adding column to existing table: php artisan make:migration add_columns_to_customers_table
    ->php artisan migrate

5. Creating model for our customers table
   ->php artisan make:model Customer(Will be reflect in App\Models)
   Relate to customers tabel: in Customer.php: private $table="customers";
   private $primaryKey="customer_id";

6. Fetch data from web.php.Check this file
7. Model and Migration together: php artisan make:model Product --migration
