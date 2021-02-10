# Send email

Send emial is a simple Laravel project to send email  to large number of  users .

## Installation 
1. Clone *master* Branch

2. Run *composer install* to install the dependencies

   ```bash
     composer install
   ```
3. Run the following command to migrate database tables:
   
   ```bash
     php artisan migrate
   ```

4. Run the following command to start the project:
   ```bash
     php artisan serve
   ```

5. Open the following URL:

   ```bash
     http://127.0.0.1:8000/
   ```


   ```



## How to use?
Import the Postman collection(Send Mails) or use the following URLs:
1- Run the following command to insert data in Users Table:
 ```bash
     php artisan db:seed
   ```
2. To send email to users: [/api/send-mails](http://127.0.0.1:8000/api/send-mails)

3.  Run the following command to start  send email to users:

 ```bash
     php artisan queue:work
   ```
   
## Notes
* I have uploaded the .env file to make it easier to use.
* Debug key is set to true as It's a development version.

