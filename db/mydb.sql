CREATE TABLE customer (
  id serial NOT NULL PRIMARY KEY,
  first_name varchar(25) NOT NULL,
  last_name varchar(25) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(30) NOT NULL,
  level int(1) NOT_NULL
);

CREATE TABLE category (
  id SERIAL NOT NULL PRIMARY KEY,
  name VARCHAR(15) NOT NULL
);

CREATE TABLE inventory (
  id SERIAL NOT NULL PRIMARY KEY,
  name varchar(50) NOT NULL,
  description text NOT NULL,
  image varchar(50) NOT NULL,
  price decimal(10,2) NOT NULL DEFAULT ' 0.00 ',
  customer_id int(10) UNSIGNED NOT NULL REFERENCES customer(id),
  category_id int(10) UNSIGNED NOT NULL REFERENCES category(id)
);
