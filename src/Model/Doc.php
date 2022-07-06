<?php

namespace Model;

class Doc
{
    private string $doc;

    public function __construct(string $doc)
    {
        $this->doc = $doc;
        $this->validateDoc($doc);
    }

    public function getDoc(): string
    {
        return $this->doc;
    }

    public function validateDoc(string $doc): void
    {
        if (strlen($doc) < 11) {    //I'm considering the Brazilian document format.
            echo "The document is invalid.";
            exit();
        }
    }
}
