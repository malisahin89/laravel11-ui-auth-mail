<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
    <h1 align="center">Sending Email and Tracker with UI/Auth in Laravel 11</h1>
</p>
<p align="center">
    <em>Sory My Frontend So Bad</em>
</p>
<p align="center">
	<img src="https://img.shields.io/github/license/malisahin89/laravel11-ui-auth-mail?style=flat&color=0080ff" alt="license">
	<img src="https://img.shields.io/github/last-commit/malisahin89/laravel11-ui-auth-mail?style=flat&logo=git&logoColor=white&color=0080ff" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/malisahin89/laravel11-ui-auth-mail?style=flat&color=0080ff" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/malisahin89/laravel11-ui-auth-mail?style=flat&color=0080ff" alt="repo-language-count">
<p>
<p align="center">
		<em>Developed with the software and tools below.</em>
</p>
<p align="center">
	<img src="https://img.shields.io/badge/JavaScript-F7DF1E.svg?style=flat&logo=JavaScript&logoColor=black" alt="JavaScript">
	<img src="https://img.shields.io/badge/Sass-CC6699.svg?style=flat&logo=Sass&logoColor=white" alt="Sass">
	<img src="https://img.shields.io/badge/Bootstrap-7952B3.svg?style=flat&logo=Bootstrap&logoColor=white" alt="Bootstrap">
	<img src="https://img.shields.io/badge/PHP-777BB4.svg?style=flat&logo=PHP&logoColor=white" alt="PHP">
	<img src="https://img.shields.io/badge/Vite-646CFF.svg?style=flat&logo=Vite&logoColor=white" alt="Vite">
	<img src="https://img.shields.io/badge/Axios-5A29E4.svg?style=flat&logo=Axios&logoColor=white" alt="Axios">
	<img src="https://img.shields.io/badge/JSON-000000.svg?style=flat&logo=JSON&logoColor=white" alt="JSON">
</p>
<hr>


##  Getting Started

***Requirements***

Ensure you have the following dependencies installed on your system:

* **PHP**: `version 8.2` Laravel 11.x requires a minimum PHP version

###  Installation

1. Clone the laravel11-ui-auth-mail repository:

```sh
git clone https://github.com/malisahin89/laravel11-ui-auth-mail
```

2. Change to the project directory:

```sh
cd laravel11-ui-auth-mail
```

3. Install the dependencies:

```sh
composer install
```

<b>
4. Create a new .env file and fill in the required fields for database connection
</b>

5. DB Migrate:

```sh
php artisan migrate
```
---

##  Attention

- All tests were done with MailTrap, since I tried it locally, Tracker Show does not appear when the e-mail is opened.

- .env Mailtrap settings
```sh
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=***mailtrap*username***
MAIL_PASSWORD=***mailtrap*pass***
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="test@mail.com"
MAIL_FROM_NAME="${APP_NAME}"
```

- Add panels without mailtrap or merge a user and fill in the 'email_verified_at' section in the User table and then set 'is_admin' as 1 to send emails through the provided email link and the system.


---
