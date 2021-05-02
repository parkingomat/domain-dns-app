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

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            throw new \Exception("ONLY POST METHOD");
        }

        if (empty($_POST[$meta->in->post])){
            throw new \Exception("Empty POST param: " . $meta->in->post);
        }

        $domain_text = $_POST[$meta->in->post];

        if (empty($domain_text)) {
            throw new \Exception("Empty param: " . $meta->in->post);
        }

        $domain_array = array_values(array_filter(explode(PHP_EOL, $domain_text)));

        $domain_list = each_func($domain_array, function ($domain) {
            $domain = trim($domain);
            if (empty($domain)) return null;

            return $domain;
        });

        echo def_json($meta->out->file, [ $meta->in->post => $domain_list]);

    });

} catch (Exception $e) {
    echo def_json('', ['error' => $e->getMessage()]);
}