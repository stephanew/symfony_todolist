<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * mail
 */
class mail
{
    /**
     * @var int
     */
    private $id;

    /**
     * @Assert\Range(min=0)
     * @var int
     */
    private $contentId;

    /**
     * @var string
     */
    private $createTime;

    /**
     * @var string
     */
    private $updateTime;

    /**
     * @var int
     */
    private $sendStatus;

    /**
     * @var int
     */
    private $status;

    /**
     * @Assert\Email
     * @var string
     */
    private $mailAddress;

    /**
     * @var string
     */
    private $sendTime;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contentId
     *
     * @param integer $contentId
     *
     * @return mail
     */
    public function setContentId($contentId)
    {
        $this->contentId = $contentId;

        return $this;
    }

    /**
     * Get contentId
     *
     * @return int
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * Set createTime
     *
     * @param string $createTime
     *
     * @return mail
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime
     *
     * @param string $updateTime
     *
     * @return mail
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set sendStatus
     *
     * @param integer $sendStatus
     *
     * @return mail
     */
    public function setSendStatus($sendStatus)
    {
        $this->sendStatus = $sendStatus;

        return $this;
    }

    /**
     * Get sendStatus
     *
     * @return int
     */
    public function getSendStatus()
    {
        return $this->sendStatus;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return mail
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set mailAddress
     *
     * @param string $mailAddress
     *
     * @return mail
     */
    public function setMailAddress($mailAddress)
    {
        $this->mailAddress = $mailAddress;

        return $this;
    }

    /**
     * Get mailAddress
     *
     * @return string
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * Set sendTime
     *
     * @param string $sendTime
     *
     * @return mail
     */
    public function setSendTime($sendTime)
    {
        $this->sendTime = $sendTime;

        return $this;
    }

    /**
     * Get sendTime
     *
     * @return string
     */
    public function getSendTime()
    {
        return $this->sendTime;
    }
}

