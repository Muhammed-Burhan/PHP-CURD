# PHP-CRUD

This is a simple PHP CRUD App that allows you to create, read, update, and delete data from a MySQL database (using PDO).

## To run the app

follow these steps:

1. Clone the repository and open the project:

```
   git clone https://github.com/Muhammed-Burhan/PHP-CURD.git
```

2. install the necessary packages using composer:

```
   composer install
```

3. create `.env` file and add `database` variables.

4. open XAMPP and start apache and mysql (you must clone the project in xamp/htdocs folder).

5. go to your browser and paste this URL:

```
   http://localhost/crud/modules/contact/list-contact.php
```

## Contacts Table

The Contacts table stores information about individual contacts in the system.

### Structure

The table has the following columns:

| Column            | Type    | Description                        |
| ----------------- | ------- | ---------------------------------- |
| `id`              | integer | Unique identifier for each contact |
| `contact_type_id` | integer | Business or friend contact         |
| `full_name`       | string  | First name of the contact          |
| `nickname`        | string  | nickname of the contact            |
| `email`           | string  | Email address of the contact       |
| `phone`           | string  | Phone number of the contact        |
| `address`         | string  | Address of the contact             |

The `id` column is the primary key in the table and it's set to auto increment.
