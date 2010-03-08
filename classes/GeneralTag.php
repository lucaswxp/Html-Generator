<?php

    class GeneralTag extends Tag {
            private $content;

            public function __construct($name, $content, $attributes){
                    $this->name = $name;
                    $this->content = $content;
                    $this->attributes = $attributes;
            }

            protected function parse(){
                return "<{$this->name}{$this->attributes()}>{$this->content}</$this->name>";
            }
    }
?>