<?php
/**
* This class contains the details of store locations
*/
class Store
{
	//The unique identification of each store
	private $_store_id;
	// The name of the store
	private $_store_name;
	// The physical coordinates of the store
	private $_store_location;
	// The address of the store
	private $_store_address;
	// The telephone of the store
	private $_store_telephone;

	function __construct($store_id = null, $store_name = null, $store_location = null, $store_address = null, $store_telephone = null)
	{
		$this->_store_id = $store_id;
		$this->_store_name = $store_name;
		$this->_store_location = $store_location;
		$this->_store_address = $store_address;
		$this->_store_telephone = $store_telephone;
	}

	function __destruct () {}

	function __toString () {
		return $this->_store_name;
	}

	//Getters and setters
	/**
     * Gets the value of _store_id.
     *
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->_store_id;
    }

    /**
     * Sets the value of _store_id.
     *
     * @param mixed $_store_id the store id
     *
     * @return self
     */
    public function setStoreId($store_id)
    {
        $this->_store_id = $store_id;

        return $this;
    }

    /**
     * Gets the value of _store_name.
     *
     * @return mixed
     */
    public function getStoreName()
    {
        return $this->_store_name;
    }

    /**
     * Sets the value of _store_name.
     *
     * @param mixed $_store_name the store name
     *
     * @return self
     */
    public function setStoreName($store_name)
    {
        $this->_store_name = $store_name;

        return $this;
    }

    /**
     * Gets the value of _store_location.
     *
     * @return mixed
     */
    public function getStoreLocation()
    {
        return $this->_store_location;
    }

    /**
     * Sets the value of _store_location.
     *
     * @param mixed $_store_location the store location
     *
     * @return self
     */
    public function setStoreLocation($store_location)
    {
        $this->_store_location = $store_location;

        return $this;
    }

    /**
     * Gets the value of _store_address.
     *
     * @return mixed
     */
    public function getStoreAddress()
    {
        return $this->_store_address;
    }

    /**
     * Sets the value of _store_address.
     *
     * @param mixed $_store_address the store address
     *
     * @return self
     */
    public function setStoreAddress($store_address)
    {
        $this->_store_address = $store_address;

        return $this;
    }

    /**
     * Gets the value of _store_telephone.
     *
     * @return mixed
     */
    public function getStoreTelephone()
    {
        return $this->_store_telephone;
    }

    /**
     * Sets the value of _store_telephone.
     *
     * @param mixed $_store_telephone the store telephone
     *
     * @return self
     */
    public function setStoreTelephone($store_telephone)
    {
        $this->_store_telephone = $store_telephone;

        return $this;
    }

    public function toArray(){
    	$object = array(
    	"store_id"=> $this->_store_id,
		"store_name"=> $this->_store_name,
		"store_location"=> $this->_store_location,
		"store_address"=> $this->_store_address,
		"store_telephone"=> $this->_store_telephone);
		return $object;
    }

    public function toJSON() {
    	echo json_encode($this->toArray());
    }
}
?>