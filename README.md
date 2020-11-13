# Stock_Management





Independent University, Bangladesh
Department of Computer Science & Engineering
CSC 405: Systems Analysis and Design
 (Summer 2020)
Term Project 


INVENTORY/STORE MANAGEMENT SYSTEM


Submitted By
MOHAMMAD SHAMIM HOSSAIN   

Table of content:

Section 1:
1.	Introduction ---------------------------------------------------------------------------------------------------------- 3
2.	History leading to project request --------------------------------------------------------------------------------4
3.	Identify Problem, opportunity --------------------------------------------------------------------------------- 4
4.	Project goal and objectives ------------------------------------------------------------------------------ 3
Section 2:
5.	Product Description---------------------------------------------------------------------------------------- 6
6.	System Context diagram---------------------------------------------------------------------------------- 7
7.	Hardware detail------------------------------------------------------------------------------------------------ 8
8.	Key Technical Features of Software ------------------------------------------------------------------- 9
Section 3:
9.	Information Gathering methods -----------------------------------------------------------------------10
10.	Major functionalities offered by the system --------------------------------------------------------10
11.	Use Case Diagram ---------------------------------------------------------------------------------------- 12
12.	Normal Scenarios ------------------------------------------------------------------------------------------13
13.	Alternate Scenarios ---------------------------------------------------------------------------------------14
14.	Functional Requirements-------------------------------------------------------------------------------- 15
15.	Non-Functional Requirements -------------------------------------------------------------------------16
Section 4:
16.	 Entity Relationship Diagram --------------------------------------------------------------------------- 18
17.	 Logical Data Flow diagram------------------------------------------------------------------------------ 19
18.	 Physical Data Flow diagram-----------------------------------------------------------------------------19
19.	 Activity diagrams -----------------------------------------------------------------------------------------20
20.	 Sequence diagrams---------------------------------------------------------------------------------------20
21.	 Communication diagrams ------------------------------------------------------------------------------22
22.	 Class diagrams--------------------------------------------------------------------------------------------- 23 
23.	 State-chart diagrams. ------------------------------------------------------------------------------------25
24.	 CRUD matrix------------------------------------------------------------------------------------------------26
Section 5:
25.	Structure English pseudo code for the system---------------------------------------------------------- 27 
26.	Normalized Rational Database Tables ------------------------------------------------------------------- 27 
27.	Prototype the user interface --------------------------------------------------------------------------29 -37  
Introduction
Inventory management software is a computer or mobile based system for tracking inventory levels, orders and sales. It is a tool for organizing inventory data that before was generally stored in hard-copy form or in spreadsheets. 
With this software, you can monitor inventory levels in real time, manage inventory train employees to help with inventory management and much more. All of these things help you keep costs down, spend your money wisely and avoid making poor choices, like overstocking on slow-moving products. 

Project Goal and Objective:
•	View of a total number of brands, categories, product, and orders.
•	Add, update, and remove brands, categories, product information and orders details
•	Print orders invoice.
•	Generate the orders report by selecting specific start and end date.
•	To keep inventory at sufficiently high level to perform production and sales activities smoothly.

To minimize investment in inventory at minimum level to maximize profitability.
•	To ensure a continuous supply of materials and stock so that production should not suffer at the time of customer’s demand.
•	To avoid both overstocking and under-stocking of inventory.
•	To maintain the availability of materials whenever and wherever required in enough quantity.
•	To maintain minimum working capital as required for operational and sales activities.
•	To optimize various costs indulged with inventories like purchase cost, carrying a cost, storage cost, etc.
•	To eliminate duplication in ordering stocks.
•	To ensure the quality of goods at reasonable prices.
•	To supply the required material continuously.
•	To maintain a systematic record of inventory.

History leading to project request:
In Italy, there is an existing company named BuyOnGoods. They sell sports items that are Jersey, Sherpa, Flag, and sports-related goods. They went a software that reduces their job. Now they create an order manually an update excel. That is very hard to track products. And they calculated monthly income manually by using a calculator. Sometimes they mistake. For that, they contact me to create software that helps them to place orders and update store data automatically. Also, they went to see monthly income and analysis.

 Right now is a great time to be alive, isn’t it? I mean, we have so much technology that makes life easier and reduces the amount of time it takes to perform simple, mundane tasks. I think it’s good to step back every now and then and think about things we take for granted and acknowledge how good life is because of them.

One of those things I’d like to talk about right now is inventory management software. While many companies still aren’t taking advantage of it to the fullest, ones that are using it can easily forget how hard it was to manage inventory without it. 

