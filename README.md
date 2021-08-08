# Learn-Laravel-Vuejs-from-scratch---Build-a-TESLA-web-app


### crear proyecto
`
composer create-project laravel/laravel TodosList
`

### instalar ui

`
 composer require larevel/ui
`
### npm i && npm run dev
### instalar vue
`
php artisan ui vue
`

### crear base de datos con mysql y xampp

`
todo-list
`
### variables de entorno para configurar lo de la base de datos

`
.env colocar el nombre de la base de datos y correr para ver proyecto
php artisan serve
`

### instalar vue globalmente

`
npm i -g vue
`

### correr comando para webpack y vue

`
npm i vue-loader --save-dev --legacy-peer-deps
`

### correr 
`
npm run watch
`

### crear modelo
`
php artisan make:model Todo -m
`

### migrar a la base de datos el modelo creado

`
php artisan migrate
`

### crear controlador

`
php artisan make:controller TodoController -r
`

### instalando fontawesome
`
npm i --save @fortawesome/fontawesome-svg-core
npm i --save @fortawesome/free-solid-svg-icons
npm i --save @fortawesome/vue-fontawesome@latest
`

### instalando axios

`
npm -i --save axios
`