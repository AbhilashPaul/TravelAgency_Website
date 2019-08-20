<?php
class Customer
{
	private $custId;
	private $custFirstName;
	private $custLastName;
	private $custAddress;
	private $custCity;
	private $custProvince;
	private $custPostal;
	private $custCountry;
	private $custHomePhone;
	private $custBusPhone;
	private $custEmail;
	private $custAgentId;
	private $custUsername;
	private $custPassword;
	
	public function toString()
	{
		return $this->custId."','".$this->custFirstName."','".$this->custLastName."','".$this->custAddress."','".$this->custCity."','".$this->custProvince."','".$this->custPostal."','".$this->custCountry."','".$this->custHomePhone."','".$this->custBusPhone."','".$this->custEmail."','".$this->custAgentId."','".$this->custUsername."','".$this->custPassword;
	}
	
	public function __Construct($custid,$object,$agtid,$custpass)
	{
		$this->custId = $custid;
		$this->custFirstName = $object->firstname;
		$this->custLastName = $object->lastname;
		$this->custAddress = $object->address;
		$this->custCity = $object->city;
		$this->custProvince = $object->province;
		$this->custPostal = $object->postalcode;
		$this->custCountry = $object->country;
		$this->custHomePhone = $object->phonenumber;
		$this->custBusPhone = $object->bphonenumber;
		$this->custEmail = $object->email;
		$this->custUsername = $object->username;
		$this->custAgentId = $agtid;	
		$this->custPassword= $custpass;
	}
	
	
	public function setCustId($custid)
	{ 
		$this->custId = $custid;
	}
	public function setUsername($custUsername)
	{
		$this->custUsername= $custUsername;
	}
	public function setPassword($custPassword)
	{
		$this->custPassword= $custPassword;
	}
	public function setCustFirstName($custFirstName)
	{
		$this->custFirstName = $custFirstName;
	}
	public function setCustLastName($custLastName)
	{
		$this->custLastName = $custLastName;
	}
	public function setHomePhone($custHomePhone)
	{
		$this->custHomePhone= $custHomePhone;
	}
	public function setBusPhone($custBusPhone)
	{
		$this->custBusPhone= $custBusPhone;
	}
	public function setEmail($custEmail)
	{
		$this->custEmail=$custEmail;
	}
	public function setAddress($custAddress)
	{
		$this->custAddress =$custAddress;
	}
	public function setCity($custCity)
	{
		$this->custCity=$custCity;
	}
	public function setProv($custProvince)
	{
		$this->custProvince=$custProvince;
	}
	public function setPostal($custPostal)
	{
		$this->custPostal=$custPostal;
	}
	public function setCountry($custCountry)
	{
		$this->custCountry=$custCountry;
	}
	public function setAgentId($custAgentId)
	{
		$this->custAgentId=$custAgentId;
	}
	//get
	public function getCustId()
	{
		return $this->custId;
	}
	public function getUsername()
	{
		return $this->custUsername;
	}
	public function getPassword()
	{
		return $this->custPassword;
	}
	public function getCustFirstName()
	{
		return $this->custFirstName;
	}
	public function getCustLastName()
	{
		return $this->custLastName;
	}
	public function getHomePhone()
	{
		return $this->custHomePhone;
	}
	public function getBusPhone()
	{
		return $this->custBusPhone;
	}
	public function getEmail()
	{
		return $this->custEmail;
	}
	public function getAddress()
	{
		return $this->custAddress;
	}
	public function getCity()
	{
		return $this->custCity;
	}
	public function getProv()
	{
		return $this->custProvince;
	}
	public function getPostal()
	{
		return $this->custPostal;
	}
	public function getCountry()
	{
		return $this->custCountry;
	}
	public function getAgentId()
	{
		return $this->custAgentId;
	}
}

class Booking
{
	private $bookingId;
	private $bookingDate;
	private $bookingNo;
	private $travelerCount;
	private $customerId;
	private $tripTypeId;
	private $packageId;
	private $passengerFName;
	private $passengerMName;
	private $passengerLName;
	private $passengerDOB;
	
	
	public function toString()
	{
		return $this->bookingId."','".$this->bookingDate."','".$this->bookingNo."','".$this->travelerCount."','".$this->customerId."','".$this->tripTypeId."','".$this->packageId."','".$this->passengerFName."','".$this->passengerMName."','".$this->passengerLName."','".$this->passengerDOB;
	}
		
