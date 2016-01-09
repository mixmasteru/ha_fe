<?php

// This is just an example of reading server side data and sending it to the client.
// It reads a json formatted text file and outputs it.

$string = "{
  \"cols\": [
        {\"id\":\"\",\"label\":\"Topping\",\"pattern\":\"\",\"type\":\"string\"},
        {\"id\":\"\",\"label\":\"Slices\",\"pattern\":\"\",\"type\":\"number\"}
      ],
  \"rows\": [
        {\"c\":[{\"v\":\"Mushrooms\",\"f\":null},{\"v\":3,\"f\":null}]},
        {\"c\":[{\"v\":\"Onions\",\"f\":null},{\"v\":1,\"f\":null}]},
        {\"c\":[{\"v\":\"Olives\",\"f\":null},{\"v\":1,\"f\":null}]},
        {\"c\":[{\"v\":\"Zucchini\",\"f\":null},{\"v\":1,\"f\":null}]},
        {\"c\":[{\"v\":\"Pepperoni\",\"f\":null},{\"v\":2,\"f\":null}]}
      ]
}";
header('Content-Type: application/json');
echo $string;

// Instead you can query your database and parse into JSON etc etc
