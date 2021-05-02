<?php

require("load_func.php");

header('Content-Type: application/json');

# Webs service with JSON
try {

    load_func([
        'https://php.letjson.com/let_json.php',
        'https://php.defjson.com/def_json.php',
        'https://php.eachfunc.com/each_func.php',

    ], function () {

        $meta = let_json("meta.json");

        $domain_list[]

        echo def_json($meta->in->file, ['domain_list.json' => $domain_list]);

    });

} catch (Exception $e) {
    echo def_json('', ['error' => $e->getMessage()]);
}