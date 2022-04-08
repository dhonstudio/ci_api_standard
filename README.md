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

- Change the name of file `database_example.php` to `database.php` and setting up `$db['custom']` as same as your production database and `$db['custom_dev']` for your testing database. You are free to change string name in your `$db[]`, but string name of production and testing database must same except `_dev` (for example `$db['project']` and `$db['project_dev']`).
- Run `git clone https://github.com/dhonstudio/ci_libraries.git` in your `assets/` folder.

Definition
----------

```
api_users [table]   table that must exist, because this API connection use HTTP Basic Authentication
(your_version)      migration version that commonly named using date (start from year, ex. '202204060859')
(api_command)       any command that can called from API connection
(your_db_string)    db string name in `$db[]`
(your_table)        name of your table
```

Create Migration
----------------

To creating migration, you first must to create production and testing database in your server (in the example is `custom_db` and `custom_db_dev`), and the next step is:
1. Open `Migrate` controller, and set up in `construct`:

    ```
    $api_db                     = 'string name of your database that contains `api_users` table (if existed) in application/config/production/database.php'
    $this->database             = 'string name of your `$db[]` in application/config/production/database.php where to migrate'
    $this->migration            = 'alphabetic name of your migration file in application/migrations/'

    $this->dhonmigrate->version = integer value of your `(your_version)` (look up in Definition section)
    ```

2. Create migration file in folder `application/migrations` named `(your_version)_(name of your migration).php`. Look up `(your_version)` in Definition section.

3. Copy and Paste `code` from `202204060859_custom.php` to your migration file, and setup some code as:

    - Change `class Migration_Custom` (line 3) to `class Migration_(name of your migration | capitalize)`.
    - Default existed table in migration file is `api_users` (look up in Definition section). You can setup your HTTP Basic Authentication in line 31 (for username) and line 32 (for password). Change `admin` to everything that you want and that you felt secure.

4. If you want to make one/some table in your database with migration, create these code in `up` function before line of `if ($this->dev == false) $this->_dev();` (before line 35):

    ```
    $this->migration->dhonmigrate->table                    to name your table, must exist in first line of your migration code
    $this->migration->dhonmigrate->ai()                     to set your column AUTO-INCREMENT, usually used for ID
    $this->migration->dhonmigrate->unique()                 to set your column UNIQUE
    $this->migration->dhonmigrate->constraint('')           to set max value of your column, fill with number as string
    $this->migration->dhonmigrate->default('')              to set default value of your column, fill with string
    $this->migration->dhonmigrate->field('')                to finish making your column, fill with `name of your column` | `type data` | `nullable`
    $this->migration->dhonmigrate->add_key('')              to set any column as PRIMARY KEY, fill with string name of your selected column
    $this->migration->dhonmigrate->create_table()           to finish your table creation
    $this->migration->dhonmigrate->create_table('force')    to force overwrite your table (drop and create new table, will delete your data)
    $this->migration->dhonmigrate->insert([])               to insert some data to your table, fill with Array adapted your database
    ```

5. If you want to update your table with migration without affect your data, create these code in `change` function:

    Add Column:
    ```
    $this->migration->dhonmigrate->table            to name your table that will updated, must exist in first line of your migration code
    $this->migration->dhonmigrate->unique()         to set your column UNIQUE
    $this->migration->dhonmigrate->constraint('')   to set max value of your column, fill with number as string
    $this->migration->dhonmigrate->default('')      to set default value of your column, fill with string
    $this->migration->dhonmigrate->field('')        to finish making your column, fill with `name of your column` | `type data` | `nullable`
    $this->migration->dhonmigrate->add_field()      to finish your column adding
    ```

    Change Column:
    ```
    $this->migration->dhonmigrate->table            to name your table that will updated, must exist in first line of your migration code
    $this->migration->dhonmigrate->unique()         to set your column UNIQUE
    $this->migration->dhonmigrate->constraint('')   to set max value of your column, fill with number as string
    $this->migration->dhonmigrate->default('')      to set default value of your column, fill with string
    $this->migration->dhonmigrate->field('')        to finish changing your column, fill with `name of your column` | `type data` | `nullable`
    $this->migration->dhonmigrate->field([array])   to finish changing your column, fill with [`name of your old column name`,`name of your new column name`] | `type data` | `nullable`
    $this->migration->dhonmigrate->change_field()   to finish your column changing
    ```

    Then change `index` function in `Migrate` controller on this section of code: `$this->dhonmigrate->migrate($this->migration, 'change');`.

6. If you want to delete one/some of column in your table with migration, create these code in `drop` function:
    
    ```
    $this->migration->dhonmigrate->table            to name your table that will updated, must exist in first line of your migration code
    $this->migration->dhonmigrate->drop_field('')   to delete your selected column, fill with `name of your column`
    ```

Connect to API (GET)
--------------------

First you must setup your `Api` controller, in function `index`. In line 27, set up with string name of your database that contains `api_users` table.

For testing connection your API, run this method:

- In localhost:
    `http://localhost/ci_api_standard/ + (your_db_string) + '/' + (your_table) + (api_command)`

- In your hosting:
    `https://your_api_domain.com/ + (your_db_string) + '/' + (your_table) + (api_command)`

### (api_command)

```
(empty)                                         get all data from your table
?(column_name)=(value)                          get data from selected column based on (value)
?(column_name)__more=(value)                    get data from selected column where more than (value)
?(column_name)__less=(value)                    get data from selected column where less than (value)
?keyword=(value)                                find data contains (value)
?limit=(limit_value)                            get data with limitation, for jump to any page, use `&offset=(page)`
?sort_by=(column_name)&sort_method=(asc/desc)   get data from selected column with sort method (asc/desc)
/password_verify?                               validate password `true` or `false`, add `(column_name)=(value)&(password_column_name)=(password_value)` after `?`
/delete/(data_id)                               delete your data base on (data_id)

```

Connect to API (POST)
---------------------

Same with GET method, but with adding POST request.