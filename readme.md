Here you'll find proper instructions for the steps to set up the System Project.</>

## Requirements

- Laravel Requirements:
    - PHP >= 7.1.*
    - [Composer](https://getcomposer.org/download/) latest version: a PHP dependency manager.
        - Make composer to be global. If running on Ubuntu, run:
            - mv composer.phar /user/local/bin/composer
- MySQL: version >= 5.7.19

- [NodeJS & NPM](https://nodejs.org/en/): version >= 6.11


## Fresh Installation

- **Download BasisComply Project Repository:**
    - git clone https://github.com/joselimaneto/coalition-skills-test

- **Install all PHP composer dependencies:**
    - composer install

- **Creating Environment File:**
    - copy .env.example .env (use cp or copy)

- **Generate Laravel Key and Voyager Instalation**
    - php artisan key:generate
    - php artisan voyager:install

- **Open .env file and modify databases details with server's database info.**

- **Install NPM dependencies by running:**
    - npm install

- **Compile Assets by running:**
    - npm run dev  (for development)
    - npm run prod (for production)
    - npm run watch (for watching assets changes during development)
    - See the package.json for more webpack compilation options.

- **Run migration for table and data creation:**
    - php artisan migrate

- **Run the Laravel API project:**
    - php artisan serve --host localhost --port 8000
    - **localhost can be the server's IP address**

## License

- The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).