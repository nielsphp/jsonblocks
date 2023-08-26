<?php
return [
    /**
     * Allowed tags for the HTML option
     * 
     */
    "allowed_tags" => [
        "h1","h2","h3","h4","h5","h6","a","div","img","p"
    ],

    /**
     * Default tag that is used if a tag is not allowed
     * 
     */
    "default_tag"=>"div",

    /**
     * Components that are allowed
     * 
     */
    "supported_components" => [
        "image-block","list-block",
        "share","safety"
    ],

    /**
     * Attributes that are allowed 
     * 
     */
    "supported_attributes" => [
        "class","id","alt",
    ]
];