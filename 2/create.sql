DROP TABLE IF EXISTS Category;
DROP TABLE IF EXISTS Bid;
DROP TABLE IF EXISTS Item;
DROP TABLE IF EXISTS User;
CREATE TABLE User(
    userID VARCHAR(50),
    rating INT,
    location VARCHAR(50),
    country VARCHAR(20),
    PRIMARY KEY (userID)
);
CREATE TABLE Item(
    itemID INT,
    name VARCHAR(60),
    currently FLOAT,
    buy_price FLOAT,
    first_bid FLOAT,
    started DATE,
    ends DATE,
    userID VARCHAR(50),
    description VARCHAR(500),
    PRIMARY KEY (itemID),
    FOREIGN KEY (userID) REFERENCES User(userID)
);
CREATE TABLE Category(
    itemID INT,
    categoryID VARCHAR(50),
    PRIMARY KEY (itemID, categoryID),
    FOREIGN KEY (itemID) REFERENCES Item(itemID)
);
CREATE TABLE Bid(
    itemID INT,
    userID VARCHAR(50),
    time DATE,
    amount FLOAT,
    PRIMARY KEY (itemID, userID, time),
    FOREIGN KEY (userID) REFERENCES User(userID),
    FOREIGN KEY (itemID) REFERENCES Item(itemID)
);
