<?php

/**
********************************************
eventC.php
----------
_____________________

Author: Guimdo Lioguy
Date: 28/11/2020
_____________________
-------------------------------------------
;Interagit avec la base de données afin d'assurer la gestion des évènements

;make the database interact in order to manage events
-------------------------------------------
********************************************
*/

require_once('../config.php');
require_once('../model/event.php');

/**
 * 
 */
class EventC
{
	public function getEvents()
	{
		try
		{
			$sql = 'SELECT * FROM events';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->execute();
		} catch(Exception $e) {
			die('Error : ' . $e->getMessage());
		}
		return $data;
	}
	public function getEventsWithAuthor(string $author)
	{
		try
		{
			$sql = 'SELECT * FROM events WHERE eventAuthor=:author';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->bindValue(':author', $author, PDO::PARAM_STR);
			$data->execute();
		} catch(Exception $e) {
			die('Error : ' . $e->getMessage());
		}
		return $data;
	}
	public function addEvent(Event $event)
	{
		try
		{
			$sql = 'INSERT INTO events(eventName, eventDate, eventPlace, eventContent, eventPhoto, eventAuthor) VALUES(:name, :e_date, :place, :content, :photo, :author)';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->bindValue(':name', $event->getEventName(), PDO::PARAM_STR);
			$data->bindValue(':e_date', $event->getEventDate(), PDO::PARAM_STR);
			$data->bindValue(':place', $event->getEventPlace(), PDO::PARAM_STR);
			$data->bindValue(':content', $event->getEventContent(), PDO::PARAM_STR);
			$data->bindValue(':photo', $event->getEventPhoto(), PDO::PARAM_STR);
			$data->bindValue(':author', $event->getEventAuthor(), PDO::PARAM_STR);
			$data->execute();

		} catch(Exception $e) {
			die('Error : ' . $e->getMessage());
		}
	}
	public function setEvent(Event $event)
	{
		try
		{
			$sql = 'UPDATE events SET eventName=:name, eventDate=:e_date, eventPlace=:place, eventContent=:content, eventPhoto=:photo, setEventDate=NOW() WHERE eventID=:id';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->bindValue(':id', $event->getEventID(), PDO::PARAM_INT);
			$data->bindValue(':name', $event->getEventName(), PDO::PARAM_STR);
			$data->bindValue(':e_date', $event->getEventDate(), PDO::PARAM_STR);
			$data->bindValue(':place', $event->getEventPlace(), PDO::PARAM_STR);
			$data->bindValue(':content', $event->getEventContent(), PDO::PARAM_STR);
			$data->bindValue(':photo', $event->getEventPhoto(), PDO::PARAM_STR);
			$data->execute();

		} catch(Exception $e) {
			die('Error : ' . $e->getMessage());
		}
	}
	public function findEvent(int $eventID)
	{
		try {
			$sql = 'SELECT * FROM events WHERE eventID=:id';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->bindValue(':id', $eventID, PDO::PARAM_INT);
			$data->execute();
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
		return $data;
	}
	public function findEventByAll(string $nameSearch)
	{
		$nameSearch = '%' . $nameSearch . '%';
		try {
			$sql = 'SELECT * FROM events 
			WHERE eventName LIKE :nameSearch 
			|| eventDate LIKE :nameSearch  
			|| eventPlace LIKE :nameSearch 
			|| eventContent LIKE :nameSearch  
			|| eventAuthor LIKE :nameSearch';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->bindValue(':nameSearch', $nameSearch, PDO::PARAM_STR);
			$data->execute();
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
		return $data;
	}
	public function findEventByName(int $eventOrder)
	{
		try {
			if($eventOrder == 1)
				$sql = 'SELECT * FROM events ORDER BY eventName ASC';
			else if($eventOrder == 2)
				$sql = 'SELECT * FROM events ORDER BY eventName DESC';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->execute();
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
		return $data;
	}
	public function findEventByAuthor(int $eventOrder)
	{
		try {
			if($eventOrder == 1)
				$sql = 'SELECT * FROM events ORDER BY eventAuthor ASC';
			else if($eventOrder == 2)
				$sql = 'SELECT * FROM events ORDER BY eventAuthor DESC';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->execute();
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
		return $data;
	}
	public function findEventByDate(int $eventOrder)
	{
		try {
			if($eventOrder == 1)
				$sql = 'SELECT * FROM events ORDER BY eventDate ASC';
			else if($eventOrder == 2)
				$sql = 'SELECT * FROM events ORDER BY eventDate DESC';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->execute();
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
		return $data;
	}
	public function delEvent(int $eventID)
	{
		try {
			$sql = 'DELETE FROM events WHERE eventID=:id';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->bindValue(':id', $eventID, PDO::PARAM_INT);
			$data->execute();
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
	}
	public function eventSearchSubscribre(int $userID, int $eventID)
	{
		try {
			$sql = 'SELECT * FROM eventsmembers WHERE userID=:userID AND eventID=:eventID';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->bindValue(':userID', $userID, PDO::PARAM_INT);
			$data->bindValue(':eventID', $eventID, PDO::PARAM_INT);
			$data->execute();
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
		return $data;
	}
	public function eventSubscribe(int $userID, int $eventID)
	{
		try {
			$sql = 'INSERT INTO eventsmembers(eventID, userID) VALUES(:eventID, :userID)';
			$bdd = Config::getConnexion();
			$data = $bdd->prepare($sql);
			$data->bindValue(':userID', $userID, PDO::PARAM_INT);
			$data->bindValue(':eventID', $eventID, PDO::PARAM_INT);
			$data->execute();
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());
		}
		return $data;
	}
}