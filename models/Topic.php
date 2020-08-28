<?php
require "controllers/BaseClass.php";

/**
 * Model Class of the Topic table
 * Class Topic
 */
class Topic extends BaseClass
{
    /**
     * @param $topic object
     * @return mixed
     */
    function addTopic($topic){
        $query = $this->dbInstance->prepare("INSERT INTO topics() VALUES();");
        return $this->dbInstance->exec($query->queryString);
    }

    /**
     * @param $topics array
     * @return mixed
     */
    function addMultipleTopics($topics){
        $sql = "INSERT INTO topics() VALUES";
        foreach ($topics as $topic) {
            $sql .= "(''),";
        }
        $sql = substr($sql, 0, -1).";";
        $query = $this->dbInstance->prepare($sql);
        return $this->dbInstance->exec($query->queryString);
    }

    /**
     * @param $topicId integer
     * @return mixed
     */
    function getTopic($topicId){
        $prepared = $this->dbInstance->prepare("SELECT * FROM topic WHERE id = $topicId");
        $stmt = $this->dbInstance->query($prepared->queryString);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    /**
     * @return mixed
     */
    function getAllTopics(){
        $prepared = $this->dbInstance->prepare("SELECT * FROM topics");
        $stmt = $this->dbInstance->query($prepared->queryString);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    /**
     * @param $topicId integer
     */
    function updateTopic($topicId){

    }

    /**
     * @param $topicId integer
     */
    function deleteTopic($topicId){

    }
}