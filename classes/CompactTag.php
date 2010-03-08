<?php

    class CompactTag extends Tag {


            public function __construct($name, $attributes){
                    $this->name = $name;
                    $this->attributes = $attributes;
            }

            protected function parse(){
                return "<{$this->name}{$this->attributes()}/>";
            }
    }
?>