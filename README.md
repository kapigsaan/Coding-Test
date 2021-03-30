**Installing dependencies**
Execute the following commands:
composer require symfony/security-bundle
composer require orm-pack
composer require twig
composer require symfony/web-server-bundle --dev

**Database Configuration**
In your .env file, add the following environment variables:
DATABASE_URL="mysql://testuser:bghnla2ecy60aph6@insite-interviewing-db-do-user-1938513-0.b.db.ondigitalocean.com:25060/directory?serverVersion=5.7"
DATABASE_TENANT_URL_1="mysql://testuser:bghnla2ecy60aph6@insite-interviewing-db-do-user-1938513-0.b.db.ondigitalocean.com:25060/tenant_one?serverVersion=5.7"
DATABASE_TENANT_URL_2="mysql://testuser:bghnla2ecy60aph6@insite-interviewing-db-do-user-1938513-0.b.db.ondigitalocean.com:25060/tenant_two?serverVersion=5.7"

**Running the web application locally**
Execute this command:
php bin/console server:start
This will run the local web server.
