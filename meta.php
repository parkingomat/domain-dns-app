<?php
require("load_func.php");

load_func(['https://php.defjson.com/def_json.php'], function () {

    def_json('meta.json', [
        "in" => [
            "post" => "domain_list",
        ],
        "function" => [
            "description" => "get DNS info about domain list from in->file and save to out->file",
            "include" => []
        ],
        "out" => [
            "file" => "domain_list.json",
        ],
    ]);
});