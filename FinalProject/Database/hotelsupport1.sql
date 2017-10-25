
CREATE TABLE product (
  P_id int(20) NOT NULL,
  P_name varchar(20) NOT NULL,
  P_catagories varchar(20) NOT NULL,
  P_grade varchar(5) NOT NULL,
  P_price int(10) NOT NULL,
  P_detail varchar(200) NOT NULL,
  P_time_to_shipment varchar(5) NOT NULL,
  P_fee varchar(10) NOT NULL,
  primary key (P_id)
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE user (
  U_id int(10) NOT NULL,
  U_company_name varchar(40) NOT NULL,
  U_username varchar(20) NOT NULL,
  U_password varchar(20) NOT NULL,
  U_type varchar(20) NOT NULL,
  U_email varchar(20) NOT NULL,
  U_address varchar(150) NOT NULL,
  U_language varchar(25) NOT NULL,
  U_tell varchar(10) NOT NULL,
  primary key (U_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE order1 (
  O_id int(10) NOT NULL,
  O_order_serial int(10) NOT NULL,
  U_id_hotel int(10) NOT NULL,
  U_id_supply int(10) NOT NULL,
  P_id int(10) NOT NULL,
  P_name int(25) NOT NULL,
  P_price int(10) NOT NULL,
  O_amount int(10) NOT NULL,
  P_fee varchar(10) NOT NULL,
  O_date date NOT NULL,
  O_price_total int(10) NOT NULL,
  O_status int(15) NOT NULL,
  primary key (O_id),
  foreign key (U_id_hotel) references user(U_id),
  foreign key (U_id_supply) references user(U_id),
  foreign key (P_id) references product(P_id)
  
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

