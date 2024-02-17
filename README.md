
## Installation

1. Clone the repo
   ```sh
   git clone https://github.com/alijumaan/laravel-ecommerce.git
   ```
2. Install Composer packages
   ```sh
   composer install
   ```
3. Copy the environment file & edit it accordingly
   ```sh
   cp .env.example .env
   ```

4. Generate application key
   ```sh
   php artisan key:generate
   ```

5. Create Database then migrate and seed
   ```sh
   php artisan migrate --seed


6. Linking Storage folder to public
   ```sh
   php artisan storage:link
   ```


7. Compile all your assets including a source map
   ```sh
   npm install && npm run dev
   ```

8. Serve the application
   ```sh
   php artisan serve
   ```
   ```sh
   npm run dev
   ```
   
9. Configuration email
   ```sh
   add mail configuration in .env
   ```

## Permission folder
sudo chmod -R 777 settings.json

## Admin Link
```sh
http://{app_url}/admin
```
## Admin Cred
```sh
admin@admin.com|
Informatics@123
```
# Frontend CSS & JS
```sh
public/frontend/css/custom.css
public/frontend/js/custom.js
```

# Persission & Roles
Admin
Doctors/Supervisors
Users/Customers/Patient
```sh
http://localhost:3000/admin/supervisors
```
```sh
Doctors/Supervisors | 
supervisor@supervisor.com |
Informatics@123
```

dev $2y$10$Yg09GxnPG/2bTGtii.uLoO7hdOyWBqKzEKssEq361ACWXd5zd3hZ2
admin $2y$10$9eTjswS6mBJivtCQzm4syOr3GN/DrJW0IjuOXhj2Kx9M2ZKOdKrB.