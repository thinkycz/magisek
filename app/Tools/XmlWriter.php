<?php

namespace App\Tools;

use XMLWriter as BaseWriter;

class XmlWriter
{
	/**
	 * @var BaseWriter
	 */
	protected $xml;

    /**
     * @param ItemInterface $item
     */
	public function writeItem(ItemInterface $item)
	{
		$this->processArray($item->getRow());
	}

	/**
	 * @return BaseWriter
	 */
	public function getXml()
	{
		if (!$this->xml) {
			$this->xml = new BaseWriter();
		}
		return $this->xml;
	}


	public function resolve($val, $key = null)
	{
		if (is_array($val) || $val instanceof \Traversable) {
			$this->processArray($val, $key);
		} else {
			$this->processOnlyValue($val);
		}
	}

	public function processOnlyValue($value)
	{
		if (is_object($value) && $value instanceof XmlElement) {
			if ($value->hasAttributes()) {
				foreach ($value->getAttributes() AS $aName => $aValue) {
					$this->xml->writeAttribute($aName, $aValue);
				}
			}

			$this->resolve($value->getValue());

		} else {
			$this->xml->text($value);
		}
	}

	public function processArray($arr, $key = NULL)
	{
		if ($this->isAssoc($arr)) {
			if ($key !== NULL) {
				$this->xml->startElement($key);
			}
			foreach ($arr AS $k => $v) {
				if(is_array($v)) {
					$this->processArray($v, $k);
				} else {
					$this->xml->startElement($k);
					$this->resolve($v);
					$this->xml->endElement();
				}
			}
			if ($key !== NULL) {
				$this->xml->endElement();
			}
		} else {
			foreach ($arr AS $k => $v) {
				$this->xml->startElement($key);
				$this->resolve($v);
				$this->xml->endElement();
			}
		}
	}

	public function isAssoc($arr)
	{
		return array_keys($arr) !== range(0, count($arr) - 1);
	}
}
