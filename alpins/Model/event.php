<?php

/**
********************************************
event.php
---------
_____________________

Author: Guimdo Lioguy
Date: 28/11/2020
_____________________
-------------------------------------------
;Modèle de ma classe évènement

;Event class model
-------------------------------------------
********************************************
*/

/**
 *  
 */
class Event
{
	private $_eventID;
	private $_eventName;
	private $_eventDate;
	private $_eventPlace;
	private $_eventContent;
	private $_eventPhoto;
	private $_eventAuthor;

	function __construct
		(
			int $eventID,
			string $eventName,
			string $eventDate,
			string $eventPlace,
			string $eventContent,
			string $eventPhoto,
			string $eventAuthor
		)
	{
		$this->setEventID($eventID);
		$this->setEventName($eventName);
		$this->setEventDate($eventDate);
		$this->setEventPlace($eventPlace);
		$this->setEventContent($eventContent);
		$this->setEventPhoto($eventPhoto);
		$this->setEventAuthor($eventAuthor);
	}

	public function getEventID()
	{
		return $this->_eventID;
	}
	public function getEventName()
	{
		return $this->_eventName;
	}
	public function getEventDate()
	{
		return $this->_eventDate;
	}
	public function getEventPlace()
	{
		return $this->_eventPlace;
	}
	public function getEventContent()
	{
		return $this->_eventContent;
	}
	public function getEventPhoto()
	{
		return $this->_eventPhoto;
	}
	public function getEventAuthor()
	{
		return $this->_eventAuthor;
	}

	private function setEventID($eventID)
	{
		$this->_eventID = $eventID;
	}
	public function setEventName($eventName)
	{
		$this->_eventName = $eventName;
	}
	public function setEventDate($eventDate)
	{
		$this->_eventDate = $eventDate;
	}
	public function setEventPlace($eventPlace)
	{
		$this->_eventPlace = $eventPlace;
	}
	public function setEventContent($eventContent)
	{
		$this->_eventContent = $eventContent;
	}
	public function setEventPhoto($eventPhoto)
	{
		$this->_eventPhoto = $eventPhoto;
	}
	public function setEventAuthor($eventAuthor)
	{
		$this->_eventAuthor = $eventAuthor;
	}

}