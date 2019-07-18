## About The The Challenge

The challenge is to create a simple Laravel application that sends SMS(s) using Africa’s Talking API. The application should be able to download an excel document that shows;
<ul>
    <li>Sent SMS message</li>
    <li>SMS Status</li>
</ul>

## Installation

Clone the project to your local dev environment. 
Once done, run the following commands.

php artisan migrate --seed

The command will run migrations and seed the users table with a default user.
Login with the credentials to access the backend and send sms using AfricasTalking API.

You might also want to change your .env file and replace the apikey.
