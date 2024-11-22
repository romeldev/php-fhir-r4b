<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

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

use Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use Romeldev\FHIR\R4B\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4B\FHIRElement\FHIRQuantity;
use Romeldev\FHIR\R4B\FHIRElement\FHIRString;
use Romeldev\FHIR\R4B\FHIRStringPrimitive;
use Romeldev\FHIR\R4B\PHPFHIRConfig;
use Romeldev\FHIR\R4B\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4B\PHPFHIRConstants;
use Romeldev\FHIR\R4B\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4B\PHPFHIRXmlWriter;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgePatientCharacteristics
 * @package \Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgePatientCharacteristics extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_PATIENT_CHARACTERISTICS;

    const FIELD_CHARACTERISTIC_CODEABLE_CONCEPT = 'characteristicCodeableConcept';
    const FIELD_CHARACTERISTIC_QUANTITY = 'characteristicQuantity';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific characteristic that is relevant to the administration guideline (e.g.
     * height, weight, gender).
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $characteristicCodeableConcept = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific characteristic that is relevant to the administration guideline (e.g.
     * height, weight, gender).
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $characteristicQuantity = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific characteristic (e.g. height, weight, gender, etc.).
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString[]
     */
    protected null|array $value = [];

    /**
     * Validation map for fields in type MedicationKnowledge.PatientCharacteristics
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CHARACTERISTIC_QUANTITY => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRMedicationKnowledgePatientCharacteristics Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setCharacteristicCodeableConcept($data[self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT]);
            } else {
                $this->setCharacteristicCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_CHARACTERISTIC_QUANTITY, $data)) {
            if ($data[self::FIELD_CHARACTERISTIC_QUANTITY] instanceof FHIRQuantity) {
                $this->setCharacteristicQuantity($data[self::FIELD_CHARACTERISTIC_QUANTITY]);
            } else {
                $this->setCharacteristicQuantity(new FHIRQuantity($data[self::FIELD_CHARACTERISTIC_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE, $data) || array_key_exists(self::FIELD_VALUE_EXT, $data)) {
            $value = $data[self::FIELD_VALUE] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT])) ? $data[self::FIELD_VALUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addValue($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addValue($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addValue(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addValue(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addValue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addValue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addValue(new FHIRString($iext));
                }
            } else {
                $this->addValue(new FHIRString(null));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific characteristic that is relevant to the administration guideline (e.g.
     * height, weight, gender).
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getCharacteristicCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->characteristicCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific characteristic that is relevant to the administration guideline (e.g.
     * height, weight, gender).
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept $characteristicCodeableConcept
     * @return static
     */
    public function setCharacteristicCodeableConcept(null|FHIRCodeableConcept $characteristicCodeableConcept = null): self
    {
        if (null === $characteristicCodeableConcept) {
            $characteristicCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->characteristicCodeableConcept, $characteristicCodeableConcept);
        $this->characteristicCodeableConcept = $characteristicCodeableConcept;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific characteristic that is relevant to the administration guideline (e.g.
     * height, weight, gender).
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRQuantity
     */
    public function getCharacteristicQuantity(): null|FHIRQuantity
    {
        return $this->characteristicQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific characteristic that is relevant to the administration guideline (e.g.
     * height, weight, gender).
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRQuantity $characteristicQuantity
     * @return static
     */
    public function setCharacteristicQuantity(null|FHIRQuantity $characteristicQuantity = null): self
    {
        if (null === $characteristicQuantity) {
            $characteristicQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->characteristicQuantity, $characteristicQuantity);
        $this->characteristicQuantity = $characteristicQuantity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString[]
     */
    public function getValue(): null|array
    {
        return $this->value;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRStringPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRString $value
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addValue(null|string|FHIRStringPrimitive|FHIRString $value = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $value && !($value instanceof FHIRString)) {
            $value = new FHIRString($value);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_VALUE])) {
            $this->_xmlLocations[self::FIELD_VALUE] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_VALUE]) {
            $this->_xmlLocations[self::FIELD_VALUE][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_VALUE][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->value[] = $value;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific characteristic (e.g. height, weight, gender, etc.).
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRString[] $value
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValue(array $value = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_VALUE]);
        if ([] !== $this->value) {
            $this->_trackValuesRemoved(count($this->value));
            $this->value = [];
        }
        if ([] === $value) {
            return $this;
        }
        foreach($value as $v) {
            if ($v instanceof FHIRString) {
                $this->addValue($v, $xmlLocation);
            } else {
                $this->addValue(new FHIRString($v), $xmlLocation);
            }
        }
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
        if (null !== ($v = $this->getCharacteristicCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCharacteristicQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHARACTERISTIC_QUANTITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getValue())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT])) {
            $v = $this->getCharacteristicCodeableConcept();
            foreach($validationRules[self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_PATIENT_CHARACTERISTICS, self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERISTIC_QUANTITY])) {
            $v = $this->getCharacteristicQuantity();
            foreach($validationRules[self::FIELD_CHARACTERISTIC_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_PATIENT_CHARACTERISTICS, self::FIELD_CHARACTERISTIC_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERISTIC_QUANTITY])) {
                        $errs[self::FIELD_CHARACTERISTIC_QUANTITY] = [];
                    }
                    $errs[self::FIELD_CHARACTERISTIC_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE])) {
            $v = $this->getValue();
            foreach($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_PATIENT_CHARACTERISTICS, self::FIELD_VALUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE])) {
                        $errs[self::FIELD_VALUE] = [];
                    }
                    $errs[self::FIELD_VALUE][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics $type
     * @param null|int|\Romeldev\FHIR\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics
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
        } else if (!($type instanceof FHIRMedicationKnowledgePatientCharacteristics)) {
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
            if (self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT === $childName) {
                $type->setCharacteristicCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CHARACTERISTIC_QUANTITY === $childName) {
                $type->setCharacteristicQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE === $childName) {
                $type->addValue(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_VALUE])) {
            $type->addValue((string)$attributes[self::FIELD_VALUE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'MedicationKnowledgePatientCharacteristics', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_VALUE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getValue())) {
            $xw->writeAttribute(self::FIELD_VALUE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getValue()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_VALUE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getCharacteristicCodeableConcept())) {
            $xw->startElement(self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCharacteristicQuantity())) {
            $xw->startElement(self::FIELD_CHARACTERISTIC_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_VALUE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getValue())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_VALUE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
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
        if (null !== ($v = $this->getCharacteristicCodeableConcept())) {
            $out->{self::FIELD_CHARACTERISTIC_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getCharacteristicQuantity())) {
            $out->{self::FIELD_CHARACTERISTIC_QUANTITY} = $v;
        }
        if ([] !== ($vs = $this->getValue())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_VALUE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_EXT} = $exts;
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