Complain Desk Development
----------------------------------------------
You may propose new features or improvements of existing ones by sending an email to baffouraduboampong@gmail.com. 
If you propose a new feature, please be willing to implement at least some of the code that would be needed to complete the feature.



Security Vulnerabilities
----------------------------------------------
If you discover a security vulnerability, please send an email to Baffour Adu Boampong at baffouraduboampong@gmail.com. 
All security vulnerabilities will be promptly addressed.



Coding Style
----------------------------------------------
Complain Desk follows the PSR-2 coding standard and the PSR-4 autoloading standard.



How to Set-up Project Locally
--------------------------------

NB: Make sure you have composer installed or you may downlaod composer at => https://getcomposer.org/download/

1. git clone <repo-url>
2. Run composer install
3. Open the console and cd your project root directory
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



Core Team
-------------------------
Baffour Adu Boampong, 
Roberta Akoto,
Robert Yin,
Saliha Hotamisli,
Tano Onuvughe