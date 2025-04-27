<?php
namespace Metaregistrar\EPP;

/**
 * Class dnsbePollDomainResponse
 * @package Metaregistrar\EPP
 */
class dnsbeEppPollResponse extends eppPollResponse {
    function __construct() {
        parent::__construct();
    }


    /**
     * Retrieve the action from the poll response message
     * @return string|null
     */
    public function getAction() {
        $xpath = $this->xPath();
        $result = $xpath->query('/epp:epp/epp:response/epp:resData/dnsbe:pollRes/dnsbe:action');
        if ($result->length > 0) {
            return $result->item(0)->nodeValue;
        } else {
            return null;
        }
    }

    /**
     * Retrieve the contact id from the poll response message
     * @return string|null
     */
    public function getContact() {
        $xpath = $this->xPath();
        $result = $xpath->query('/epp:epp/epp:response/epp:resData/dnsbe:pollRes/dnsbe:contact');
        if ($result->length > 0) {
            return $result->item(0)->nodeValue;
        } else {
            return null;
        }
    }

    /**
     * Retrieve the contact id from the poll response message
     * @return string|null
     */
    public function getDate() {
        $xpath = $this->xPath();
        $result = $xpath->query('/epp:epp/epp:response/epp:resData/dnsbe:pollRes/dnsbe:date');
        if ($result->length > 0) {
            return $result->item(0)->nodeValue;
        } else {
            return null;
        }
    }

    /**
     * Retrieve the contact id from the poll response message
     * @return string|null
     */
    public function getType() {
        $xpath = $this->xPath();
        $result = $xpath->query('/epp:epp/epp:response/epp:resData/dnsbe:pollRes/dnsbe:type');
        if ($result->length > 0) {
            return $result->item(0)->nodeValue;
        } else {
            return null;
        }
    }
}

