<h1>Artisans Consult (The WCS Internship, WCS Web PHP)</h1>

### Create a website for "Artisans Consult" during an internship


---

### Steps

![Artisansconsult](https://i.ibb.co/SxY5Jyr/artisansconsult.png)

1. Clone the project from [Github](https://github.com/jaldabaoth-code/Artisans-Consult-Stage)
2. Go in the project folder
3. Open with your code editor
4. Copy the `.env` file, name it `.env.local` and fill all informations (Database, Symfony/Mailer)
    - MAILER_DSN=smtp://xxx<br/>
        * "Retrieve and copy MAILER_DSN from : <a href="https://mailtrap.io">MAILTRAP</a>
        * Then you go to : -> Inboxes -> My Inbox -> SMTP Settings -> Integrations -> Symfony 5+
5. Run `composer install` to install PHP dependencies
6. Run `yarn install` to install JS dependencies
7. Run `symfony console doctrine:database:create` to create database
8. Run `symfony console doctrine:migration:migrate` to create structure of database
9. Run `symfony console doctrine:fixtures:load` to load the fixtures in database
10. Run `yarn encore dev` to build assets
11. Run `symfony server:start` to launch symfony server
12. Go to <b>localhost:8000</b> on your browser
13. If <b>localhost:8000</b> Show :<br/>
    <i>This site can't be reached

    localhost refuse to connect.
    Try:
    - Checking the connection
    - Checking proxy and firewall

    ERR_CONNECTION_REFUSED</i>

    <b>You need to</b> 
    1. Edit : config/packages/security.yaml<br/>
        Change "access_control" on :

            - { path: '^/admin03060914', roles: ROLE_ADMIN }
            - { path: '^/login', roles: IS_AUTHENTICATED_ANONYMOUSLY }
            # catch all other URLs
            - { path: '^/', roles: IS_AUTHENTICATED_ANONYMOUSLY }

            # - { path: '^/admin03060914', roles: ROLE_ADMIN, requires_channel: https }
            # - { path: '^/login', roles: IS_AUTHENTICATED_ANONYMOUSLY, requires_channel: https }
            # catch all other URLs
            # - { path: '^/', roles: IS_AUTHENTICATED_ANONYMOUSLY, requires_channel: https }

    2. Erase data<br/>
        If you use Google Chrome :
        - Settings -> Privacy and Security
        - Clear browsing data -> Erase data

    3. Restart browser : Go to <b>localhost:8000</b>

13. For login : go to <b>localhost:8000/admin03060914</b> on your browser

    <b>Admin user:</b><br/>
    User = admin<br/>
    Password = admin<br/>

---

## The Links

<a href="https://github.com/RaphaelBS-WCS/artisansconsult2">Link to the repository of project where we worked during <b>WCS Web Internship</b></a>

<a href="https://www.artisansconsult.fr/">Link to current website of <b>Artisans Consult</b></a>
