###Plootus Web Development Internship Assignment

Dependencies -: 
* PhP - 7.1.*
* Laravel 5

####Steps to Run The Project
1. Clone the Repository
2. Copy `.env.example` to  a new file `.env `
3. Create a new mySQL database eg. `plootus`
3. Change Database Credentials And Database name in `.env` file  Line 12,13,14
    ```
    DB_DATABASE=plootus
    DB_USERNAME=root
    DB_PASSWORD=pass.123
    ```
4. Open Terminal (Linux ) or cmd (Windows) in the project root directory and run following commands
    * php composer.phar install
    * php artisan migrate
    * php artisan serve
    
5. Visit localhost:8000 in browser    

####Walk Through the Assignment

1. visit `localhost:8000/` 
2. Click on Register Link(`\register`) present on Nav 
3. Fill Details And Register 
4. Enter Email And Password for login

