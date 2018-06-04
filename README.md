# LaraAuthMail V1.0
Facilitating service allowing you to get a head start on a complex project


- User Account Creation System
- Connection
- Member area
- Sending mail locally (Maildev) online (Mailtrap)


Implementation

- Clone the projec
- Create a database conforming to the name of the project
- Install Maildev via 
    npm install maildev
- Configure the .env file for sending mail
    MAIL_DRIVER = SMTP
    MAIL_HOST = localhost
    MAIL_PORT = 1025
    MAIL_USERNAME = null	
    MAIL_PASSWORD = null
    MAIL_ENCRYPTION = null
    
- Generate migration: 
    php artisan migrate
- launch the mail server in CMD: 
    maildev
- Open maildev in the browser with: 
      localhost: 1080
- Create a new user.
