[![Build Status](https://travis-ci.org/BaffourAdu/ComplainDesk.svg?branch=master)](https://travis-ci.org/BaffourAdu/ComplainDesk)

About Complain Desk
--------------------------------------------
Complain is a complain management system built and maintained Baffour Adu Boampong, 
Roberta Akoto,
Robert Yin,
Saliha Hotamisli 
to tackle the problem of customer, students or users complaint tracking and management
in an efficient and simple way.


Complain Desk Development
----------------------------------------------
You may propose new features or improvements of existing ones by submiting PR's or sending an email to baffouraduboampong@gmail.com. 


Security Vulnerabilities
----------------------------------------------
If you discover a security vulnerability, please send an email to Baffour Adu Boampong at baffouraduboampong@gmail.com. 
All security vulnerabilities will be promptly addressed.


Coding Style
----------------------------------------------
Complain Desk follows the PSR-2 coding standard and the PSR-4 autoloading standard.


Requirements, Recommended Environment
----------------------------------------------
Laravel 5.6.
Linux based OS preferred.
PHP 7.1+.
Apache or Nginx.


License
----------------------------------------------
ComplainDesk is open-sourced software licensed under the MIT license.


Installation
--------------------------------

NB: Make sure you have composer installed or you may downlaod composer at => https://getcomposer.org/download/

1. git clone <repo-url>
2. Run composer install
3. Open the console and cd into your project root directory
4. Rename .env.example file to .env inside your project root and update the database information. 
    (windows wont let you do it, so you have to open your console cd your project root directory and Run mv .env.example .env )
5. Run composer install or php composer.phar install
6. Run php artisan key:generate
7. Run php artisan migrate
8. Run php artisan db:seed to run seeders, if any.
9. Run php artisan serve

#####You can now access your project at localhost:8000 :)

If for some reason your project stop working run :
1. composer install
2. php artisan migrate



Built in Ghana
