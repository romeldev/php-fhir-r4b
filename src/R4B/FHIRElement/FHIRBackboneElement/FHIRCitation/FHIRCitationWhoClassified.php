<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 22nd, 2024 20:18+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
 * 
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use Romeldev\FHIR\R4B\FHIRBooleanPrimitive;
use Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use Romeldev\FHIR\R4B\FHIRElement\FHIRBoolean;
use Romeldev\FHIR\R4B\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4B\FHIRElement\FHIRReference;
use Romeldev\FHIR\R4B\FHIRElement\FHIRString;
use Romeldev\FHIR\R4B\FHIRStringPrimitive;
use Romeldev\FHIR\R4B\PHPFHIRConfig;
use Romeldev\FHIR\R4B\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4B\PHPFHIRConstants;
use Romeldev\FHIR\R4B\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4B\PHPFHIRXmlWriter;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationWhoClassified
 * @package \Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationWhoClassified extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED;

    const FIELD_PERSON = 'person';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_CLASSIFIER_COPYRIGHT = 'classifierCopyright';
    const FIELD_CLASSIFIER_COPYRIGHT_EXT = '_classifierCopyright';
    const FIELD_FREE_TO_SHARE = 'freeToShare';
    const FIELD_FREE_TO_SHARE_EXT = '_freeToShare';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the classification.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $person = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization who created the classification.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $organization = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The publisher of the classification, not the publisher of the article or
     * artifact being cited.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $publisher = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Rights management statement for the classification.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $classifierCopyright = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to re-use the classification.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $freeToShare = null;

    /**
     * Validation map for fields in type Citation.WhoClassified
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRCitationWhoClassified Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_PERSON, $data)) {
            if ($data[self::FIELD_PERSON] instanceof FHIRReference) {
                $this->setPerson($data[self::FIELD_PERSON]);
            } else {
                $this->setPerson(new FHIRReference($data[self::FIELD_PERSON]));
            }
        }
        if (array_key_exists(self::FIELD_ORGANIZATION, $data)) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_PUBLISHER, $data)) {
            if ($data[self::FIELD_PUBLISHER] instanceof FHIRReference) {
                $this->setPublisher($data[self::FIELD_PUBLISHER]);
            } else {
                $this->setPublisher(new FHIRReference($data[self::FIELD_PUBLISHER]));
            }
        }
        if (array_key_exists(self::FIELD_CLASSIFIER_COPYRIGHT, $data) || array_key_exists(self::FIELD_CLASSIFIER_COPYRIGHT_EXT, $data)) {
            $value = $data[self::FIELD_CLASSIFIER_COPYRIGHT] ?? null;
            $ext = (isset($data[self::FIELD_CLASSIFIER_COPYRIGHT_EXT]) && is_array($data[self::FIELD_CLASSIFIER_COPYRIGHT_EXT])) ? $data[self::FIELD_CLASSIFIER_COPYRIGHT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setClassifierCopyright($value);
                } else if (is_array($value)) {
                    $this->setClassifierCopyright(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setClassifierCopyright(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setClassifierCopyright(new FHIRString($ext));
            } else {
                $this->setClassifierCopyright(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_FREE_TO_SHARE, $data) || array_key_exists(self::FIELD_FREE_TO_SHARE_EXT, $data)) {
            $value = $data[self::FIELD_FREE_TO_SHARE] ?? null;
            $ext = (isset($data[self::FIELD_FREE_TO_SHARE_EXT]) && is_array($data[self::FIELD_FREE_TO_SHARE_EXT])) ? $data[self::FIELD_FREE_TO_SHARE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setFreeToShare($value);
                } else if (is_array($value)) {
                    $this->setFreeToShare(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setFreeToShare(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFreeToShare(new FHIRBoolean($ext));
            } else {
                $this->setFreeToShare(new FHIRBoolean(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the classification.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getPerson(): null|FHIRReference
    {
        return $this->person;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the classification.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference $person
     * @return static
     */
    public function setPerson(null|FHIRReference $person = null): self
    {
        if (null === $person) {
            $person = new FHIRReference();
        }
        $this->_trackValueSet($this->person, $person);
        $this->person = $person;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization who created the classification.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getOrganization(): null|FHIRReference
    {
        return $this->organization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization who created the classification.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function setOrganization(null|FHIRReference $organization = null): self
    {
        if (null === $organization) {
            $organization = new FHIRReference();
        }
        $this->_trackValueSet($this->organization, $organization);
        $this->organization = $organization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The publisher of the classification, not the publisher of the article or
     * artifact being cited.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getPublisher(): null|FHIRReference
    {
        return $this->publisher;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The publisher of the classification, not the publisher of the article or
     * artifact being cited.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference $publisher
     * @return static
     */
    public function setPublisher(null|FHIRReference $publisher = null): self
    {
        if (null === $publisher) {
            $publisher = new FHIRReference();
        }
        $this->_trackValueSet($this->publisher, $publisher);
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Rights management statement for the classification.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getClassifierCopyright(): null|FHIRString
    {
        return $this->classifierCopyright;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Rights management statement for the classification.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRStringPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRString $classifierCopyright
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setClassifierCopyright(null|string|FHIRStringPrimitive|FHIRString $classifierCopyright = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $classifierCopyright && !($classifierCopyright instanceof FHIRString)) {
            $classifierCopyright = new FHIRString($classifierCopyright);
        }
        $this->_trackValueSet($this->classifierCopyright, $classifierCopyright);
        if (!isset($this->_xmlLocations[self::FIELD_CLASSIFIER_COPYRIGHT])) {
            $this->_xmlLocations[self::FIELD_CLASSIFIER_COPYRIGHT] = [];
        }
        $this->_xmlLocations[self::FIELD_CLASSIFIER_COPYRIGHT][0] = $xmlLocation;
        $this->classifierCopyright = $classifierCopyright;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to re-use the classification.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBoolean
     */
    public function getFreeToShare(): null|FHIRBoolean
    {
        return $this->freeToShare;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to re-use the classification.
     *
     * @param null|string|bool|\Romeldev\FHIR\R4B\FHIRBooleanPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRBoolean $freeToShare
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFreeToShare(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $freeToShare = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $freeToShare && !($freeToShare instanceof FHIRBoolean)) {
            $freeToShare = new FHIRBoolean($freeToShare);
        }
        $this->_trackValueSet($this->freeToShare, $freeToShare);
        if (!isset($this->_xmlLocations[self::FIELD_FREE_TO_SHARE])) {
            $this->_xmlLocations[self::FIELD_FREE_TO_SHARE] = [];
        }
        $this->_xmlLocations[self::FIELD_FREE_TO_SHARE][0] = $xmlLocation;
        $this->freeToShare = $freeToShare;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getPerson())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERSON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClassifierCopyright())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASSIFIER_COPYRIGHT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFreeToShare())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREE_TO_SHARE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PERSON])) {
            $v = $this->getPerson();
            foreach($validationRules[self::FIELD_PERSON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_PERSON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERSON])) {
                        $errs[self::FIELD_PERSON] = [];
                    }
                    $errs[self::FIELD_PERSON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANIZATION])) {
            $v = $this->getOrganization();
            foreach($validationRules[self::FIELD_ORGANIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANIZATION])) {
                        $errs[self::FIELD_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFIER_COPYRIGHT])) {
            $v = $this->getClassifierCopyright();
            foreach($validationRules[self::FIELD_CLASSIFIER_COPYRIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_CLASSIFIER_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFIER_COPYRIGHT])) {
                        $errs[self::FIELD_CLASSIFIER_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_CLASSIFIER_COPYRIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREE_TO_SHARE])) {
            $v = $this->getFreeToShare();
            foreach($validationRules[self::FIELD_FREE_TO_SHARE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_FREE_TO_SHARE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREE_TO_SHARE])) {
                        $errs[self::FIELD_FREE_TO_SHARE] = [];
                    }
                    $errs[self::FIELD_FREE_TO_SHARE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified $type
     * @param null|int|\Romeldev\FHIR\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRCitationWhoClassified)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_PERSON === $childName) {
                $type->setPerson(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORGANIZATION === $childName) {
                $type->setOrganization(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PUBLISHER === $childName) {
                $type->setPublisher(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLASSIFIER_COPYRIGHT === $childName) {
                $type->setClassifierCopyright(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FREE_TO_SHARE === $childName) {
                $type->setFreeToShare(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_CLASSIFIER_COPYRIGHT])) {
            $pt = $type->getClassifierCopyright();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CLASSIFIER_COPYRIGHT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setClassifierCopyright((string)$attributes[self::FIELD_CLASSIFIER_COPYRIGHT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FREE_TO_SHARE])) {
            $pt = $type->getFreeToShare();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FREE_TO_SHARE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFreeToShare((string)$attributes[self::FIELD_FREE_TO_SHARE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\Romeldev\FHIR\R4B\PHPFHIRXmlWriter $xw
     * @param null|int|\Romeldev\FHIR\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \Romeldev\FHIR\R4B\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'CitationWhoClassified', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_CLASSIFIER_COPYRIGHT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getClassifierCopyright())) {
            $xw->writeAttribute(self::FIELD_CLASSIFIER_COPYRIGHT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_FREE_TO_SHARE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFreeToShare())) {
            $xw->writeAttribute(self::FIELD_FREE_TO_SHARE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getPerson())) {
            $xw->startElement(self::FIELD_PERSON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOrganization())) {
            $xw->startElement(self::FIELD_ORGANIZATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPublisher())) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CLASSIFIER_COPYRIGHT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getClassifierCopyright())) {
            $xw->startElement(self::FIELD_CLASSIFIER_COPYRIGHT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_FREE_TO_SHARE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFreeToShare())) {
            $xw->startElement(self::FIELD_FREE_TO_SHARE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getPerson())) {
            $out->{self::FIELD_PERSON} = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $out->{self::FIELD_ORGANIZATION} = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $out->{self::FIELD_PUBLISHER} = $v;
        }
        if (null !== ($v = $this->getClassifierCopyright())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CLASSIFIER_COPYRIGHT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CLASSIFIER_COPYRIGHT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFreeToShare())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FREE_TO_SHARE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FREE_TO_SHARE_EXT} = $ext;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}