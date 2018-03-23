[![Build Status](https://travis-ci.org/BaffourAdu/ComplainDesk.svg?branch=master)](https://travis-ci.org/BaffourAdu/ComplainDesk)

About Complain Desk
--------------------------------------------
Ever tried complaining to your Institution or a Service Provider about a nagging issue you are facing? To solve most of these things, requires the one to lodge a complain as well as follow up on his complain to ensure it has been resolved.This is where the problem lies, apart from human error, the individual forgetting or the individual being flooded with the same issues which someone has complained about.

The large population or customer base of the service could easily overload the individual being complained to. The distance between the complainant’s location and the office of the Institution or Service Provider, i.e. the great fixer and the daunting task to ensure it has been resolved hinders a smooth Customer experience and the Institutions ability to effectively tackle its problems.

Complain Desk aims to fix this nagging problem by offering a web application to tackle the problem of Customers or Users complains tracking and management in a simple but efficient way.

The goal is to easily place in the hands of customers or users a simple interface in order to make complaints to the right authorities easier and efficient. It also provides the opportunity to scan through earlier resolved issues or pending issues, this would prevent the institutions or organizations from being notified of the same issue several times. While allowing to track the status of complaints made and alerting the complainants when it is resolved.

On the institution or organizational side of things, this application prevents the institution from being overloaded with several individuals with different complaints in a day and having no way to put a track on all of them. This allows for the appropriate individual to be alerted, reminded, ask for progress report on behalf of the complainant and inform the complainant as soon as these has been resolved. This further allows for the institution to make improvement to their institution in areas where it is flawed.

It has also SMS and Email notification system which would allow and ensure updates to both users.

Complain Desk provides a clean user interface using the Laravel framework which allows for a simple and classic design which users can easily understand. 

ComplainDesk in no way makes this assertion that there are not other means to make a complain. Either by virtue of a suggestion box, walking to the office of the appropriate individual or maybe just sending an email to the appropriate authority. But being part of institutions with some of the problems stated earlier we strongly view this as what is wrong with the complaint system. Especially for a large institutions or organizations, a simple enquiry or complain could be extremely frustrating and unnecessarily long.

This application is what we believe to be among the things missing in our various Institutions and Organizations in Ghana which would benefit both the Customers or Users and the institution.


Features
---------------------------------------------
* Simple UI
* Bootstrap 4
* Local Authentication using Email and Password
* Complain Status and Duration Tracking
* Add multiple Admins to manage complains
* Ability to Categorize Complains
* Email and SMS Notification
* Forgot Password
* Account Management
* CSRF Protection
* Easily Generate Report on Complains 
* Login with either email or telephone (Comming Soon)
* A Knowledge base for already resolved issues to prevent same issue from been reported multiplt times(Comming Soon)


Authors
----------------------------------------------
* Baffour Adu Boampong
* Roberta Akoto
* Robert Yin
* Saliha Hotamisli


Complain Desk Development Contribution
----------------------------------------------
Thank you for considering contribute. You may propose new features or improvements of existing ones by submiting Pull Requests or sending an email to baffouraduboampong@gmail.com. Issues can also be submitted to as via our platform => https://complaindesk.herokuapp.com 

Pull Requests
----------------------------------------------
PSR-2 Coding Standard - The easiest way to apply the conventions is to install PHP Code Sniffer.

Add tests! - Your patch won't be accepted if it doesn't have tests.

Document any change in behaviour - Make sure the README.md and any other relevant documentation are kept up-to-date.

Create feature branches - Don't ask us to pull from your master branch.

One pull request per feature - If you want to do more than one thing, send multiple pull requests.

Send coherent history - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please squash them before submitting.

Tests
---------------------------------------------
Please type the following command to run the test.

phpunit

or

vendor/bin/phpunit

or

vendor\bin\phpunit


Security Vulnerabilities
----------------------------------------------
If you discover a security vulnerability, please send an email to Baffour Adu Boampong at baffouraduboampong@gmail.com. 
All security vulnerabilities will be promptly addressed.


Requirements, Recommended Environment
----------------------------------------------
* Laravel 5.6
* Mysql
* Linux based OS preferre.
* PHP 7.1+
* Apache or Nginx


Support Donations
----------------------------------------------
Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter, Facebook or HackerNews? Spread the word!

If you want to donate something you can reach out to me via email at baffouraduboampong@gmail.com or on twitter @baffourboampong


Installation
----------------------------------------------

NB: Make sure you have composer installed or you may downlaod composer at => https://getcomposer.org/download/

1. git clone <repo-url>
2. Open the console and cd into your project root directory
3. Rename .env.example file to .env inside your project root and update the database information. 
    (windows wont let you do it, so you have to open your console cd your project root directory and Run mv .env.example .env )
4. Run composer install or php composer.phar install
5. Run php artisan key:generate
6. Run php artisan migrate
7. Run php artisan db:seed to run seeders(Optional)
8. Run php artisan serve

#####You can now access your project at localhost:8000 :)

If for some reason your project stop working run :
1. composer install
2. php artisan migrate


License
----------------------------------------------
ComplainDesk is open-sourced software licensed under the MIT license.


#Built in Ghana for the world!
