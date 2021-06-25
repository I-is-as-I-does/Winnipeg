<?php
/* This file is part of Winnipeg | SSITU | (c) 2021 I-is-as-I-does */
namespace SSITU\Winnipeg;

class Winnipeg implements Winnipeg_i
{

    private $collect = [];
    private $fieldId = 'stuffandfluff';

    public function __construct($fieldId = null)
    {
        if (!is_null($fieldId)) {
            $this->setFieldId($fieldId);
        }
    }

    public function setFieldId(string $fieldId)
    {
        $this->fieldId = $fieldId;
    }

    public function getHoneyPotHtml($fieldId = null)
    {
        if (is_null($fieldId)) {
            $fieldId = $this->fieldId;
        }
        return '<input id="' . $fieldId . '" name="' . $fieldId . '" type="text">';
    }

    public function getHoneyPotCss($fieldId = null)
    {
        if (is_null($fieldId)) {
            $fieldId = $this->fieldId;
        }
        return '#' . $fieldId . ' {
  position:absolute;
  top:0;
  left:0;
  opacity:0.1;
  background-color: transparent;
  color:transparent;
  height:1px;
  width:1px;
  border:none;
  cursor:default;
}
#' . $fieldId . ':focus {
  outline: none;
}';
    }

    public function checkHoneyPot($fieldId = null)
    {
        if (is_null($fieldId)) {
            $fieldId = $this->fieldId;
        }
        if (!empty($_POST[$fieldId]) || !empty($_GET[$fieldId])) {
            $stock = [];
            $this->collect[] = [
                'field' => $fieldId,
                'timestamp' => date('c'),
                'get' => $_GET,
                'post' => $_POST,
                'session' => $_SESSION,
                'ip' => $_SERVER['REMOTE_ADDR'],
                'url' => htmlspecialchars("//{$_SERVER['SERVER_NAME']}{$_SERVER['REQUEST_URI']}", ENT_QUOTES, 'UTF-8'),
            ];
            return false;
        }
        return true;
    }

    public function getCollectedData()
    {
        return $this->collect;
    }
}