Identify Problem, Solutions & Opportunities
Dead Stock
An expiration date isn’t the only way your products “go bad.” Deadstock is items that can’t be sold for several other reasons: they’ve gone out of style, out of season, or the products become otherwise irrelevant. Often an item is declared “dead” after sitting on a shelf for 12 months. Again, an efficient inventory management system will provide the knowledge you need to order the right amount of these particular items. Sales reports can aid in recognizing if an item is a dead weight before you buy it. These reports are useful for distributors and small businesses looking to buy new products.
Solutions: First-In-First-Out (FIFO)
This is a very important principle in inventory management. It means exactly how it sounds. The stock you get in first (first-in) should be sold first (first-out), not your newest stock. This concept is especially critical for perishable products to avoid spoilage. However, FIFO is also a good idea for nonperishables. If something is always getting pushed to the back of the shelf, it could simply become worn out, eventually go out of style, or expire.


Storage Costs
Warehousing expenses fluctuate, based upon how much you store during a given season. When your store has too many products at once or ends up with a product that’s difficult to sell, your storage costs will go up. An inventory management system can help forecast what items sell and what doesn’t, as well as how many sold. This accurate forecasting helps you make more informed purchasing decisions, avoiding high storage costs, and saving your business money.
Solutions: Relationships
Inventory management isn’t only about technology or in-stock products on the shelves. It’s also about the people along the supply chain. From quick returns of slow-selling items to restocking popular products or manufacturing issues…it’s important to maintain good working relationships with suppliers. That relationship could come in handy someday when you have a problem to solve and make the process so much smoother.

Not Using Automation
Several businesses are still stuck in the Stone Age, one-store-specific, Excel-based inventory management. This can spell certain death if they do not scale up or automate rapidly while going online or Omni channel. And they are no able to see monthly income automatically. And it's very hard to do analysis their business. 
Solutions: Using Automation 
Automating allows employees to track SKUs across all your store while monitoring orders, returns, exchanges for all your items. That too in real-time. Automation also makes it easy to perform routine tasks like generating barcodes, invoices, or purchase orders.
If you name your products and SKUs correctly, you will be able to standardize inventory management to a great extent. Team members will not have any confusion. And it will help you to business analysis 

Product Description:

Product Summary: Inventory management is a systematic approach to sourcing, storing, and selling inventory—both raw materials (components) and finished goods (products).
In business terms, inventory management means the right stock, at the right levels, in the right place, at the right time, and at the right cost as well as price.
It helps to:
•	Reduce costs
•	Optimize fulfillment
•	Provide better customer service
•	Prevent loss from theft, spoilage, and returns

Product Stakeholders:
Owner: Lokman Hossain
Developer: Mohammad Shamim Hossain


Context Level Data Flow Diagram

 
















Rich Picture:
 


Software key technical features
Simple to Install
The first feature of user friendly software is that it’s easy to install.

Easy to Update
Just like the installation process, the process to update the software is very simple.
 
User-Friendly
This software is fully mobile, web or any device responsive. In back-end it used HTML, CSS, MySQL database. That is user-friendly software. The inventory system offers mobile access.

Inventory Trend Analysis
One of the biggest features of that inventory management system for small businesses is the ability to tell you how much you have left of each product.
Reasonable Price
That is less expensive inventory management system. The price of that software is very reasonable. All type of people can afford it. 

Easy to Uninstall
This software features easy to uninstall. 








Information Gathering methods 
for 
Inventory Management System
In order to determine the requirements of a system, information must be gathered from the customer.  Ideally, the information obtained will enable a well-defined, accurate, and complete description of how the business functions as well as the people, functions and data involved.  However, this is not always the case, and information is often misinterpreted or omitted entirely.
There are three key interactive methods that I used. These three methods are interviewing, joint application design (JAD), and surveying people through questionnaires.
Interview and Observations:
 Background of Interview: Interview and observation had been conducted on 18th Aug 2013. The interviews are the owner of the Store who started the business two years back named Mr. Lokaman Hossain. He has 5 years of experiences in doing business. 
Purpose of Interview 
 To uncover further problems regarding inventory management using manual ways 
 To understand the current methods and approach being used in doing daily sales transaction by the staffs 
 To identify the main features or functionalities to be integrated into the project prototype 
