<?php

class Card
{
    public $id_card;
    public $img_face_down;
    public $img_face_up;
    public $state;

    /**
     * Get the value of id_card
     */
    public function getId_card()
    {
        return $this->id_card;
    }

    /**
     * Set the value of id_card
     *
     * @return  self
     */
    public function setId_card($id_card)
    {
        $this->id_card = $id_card;

        return $this;
    }

    /**
     * Get the value of img_face_down
     */
    public function getImg_face_down()
    {
        return $this->img_face_down;
    }

    /**
     * Set the value of img_face_down
     *
     * @return  self
     */
    public function setImg_face_down($img_face_down)
    {
        $this->img_face_down = $img_face_down;

        return $this;
    }

    /**
     * Get the value of img_face_up
     */
    public function getImg_face_up()
    {
        return $this->img_face_up;
    }

    /**
     * Set the value of img_face_up
     *
     * @return  self
     */
    public function setImg_face_up($img_face_up)
    {
        $this->img_face_up = $img_face_up;

        return $this;
    }

    /**
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    public function __construct($id_card, $img_face_up, $img_face_down, $state)
    {
        $this->id_card = $id_card;
        $this->img_face_up = $img_face_up;
        $this->img_face_down = $img_face_down;
        $this->state = $state;
    }
}
