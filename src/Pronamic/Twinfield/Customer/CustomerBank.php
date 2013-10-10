<?php

namespace Pronamic\Twinfield\Customer;

class CustomerBank {
    private $ID;             # integer       Sequence number of the bank account line.
    private $default;        # true/false    Is this the default bank account, only one default bank account is possible.
    private $ascription;     # string(40)    Account holder.
    private $accountnumber;  # string(40)    Account number.
    private $address;        # node          Sets a part of the bank address.
    private $bankname;       # string(40)    Bank name.
    private $biccode;        # string(16)    BIC code.
    private $city;           # string(40)    City.
    private $country;        # string(2)     Bank country code. The ISO country codes are used.
    private $iban;           # string(40)    IBAN account number.
    private $natbiccode;     # string(20)    National bank code.
    private $postcode;       # string(16)    Postcode.
    private $state;          # string(40)    State.

	public function getID() {
		return $this->ID;
	}

	public function setID( $ID ) {
		$this->ID = $ID;
		return $this;
	}

	public function getDefault() {
		return $this->default;
	}

	public function setDefault( $default ) {
		$this->default = $default;
		return $this;
	}

	public function getAscription() {
		return $this->ascription;
	}

	public function setAscription( $ascription ) {
		$this->ascription = $ascription;
		return $this;
	}

	public function getAccountnumber() {
		return $this->accountnumber;
	}

	public function setAccountnumber( $accountnumber ) {
		$this->accountnumber = $accountnumber;
		return $this;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress( $address ) {
		$this->address = $address;
		return $this;
	}

	public function getBankname() {
		return $this->bankname;
	}

	public function setBankname( $bankname ) {
		$this->bankname = $bankname;
		return $this;
	}

	public function getBiccode() {
		return $this->biccode;
	}

	public function setBiccode( $biccode ) {
		$this->biccode = $biccode;
		return $this;
	}

	public function getCity() {
		return $this->city;
	}

	public function setCity( $city ) {
		$this->city = $city;
		return $this;
	}

	public function getCountry() {
		return $this->country;
	}

	public function setCountry( $country ) {
		$this->country = $country;
		return $this;
	}

	public function getIban() {
		return $this->iban;
	}

	public function setIban( $iban ) {
		$this->iban = $iban;
		return $this;
	}

	public function getNatbiccode() {
		return $this->natbiccode;
	}

	public function setNatbiccode( $natbiccode ) {
		$this->natbiccode = $natbiccode;
		return $this;
	}

	public function getPostcode() {
		return $this->postcode;
	}

	public function setPostcode( $postcode ) {
		$this->postcode = $postcode;
		return $this;
	}

	public function getState() {
		return $this->state;
	}

	public function setState( $state ) {
		$this->state = $state;
		return $this;
	}
}