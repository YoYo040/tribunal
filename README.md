## 1/creation d'un dossier dans le bureau
## 2/ouvrir ce dossier dans le terminal
## 3/téléchargement de projet
git clone https://github.com/YoYo040/tribunal.git
## 4/taper la commande  
cd tribunal
## 5/instalation les Dependencies
composer install
## 6/ouvrir le projet dand vs code
code .
## 7/renemer le fichier ".env.exemple" à ".env"
## 8/configurer la database dans le ficher .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tribunal
DB_USERNAME=root
DB_PASSWORD=password
## 9/migration de database
php artisan migrate
## 10/insertion le data de admin
php artisan db:seed
## 11/démarer le projet
php artisan serve
