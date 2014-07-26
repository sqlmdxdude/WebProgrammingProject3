create table users (
userid int not null auto_increment,
username varchar(24) not null,
password varchar(1024) not null,
profileid int not null,
constraint PK_USERS primary key (userid));

create table profiles (
profileid int not null auto_increment,
firstname varchar(25) not null,
lastname varchar(25) not null,
dateofbirth date not null,
createdate date not null,
email varchar(128) not null,
constraint PK_PROFILES primary key(profileid));

create table addresses (
addressid int not null auto_increment,
profileid int not null,
addressline1 varchar(128) not null,
addressline2 varchar(128) null,
cityid smallint not null,
stateid smallint not null,
zipcodeid smallint not null,
typeid smallint not null,
constraint PK_ADDRESSES primary key (addressid));

create table billinginfo (
billinginfoid int not null auto_increment,
profileid int not null,
methodid smallint not null,
accountnumber varchar(24) not null,
routingnumber varchar(16) null,
cscnumber varchar(4) null,
expirationdate date null,
accountname varchar(100) not null,
accounttype smallint not null,
constraint PK_BILLINGINFO primary key (billinginfoid));

create table inventory (
inventoryid int not null auto_increment,
itemname varchar(128) not null,
description varchar(256) not null,
pathtoimage varchar(256) null,
price decimal(6,2) not null,
numberinstock smallint not null,
backordered tinyint not null,
arrivaldate date not null,
constraint PK_INVENTORY primary key (inventoryid));

create table searches (
searchid int not null auto_increment,
inventoryid int not null,
topic varchar(128) null,
keywords varchar(256) null,
producttype varchar(128) not null,
constraint PK_SEARCHES primary key (searchid));

create table purchases (
purchaseid int not null auto_increment,
profileid int not null,
purchasedate date not null,
subtotal decimal(8,2) not null,
tax decimal(6,2) not null,
shipping decimal (6,2) not null,
constraint PK_PURCHASES primary key (purchaseid));

create table purchasedetails (
purchasedetailid int not null auto_increment,
purchaseid int not null,
inventoryid int not null,
numberpurchased int not null,
linetotal decimal(6,2) not null,
constraint PK_PURCHASEDETAILS primary key (purchasedetailid));
