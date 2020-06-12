This is Employee Record Management System implemented in PHP-Laravel. The
functionality is same as the one for other repositories. To run this code you
need to first create the database. Currently the app is using sqlite. Open the
.env file and specify the absolute path to the database file and create/touch
the database file in the database directory. Then migrate the database by
running the command

    php artisan migrate

After that run the app with

    php artisan serve

Good luck!
