<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * Delcaração de Importação<br />
 * (NT 2011/004)
 * @name DI
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class DI extends \Sped\Components\Xml\Element  {

    const NDI = 'nDI';

    const DDI = 'dDI';

    const XLOCDESEMB = 'xLocDesemb';

    const UFDESEMB = 'UFDesemb';

    const DDESEMB = 'dDesemb';

    const CEXPORTADOR = 'cExportador';

    const ADI = 'adi';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI 
     */
    public function getNDI(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI');
        return $this->getElementsByTagName(self::NDI)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI 
     * @param type $value 
     */
    public function addNDI($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI(self::NDI, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI $paramNDI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setNDI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\NDI $paramNDI){
        $this->removeElementsByTagName(self::NDI);
        $this->appendChild($paramNDI, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDDI(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DDI)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $value 
     */
    public function addDDI($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DDI, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TData $paramDDI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setDDI(\Sped\Schemas\V200\TData $paramDDI){
        $this->removeElementsByTagName(self::DDI);
        $this->appendChild($paramDDI, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb 
     */
    public function getXLocDesemb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb');
        return $this->getElementsByTagName(self::XLOCDESEMB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb 
     * @param type $value 
     */
    public function addXLocDesemb($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb(self::XLOCDESEMB, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb $paramXLocDesemb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setXLocDesemb(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\XLocDesemb $paramXLocDesemb){
        $this->removeElementsByTagName(self::XLOCDESEMB);
        $this->appendChild($paramXLocDesemb, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function getUFDesemb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUfEmi');
        return $this->getElementsByTagName(self::UFDESEMB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUfEmi 
     * @param type $value 
     */
    public function addUFDesemb($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TUfEmi(self::UFDESEMB, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TUfEmi $paramUFDesemb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setUFDesemb(\Sped\Schemas\V200\TUfEmi $paramUFDesemb){
        $this->removeElementsByTagName(self::UFDESEMB);
        $this->appendChild($paramUFDesemb, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDDesemb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DDESEMB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $value 
     */
    public function addDDesemb($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DDESEMB, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TData $paramDDesemb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setDDesemb(\Sped\Schemas\V200\TData $paramDDesemb){
        $this->removeElementsByTagName(self::DDESEMB);
        $this->appendChild($paramDDesemb, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador 
     */
    public function getCExportador(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador');
        return $this->getElementsByTagName(self::CEXPORTADOR)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador 
     * @param type $value 
     */
    public function addCExportador($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador(self::CEXPORTADOR, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador $paramCExportador 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setCExportador(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\CExportador $paramCExportador){
        $this->removeElementsByTagName(self::CEXPORTADOR);
        $this->appendChild($paramCExportador, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function getAdi(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi');
        return $this->getElementsByTagName(self::ADI)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function addAdi(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi(self::ADI), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi $paramAdi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function setAdi(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi $paramAdi){
        $this->removeElementsByTagName(self::ADI);
        $this->appendChild($paramAdi, false);
        return $this;
    }

}