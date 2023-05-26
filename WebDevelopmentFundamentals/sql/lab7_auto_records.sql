/**
 * File Name: lab7_auto_records.sql
 * Course code: WEBD2201
 * @author Eisha Aqeel
 * @version 1.0 (March 23, 2022)
 * Short description: This is part of Lab 7 which is on databases.
 */

-- DROPing the tables to clear out any existing data
DROP TABLE IF EXISTS automobiles;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE automobiles(
	id INTEGER PRIMARY KEY,
	make VARCHAR(15) NOT NULL,
    model VARCHAR(20) NOT NULL,
    year INTEGER NOT NULL, 
    owner VARCHAR(128) NOT NULL, 
    msrp NUMERIC(9, 2) NOT NULL,
    purchase_date DATE NOT NULL
);

--GRANT ALL ON automobiles TO faculty;  --required when running the script on opentech to allow faculty members to access your databsae table

INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	1,
	'Subaru',
    'BRZ',
    2014,
    'Bill Smith',
    32990.00,
    '2015-05-30');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	2,
	'Ford',
    'Mustang',
    1967,
    'Steve McQueen',
    85000.00,
    '2015-05-30');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	3,
	'Mazda',
    'Miata',
    2020,
    'Fred Jones',
    35999.99,
    '2020-04-01');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	4,
	'Subaru',
    'STI',
    2019,
    'Jane Doe',
    32990.00,
    '2018-10-11');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	5,
	'Chevy',
    'Corvette',
    1976,
    'Dirk Bittler',
    17432.99,
    '2012-12-11');

SELECT make, model, year, msrp FROM automobiles ORDER BY year ASC;

UPDATE automobiles SET owner = 'Eisha Aqeel' WHERE id = 1;

DELETE FROM automobiles WHERE id = 3;

SELECT * FROM automobiles ORDER BY id;