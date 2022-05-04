//https://www.youtube.com/watch?v=TVW3tsMcGzA Criar table no heroku


CREATE TABLE public.tb_profiles (
    id_profile SERIAL PRIMARY KEY,
    profile_name "varchar",
    profile_desc "varchar",
    profile_page "varchar"
);

INSERT INTO public.tb_profiles (id_profile,profile_name,profile_desc,profile_page) VALUES
	 (1,'Administrador','Admin de todo o sistema','admin.php');

CREATE TABLE tb_users (
  id_user SERIAL PRIMARY KEY,
  user_name varchar NOT NULL,
  user_email varchar UNIQUE NOT NULL,
  user_password varchar NOT NULL,
  user_created_in timestamp NULL DEFAULT current_timestamp,
  profile_id int DEFAULT NULL
);

INSERT INTO tb_users (id_user, user_name, user_email, user_password, user_created_in, profile_id) VALUES
(1, 'Admin', 'admin@email.com', '$2y$10$5Ac.tC/syFSa.dOvpdaryOkIRTBzVoaP/laSW9MLU4o1Q9av6Rb5m', '2019-12-18 13:42:21', 1);

CREATE TABLE tb_clientes (
  id_cliente SERIAL PRIMARY KEY,
  cliente_name varchar(255) DEFAULT NULL,
  cliente_birth date DEFAULT NULL,
  cliente_created_in timestamp NULL DEFAULT current_timestamp,
  user_id varchar(30) NOT NULL
);

CREATE TABLE tb_compras (
  id_compra SERIAL PRIMARY KEY,
  cliente_id int NOT NULL,
  cliente_name varchar NOT NULL,
  producto_id int NOT NULL,
  producto_compra varchar NOT NULL,
  precio_compra decimal(11,2) NOT NULL,
  fecha_compra date NOT NULL,
  user_created_in timestamp NULL DEFAULT current_timestamp,
  user_id varchar(30) NOT NULL
);

CREATE TABLE tb_productos (
  id_producto SERIAL PRIMARY KEY,
  product_name varchar NOT NULL,
  product_price decimal(11,2) NOT NULL,
  product_description varchar NOT NULL,
  producto_created_in timestamp NULL DEFAULT current_timestamp,
  user_id varchar(30) NOT NULL
);