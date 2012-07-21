<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Retorno do Pedido de Concessão de Autorização da Nota Fiscal Eletrônica
 * @name TRetEnviNFe
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TRetEnviNFe extends \Sped\Components\Xml\Element  {

    const TPAMB = 'tpAmb';

    const VERAPLIC = 'verAplic';

    const CSTAT = 'cStat';

    const XMOTIVO = 'xMotivo';

    const CUF = 'cUF';

    const DHRECBTO = 'dhRecbto';

    const INFREC = 'infRec';

    /**
     * 
     * @return \Sped\Schemas\V200\TAmb 
     */
    public function getTpAmb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TAmb');
        return $this->getElementsByTagName(self::TPAMB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TAmb 
     * @param type $value 
     */
    public function addTpAmb($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TAmb(self::TPAMB, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TAmb $paramTpAmb 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb){
        $this->removeElementsByTagName(self::TPAMB);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVerAplic 
     */
    public function getVerAplic(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVerAplic');
        return $this->getElementsByTagName(self::VERAPLIC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TVerAplic 
     * @param type $value 
     */
    public function addVerAplic($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TVerAplic(self::VERAPLIC, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TVerAplic $paramVerAplic 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setVerAplic(\Sped\Schemas\V200\TVerAplic $paramVerAplic){
        $this->removeElementsByTagName(self::VERAPLIC);
        $this->appendChild($paramVerAplic, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TStat 
     */
    public function getCStat(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TStat');
        return $this->getElementsByTagName(self::CSTAT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TStat 
     * @param type $value 
     */
    public function addCStat($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TStat(self::CSTAT, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TStat $paramCStat 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setCStat(\Sped\Schemas\V200\TStat $paramCStat){
        $this->removeElementsByTagName(self::CSTAT);
        $this->appendChild($paramCStat, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TMotivo 
     */
    public function getXMotivo(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMotivo');
        return $this->getElementsByTagName(self::XMOTIVO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TMotivo 
     * @param type $value 
     */
    public function addXMotivo($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TMotivo(self::XMOTIVO, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TMotivo $paramXMotivo 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setXMotivo(\Sped\Schemas\V200\TMotivo $paramXMotivo){
        $this->removeElementsByTagName(self::XMOTIVO);
        $this->appendChild($paramXMotivo, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(self::CUF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     * @param type $value 
     */
    public function addCUF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(self::CUF, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF){
        $this->removeElementsByTagName(self::CUF);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\DateTime 
     */
    public function getDhRecbto(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\DateTime');
        return $this->getElementsByTagName(self::DHRECBTO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\DateTime 
     * @param type $value 
     */
    public function addDhRecbto($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\DateTime(self::DHRECBTO, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\DateTime $paramDhRecbto 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setDhRecbto(\Sped\Schemas\V200\DateTime $paramDhRecbto){
        $this->removeElementsByTagName(self::DHRECBTO);
        $this->appendChild($paramDhRecbto, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TRetEnviNFe\InfRec 
     * @param type $index 
     */
    public function getInfRec($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRetEnviNFe\InfRec');
        return $this->getElementsByTagName(self::INFREC)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TRetEnviNFe\InfRec 
     */
    public function addInfRec(){
        return $this->appendChild(new \Sped\Schemas\V200\TRetEnviNFe\InfRec(self::INFREC), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TRetEnviNFe\InfRec $paramInfRec 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setInfRec(\Sped\Schemas\V200\TRetEnviNFe\InfRec $paramInfRec){
        $this->removeElementsByTagName(self::INFREC);
        $this->appendChild($paramInfRec, false);
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
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}