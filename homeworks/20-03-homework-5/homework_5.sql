-- 1.	Write a statement that will select the City column from the Customers table.
SELECT City FROM Customers;

-- 2.	Select all the different values from the Country column in the Customers table.
SELECT DISTINCT Country FROM Customers;

-- 3.	Select all records where the City column has the value "Berlin".
SELECT * FROM Customers WHERE City = 'Berlin';

-- 4.	Use the NOT keyword to select all records where City is NOT "Berlin".
SELECT * FROM Customers WHERE NOT City = 'Berlin';

-- 5.	Select all records where the City column has the value 'Berlin' and the PostalCode column has the value 12209.
SELECT * FROM Customers WHERE City = 'Berlin' AND PostalCode = 12209;

-- 6.	Select all records from the Customers table, sort the result reversed alphabetically by the column City.
SELECT * FROM Customers ORDER BY City DESC;

-- 7.	Select all records from the Customers table, sort the result alphabetically, first by the column Country, then, by the column City.
SELECT * FROM Customers ORDER BY Country, City;

-- 8.	Insert a new record in the Customers table.
INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country) VALUES ('Agent 007', 'Agent', 'Secret 007', 'London', '00007', 'UK');

-- 9.	Select all records from the Customers where the PostalCode column is empty.
SELECT * FROM Customers WHERE PostalCode IS NULL;

-- 10.	Select all records from the Customers where the PostalCode column is NOT empty.
SELECT * FROM Customers WHERE PostalCode IS NOT NULL;

-- 11.	Set the value of the City columns to 'Oslo', but only the ones where the Country column has the value "Norway".
UPDATE Customers SET City = 'Oslo' WHERE Country = 'Norway';

-- 12.	Update the City value and the Country value.
UPDATE Customers SET City = 'Oslo', Country = 'Norway' WHERE CustomerID = 32;

-- 13.	Delete all the records from the Customers table where the Country value is 'Norway'.
DELETE FROM Customers WHERE country = 'Norway';

-- 14.	Delete all the records from the Customers table.
DELETE FROM Customers;

-- 15.	Select all records where the value of the City column contains the letter "a".
SELECT * FROM Customers WHERE City Like '%a%';

-- 16.	Select all records where the value of the City column ends with the letter "a".
SELECT * FROM Customers WHERE City Like '%a';

-- 17.	Select all records where the value of the City column starts with letter "a" and ends with the letter "b".
SELECT * FROM Customers WHERE City Like 'a%b';

-- 18.	Select all records where the value of the City column does NOT start with the letter "a".
SELECT * FROM Customers WHERE City NOT Like 'a%';

-- 19.	Use the IN operator to select all the records where Country is NOT "Norway" and NOT "France".
SELECT * FROM Customers WHERE NOT Country IN ('Norway', 'France');

-- 20.	Use the IN operator to select all the records where Country is either "Norway" or "France".
SELECT * FROM Customers WHERE Country IN ('Norway', 'France');

-- 21.	Use the BETWEEN operator to select all the records where the value of the Price column is NOT between 10 and 20.
SELECT * FROM Products WHERE Price NOT BETWEEN 10 AND 20;
-- 22.	Use the BETWEEN operator to select all the records where the value of the ProductName column is alphabetically between 'Geitost' and 'Pavlova'.
SELECT * FROM Products WHERE ProductName BETWEEN 'Geitost' AND 'Pavlova' ORDER BY ProductName;

-- 23.	Choose the correct JOIN clause to select all the records from the Customers table plus all the matches in the Orders table.
SELECT * FROM Orders LEFT JOIN Customers ON Orders.CustomerID = Customers.CustomerID;

-- 24.	Choose the correct JOIN Find out the number of orders made for each city (city) from the Customers table.
SELECT City, COUNT (OrderID) AS The_number_of_orders FROM Customers
LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
GROUP BY City;

-- 25.	Choose the correct JOIN Find out the total cost of orders for the user.
SELECT CustomerName, ROUND (SUM (Price * Quantity), 2)  AS Cost FROM Customers
LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
LEFT JOIN OrderDetails ON Orders.OrderID = OrderDetails.OrderID
LEFT JOIN Products ON OrderDetails.ProductID = Products.ProductID
GROUP BY Customers.CustomerID;

-- 26.	Choose the correct JOIN  From the (Product) table, display only those products that have a Supplier: New Orleans Cajun Delights (2) and Tokyo Traders (4) and add the SupplierName to the product output
SELECT GROUP_CONCAT(ProductName, ', '), SuppLierName FROM Products
INNER JOIN Suppliers ON Products.SupplierID = Suppliers.SupplierID AND SuppLierName IN ('New Orleans Cajun Delights', 'Tokyo Traders')
GROUP BY SuppLierName;

-- 27.	Choose the correct JOIN Display the average amount of all orders for each date (OrderDate) in the (Orders) table, if the average amount of orders on that day was more than 30. Add to each date the person who accepted the order from the Employees table on that day
SELECT OrderDate, ROUND (AVG(PRICE * Quantity), 2) AS AVG, GROUP_CONCAT (LastName, ', ') AS Employee FROM Orders
INNER JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID
INNER JOIN OrderDetails ON Orders.OrderID = OrderDetails.OrderID
INNER JOIN Products ON OrderDetails.ProductID = Products.ProductID
GROUP BY OrderDate HAVING AVG > 30;

-- 28.	Use Group By. List the number of customers in each country, ordered by the country with the most customers first.
SELECT Country, COUNT(CustomerID) AS Number_of_customers FROM Customers
GROUP BY Country
Order BY Number_of_customers DESC;

-- 29.	Use Group By List the number of customers in each country
SELECT Country, COUNT(CustomerID) AS Number_of_customers FROM Customers GROUP BY Country;