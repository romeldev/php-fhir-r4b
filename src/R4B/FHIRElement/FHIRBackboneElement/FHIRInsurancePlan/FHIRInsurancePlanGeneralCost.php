<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan;

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
use Romeldev\FHIR\R4B\FHIRElement\FHIRMoney;
use Romeldev\FHIR\R4B\FHIRElement\FHIRPositiveInt;
use Romeldev\FHIR\R4B\FHIRElement\FHIRString;
use Romeldev\FHIR\R4B\FHIRPositiveIntPrimitive;
use Romeldev\FHIR\R4B\FHIRStringPrimitive;
use Romeldev\FHIR\R4B\PHPFHIRConfig;
use Romeldev\FHIR\R4B\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4B\PHPFHIRConstants;
use Romeldev\FHIR\R4B\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4B\PHPFHIRXmlWriter;

/**
 * Details of a Health Insurance product/plan provided by an organization.
 *
 * Class FHIRInsurancePlanGeneralCost
 * @package \Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan
 */
class FHIRInsurancePlanGeneralCost extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_GENERAL_COST;

    const FIELD_TYPE = 'type';
    const FIELD_GROUP_SIZE = 'groupSize';
    const FIELD_GROUP_SIZE_EXT = '_groupSize';
    const FIELD_COST = 'cost';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of cost.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of participants enrolled in the plan.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $groupSize = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of the cost.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMoney
     */
    protected null|FHIRMoney $cost = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the general costs associated with this plan.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $comment = null;

    /**
     * Validation map for fields in type InsurancePlan.GeneralCost
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRInsurancePlanGeneralCost Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_GROUP_SIZE, $data) || array_key_exists(self::FIELD_GROUP_SIZE_EXT, $data)) {
            $value = $data[self::FIELD_GROUP_SIZE] ?? null;
            $ext = (isset($data[self::FIELD_GROUP_SIZE_EXT]) && is_array($data[self::FIELD_GROUP_SIZE_EXT])) ? $data[self::FIELD_GROUP_SIZE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setGroupSize($value);
                } else if (is_array($value)) {
                    $this->setGroupSize(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setGroupSize(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGroupSize(new FHIRPositiveInt($ext));
            } else {
                $this->setGroupSize(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_COST, $data)) {
            if ($data[self::FIELD_COST] instanceof FHIRMoney) {
                $this->setCost($data[self::FIELD_COST]);
            } else {
                $this->setCost(new FHIRMoney($data[self::FIELD_COST]));
            }
        }
        if (array_key_exists(self::FIELD_COMMENT, $data) || array_key_exists(self::FIELD_COMMENT_EXT, $data)) {
            $value = $data[self::FIELD_COMMENT] ?? null;
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) ? $data[self::FIELD_COMMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setComment(new FHIRString($ext));
            } else {
                $this->setComment(new FHIRString(null));
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
     * Type of cost.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of cost.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of participants enrolled in the plan.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRPositiveInt
     */
    public function getGroupSize(): null|FHIRPositiveInt
    {
        return $this->groupSize;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Number of participants enrolled in the plan.
     *
     * @param null|string|int|float|\Romeldev\FHIR\R4B\FHIRPositiveIntPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRPositiveInt $groupSize
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setGroupSize(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $groupSize = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $groupSize && !($groupSize instanceof FHIRPositiveInt)) {
            $groupSize = new FHIRPositiveInt($groupSize);
        }
        $this->_trackValueSet($this->groupSize, $groupSize);
        if (!isset($this->_xmlLocations[self::FIELD_GROUP_SIZE])) {
            $this->_xmlLocations[self::FIELD_GROUP_SIZE] = [];
        }
        $this->_xmlLocations[self::FIELD_GROUP_SIZE][0] = $xmlLocation;
        $this->groupSize = $groupSize;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of the cost.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMoney
     */
    public function getCost(): null|FHIRMoney
    {
        return $this->cost;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Value of the cost.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMoney $cost
     * @return static
     */
    public function setCost(null|FHIRMoney $cost = null): self
    {
        if (null === $cost) {
            $cost = new FHIRMoney();
        }
        $this->_trackValueSet($this->cost, $cost);
        $this->cost = $cost;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the general costs associated with this plan.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getComment(): null|FHIRString
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the general costs associated with this plan.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRStringPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRString $comment
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setComment(null|string|FHIRStringPrimitive|FHIRString $comment = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $comment && !($comment instanceof FHIRString)) {
            $comment = new FHIRString($comment);
        }
        $this->_trackValueSet($this->comment, $comment);
        if (!isset($this->_xmlLocations[self::FIELD_COMMENT])) {
            $this->_xmlLocations[self::FIELD_COMMENT] = [];
        }
        $this->_xmlLocations[self::FIELD_COMMENT][0] = $xmlLocation;
        $this->comment = $comment;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroupSize())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP_SIZE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCost())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_GENERAL_COST, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP_SIZE])) {
            $v = $this->getGroupSize();
            foreach($validationRules[self::FIELD_GROUP_SIZE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_GENERAL_COST, self::FIELD_GROUP_SIZE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP_SIZE])) {
                        $errs[self::FIELD_GROUP_SIZE] = [];
                    }
                    $errs[self::FIELD_GROUP_SIZE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COST])) {
            $v = $this->getCost();
            foreach($validationRules[self::FIELD_COST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_GENERAL_COST, self::FIELD_COST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COST])) {
                        $errs[self::FIELD_COST] = [];
                    }
                    $errs[self::FIELD_COST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INSURANCE_PLAN_DOT_GENERAL_COST, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost $type
     * @param null|int|\Romeldev\FHIR\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost
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
        } else if (!($type instanceof FHIRInsurancePlanGeneralCost)) {
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
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GROUP_SIZE === $childName) {
                $type->setGroupSize(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COST === $childName) {
                $type->setCost(FHIRMoney::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMMENT === $childName) {
                $type->setComment(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_GROUP_SIZE])) {
            $pt = $type->getGroupSize();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_GROUP_SIZE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setGroupSize((string)$attributes[self::FIELD_GROUP_SIZE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'InsurancePlanGeneralCost', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_GROUP_SIZE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getGroupSize())) {
            $xw->writeAttribute(self::FIELD_GROUP_SIZE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->writeAttribute(self::FIELD_COMMENT, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_GROUP_SIZE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getGroupSize())) {
            $xw->startElement(self::FIELD_GROUP_SIZE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCost())) {
            $xw->startElement(self::FIELD_COST);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->startElement(self::FIELD_COMMENT);
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
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getGroupSize())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GROUP_SIZE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GROUP_SIZE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCost())) {
            $out->{self::FIELD_COST} = $v;
        }
        if (null !== ($v = $this->getComment())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMMENT_EXT} = $ext;
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