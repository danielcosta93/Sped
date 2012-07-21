<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas
 * @name Med
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Med extends \Sped\Components\Xml\Element  {

    const NLOTE = 'nLote';

    const QLOTE = 'qLote';

    const DFAB = 'dFab';

    const DVAL = 'dVal';

    const VPMC = 'vPMC';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote 
     */
    public function getNLote(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote');
        return $this->getElementsByTagName(self::NLOTE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote 
     * @param type $value 
     */
    public function addNLote($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote(self::NLOTE, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote $paramNLote 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setNLote(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med\NLote $paramNLote){
        $this->removeElementsByTagName(self::NLOTE);
        $this->appendChild($paramNLote, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0803 
     */
    public function getQLote(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0803');
        return $this->getElementsByTagName(self::QLOTE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0803 
     * @param type $value 
     */
    public function addQLote($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0803(self::QLOTE, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0803 $paramQLote 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setQLote(\Sped\Schemas\V200\TDec_0803 $paramQLote){
        $this->removeElementsByTagName(self::QLOTE);
        $this->appendChild($paramQLote, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDFab(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DFAB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $value 
     */
    public function addDFab($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DFAB, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TData $paramDFab 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setDFab(\Sped\Schemas\V200\TData $paramDFab){
        $this->removeElementsByTagName(self::DFAB);
        $this->appendChild($paramDFab, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDVal(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DVAL)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TData 
     * @param type $value 
     */
    public function addDVal($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DVAL, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TData $paramDVal 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setDVal(\Sped\Schemas\V200\TData $paramDVal){
        $this->removeElementsByTagName(self::DVAL);
        $this->appendChild($paramDVal, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVPMC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPMC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVPMC($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPMC, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVPMC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function setVPMC(\Sped\Schemas\V200\TDec_1302 $paramVPMC){
        $this->removeElementsByTagName(self::VPMC);
        $this->appendChild($paramVPMC, false);
        return $this;
    }

}