<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI;

/**
 * Código da Situação Tributária do IPI:<br />
 * 00-Entrada com recuperação de crédito<br />
 * 49 - Outras entradas<br />
 * 50-Saída tributada<br />
 * 99-Outras saídas
 * @name IPITrib
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class IPITrib extends \Sped\Components\Xml\Element  {

    const CST = 'CST';

    const VBC = 'vBC';

    const PIPI = 'pIPI';

    const QUNID = 'qUnid';

    const VUNID = 'vUnid';

    const VIPI = 'vIPI';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib\CST 
     * @param type $value 
     */
    public function addCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib\CST(self::CST, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib\CST $paramCST){
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVBC($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC){
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPIPI(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PIPI)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     * @param type $value 
     */
    public function addPIPI($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PIPI, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPIPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function setPIPI(\Sped\Schemas\V200\TDec_0302 $paramPIPI){
        $this->removeElementsByTagName(self::PIPI);
        $this->appendChild($paramPIPI, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1204 
     */
    public function getQUnid(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204');
        return $this->getElementsByTagName(self::QUNID)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1204 
     * @param type $value 
     */
    public function addQUnid($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204(self::QUNID, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1204 $paramQUnid 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function setQUnid(\Sped\Schemas\V200\TDec_1204 $paramQUnid){
        $this->removeElementsByTagName(self::QUNID);
        $this->appendChild($paramQUnid, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104 
     */
    public function getVUnid(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104');
        return $this->getElementsByTagName(self::VUNID)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104 
     * @param type $value 
     */
    public function addVUnid($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104(self::VUNID, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1104 $paramVUnid 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function setVUnid(\Sped\Schemas\V200\TDec_1104 $paramVUnid){
        $this->removeElementsByTagName(self::VUNID);
        $this->appendChild($paramVUnid, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVIPI(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VIPI)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVIPI($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VIPI, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVIPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function setVIPI(\Sped\Schemas\V200\TDec_1302 $paramVIPI){
        $this->removeElementsByTagName(self::VIPI);
        $this->appendChild($paramVIPI, false);
        return $this;
    }

}