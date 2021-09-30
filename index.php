<?php
echo 'Hello World';


class Main
{
    public function __construct()
    {
        echo "Hello\n";

    }
    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public function teste(string $name): void
    {}


}
(new Main ())->teste('Andre');
