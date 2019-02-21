<?php
	/**
	* 
	*/
	class Car
	{
		//variables
		private $_make;
		private $_model;
		private $_year;
		private $_price;
		private $_engineCapacity;
		private $_transmission;
		private $_mileage;
		private $_fuelType;
		private $_colour;
		private $_bodyType;
		private $_driveType;
		private $_extras;
		private $_thumbnail;

		function __construct($make="",$model="",$year="",$price="",$engineCapacity="",$transmission="",$mileage="",$fuelType="",$colour="",$bodyType="",$driveType="",$extras="",$thumbnail="")
		{     
    			$this->_make = $make;
    			$this->_model = $model;
    			$this->_year = $year;
    			$this->_price = $price;
    			$this->_engineCapacity = $engineCapacity;
    			$this->_transmission = $transmission;
    			$this->_mileage = $mileage;
    			$this->_fuelType = $fuelType;
    			$this->_colour = $colour;
    			$this->_bodyType = $bodyType;
    			$this->_driveType = $driveType;
    			$this->_extras = $extras;
    			$this->_thumbnail = $thumbnail;
		}

		function __destruct(){}

		function __toString(){
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
    private function _setMake($make)
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
    private function _setModel($model)
    {
        $this->_model = $model;

        return $this;
    }

    /**
     * Gets the value of _year.
     *
     * @return mixed
     */
    public function getYear()
    {
        return $this->_year;
    }

    /**
     * Sets the value of _year.
     *
     * @param mixed $_year the year
     *
     * @return self
     */
    private function _setYear($year)
    {
        $this->_year = $year;

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
    private function _setPrice($price)
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
    private function _setEngineCapacity($engineCapacity)
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
    private function _setTransmission($transmission)
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
    private function _setMileage($mileage)
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
    private function _setFuelType($fuelType)
    {
        $this->_fuelType = $fuelType;

        return $this;
    }

    /**
     * Gets the value of _colour.
     *
     * @return mixed
     */
    public function getColour()
    {
        return $this->_colour;
    }

    /**
     * Sets the value of _colour.
     *
     * @param mixed $_colour the colour
     *
     * @return self
     */
    private function _setColour($colour)
    {
        $this->_colour = $colour;

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
    private function _setBodyType($bodyType)
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
    private function _setDriveType($driveType)
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
    private function _setExtras($extras)
    {
        $this->_extras = $extras;

        return $this;
    }

    /**
     * Gets the value of _thumbnail.
     *
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->_thumbnail;
    }

    /**
     * Sets the value of _thumbnail.
     *
     * @param mixed $_thumbnail the thumbnail
     *
     * @return self
     */
    private function _setThumbnail($thumbnail)
    {
        $this->_thumbnail = $thumbnail;

        return $this;
    }

    public function connectDB(){
        $username = 'root';
        $dsn = 'mysql:host=localhost; dbname=LotaMotors';
        $password = 'D00m7iger$*,.';

        try {

            $dbconnect = new PDO($dsn,$username,$password);
            $dbconnect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $dbconnect;
        }catch (PDOException $ex){
            echo "[-]Connection Failed!!".$ex->getMessage();
        }

    }

    public function addCar(){

        try {

            $sqlInsert = "INSERT INTO car_details (make,model,year,price,engineCapacity,transmission,mileage,colour,bodyType,driveType,fuelType,extras,thumbnail) VALUES ('".$this->_make."','".$this->_model."','".$this->_year."','".$this->_price."','".$this->_engineCapacity."','".$this->_transmission."','".$this->_mileage."','".$this->_colour."','".$this->_bodyType."','".$this->_driveType."','".$this->_fuelType."','".$this->_extras."','".$this->_thumbnail."')";
            $statement = $this->connectDB()->prepare($sqlInsert);
            $statement->execute(array(':make' => $this->_make,':model' => $this->_model,':year' => $this->_year,':price' => $this->_price,':engineCapacity' => $this->_engineCapacity,':transmission' => $this->_transmission,':mileage' => $this->_mileage,':colour' => $this->_colour,':bodyType' => $this->_bodyType,':driveType' => $this->_driveType,':fuelType' => $this->_fuelType,':extras' => $this->_extras,':thumbnail' => $this->_thumbnail));

            if(isset($_FILES['thumbnail'])){
                //Moving image to database
                $imageName = $_FILES['thumbnail']['name'];
                $tmpDir = $_FILES['thumbnail']['tmp_name'];
                $imageSize = $_FILES['thumbnail']['size'];
                $imgExtension = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
                $valid_extensions = array('jpeg','jpg','png');
                move_uploaded_file($tmpDir, 'images/'.$imageName);
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
        $carId = $carId;
        $sqlSelect = "SELECT * FROM car_details WHERE car_id = :carId";
        $statement = $this->connectDB()->prepare($sqlSelect);
        $statement->execute(array(':carId' => $carId));

        while($rs = $statement->fetch()){
            $this->_make = $rs['make'];
            $this->_model = $rs['model'];
            $this->_year = $rs['year'];
            $this->_price = $rs['price'];
            $this->_engineCapacity = $rs['engineCapacity'];
            $this->_transmission = $rs['transmission'];
            $this->_mileage =$rs['mileage'];
            $this->_fuelType =$rs['fuelType'];
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
                $sqlUpdate = "UPDATE car_details SET make =:make, model =:model, year =:year, price =:price, engineCapacity =:engineCapacity, transmission =:transmission, mileage =:mileage, colour =:colour, bodyType =:bodyType, driveType =:driveType, fuelType =:fuelType, extras =:extras, thumbnail =:thumbnail WHERE car_id =:car_id";
                $statement = $this->connectDB()->prepare($sqlUpdate);
                $statement->execute(array(":make" => $this->_make, ":model" => $this->_model, ":year" => $this->_year, ":price" => $this->_price, ":engineCapacity" => $this->_engineCapacity, ":transmission" => $this->_transmission, ":mileage" => $this->_mileage, ":fuelType" => $this->_fuelType, ":colour" => $this->_colour, ":bodyType" => $this->_bodyType, ":driveType" => $this->_driveType, ":extras" => $this->_extras, ":thumbnail" => $this->_thumbnail, ":car_id" => $carId));
                //Moving Image to server
                 //Moving image to database
                if(isset($_FILES['thumbnail'])){
                    $imageName = $_FILES['thumbnail']['name'];
                    $tmpDir = $_FILES['thumbnail']['tmp_name'];
                    $imageSize = $_FILES['thumbnail']['size'];
                    $imgExtension = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
                    $valid_extensions = array('jpeg','jpg','png');
                    move_uploaded_file($tmpDir, 'images/'.$imageName);
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
        $carId = $id;
        if(isset($_POST['addImage']) && !empty($_FILES['image'])){
            $imageName = $_FILES['image']['name'];
            $tmpDir = $_FILES['image']['tmp_name'];
            $imageSize = $_FILES['image']['size'];
            $imgExtension = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
            $valid_extensions = array('jpeg','jpg','png');
            move_uploaded_file($tmpDir, 'images/'.$imageName);
            $imgSql = "INSERT INTO images (car_id,imageName,imageSize) VALUES ('".$carId."','".$imageName."','".$imageSize."')";
            $stmt = $this->connectDB()->prepare($imgSql);
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
        $carId = $carId;
        $imageSql = "SELECT * FROM images WHERE car_id =:carId";
        $stmt = $this->connectDB()->prepare($imageSql);
        $stmt->execute(array(':carId' => $carId));
        if($stmt->rowCount()>0){
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $image = $row['imageName'];
            
                ?><li>
                    <img class="img-responsive" src="images/<?php echo $image; ?>">
                    <?php echo $image; ?>
                    <button type="submit" name="deleteImg" style="color: black;" id="deleteImg" onclick="return confirm('Are you sure you want to delete this record?')"><b>Delete</b></button>
                    </li>
                <?php
            }
        }
        
    }

    public function viewImages1($carId){
        $carId = $carId;
        $imageSql = "SELECT * FROM images WHERE car_id =:carId";
        $stmt = $this->connectDB()->prepare($imageSql);
        $stmt->execute(array(':carId' => $carId));
        if($stmt->rowCount()>0){
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $image = $row['imageName'];
            
                ?>
                    <img class="img-responsive" src="images/<?php echo $image; ?>">
    
                <?php
            }
        }
    }

    public function deleteImage($imageName){
            $img = $imageName;
            echo $img;
            $deleteImg = "DELETE FROM images WHERE imageName =:imageName";
            $stmt = $this->connectDB()->prepare($deleteImg);
            $stmt->execute(array(':imageName' => $img));
            unlink("images/".$img);
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
            $carId = $carId;
            //Delete car images from Database and Server
            $imageSql = "SELECT * FROM images WHERE car_id =:carId";
            $stmt = $this->connectDB()->prepare($imageSql);
            $stmt->execute(array(':carId' => $carId));
            if($stmt->rowCount()>0){
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    $image = $row['imageName'];
                    unlink("images/".$image);
                }
            }
            $carImg = "DELETE FROM images WHERE car_id = :carId ";
            $stmt = $this->connectDB()->prepare($carImg);
            $stmt->execute(array(':carId' => $carId));


            //Delete car from database
            $delCar = "DELETE FROM car_details WHERE car_id =:carId";
            $statement = $this->connectDB()->prepare($delCar);
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