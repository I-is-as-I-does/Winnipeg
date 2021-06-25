<?php
/* This file is part of Winnipeg | SSITU | (c) 2021 I-is-as-I-does */
namespace SSITU\Winnipeg;

interface Winnipeg_i
{
    public function __construct($fieldId = null);
    public function setFieldId($fieldId);
    public function getHoneyPotHtml($fieldId = null);
    public function getHoneyPotCss($fieldId = null);
    public function checkHoneyPot($fieldId = null);
    public function getCollectedData();
}
