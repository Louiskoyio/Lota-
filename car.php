<?php
	/**
	* This class holds the car information
	*/
	class Car
	{
		//The make (manufucturer) of the car
		private $_make;
		// The model of the car
		private $_model;
		//Year of Manufucture
		private $_yearOfManufucture;
		//Price of the car
		private $_price;
		//Engine Capacity of the car
		private $_engineCapacity;
		//Transmission of the the car
		private $_transmission;
		//The mileage covered by the car
		private $_mileage;
		//Fuel type of the car
		private $_fuelType;
		//The color of the car
		private $_color;
		//The car's body type
		private $_bodyType;
		//The car's drive type
		private $_driveType;
		//The car's extra features
		private $_extras;
		//Thumbnails of the car
		private $_thumbnails;

		function __construct($make = null, $model = null, $yearOfManufucture = null, $price = null, $engineCapacity = null,
			$transmission = null, $mileage = null, $fuelType = null, $color = null, $bodyType = null, $driveType = null, $extras = null, $thumbnails = null)
		{
			$this->_make = $make;
			$this->_model = $model;
			$this->_yearOfManufucture = $yearOfManufucture;
			$this->_price = $price;
			$this->_engineCapacity = $engineCapacity;
			$this->_transmission = $transmission;
			$this->_mileage = $mileage;
			$this->_fuelType = $fuelType;
			$this->_color = $color;
			$this->_bodyType = $bodyType;
			$this->_driveType = $driveType;
			$this->_extras = $extras;
			$this->_thumbnails = $thumbnails;
		}

		function __destruct() {}

		function __toString() {
			return $this->_make;
		}

	    /**
	     * Gets the value of _make.
	     *
	     * @return mixed
	     */
	    public function getMake()
	    {
	        return $this->_make;
	    }

	    /**
	     * Sets the value of _make.
	     *
	     * @param mixed $_make the make
	     *
	     * @return self
	     */
	    public function setMake($make)
	    {
	        $this->_make = $make;

	        return $this;
	    }

	    /**
	     * Gets the value of _model.
	     *
	     * @return mixed
	     */
	    public function getModel()
	    {
	        return $this->_model;
	    }

	    /**
	     * Sets the value of _model.
	     *
	     * @param mixed $_model the model
	     *
	     * @return self
	     */
	    public function setModel($model)
	    {
	        $this->_model = $model;

	        return $this;
	    }

	    /**
	     * Gets the value of _yearOfManufucture.
	     *
	     * @return mixed
	     */
	    public function getYearOfManufucture()
	    {
	        return $this->_yearOfManufucture;
	    }

	    /**
	     * Sets the value of _yearOfManufucture.
	     *
	     * @param mixed $_yearOfManufucture the year of manufucture
	     *
	     * @return self
	     */
	    public function setYearOfManufucture($yearOfManufucture)
	    {
	        $this->_yearOfManufucture = $yearOfManufucture;

	        return $this;
	    }

	    /**
	     * Gets the value of _price.
	     *
	     * @return mixed
	     */
	    public function getPrice()
	    {
	        return $this->_price;
	    }

	    /**
	     * Sets the value of _price.
	     *
	     * @param mixed $_price the price
	     *
	     * @return self
	     */
	    public function setPrice($price)
	    {
	        $this->_price = $price;

	        return $this;
	    }

	    /**
	     * Gets the value of _engineCapacity.
	     *
	     * @return mixed
	     */
	    public function getEngineCapacity()
	    {
	        return $this->_engineCapacity;
	    }

	    /**
	     * Sets the value of _engineCapacity.
	     *
	     * @param mixed $_engineCapacity the engine capacity
	     *
	     * @return self
	     */
	    public function setEngineCapacity($engineCapacity)
	    {
	        $this->_engineCapacity = $engineCapacity;

	        return $this;
	    }

	    /**
	     * Gets the value of _transmission.
	     *
	     * @return mixed
	     */
	    public function getTransmission()
	    {
	        return $this->_transmission;
	    }

	    /**
	     * Sets the value of _transmission.
	     *
	     * @param mixed $_transmission the transmission
	     *
	     * @return self
	     */
	    public function setTransmission($transmission)
	    {
	        $this->_transmission = $transmission;

	        return $this;
	    }

	    /**
	     * Gets the value of _mileage.
	     *
	     * @return mixed
	     */
	    public function getMileage()
	    {
	        return $this->_mileage;
	    }

	    /**
	     * Sets the value of _mileage.
	     *
	     * @param mixed $_mileage the mileage
	     *
	     * @return self
	     */
	    public function setMileage($mileage)
	    {
	        $this->_mileage = $mileage;

	        return $this;
	    }

	    /**
	     * Gets the value of _fuelType.
	     *
	     * @return mixed
	     */
	    public function getFuelType()
	    {
	        return $this->_fuelType;
	    }

	    /**
	     * Sets the value of _fuelType.
	     *
	     * @param mixed $_fuelType the fuel type
	     *
	     * @return self
	     */
	    public function setFuelType($fuelType)
	    {
	        $this->_fuelType = $fuelType;

	        return $this;
	    }

	    /**
	     * Gets the value of _color.
	     *
	     * @return mixed
	     */
	    public function getColor()
	    {
	        return $this->_color;
	    }

	    /**
	     * Sets the value of _color.
	     *
	     * @param mixed $_color the color
	     *
	     * @return self
	     */
	    public function setColor($color)
	    {
	        $this->_color = $color;

	        return $this;
	    }

	    /**
	     * Gets the value of _bodyType.
	     *
	     * @return mixed
	     */
	    public function getBodyType()
	    {
	        return $this->_bodyType;
	    }

	    /**
	     * Sets the value of _bodyType.
	     *
	     * @param mixed $_bodyType the body type
	     *
	     * @return self
	     */
	    public function setBodyType($bodyType)
	    {
	        $this->_bodyType = $bodyType;

	        return $this;
	    }

	    /**
	     * Gets the value of _driveType.
	     *
	     * @return mixed
	     */
	    public function getDriveType()
	    {
	        return $this->_driveType;
	    }

	    /**
	     * Sets the value of _driveType.
	     *
	     * @param mixed $_driveType the drive type
	     *
	     * @return self
	     */
	    public function setDriveType($driveType)
	    {
	        $this->_driveType = $driveType;

	        return $this;
	    }

	    /**
	     * Gets the value of _extras.
	     *
	     * @return mixed
	     */
	    public function getExtras()
	    {
	        return $this->_extras;
	    }

	    /**
	     * Sets the value of _extras.
	     *
	     * @param mixed $_extras the extras
	     *
	     * @return self
	     */
	    public function setExtras($extras)
	    {
	        $this->_extras = $extras;

	        return $this;
	    }

	    /**
	     * Gets the value of _thumbnails.
	     *
	     * @return mixed
	     */
	    public function getThumbnails()
	    {
	        return $this->_thumbnails;
	    }

	    /**
	     * Sets the value of _thumbnails.
	     *
	     * @param mixed $_thumbnails the thumbnails
	     *
	     * @return self
	     */
	    public function setThumbnails($thumbnails)
	    {
	        $this->_thumbnails = $thumbnails;

	        return $this;
	    }

	    public function toArray() {
	    	$object = array(
	    	"make"=> $this->_make,
			"model"=> $this->_model,
			"yearOfManufucture"=> $this->_yearOfManufucture,
			"price"=> $this->_price,
			"engineCapacity"=> $this->_engineCapacity,
			"transmission"=> $this->_transmission,
			"mileage"=> $this->_mileage,
			"fuelType"=> $this->_fuelType,
			"color"=> $this->_color,
			"bodyType"=> $this->_bodyType,
			"driveType"=> $this->_driveType,
			"extras"=> $this->_extras,
			"thumbnails"=> $this->_thumbnails);
			return $object;
	    }

	    public function toJSON() {
	    	return json_encode($this->toArray());
	    }

	    public function addCar(){
	    	global $pdo;
        try {

            $sqlInsert = "INSERT INTO car (make,model,year,price,engineCapacity,transmission,mileage,colour,bodyType,driveType,fuel,extras,thumbnail) VALUES ('".$this->_make."','".$this->_model."','".$this->_year."','".$this->_price."','".$this->_engineCapacity."','".$this->_transmission."','".$this->_mileage."','".$this->_colour."','".$this->_bodyType."','".$this->_driveType."','".$this->_fuelType."','".$this->_extras."','".$this->_thumbnail."')";
            $statement = $pdo->prepare($sqlInsert);
            $statement->execute(array(':make' => $this->_make,':model' => $this->_model,':year' => $this->_year,':price' => $this->_price,':engineCapacity' => $this->_engineCapacity,':transmission' => $this->_transmission,':mileage' => $this->_mileage,':colour' => $this->_colour,':bodyType' => $this->_bodyType,':driveType' => $this->_driveType,':fuel' => $this->_fuelType,':extras' => $this->_extras,':thumbnail' => $this->_thumbnail));

            if(isset($_FILES['thumbnail'])){
                //Moving image to database
                $imageName = $_FILES['thumbnail']['name'];
                $tmpDir = $_FILES['thumbnail']['tmp_name'];
                $imageSize = $_FILES['thumbnail']['size'];
                $imgExtension = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
                $valid_extensions = array('jpeg','jpg','png');
                move_uploaded_file($tmpDir, 'images/cars/'.$imageName);
            }

            if($statement->rowCount() == 1){
                ?>
                <script>
                    alert("Car Added Successfully");
                    window.location.href='editCar.php';
                </script>
            <?php
            }
        }catch(PDOException $ex){
            echo "<p style='padding: 20px; color: red;'><b>[-] An ERROR occurred !! Failed to insert car record. <br>Error:".$ex->getMessage()."</b></p>";
        }
    }

    public function getCarDetails($carId){
    	global $pdo;
        $carId = $carId;
        $sqlSelect = "SELECT * FROM cars WHERE CarID = :carId";
        $statement = $pdo->prepare($sqlSelect);
        $statement->execute(array(':carId' => $carId));

        while($rs = $statement->fetch()){
            $this->_make = $rs['make'];
            $this->_model = $rs['model'];
            $this->_year = $rs['year'];
            $this->_price = $rs['price'];
            $this->_engineCapacity = $rs['engineCapacity'];
            $this->_transmission = $rs['transmission'];
            $this->_mileage =$rs['mileage'];
            $this->_fuelType =$rs['fuel'];
            $this->_colour = $rs['colour'];
            $this->_bodyType = $rs['bodyType'];
            $this->_driveType = $rs['driveType'];
            $this->_extras = $rs['extras'];
            $this->_thumbnail = $rs['thumbnail'];
        }
        $details = array($carId,$this->_make,$this->_model,$this->_year,$this->_price,$this->_engineCapacity,$this->_transmission,$this->_mileage,$this->_fuelType,$this->_colour,$this->_bodyType,$this->_driveType,$this->_extras,$this->_thumbnail);

        return $details;
    }

    public function editCar($carId){
    	global $pdo;
        if(isset($_POST['editCar'])) {
            $carId = $carId;
            $details = $this->getCarDetails($carId);

            $this->_make = $_POST['make'];
            $this->_model = $_POST['model'];
            $this->_year = $_POST['year'];
            $this->_price = $_POST['price'];
            $this->_engineCapacity = $_POST['engineCapacity'];
            $this->_transmission = $_POST['transmission'];
            $this->_mileage =$_POST['mileage'];
            $this->_fuelType =$_POST['fuelType'];
            $this->_colour = $_POST['colour'];
            $this->_bodyType = $_POST['bodyType'];
            $this->_driveType = $_POST['driveType'];
            $this->_extras = $_POST['extras'];
            $this->_thumbnail = $_POST['thumbnail'];

            if($carId == ""){
                $carId = $details[0];
            }
            if($_POST['thumbnail'] == ""){
                $this->_thumbnail = $details[13];
            }else{
                $this->_thumbnail = $_POST['thumbnail'];
            }
            if($_POST['fuelType'] == ""){
                $this->_fuelType = $details[8];
            }
            if($_POST['bodyType'] == ""){
                $this->_bodyType = $details[10];
            }
            if($_POST['driveType'] == ""){
                $this->_driveType= $details[11];
            }

            try{
                $sqlUpdate = "UPDATE car SET make =:make, model =:model, year =:year, price =:price, engineCapacity =:engineCapacity, transmission =:transmission, mileage =:mileage, colour =:colour, bodyType =:bodyType, driveType =:driveType, fuel =:fuelType, extras =:extras, thumbnail =:thumbnail WHERE CarId =:car_id";
                $statement = $pdo->prepare($sqlUpdate);
                $statement->execute(array(":make" => $this->_make, ":model" => $this->_model, ":year" => $this->_year, ":price" => $this->_price, ":engineCapacity" => $this->_engineCapacity, ":transmission" => $this->_transmission, ":mileage" => $this->_mileage, ":fuelType" => $this->_fuelType, ":colour" => $this->_colour, ":bodyType" => $this->_bodyType, ":driveType" => $this->_driveType, ":extras" => $this->_extras, ":thumbnail" => $this->_thumbnail, ":car_id" => $carId));
                //Moving Image to server
                 //Moving image to database
                if(isset($_FILES['thumbnail'])){
                    $imageName = $_FILES['thumbnail']['name'];
                    $tmpDir = $_FILES['thumbnail']['tmp_name'];
                    $imageSize = $_FILES['thumbnail']['size'];
                    $imgExtension = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
                    $valid_extensions = array('jpeg','jpg','png');
                    move_uploaded_file($tmpDir, 'images/cars/'.$imageName);
                }
            if($statement->rowCount() == 1){
                ?> 
                    <script>
                        alert("Car Updated Successfully");
                        window.location.href='editCar.php';
                    </script>
                <?php
             }else{
                echo "<p style='padding: 20px; color: red;'><b>[-] An ERROR occurred !! Car record NOT updated.</b></p>";
             }
            }catch(PDOException $ex){
                echo "<p style='padding: 20px; color: red;'><b>[-] An ERROR occurred !! Car record NOT updated. <br>Error:".$ex->getMessage()."</b></p>";
             }
        }
    }

    public function addImage($id){
    	global $pdo;
        $carId = $id;
        if(isset($_POST['addImage']) && !empty($_FILES['image'])){
            $imageName = $_FILES['image']['name'];
            $tmpDir = $_FILES['image']['tmp_name'];
            $imageSize = $_FILES['image']['size'];
            $imgExtension = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
            $valid_extensions = array('jpeg','jpg','png');
            move_uploaded_file($tmpDir, 'images/cars/'.$imageName);
            $imgSql = "INSERT INTO images (CarId,imageName,imageSize) VALUES ('".$carId."','".$imageName."','".$imageSize."')";
            $stmt = $pdo->prepare($imgSql);
            $stmt->execute(array(':id' => $carId,':imageName' => $imageName,':imageSize' => $imageSize));
            if($stmt->rowCount() == 1){
                ?>
                <script>alert("Image added Successfully");</script>
                <?php
            }else{
                ?>
                <script>alert("ERROR !! Image not uploaded");</script>
                <script>alert("Please select an Image to upload.");</script>
                <?php
            }
        }
    }

    public function viewImages($carId){
    	global $pdo;
        $carId = $carId;
        $imageSql = "SELECT * FROM images WHERE CarId =:carId";
        $stmt = $pdo->prepare($imageSql);
        $stmt->execute(array(':carId' => $carId));
        if($stmt->rowCount()>0){
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $image = $row['imageName'];
            
                ?><li>
                    <img class="img-responsive" src="images/cars/cars<?php echo $image; ?>">
                    <?php echo $image; ?>
                    <button type="submit" name="deleteImg" style="color: black;" id="deleteImg" onclick="return confirm('Are you sure you want to delete this record?')"><b>Delete</b></button>
                    </li>
                <?php
            }
        }
        
    }

    public function viewImages1($carId){
    	global $pdo;
        $carId = $carId;
        $imageSql = "SELECT * FROM images WHERE CarId =:carId";
        $stmt = $pdo->prepare($imageSql);
        $stmt->execute(array(':carId' => $carId));
        if($stmt->rowCount()>0){
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $image = $row['imageName'];
            
                ?>
                    <img class="img-responsive" src="images/cars/<?php echo $image; ?>">
    
                <?php
            }
        }
    }

    public function deleteImage($imageName){
    	global $pdo;
            $img = $imageName;
            echo $img;
            $deleteImg = "DELETE FROM images WHERE imageName =:imageName";
            $stmt = $pdo->prepare($deleteImg);
            $stmt->execute(array(':imageName' => $img));
            unlink("images/cars/".$img);
            if(rowCount() == 1){
                ?>
                <script>alert('image Deleted Successfully');</script>
                <?php
            }else{
                ?>
                <script>alert('ERROR!!Image NOT Deleted.');</script>
                <?php
            }
    }

    public function deleteCar($carId){
    	global $pdo;
            $carId = $carId;
            //Delete car images from Database and Server
            $imageSql = "SELECT * FROM images WHERE CarId =:carId";
            $stmt = $pdo->prepare($imageSql);
            $stmt->execute(array(':carId' => $carId));
            if($stmt->rowCount()>0){
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    $image = $row['imageName'];
                    unlink("images/cars/".$image);
                }
            }
            $carImg = "DELETE FROM images WHERE CarId = :carId ";
            $stmt = $pdo->prepare($carImg);
            $stmt->execute(array(':carId' => $carId));


            //Delete car from database
            $delCar = "DELETE FROM car WHERE CarId =:carId";
            $statement = $pdo->prepare($delCar);
            $statement->execute(array(':carId' => $carId));
            if($statement->rowCount() == 1){
                ?>
                    <script>alert('Car Record Successfully Deleted.');
                        window.location.href='editCar.php';
                    </script>
                <?php
            }else{
                ?>
                    <script>alert('ERROR!! Car Record NOT Deleted.');</script>
                <?php
            }
    }
}
?>