	public function __Construct($bid,$bDate, $bookingNo, $travelerCount, $customerId, $tripTypeId, $packageId, $firstname, $middlename, $lastname, $birthdate)
	{
		$this->bookingId= $bid;
		$this->bookingDate= $bDate;
		$this->bookingNo= $bookingNo;
		$this->travelerCount= $travelerCount;
		$this->customerId= $customerId;
		$this->tripTypeId= $tripTypeId;
		$this->packageId= $packageId;
		$this->passengerFName= $firstname;
		$this->passengerMName= $middlename;
		$this->passengerLName= $lastname;
		$this->passengerDOB= $birthdate;
	}
	
	
	public function setBookingId($bookingId)
	{ 
		$this->bookingId = $bookingId;
	}
	public function setBookingDate($bookingDate)
	{
		$this->bookingDate= $bookingDate;
	}
	public function setBookingNo($bookingNo)
	{
		$this->bookingNo= $bookingNo;
	}
	public function setTravelerCount($travelerCount)
	{
		$this->travelerCount= $travelerCount;
	}
	public function setCustomerid($custId)
	{
		$this->customerId= $custId;
	}
	public function setTripTypeId($tripId)
	{
		$this->tripTypeId= $tripId;
	}
	public function setPackageId($packageId)
	{
		$this->packageId= $packageId;
	}
	public function setPassengerFName($pFName)
	{
		$this->passengerFName= $pFName;
	}
	public function setPassengerMName($pMName)
	{
		$this->passengerMName= $pMName;
	}
	public function setPassengerLName($pLName)
	{
		$this->passengerLName= $pLName;
	}
	public function setPassengerDOB($pDOB)
	{
		$this->passengerDOB= $pDOB;
	}

	//get
	public function getBookingId()
	{ 
		return $this->bookingId;
	}
	public function getBookingDate()
	{
		return $this->bookingDate;
	}
	public function getBookingNo()
	{
		return $this->bookingNo;
	}
	public function getTravelerCount()
	{
		$this->travelerCount;
	}
	public function getCustomerid()
	{
		return $this->customerId;
	}
	public function getTripTypeId()
	{
		return $this->tripTypeId;
	}
	public function getPackageId()
	{
		return $this->packageId;
	}
	public function getPassengerFName()
	{
		return $this->passengerFName;
	}
	public function getPassengerMName()
	{
		return $this->passengerMName;
	}
	public function getPassengerLName()
	{
		return $this->passengerLName;
	}
	public function getPassengerDOB()
	{
		return $this->passengerDOB;
	}
}
class Credit
{
	private $cCId;
	private $cCName;
	private $cCNumber;
	private $cCExpiry;
	private $cCSecurity;
	private $customerId;
		
	
	public function toString()
	{
		return $this->cCId."','".$this->cCName."','".$this->cCNumber."','".$this->cCExpiry."','".$this->customerId;
		//return $this->cCId."','".$this->cCName."','".$this->cCNumber."','".$this->cCExpiry."','".$this->cCSecurity."','".$this->customerId;
	}
	public function __Construct($cCId,$name,$number,$expiry,$custId)
	{
		$this->cCId= $cCId;
		$this->cCName=  $name;
		$this->cCNumber= $number;
		$this->cCExpiry= $expiry;
	//	$this->cCSecurity= $security;
		$this->customerId= $custId;
	}
		
	public function setCreditCardId($cid)
	{ 
		$this->cCId= $cid;
	}
	public function setCreditCardName($cname)
	{
		$this->cCName=  $cname;
	}
	public function setCreditCardNumber($cnumber)
	{
		$this->cCNumber= $cnumber;
	}
	public function setExpiry($expiry)
	{
		$this->cCExpiry= $expiry;
	}
	public function setSecurity($security)
	{
		$this->cCSecurity= $security;
	}
	public function setCustomerId($custId)
	{
		$this->customerId= $custId;
	}
	//GET
	public function getCreditCardId()
	{ 
		return $this->cCId;
	}
	public function getCreditCardName()
	{
		return $this->cCName;
	}
	public function getCreditCardNumber()
	{
		return $this->cCNumber;
	}
	public function getExpiry()
	{
		return $this->cCExpiry;
	}
	public function getSecurity()
	{
		return $this->cCSecurity;
	}
	public function getCustomerId()
	{
		return $this->customerId;
	}
}
?>
