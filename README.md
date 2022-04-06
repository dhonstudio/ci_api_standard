This API Connection Application created using CodeIgniter 3
-----------------------------------------------------------

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

Installation
------------

```
git clone https://github.com/dhonstudio/ci_api_standard.git
```

### Supporting Assets

```
assets/ci_libraries/        git clone https://github.com/dhonstudio/ci_libraries.git
```

First Setup
-----------

File and Folder to Setup:

```
application/config/production/database_example.php
assets/
```

- Change the name of file database_example.php to database.php and setting up `$db['custom']` as same as your production database and add `$db['custom_dev']` for your testing database.
- Run `git clone https://github.com/dhonstudio/ci_libraries.git` in your `assets/` folder

Definition
----------

```
api_users [table]   table that must exist, because this API connection use HTTP Basic Authentication
(your_version)      migration version that commonly named using date (start from year, ex. '202204060859')
```

Create Migration
----------------

To creating migration, you first must to create database in your server (in the example is `custom_db`), and the next step is:
1. Open `Migration` controller, and set up in `construct`:

    ```
    $api_db           = 'string name of your database that contains `api_users` table (if exist) in application/config/production/database.php'
    $this->database   = 'string name of your `$db` in application/config/production/database.php where to migrate'
    $this->migration  = 'alphabetic name of your migration file in application/migrations'
    ```

    and set up in `index` function:

    ```
    $this->dhonmigrate->version = integer value of your `(your_version)` (look up Definition section)
    ```

2. Create migration file in folder `application/migrations` named `(your_version)_(name of your migration).php`. Look up `(your_version)` in Definition section.

3. Copy and Paste `code` from `20220127090401_project.php` to your migration file, and setup some code as:

    - Change `class Migration_Project` (line 3) to `class Migration_(name of your migration | capitalize)`