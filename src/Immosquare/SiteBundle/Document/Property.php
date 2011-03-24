<?php

namespace Immosquare\SiteBundle\Document;

/**
 * @mongodb:Document(collection="properties")
 */
class Property
{
    /**
     * @mongodb:Id
     */
    protected $id;

    /**
     * @mongodb:Field(type="string")
     */
    protected $name;

    /**
     * @mongodb:Field(type="string")
     */
    protected $phone;

    /**
     * @mongodb:Field(type="string")
     */
    protected $email;

    /**
     * @mongodb:Field(type="string")
     */
    protected $title;

    /**
     * @mongodb:Field(type="string")
     */
    protected $address;


    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phon
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
}