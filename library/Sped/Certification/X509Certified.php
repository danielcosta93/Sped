<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Certification;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class X509Certified extends \Sped\Commons\Objeto
{

    /**
     * Nome do certificado.
     * @var string
     */
    protected $name;

    /**
     * Assunto do certificado
     * @var X509Certified\Subject
     */
    protected $subject;

    /**
     * Hash
     * @var string
     */
    protected $hash;

    /**
     *
     * @var X509Certified\Issuer
     */
    protected $issuer;

    /**
     *
     * @var int
     */
    protected $version;

    /**
     *
     * @var string 
     */
    protected $serialNumber;

    /**
     *
     * @var string
     */
    protected $validFrom;

    /**
     * 
     * @var string
     */
    protected $validTo;
    protected $purposes;
    protected $extensions;
    protected $fileName;
    protected $privateKey;
    protected $publicKey;

    /**
     * Load a file.
     * @param string $$fileName
     * @throws Exception 
     */
    public function load($fileName)
    {
        $this->setFileName($fileName);
        $content = file_get_contents($this->getFileName());

        $X509Certified = array();
        if (!openssl_pkcs12_read($content, $X509Certified, 'associacao'))
            throw new Exception('The certified is not loaded');

        $this->setOptions(openssl_x509_parse($X509Certified['cert'], false));
        $this->setPrivateKey($X509Certified['pkey']);
        $this->setPublicKey($X509Certified['cert']);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        if (!$subject instanceof X509Certified\Subject)
            $subject = new X509Certified\Subject($subject);
        $this->subject = $subject;
        return $this;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    public function getIssuer()
    {
        return $this->issuer;
    }

    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getValidFrom()
    {
        return $this->validFrom;
    }

    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getValidTo()
    {
        return $this->validTo;
    }

    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        return $this;
    }

    public function getPurposes()
    {
        return $this->purposes;
    }

    public function setPurposes($purposes)
    {
        $this->purposes = $purposes;
        return $this;
    }

    public function getExtensions()
    {
        return $this->extensions;
    }

    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    public function setFileName($fileName)
    {
        if (!is_file($fileName))
            throw new Exception('Certified file is not found.');

        $this->fileName = realpath($fileName);
        return $this;
    }

    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
        return $this;
    }

    public function getPublicKey()
    {
        return $this->publicKey;
    }

    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }

}