<?php


class Computer
{
    //auto generated
    private int $id;

    private String $brand;
    private String $graphicsCard;
    private String $processor;
    private String $os;
    private String $color;

    //optionnal default false
    private bool $keyboard;
    private bool $mousse;

    private int $memory;

    //proprietaire
    private  User $owner;


    /**
     * Computer constructor.
     * @param string $brand
     * @param string $graphicsCard
     * @param string $processor
     * @param string $os
     * @param string $color
     */
    public function __construct(string $brand, string $graphicsCard, string $processor, string $os, string $color){
        $this->setBrand($brand);
        $this->setGraphicsCard($graphicsCard);
        $this->setProcessor($processor);
        $this->setOs($os);
        $this->setColor($color);

        //optionnal default values
        $this->setMemory(8);
        $this->setKeyboard('false');
        $this->setMousse('false');

        //ID auto generated
        $this->id = time();


    }


    /**
     * return the computer id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * return the brand
     * @return String
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * set the brand
     * @param String $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * return the graphicsCard
     * @return String
     */
    public function getGraphicsCard(): string
    {
        return $this->graphicsCard;
    }

    /**
     * set the graphicsCard
     * @param String $graphicsCard
     */
    public function setGraphicsCard(string $graphicsCard): void
    {
        $this->graphicsCard = $graphicsCard;
    }

    /**
     * return keyboard true or false
     * @return bool
     */
    public function isKeyboard(): bool
    {
        return $this->keyboard;
    }

    /**
     * set keyboard true or false
     * @param bool $keyboard
     */
    public function setKeyboard(bool $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * return mousse true or false
     * @return bool
     */
    public function isMousse(): bool
    {
        return $this->mousse;
    }

    /**
     * set mousse true or false
     * @param bool $mousse
     */
    public function setMousse(bool $mousse): void
    {
        $this->mousse = $mousse;
    }

    /**
     * return memory
     * @return String
     */
    public function getMemory(): int
    {
        return $this->memory;
    }

    /**
     * set memory
     * @param int $memory
     */
    public function setMemory(int $memory): void
    {
        $this->memory = $memory;
    }

    /**
     * return processor
     * @return String
     */
    public function getProcessor(): string
    {
        return $this->processor;
    }

    /**
     * set processor
     * @param String $processor
     */
    public function setProcessor(string $processor): void
    {
        $this->processor = $processor;
    }

    /**
     * return OS
     * @return String
     */
    public function getOs(): string
    {
        return $this->os;
    }

    /**
     * set OS
     * @param String $os
     */
    public function setOs(string $os): void
    {
        $this->os = $os;
    }

    /**
     * return color
     * @return String
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * set color
     * @param String $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }


    /**
     *computer start
     */
    public function start(){
        echo $this->getBrand() ." computer started ...<br>";

    }

    /**
     *computer shutdown
     */
    public function shutdown(){
        echo $this->getBrand() ." computer off...<br>";
    }

    /**
     *computer sleep
     */
    public function sleep(){
        echo $this->getBrand() ." computer sleeping...<br>";
    }

    /**
     * @param User $user
     */
    public function setOwner(User $user){
        $this->owner =$user;
    }

    public function getOwner(): User {
        return $this->owner;
    }


}