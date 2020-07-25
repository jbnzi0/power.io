# Power.io
Power.io is my M1 web project from Tamkang University in Taiwan. It's the research lab of the school.
I used Laravel with MySQL for the backend services and Vue.JS for the client.


## Installation
First, you need to change the database information on the .env file. Then, you need to run the following commands to make Laravel and Vue work locally.
```bash
composer install 
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install
```

## Launching
You need to launch the two commands simultaneously to load the components
```bash
php artisan serve 
npm run watch
```


## Dashboard
To access the dashboard, you can create an account and then log in to manipulate the data of the website.

# Minor bugs
When pressing the button home or logout in the dashboard, you need to press enter again to load the page.

## Pictures

![picture](https://www.upload.ee/image/12055407/wp.png)
![picture](https://www.upload.ee/image/12055424/research.png)
![picture](https://www.upload.ee/image/12055426/lab.png)
![picture](https://www.upload.ee/image/12055428/dashboard.png)
![picture](https://www.upload.ee/image/12055430/crud.png)
