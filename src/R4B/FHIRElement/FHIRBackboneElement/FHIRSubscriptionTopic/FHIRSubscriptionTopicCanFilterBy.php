<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic;

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

use Romeldev\FHIR\R4B\FHIRCodePrimitive;
use Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use Romeldev\FHIR\R4B\FHIRElement\FHIRCode;
use Romeldev\FHIR\R4B\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown;
use Romeldev\FHIR\R4B\FHIRElement\FHIRString;
use Romeldev\FHIR\R4B\FHIRElement\FHIRUri;
use Romeldev\FHIR\R4B\FHIRMarkdownPrimitive;
use Romeldev\FHIR\R4B\FHIRStringPrimitive;
use Romeldev\FHIR\R4B\FHIRUriPrimitive;
use Romeldev\FHIR\R4B\PHPFHIRConfig;
use Romeldev\FHIR\R4B\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4B\PHPFHIRConstants;
use Romeldev\FHIR\R4B\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4B\PHPFHIRXmlWriter;

/**
 * Describes a stream of resource state changes or events and annotated with labels
 * useful to filter projections from this topic.
 *
 * Class FHIRSubscriptionTopicCanFilterBy
 * @package \Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic
 */
class FHIRSubscriptionTopicCanFilterBy extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_CAN_FILTER_BY;

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_FILTER_PARAMETER = 'filterParameter';
    const FIELD_FILTER_PARAMETER_EXT = '_filterParameter';
    const FIELD_FILTER_DEFINITION = 'filterDefinition';
    const FIELD_FILTER_DEFINITION_EXT = '_filterDefinition';
    const FIELD_MODIFIER = 'modifier';
    const FIELD_MODIFIER_EXT = '_modifier';

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of how this filtering parameter is intended to be used.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this filter. This is the "focus" of
     * the topic (or one of them if there are more than one). It will be the same, a
     * generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or
     * SubscriptionTopic.eventTrigger.resource when they are present.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $resource = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or topic-defined
     * parameter (like "hub.event") which is a label for the filter.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $filterParameter = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or the
     * officially-defined URI for a shared filter concept (like
     * "http://example.org/concepts/shared-common-event").
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $filterDefinition = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Allowable operators to apply when determining matches (Search Modifiers). If the
     * filterParameter is a SearchParameter, this list of modifiers SHALL be a strict
     * subset of the modifiers defined on that SearchParameter.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCode[]
     */
    protected null|array $modifier = [];

    /**
     * Validation map for fields in type SubscriptionTopic.CanFilterBy
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_FILTER_PARAMETER => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRSubscriptionTopicCanFilterBy Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            } else {
                $this->setDescription(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_RESOURCE, $data) || array_key_exists(self::FIELD_RESOURCE_EXT, $data)) {
            $value = $data[self::FIELD_RESOURCE] ?? null;
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT])) ? $data[self::FIELD_RESOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResource(new FHIRUri($ext));
            } else {
                $this->setResource(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_FILTER_PARAMETER, $data) || array_key_exists(self::FIELD_FILTER_PARAMETER_EXT, $data)) {
            $value = $data[self::FIELD_FILTER_PARAMETER] ?? null;
            $ext = (isset($data[self::FIELD_FILTER_PARAMETER_EXT]) && is_array($data[self::FIELD_FILTER_PARAMETER_EXT])) ? $data[self::FIELD_FILTER_PARAMETER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFilterParameter($value);
                } else if (is_array($value)) {
                    $this->setFilterParameter(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFilterParameter(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFilterParameter(new FHIRString($ext));
            } else {
                $this->setFilterParameter(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_FILTER_DEFINITION, $data) || array_key_exists(self::FIELD_FILTER_DEFINITION_EXT, $data)) {
            $value = $data[self::FIELD_FILTER_DEFINITION] ?? null;
            $ext = (isset($data[self::FIELD_FILTER_DEFINITION_EXT]) && is_array($data[self::FIELD_FILTER_DEFINITION_EXT])) ? $data[self::FIELD_FILTER_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setFilterDefinition($value);
                } else if (is_array($value)) {
                    $this->setFilterDefinition(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setFilterDefinition(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFilterDefinition(new FHIRUri($ext));
            } else {
                $this->setFilterDefinition(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_MODIFIER, $data) || array_key_exists(self::FIELD_MODIFIER_EXT, $data)) {
            $value = $data[self::FIELD_MODIFIER] ?? null;
            $ext = (isset($data[self::FIELD_MODIFIER_EXT]) && is_array($data[self::FIELD_MODIFIER_EXT])) ? $data[self::FIELD_MODIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->addModifier($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $this->addModifier($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addModifier(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $this->addModifier(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addModifier(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->addModifier(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addModifier(new FHIRCode($iext));
                }
            } else {
                $this->addModifier(new FHIRCode(null));
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of how this filtering parameter is intended to be used.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of how this filtering parameter is intended to be used.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRMarkdownPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown $description
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_xmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this filter. This is the "focus" of
     * the topic (or one of them if there are more than one). It will be the same, a
     * generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or
     * SubscriptionTopic.eventTrigger.resource when they are present.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRUri
     */
    public function getResource(): null|FHIRUri
    {
        return $this->resource;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this filter. This is the "focus" of
     * the topic (or one of them if there are more than one). It will be the same, a
     * generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or
     * SubscriptionTopic.eventTrigger.resource when they are present.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRUriPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRUri $resource
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setResource(null|string|FHIRUriPrimitive|FHIRUri $resource = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $resource && !($resource instanceof FHIRUri)) {
            $resource = new FHIRUri($resource);
        }
        $this->_trackValueSet($this->resource, $resource);
        if (!isset($this->_xmlLocations[self::FIELD_RESOURCE])) {
            $this->_xmlLocations[self::FIELD_RESOURCE] = [];
        }
        $this->_xmlLocations[self::FIELD_RESOURCE][0] = $xmlLocation;
        $this->resource = $resource;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or topic-defined
     * parameter (like "hub.event") which is a label for the filter.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getFilterParameter(): null|FHIRString
    {
        return $this->filterParameter;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or topic-defined
     * parameter (like "hub.event") which is a label for the filter.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRStringPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRString $filterParameter
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFilterParameter(null|string|FHIRStringPrimitive|FHIRString $filterParameter = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $filterParameter && !($filterParameter instanceof FHIRString)) {
            $filterParameter = new FHIRString($filterParameter);
        }
        $this->_trackValueSet($this->filterParameter, $filterParameter);
        if (!isset($this->_xmlLocations[self::FIELD_FILTER_PARAMETER])) {
            $this->_xmlLocations[self::FIELD_FILTER_PARAMETER] = [];
        }
        $this->_xmlLocations[self::FIELD_FILTER_PARAMETER][0] = $xmlLocation;
        $this->filterParameter = $filterParameter;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or the
     * officially-defined URI for a shared filter concept (like
     * "http://example.org/concepts/shared-common-event").
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRUri
     */
    public function getFilterDefinition(): null|FHIRUri
    {
        return $this->filterDefinition;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or the
     * officially-defined URI for a shared filter concept (like
     * "http://example.org/concepts/shared-common-event").
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRUriPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRUri $filterDefinition
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFilterDefinition(null|string|FHIRUriPrimitive|FHIRUri $filterDefinition = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $filterDefinition && !($filterDefinition instanceof FHIRUri)) {
            $filterDefinition = new FHIRUri($filterDefinition);
        }
        $this->_trackValueSet($this->filterDefinition, $filterDefinition);
        if (!isset($this->_xmlLocations[self::FIELD_FILTER_DEFINITION])) {
            $this->_xmlLocations[self::FIELD_FILTER_DEFINITION] = [];
        }
        $this->_xmlLocations[self::FIELD_FILTER_DEFINITION][0] = $xmlLocation;
        $this->filterDefinition = $filterDefinition;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Allowable operators to apply when determining matches (Search Modifiers). If the
     * filterParameter is a SearchParameter, this list of modifiers SHALL be a strict
     * subset of the modifiers defined on that SearchParameter.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCode[]
     */
    public function getModifier(): null|array
    {
        return $this->modifier;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Allowable operators to apply when determining matches (Search Modifiers). If the
     * filterParameter is a SearchParameter, this list of modifiers SHALL be a strict
     * subset of the modifiers defined on that SearchParameter.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRCodePrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRCode $modifier
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addModifier(null|string|FHIRCodePrimitive|FHIRCode $modifier = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $modifier && !($modifier instanceof FHIRCode)) {
            $modifier = new FHIRCode($modifier);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_MODIFIER])) {
            $this->_xmlLocations[self::FIELD_MODIFIER] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_MODIFIER]) {
            $this->_xmlLocations[self::FIELD_MODIFIER][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_MODIFIER][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Allowable operators to apply when determining matches (Search Modifiers). If the
     * filterParameter is a SearchParameter, this list of modifiers SHALL be a strict
     * subset of the modifiers defined on that SearchParameter.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRCode[] $modifier
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setModifier(array $modifier = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_MODIFIER]);
        if ([] !== $this->modifier) {
            $this->_trackValuesRemoved(count($this->modifier));
            $this->modifier = [];
        }
        if ([] === $modifier) {
            return $this;
        }
        foreach($modifier as $v) {
            if ($v instanceof FHIRCode) {
                $this->addModifier($v, $xmlLocation);
            } else {
                $this->addModifier(new FHIRCode($v), $xmlLocation);
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFilterParameter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FILTER_PARAMETER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFilterDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FILTER_DEFINITION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_CAN_FILTER_BY, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_CAN_FILTER_BY, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FILTER_PARAMETER])) {
            $v = $this->getFilterParameter();
            foreach($validationRules[self::FIELD_FILTER_PARAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_CAN_FILTER_BY, self::FIELD_FILTER_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FILTER_PARAMETER])) {
                        $errs[self::FIELD_FILTER_PARAMETER] = [];
                    }
                    $errs[self::FIELD_FILTER_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FILTER_DEFINITION])) {
            $v = $this->getFilterDefinition();
            foreach($validationRules[self::FIELD_FILTER_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_CAN_FILTER_BY, self::FIELD_FILTER_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FILTER_DEFINITION])) {
                        $errs[self::FIELD_FILTER_DEFINITION] = [];
                    }
                    $errs[self::FIELD_FILTER_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER])) {
            $v = $this->getModifier();
            foreach($validationRules[self::FIELD_MODIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_CAN_FILTER_BY, self::FIELD_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER])) {
                        $errs[self::FIELD_MODIFIER] = [];
                    }
                    $errs[self::FIELD_MODIFIER][$rule] = $err;
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
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicCanFilterBy $type
     * @param null|int|\Romeldev\FHIR\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicCanFilterBy
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
        } else if (!($type instanceof FHIRSubscriptionTopicCanFilterBy)) {
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
            if (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RESOURCE === $childName) {
                $type->setResource(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FILTER_PARAMETER === $childName) {
                $type->setFilterParameter(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FILTER_DEFINITION === $childName) {
                $type->setFilterDefinition(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER === $childName) {
                $type->addModifier(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RESOURCE])) {
            $pt = $type->getResource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RESOURCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setResource((string)$attributes[self::FIELD_RESOURCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FILTER_PARAMETER])) {
            $pt = $type->getFilterParameter();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FILTER_PARAMETER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFilterParameter((string)$attributes[self::FIELD_FILTER_PARAMETER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FILTER_DEFINITION])) {
            $pt = $type->getFilterDefinition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FILTER_DEFINITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFilterDefinition((string)$attributes[self::FIELD_FILTER_DEFINITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MODIFIER])) {
            $type->addModifier((string)$attributes[self::FIELD_MODIFIER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'SubscriptionTopicCanFilterBy', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_RESOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getResource())) {
            $xw->writeAttribute(self::FIELD_RESOURCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_FILTER_PARAMETER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFilterParameter())) {
            $xw->writeAttribute(self::FIELD_FILTER_PARAMETER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_FILTER_DEFINITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFilterDefinition())) {
            $xw->writeAttribute(self::FIELD_FILTER_DEFINITION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_MODIFIER] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getModifier())) {
            $xw->writeAttribute(self::FIELD_MODIFIER, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getModifier()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_MODIFIER, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_RESOURCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getResource())) {
            $xw->startElement(self::FIELD_RESOURCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_FILTER_PARAMETER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFilterParameter())) {
            $xw->startElement(self::FIELD_FILTER_PARAMETER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_FILTER_DEFINITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFilterDefinition())) {
            $xw->startElement(self::FIELD_FILTER_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_MODIFIER] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getModifier())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_MODIFIER);
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
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESOURCE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFilterParameter())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FILTER_PARAMETER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FILTER_PARAMETER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFilterDefinition())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FILTER_DEFINITION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FILTER_DEFINITION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRCode::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_MODIFIER} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODIFIER_EXT} = $exts;
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