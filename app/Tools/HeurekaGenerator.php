<?php

namespace App\Tools;

class HeurekaGenerator implements GeneratorInterface
{
    private $writer;
    private $file;

    public function __construct(XmlWriter $writer)
    {
        $this->writer = $writer;
    }

    public function beginGenerate($file)
    {
        $this->file = $file;

        $xml = $this->writer->getXml();
        $xml->openMemory();
        $xml->setIndent(TRUE);
        $xml->startDocument('1.0', 'UTF-8');
        $xml->startElement('SHOP');
        file_put_contents($file, $xml->flush(TRUE), LOCK_EX);
    }

    public function generateItem(ItemInterface $item)
    {
        if (!empty($item->getRow())) {
            $xml = $this->writer->getXml();
            $xml->startElement("SHOPITEM");
            $this->writer->writeItem($item);
            $xml->endElement();
        }
    }

    public function endGenerate()
    {
        $xml = $this->writer->getXml();

        // Final flush to make sure we haven't missed anything
        $xml->endElement(); //SHOP
        file_put_contents($this->file, $xml->flush(TRUE), FILE_APPEND | LOCK_EX);
    }

    public function flush()
    {
        $xml = $this->writer->getXml();
        file_put_contents($this->file, $xml->flush(TRUE), FILE_APPEND | LOCK_EX);
    }
}
