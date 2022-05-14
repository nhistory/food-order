# food-order

A food order application for restaurant with CRUD and authentication

-   Functionalized login authentication and access control by using PHP

## Technical specification

-   phpmyadmin 5.1.3
-   MySQL and MariaDB
-   PHP
-   HTML, CSS

## Intial setup process

1. Install MySQL on Mac (https://dev.mysql.com/doc/refman/5.7/en/macos-installation-pkg.html)
2. Setup phpmyadmin on the localhost path

-   Mac: /Library/WebServer/Documents
-   Window: C:/Apache24/htdocs (If you use apache2 web server)

## Database

```
|- tbl_admin
    |- id
    |- full_name
    |- username
    |- password
|- tbl_category
    |- id
    |- title
    |- image_name
    |- featured
    |- active
|- tbl_food
    |- id
    |- title
    |- description
    |- price
    |- image_name
    |- catigory_id
    |- featured
    |- active
|- tbl_order
    |- id
    |- food
    |- price
    |- qty
    |- total
    |- order_date
    |- status
    |- customer_name
    |- customer_contact
    |- customer_email
    |- customer_address
```

## SQL query command

-   Save the admin data into database

```sql
INSERT INTO tbl_admin SET
    full_name='$full_name',
    username='$username',
    password='$password'
```

-   Delete the admin data from database

```sql
DELETE FROM tbl_admin WHERE id=$id
```

-   Check whether the user with username and password exists or not

```sql
SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'
```

-   Update the admin data

```sql
UPDATE tbl_admin SET
    full_name = '$full_name',
    username = '$username'
    WHERE id='$id'
```

## References

-   https://www.phpmyadmin.net/
-   https://www.sitepoint.com/how-to-install-apache-on-windows/
-   https://www.youtube.com/playlist?list=PLBLPjjQlnVXXBheMQrkv3UROskC0K1ctW
