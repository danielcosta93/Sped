<?php

namespace Sped\Schemas\V200;

/**
 *  Tipo da NF-e processada
 * @name TNfeProc
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TNfeProc extends \Sped\Components\Xml\Element  {

    const NFE = 'NFe';

    const PROTNFE = 'protNFe';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function getNFe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe');
        return $this->getElementsByTagName(self::NFE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe 
     * @param type $value 
     */
    public function addNFe($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe(self::NFE, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe $paramNFe 
     * @return \Sped\Schemas\V200\TNfeProc 
     */
    public function setNFe(\Sped\Schemas\V200\TNFe $paramNFe){
        $this->removeElementsByTagName(self::NFE);
        $this->appendChild($paramNFe, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function getProtNFe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProtNFe');
        return $this->getElementsByTagName(self::PROTNFE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TProtNFe 
     * @param type $value 
     */
    public function addProtNFe($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TProtNFe(self::PROTNFE, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TProtNFe $paramProtNFe 
     * @return \Sped\Schemas\V200\TNfeProc 
     */
    public function setProtNFe(\Sped\Schemas\V200\TProtNFe $paramProtNFe){
        $this->removeElementsByTagName(self::PROTNFE);
        $this->appendChild($paramProtNFe, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getVersao(){
        return $this->getAttribute('versao');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\TNfeProc 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}