iii. Summary of Interview Results 
 More than 50 types of goods range are available in the BuyOnGoods Store. Most of it is from sports based products, stationary and more. 
 Due to wide range of products being offered to the customers, they are having difficulties in handing their inventory. 
 The main problem in their store is that they do not have any means in detecting which products are moving out from the store. Thus, they have to check the inventory manually or sometimes customers will notice that some products are out of stock. This can cause loss for them as the possible customers could not get the products they want and make sale at the store. 
 Besides, they also could not keep track on expiring date of food-products based as each product have different expire date. This also had cause the store to be stack up with expired products. 
 They also do not use any computerized system because they scared to change their ways of doing business since long time ago. Besides, they also scared that their workers do not know how to handle and use the system. 
Joint application design (JAD): To cut both the time and cost of personal interviews, analysts may want to consider joint application design (JAD) instead. Using JAD, analysts can both analyze human information requirements and design a user interface with users in a group setting. Careful assessment of the particular organizational culture will help judge whether JAD is suitable.
Surveying: By using questionnaires (surveys), systems analysts can gather data on HCI concerns, attitudes, beliefs, behavior, and characteristics from key people in the organization. Surveys are useful if people in the organization are widely dispersed, many people are involved with the systems project, exploratory work is necessary before recommending alternatives, or there is a need for problem sensing before interviews are conducted.
Once objectives for the survey are set, the analyst can begin writing either open-ended or closed questions. Ideally, the questions should be simple, specific, short, free of bias, not patronizing, technically accurate, addressed to those who are knowledgeable, and written at an appropriate reading level. The systems analyst may want to use scales either to measure the attitudes or characteristics of respondents or to have respondents act as judges for the subject of the questionnaire. Scaling is the process of assigning numbers or other symbols to an attribute or characteristic.

Use Case Diagram of Inventory Management System
 







Normal Scenario
Table 1: Use Case Normal Scenario for Authentication
Use case no	1
Use case Name:	Login/authentication
Actor:	Admin, Seles person
Scenario: 	Login into the system.
Precondition:	Login page displayed
Flow Event:	Actor
1.Actor Fill user name and password 
2. Actor Click login button. 
3 System Display login successful 
4 Actor Enter the page, he/she want.
Exception Condition	If the user name does not exist the system stop login.
Post condition	Main form displayed.


Table2: Use Case Normal Scenario for Manage report
Use case no	2
Use case Name:	View reports
Actor:	Admin
Scenario: 	generate report
Precondition:	Use case no.[1] fulfill
Flow Event:	1. Enter the page. 
Admin
1.1 Actor open generate report form from menu 
1.2 system display generate report form
1.3 Actor click generate report form 
1.4 System display generate report success
Exception Condition	If registered materials and user receive materials does not exist the system stops generating report.
Post condition	Report is generated 





Alternative Scenarios for the Use Cases.
Table 3: Alternative Scenarios for Authentication
Use case no	1
Use case Name:	Login/authentication
Actor:	Admin, Seles person
Scenario: 	Login into the system.
Precondition:	Login page displayed
Flow Event:	Actor
1.Actor Fill user name and password 
2. Actor Click login button. 
3 System Display login successful 
4 Actor Enter the page, he/she want.
Alternative Scenarios	If step 3 is unsuccessful repeat step 1 until it is success
Exception Condition	If the user name does not exist the system stop login.
Post condition		Main form displayed.

Table 4: Alternative Scenarios for Manage report
Use case no	2
Use case Name:	View and Print reports
Actor:	Admin
Scenario: 	generate report
Precondition:	Use case no.[1] fulfill
Flow Event:	1. Enter the page. 
Admin
1.1 Actor open generate report form from menu 
1.2 system display generate report form
1.3 Actor click generate report form 
1.4 System display generate report success
1.5 System ask to print reports
1.6 System connect to printer
1.7 System print report
Alternative Scenarios	1.5.1 If yes step 1.6 continue.
1.5.1 If no system run 1.1
1.6.1 If  step 1.6 unsuccessful try to connect printer until it success 
Exception Condition	If registered materials and user receive materials does not exist the system stops generating report.
Post condition	Report is generated 



Functional Requirement:
In Software engineering and systems engineering, a functional requirement defines a function of a system or its component. A function is described as a set of inputs, the behavior, and outputs. Functional requirements may be calculations, technical details, data manipulation and processing and other specific functionality that define what a system is supposed to accomplish. Behavioral requirements describing all the cases where the system uses the functional requirements are captured in use cases. Functional requirements are supported by nonfunctional requirements, which impose constraints on the design or implementation.
Functional requirements are-
	Login: Simple two step login system 
	Admin Login 
	Sales person Login
	Administrator Dashboard: 
	Admin can control whole system easily 
	Admin can add/delete sales person, Edit, update, delete, generate barcode etc. 
	Admin show payment options.
	Sales person Role:  Allow user to scan items purchase by each customer. The system will display the description of the items and process the total sales and generate receipt for the customers. Seller are able to
	 Sell Products
	Stock Products
	Delivery Receipt
	Payment Process 
	Accept Refunds 
	Products
	Payment process 
	Only Cash Payments 
	Paid Vat 
	Get Discounts
	Refunds Process
	Accept Refund Products 
	Cash back
	Reports Module: Reports on daily, weekly and monthly sales of the store will be generating so that the owner can view the performance of the business and take appropriate actions. Reports module are
	View Sales Reports 
	View Transaction Reports 
	View Refunds Reports 
	Daily/Weekly/Monthly/Yearly Reports
	Database: Allow admin to update the inventory data in the database that will be used when processing sale
