<?php
/**
* This class will deal with the Contact Us information
*/
class Comment
{
	private $_comment_id;
	private $_email;
	private $_phone_no;
	private $_branch;
	private $_comment;
	
	function __construct($commment_id = null, $email = null, $phone= null, $branch = null, $comment= null)
	{
		$this->_comment_id = $commment_id;
		$this->_email = $email;
		$this->_phone_no = $phone;
		$this->_branch = $branch;
		$this->_comment = $comment;
	}

	function __destruct () {}

	function __toString() {
		return $this->toJSON();
	}

    /**
     * Gets the value of _comment_id.
     *
     * @return mixed
     */
    public function getCommentId()
    {
        return $this->_comment_id;
    }

    /**
     * Sets the value of _comment_id.
     *
     * @param mixed $_comment_id the comment id
     *
     * @return self
     */
    private function setCommentId($comment_id)
    {
        $this->_comment_id = $comment_id;

        return $this;
    }

    /**
     * Gets the value of _email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * Sets the value of _email.
     *
     * @param mixed $_email the email
     *
     * @return self
     */
    private function setEmail($email)
    {
        $this->_email = $email;

        return $this;
    }

    /**
     * Gets the value of _phone_no.
     *
     * @return mixed
     */
    public function getPhoneNo()
    {
        return $this->_phone_no;
    }

    /**
     * Sets the value of _phone_no.
     *
     * @param mixed $_phone_no the phone no
     *
     * @return self
     */
    private function setPhoneNo($phone_no)
    {
        $this->_phone_no = $phone_no;

        return $this;
    }
    
    /**
     * Gets the value of _branch.
     *
     * @return mixed
     */
    public function getBranch()
    {
        return $this->_branch;
    }

    /**
     * Sets the value of _branch.
     *
     * @param mixed $_branch the branch
     *
     * @return self
     */
    private function setBranch($branch)
    {
        $this->_branch = $branch;

        return $this;
    }

    /**
     * Gets the value of _comment.
     *
     * @return mixed
     */
    public function getComment()
    {
        return $this->_comment;
    }

    /**
     * Sets the value of _comment.
     *
     * @param mixed $_comment the comment
     *
     * @return self
     */
    private function setComment($comment)
    {
        $this->_comment = $comment;

        return $this;
    }

    public function toArray () {
    	$object = array(
    		"comment_id" => $this->_comment_id,
    		"email" => $this->_email,
    		"phone" => $this->_phone,
    		"branch" => $this->_branch,
    		"comment" => $this->_comment);
    	return $object;
    }

    public function toJSON () {
    	return json_encode($this->toArray());
    }
}
?>