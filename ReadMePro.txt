QUICK SETUP GUIDE

STEP 1) DOWNLOAD ALL THE FILES AND FOLDERS IN THE REPO.

STEP 2) XAMPP SERVER SETUP
 
	COPY PASTE THE BELOW COMMANDS
	MAKE SURE THE NAME OF THE DATABASE IS SAME AS GIVEN IN THE CONFIG/CONNECTION FILE

	a)CREATE TABLE admin_info(Admin_id int(10) NOT NULL,
  						Admin_name varchar(100) NOT NULL,
  						Admin_email varchar(100) NOT NULL,
  						Admin_password varchar(100) NOT NULL);

	b)INSERT INTO admin_info(Admin_id,Admin_name,Admin_email,Admin_password) VALUES
	  (1, 'admin', 'admin@gmail.com','Admin@onlineretailapp123');

	c)CREATE TABLE categories(
	   Cat_id int(20) NOT NULL,
	   Cat_title text NOT NULL
	);

	c)INSERT INTO categories(Cat_id, Cat_title) VALUES
	(1, 'Grocery'),
	(2, 'Vegetables'),
	(3, 'Fruits'),
	(4, 'Packed Food'),
	(5, 'Dairy'),
	(6, 'Beverages');

	d)CREATE TABLE Products (
	  Product_id int(20) NOT NULL,
	  Product_cat int(20) NOT NULL,
	  Product_title varchar(200) NOT NULL,
	  Product_price int(100) NOT NULL,
	  Product_desc text NOT NULL,
	  Product_image text NOT NULL,
	  Product_keywords text NOT NULL
	);

	d)INSERT INTO products(Product_id,Product_cat,Product_title,Product_price,Product_descp,Product_image,Product_keywords) VALUES
	(1,1,'Chana Dal',50,'Tata Sampann Chana Dal:500gms','chanadal.jpg','chana dal'),
	(2,1,'Moong Dal',90,'Tata Sampann Moong Dal:500gms','moongdal.jpg','moong dal'),
	(3,1,'Tur Dal',70,'Tata Sampann Tur Dal:500gms','turdal.jpg','tur dal'),
	(4,1,'Rajma',92,'Satyam Rajma:500gms','rajma.jpg','rajma'),
	(5,1,'Soyabean',40,'Nutrela Soya Chunks:200gms','soyabean.jpg','soyabean'),
	(6,1,'Masoor',70,'Satyam Masoor:500gms','masoor.jpg','masoor'),
	(7,1,'Poha',40,'Tata Sampann Poha:500gms','poha.jpg','poha'),
	(8,1,'Sugar',115,'24 Mantra Organic Sugar:1kg','sugar.jpg','sugar'),
	(9,2,'Onion',50,'Fresh Onion:1kg','onion.jpg','onion'),
	(10,2,'Potato',45,'Fresh Potato:1kg','potato.jpg','potato'),
	(11,2,'Tomato',20,'Fresh Tomato:500gms','tomato.jpg','tomato'),
	(12,2,'Cabbage',30,'Fresh Cabbage:500gms','cabbage.jpg','cabbage'),
	(13,2,'Green Chilli',10,'Fresh Green Chilli:100gms','greenchilli.jpg','green chilli'),
	(14,2,'Brinjal',45,'Fresh Brinjal:400gms','brinjal.jpg','brinjal'),
	(15,2,'Capsicum',50,'Fresh Capsicum:500gms','capsicum.jpg','capsicum'),
	(16,2,'Carrot',30,'Fresh Carrot:500gms','carrot.jpg','carrot'),
	(17,3,'Apple',175,'Fresh Apple:4Pieces(Approx.500-750gms)','apple.jpg','apple'),
		(18,3,'Orange',170,'Fresh Orange:4Pieces(Approx.800-900gms)','orange.jpg','orange'),
	(19,3,'Kiwi',115,'Fresh Kiwi:3Pieces','kiwi.jpg','kiwi'),
	(20,3,'Watermelon',50,'Fresh Watermelon:1piece(Approx.0.7-1kg)','','watermelon'),
	(21,3,'Sweet Lime',70,'Fresh Sweet Lime:4Pieces(Approx.800-850gm)','sweetlime.jpg','sweet lime'),
	(22,3,'Muskmelon',75,'Fresh Watermelon:1piece(Approx.0.7-1kg)','muskmelon.jpg','muskmelon'),
	(23,3,'Pomegranate',175,'Fresh Pomegranate:4Pieces(Approx.0.8-1kg)','pomegranate.jpg','pomegranate'),
	(24,3,'Banana',55,'Fresh Banana Elaichi:6Pieces','banana.jpg','banana'),
	(25,4,'Hide & Seek',75,'Parle Hide & seek Chocochip Cookies:350gms','hide&seek.jpg','hide and seek'),
	(26,4,'Good Day',80,'Britannia Good Day Cashew Cookies:600gms','goodday.jpg','good day'),
	(27,4,'Corn Flakes',165,'Kelloggs Corn Flakes:475gms','cornflakes.jpg','corn flakes'),
	(28,4,'Cake',40,'Monginis Muffins Chocolate Cake:132gms','cake.jpg','cake'),
	(29,4,'Choco Pie',110,'Lotte Choco Pie Rich Cocoa:300gms','chocopie.jpg','choco pie'),
	(30,4,'Toast',35,'Britannia Toastea Premium Bake Rusk:273gms ','toast.jpg','toast'),
	(31,4,'Noodles',70,'Maggi Masala Veg Atta Noodles:290gms','noodles.jpg','noodles'),
	(32,4,'Vermicelli',40,'MTR Roasted Vermicelli:400gms','vermicelli.jpg','vermicelli'),
	(33,5,'Butter',220,'Amul Butter:500gms','butter.jpg', 'butter'),
	(34,5,'Milk',60,'Amul Taaza Toned Milk:1L','milk.jpg', 'milk'),
	(35,5,'Ghee',470,'Amul Pure Ghee Pouch:1L','ghee.jpg','ghee'),
	(36,5,'Yogurt',30,'Epigamia Greek Yogurt Blueberry:90gms','yogurt.jpg','yogurt'),
	(37,5,'Paneer',70,'Amul Malai Paneer:200gms','paneer.jpg','paneer'),
	(38,5,'Dahi',40,'Amul Masti Dahi:400gms','dahi.jpg','dahi'),
	(39,5,'Shrikhand',95,'Amul Shrikhand Elaichi:500 gms','shrikhand.jpg','shrikhand'),
	(40,5,'Cheese',420,'Amul Processed Cheese:1kg','cheese.jpg','cheese'),
	(41,6,'Sprite',65,'Sprite:1.75L','sprite.jpg','sprite'),
	(42,6,'Appy Fizz',80,'Appy Fizz Apple Juice:1.5L','appyfizz.jpg','appy fizz'),
	(43,6,'Red Bull',390,'Red Bull Energy Drink:4x250ml','redbull.jpg','redbull'),
	(44,6,'Tropicana Juice',66,'Tropicana Mixed Fruit Delight Juice:1L','tropicana.jpg','tropicana juice'),
	(45,6,'Thums Up',65,'Thums Up:1.75L','thumsup.jpg','thumsup'),
	(46,6,'Rooh Afza',140,'Hamdard Rooh Afza Sharbat:750 ml','roohafza.jpg','roohafza'),
	(47,6,'Chocolate Syrup',150,'Hersheys Chocolate Syrup:623gms','hersheys.jpg','chocolate syrup'),
	(48,6,'Maaza',60,'Maaza Mango Drink:1.2L','maaza.jpg','maaza');

	e)CREATE TABLE user_info (
	  User_id int(10) NOT NULL,
	  Fname varchar(100) NOT NULL,
	  Mname varchar(100) NOT NULL,
	  Lname varchar(100) NOT NULL,
	  Mobile varchar(10) NOT NULL,
	  Email varchar(100) NOT NULL,
	  Password varchar(100) NOT NULL,
	  Address1 varchar(300) NOT NULL);
	
	f)INSERT INTO user_info(User_id,Fname,Lname,Mobile,Email,Password,Address) VALUES
	(1,'Arnold','Dsouza',9762458300,'dsouza.arnold@gmail.com','Arnold@321','Vasai,Mumbai-401304');
	(2,'Alwin','Jacob',,'jacob.alwin@gmail.com','Alwin@321','Alibaugh,');
	(3,'Aryan','Fernandes',,'fernandes.aryan@gmail.com','Aryan@321','Vasai,Mumbai-401304');
	(4,'Soumitra','Bhagdikar',,'bhagdikar.soumitra@gmail.com','Soumitra@321','Kharghar,NaviMumbai-');
	
	g)CREATE TABLE cart(
	   Cart_id int(10) NOT NULL,
	   Product_id int(10) NOT NULL,
	   User_id int(10) DEFAULT NULL,
	   Qty int(10) NOT NULL
	);

	h)INSERT INTO `cart` (`Cart_id`, `Product_id`, `User_id`, `Qty`) VALUES
	(6, 26, 31, 1),
	(9, 10,31, 1),
	(10, 11, 31, 1),
	(11, 45, 31, 1);

	i)CREATE TABLE `orders` (
	  `Order_id` int(10) NOT NULL,
	  `User_id` int(10) NOT NULL,
	  `Product_id` int(10) NOT NULL,
	  `Qty` int(10) NOT NULL,
	  `Trans_id` varchar(100) NOT NULL,
	  `Status` varchar(20) NOT NULL
	) 



	j)INSERT INTO `orders` (`Order_id`, `User_id`, `Product_id`, `Qty`, `trans_id`, `Status`) VALUES
	(1, 31, 7, 1, '07M47684BS5725041', 'Completed'),
	(2, 31, 2, 1, '07M47684BS5725041', 'Completed');
	
	
	j)ALTER TABLE `admin_info`
	  MODIFY `Admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
	
	
	ALTER TABLE `cart`
	  MODIFY `Cart_id` int(10) NOT NULL AUTO_INCREMENT;
	
	ALTER TABLE `categories`
	  MODIFY `Cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
	
	ALTER TABLE `orders`
	  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
	
	ALTER TABLE `products`
	  MODIFY `Product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
	
	ALTER TABLE `user_info`
	  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
	


        K)ALTER TABLE `cart`
	  ADD PRIMARY KEY (`id`);

	ALTER TABLE `admin_info`
	  ADD PRIMARY KEY (`Admin_id`);

	ALTER TABLE `categories`
	  ADD PRIMARY KEY (`Cat_id`);
	
	ALTER TABLE `orders`
	  ADD PRIMARY KEY (`Order_id`);

	ALTER TABLE `products`
	  ADD PRIMARY KEY (`Product_id`);

	ALTER TABLE `user_info`
	  ADD PRIMARY KEY (`User_id`);

STEP 3) PASTE THE FILE IN THE htdocs OF THE XAMPP FOLDER

STEP 4) START THE XAMPP SERVER AND IN BROWSER GOTO localhost\RetailReadyM

STEP 5) YOU ARE READY WITH YOUR PROJECT ENJOY THE USER EXPERIENCE. 
                  