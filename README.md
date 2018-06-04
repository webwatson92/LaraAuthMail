# LaraAuthMail V1.0
Facilitating service allowing you to get a head start on a complex project


- User Account Creation System
- Connection
- Member area
- Sending mail locally (Maildev) online (Mailtrap)


Implementation

1- Clone the project
2 - Create a database conforming to the name of the project
3 - Install Maildev via 
    npm install maildev
4 - Configure the .env file for sending mail
    MAIL_DRIVER = SMTP
    MAIL_HOST = localhost
    MAIL_PORT = 1025
    MAIL_USERNAME = null
    MAIL_PASSWORD = null
    MAIL_ENCRYPTION = null
    
5 - Generate migration: 
    php artisan migrate
6 - launch the mail server in CMD: 
    maildev
7 - Open maildev in the browser with: 
      localhost: 1080
8 - Create a new user.
