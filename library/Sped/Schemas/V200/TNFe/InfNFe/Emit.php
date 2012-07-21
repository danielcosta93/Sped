<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Identificação do emitente
 * @name Emit
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Emit extends \Sped\Components\Xml\Element  {

    const CNPJ = 'CNPJ';

    const CPF = 'CPF';

    const XNOME = 'xNome';

    const XFANT = 'xFant';

    const ENDEREMIT = 'enderEmit';

    const IE = 'IE';

    const IEST = 'IEST';

    const IM = 'IM';

    const CNAE = 'CNAE';

    const CRT = 'CRT';

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpj 
     * @param type $value 
     */
    public function addCNPJ($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ){
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function getCPF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCpf');
        return $this->getElementsByTagName(self::CPF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCpf 
     * @param type $value 
     */
    public function addCPF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(self::CPF, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCpf $paramCPF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF){
        $this->removeElementsByTagName(self::CPF);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome 
     */
    public function getXNome(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome');
        return $this->getElementsByTagName(self::XNOME)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome 
     * @param type $value 
     */
    public function addXNome($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome(self::XNOME, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome $paramXNome 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setXNome(\Sped\Schemas\V200\TNFe\InfNFe\Emit\XNome $paramXNome){
        $this->removeElementsByTagName(self::XNOME);
        $this->appendChild($paramXNome, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant 
     * @param type $index 
     */
    public function getXFant($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant');
        return $this->getElementsByTagName(self::XFANT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant 
     * @param type $value 
     */
    public function addXFant($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant(self::XFANT, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant $paramXFant 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setXFant(\Sped\Schemas\V200\TNFe\InfNFe\Emit\XFant $paramXFant){
        $this->removeElementsByTagName(self::XFANT);
        $this->appendChild($paramXFant, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi 
     */
    public function getEnderEmit(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEnderEmi');
        return $this->getElementsByTagName(self::ENDEREMIT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEnderEmi 
     * @param type $value 
     */
    public function addEnderEmit($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEnderEmi(self::ENDEREMIT, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEnderEmi $paramEnderEmit 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setEnderEmit(\Sped\Schemas\V200\TEnderEmi $paramEnderEmit){
        $this->removeElementsByTagName(self::ENDEREMIT);
        $this->appendChild($paramEnderEmit, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TIe 
     */
    public function getIE(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIe');
        return $this->getElementsByTagName(self::IE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TIe 
     * @param type $value 
     */
    public function addIE($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TIe(self::IE, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TIe $paramIE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setIE(\Sped\Schemas\V200\TIe $paramIE){
        $this->removeElementsByTagName(self::IE);
        $this->appendChild($paramIE, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TIeST 
     * @param type $index 
     */
    public function getIEST($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIeST');
        return $this->getElementsByTagName(self::IEST)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TIeST 
     * @param type $value 
     */
    public function addIEST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TIeST(self::IEST, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TIeST $paramIEST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setIEST(\Sped\Schemas\V200\TIeST $paramIEST){
        $this->removeElementsByTagName(self::IEST);
        $this->appendChild($paramIEST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\IM 
     */
    public function getIM(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\IM');
        return $this->getElementsByTagName(self::IM)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\IM 
     * @param type $value 
     */
    public function addIM($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\IM(self::IM, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\IM $paramIM 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setIM(\Sped\Schemas\V200\TNFe\InfNFe\Emit\IM $paramIM){
        $this->removeElementsByTagName(self::IM);
        $this->appendChild($paramIM, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE 
     */
    public function getCNAE(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE');
        return $this->getElementsByTagName(self::CNAE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE 
     * @param type $value 
     */
    public function addCNAE($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE(self::CNAE, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE $paramCNAE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setCNAE(\Sped\Schemas\V200\TNFe\InfNFe\Emit\CNAE $paramCNAE){
        $this->removeElementsByTagName(self::CNAE);
        $this->appendChild($paramCNAE, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT 
     */
    public function getCRT(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT');
        return $this->getElementsByTagName(self::CRT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT 
     * @param type $value 
     */
    public function addCRT($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT(self::CRT, $value), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT $paramCRT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function setCRT(\Sped\Schemas\V200\TNFe\InfNFe\Emit\CRT $paramCRT){
        $this->removeElementsByTagName(self::CRT);
        $this->appendChild($paramCRT, false);
        return $this;
    }

}