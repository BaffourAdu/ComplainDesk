THE PROBLEM
----------------------------

Ever tried complaining to your institution about a nagging issue you are facing? The school light being out, a lecturer’s theatrics, the WIFI being down, problems with a course, issues accessing your student portal or is it just plain you are a fresher and you literally have no idea who to meet or what to do. To solve most of these things, requires the student to make a complain as well as tracking his complain to ensure it has been resolved. This is where the problem lies, apart from human error, the individual forgetting or the individual being flooded with the same issues which someone has complained about. 

It is also important to remember in a large institution like University of Ghana, where the Computer Science department is miles away from the relevant academic offices and almost similar distance exist between the hostels. The large population could easily overload the individual being complained to. The distance between the complainant’s location and the office of the individual, i.e. the great fixer and the daunting task to ensure it has been resolved hinders a smooth student experience and the institutions ability to effectively tackle its problems within its institution. 



THE SOLUTION
----------------------------

Complain Desk aims to fix this nagging problem by offering a web application solution to universities. The goal is to easily place in the hands of students several features in order to make complaints to the right authorities easier and efficient. It also provides the opportunity to scan through earlier resolved issues or pending issues, this would prevent the institution from being notified of the same issue several times. While allowing to track the status of complaints made and alerting the complainants when it is resolved.

On the institution side of things, this application prevents the institution from being overloaded with several individuals with different complaints in a day and having no way to put a track on all of them. This allows for the appropriate individual to be alerted, reminded, ask for progress report on behalf of the complainant and inform the complainant as soon as these has been resolved.  This further allows for the institution to make improvement to their institution in areas where it is flawed.

ComplainDesk provides a clean user interface using the Laravel framework which allows for a simple and classic design which users can easily understand. It has also integrated the Africa’s talking sms API which would allow and ensure updates to both users.



CONCLUSION
----------------------------
ComplainDesk in no way makes this assertion that there are not other means to make a complain. Either by virtue of a suggestion box, walking to the office of the appropriate individual or maybe just sending an email to the appropriate authority. But being students ourselves we strongly view this as what is wrong with the complaint system. Especially for a large institution, this little simple task it could be extremely frustrating and unnecessarily long. This application is what we believe to be among the things missing in our various institutions in Ghana which would benefit both the student and the institution.



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

NB: Make sure you have composer installed or downlaod composer at => https://getcomposer.org/download/

1. git clone https://baffouraduboampong@bitbucket.org/baffouraduboampong/complain-desk.git
2. composer install
3. Open the console and cd your project root directory
4. Rename .env.example file to .envinside your project root and update the database information. 
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
Saliha Homatsli,
Tano Onuvughe