<?php

namespace TutsPlanet\HelloWorld\Block;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
    public function printHelloWorldString(){
        return'Hello world!';
    }
}