Non Functional Requirement:
In systems engineering and requirements engineering, a non-functional requirement is a requirement that specifies criteria that can be used to judge the operation of a system, rather than specific behaviors. They are contrasted with functional requirements that define specific behavior or functions. The plan for implementing functional requirements is detailed in the system design. The plan for implementing non-functional requirements is detailed in the system architecture, because they are usually Architecturally Significant Requirements.
Reliability: The following requirements describe the expected reliability of the Operational Interface.
•	The Operational Interface shall have a Mean Time Between Failures of no less than 17 days
Availability: The following requirements indicate the expected availability of the Operational Interface. 
•	The system shall be available 99.5% of the time
Security: The software system needs a robust security mechanism in place so that unauthorized users are not allowed access Inventory management system. All users of the system must be uniquely identified. This could be done by using a user name and associated password scheme that would authenticate and authorize the user access to the system and, if applicable, grant the user access to restricted or controlled Inventory management system. If a user cannot be identified, he/she will be given “anonymous” access with read-only capabilities. In order to monitor all past access to the system, all attempts to access the system must be logged.
•	All users of the system shall login using some form of unique identification (e.g., username and password) 
•	All login attempts shall be done so in a secure manner (e.g., encrypted passwords)
•	Each user shall either be trusted or not trusted.
Maintainability: The following requirements increase the maintainability of the Operational Interface software.
•	All source code and development related documents shall be controlled under a version control system.
•	All source code shall adhere to an agreed upon and well-defined set of coding standards for each development language used.
•	A standard naming convention for classes, variables and packages shall be agreed upon and adhered to.
Usability: The system’s user interface intuitive, easy to use and provide an overall positive user experience. The system shall be compatible any Operating System. It also accessible via mobile.
 










Inventory Management System for Store

 

Logical Data Flow diagram
 

Physical Data Flow diagram
 


Activity Diagram of Point of Sale
 
Activity Diagram of Adding items
 






Sequence Diagram of Report generate and print
 
Communication Diagram of Report generate and print
 
Class Diagram
 







Order State Chart Diagram
 






Login State Chart Diagram
 
Items edit Statechart Diagram
 



CRUD Matrix for Stock 
 











Structure English pseudo code for the system

Process Inventory records pseudo code:

SET total_Low=0
PRINT Heading
Repeat
           Read Record
 	    If Item_Num>0 then
			If Stoc_Figure < 3 then 
				PRINT Item_Num,DESC, Stock_Figure
						ADD 1 to Total_Low
			ENDIF
	    ENDIF
UNTILL Item_Num=0
PRINT Total_Low       


Normalized Rational Database Tables
Brand
  
Categories
 





Products
 
Orders
 
Order Items
 
User
 






Web page Design
 Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; interface design; authoring, including standardized code and proprietary software; user experience design; and search engine optimization. Often many individuals will work in teams covering different aspects of the design process, although some designers will cover them all. The term web design is normally used to describe the design process relating to the front-end design of a website including writing mark up. Web design partially overlaps web engineering in the broader scope of web development. Web designers are expected to have an awareness of usability and if their role involves creating markup then they are also expected to be up to date with web accessibility guidelines. 
Login Page: This is our IMS system login page. Admin and sales person used their user name and password to login this system. 
Fig: Login page of IMS Software
  






Home page: It’s our IMS software home page. 
  
Fig: Home page of IMS Softwar










Mobile interface:
 










Adding Product Brands page:
  Fig: Adding Product Brands page
Adding Categories page:
 
Fig: Adding categories page


Product List page: This is a system product list page.
 
Fig: Product list page









Add product page: This is an add product page this page we are starting business product add.
.  
Fig: Add Product page






Sales Page: This is the sales page. This page using all sales man continuous sales available stocking product.
 
Manage order page:
 

Generate Report page:
 
Sells report
 










Invoice:
 
