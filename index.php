<?php

require("load_func.php");


# Webs service with JSON
try {

    load_func([
        'https://php.letjson.com/let_json.php',
        'https://php.defjson.com/def_json.php',
        'https://php.eachfunc.com/each_func.php',

    ], function () {

        $meta = let_json("meta.json");

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            throw new \Exception("ONLY POST METHOD");
        }

        if (empty($_POST[$meta->in->post])){
            throw new \Exception("Empty POST param: " . $meta->in->post);
        }

        $domain_list = $_POST[$meta->in->post];

        echo def_json($meta->out->file, [ $meta->in->post . '.json' => $domain_list]);

    });

} catch (Exception $e) {
    echo def_json('', ['error' => $e->getMessage()]);
}