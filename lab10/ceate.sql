CREATE TABLE USERS (
    userID INT PRIMARY KEY,
    lastName VARCHAR(15),
    firstName VARCHAR(15),
    streetAddress1 VARCHAR(50),
    streetAddress2 VARCHAR(50),
    city VARCHAR(15),
    state VARCHAR(15),
    postalCode INT,
    country VARCHAR(15),
    email VARCHAR(50),
    phone VARCHAR(15),
    password VARCHAR(15)

);

CREATE TABLE VACATIONS (
    vacationID INT PRIMARY KEY,
    image VARCHAR(200), 
    name VARCHAR(15),
    location VARCHAR(15),
    details VARCHAR(15),
    price VARCHAR(50)

);

CREATE TABLE HOTELS (
    hotelID INT PRIMARY KEY,
    location VARCHAR(15), 
    name VARCHAR(15),
    pricePerNight VARCHAR(50)

);

CREATE TABLE TOURS (
    toursID INT PRIMARY KEY,
    location VARCHAR(15), 
    name VARCHAR(100),
    duration VARCHAR(15),
    price VARCHAR(50)

);

CREATE TABLE ATTRACTIONS (
    attractionsID INT PRIMARY KEY,
    location VARCHAR(15), 
    name VARCHAR(100),
    price VARCHAR(50)

);
