<?php declare(strict_types=1);

namespace Romeldev\FHIR\R4B\FHIRResource\FHIRDomainResource;

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
use Romeldev\FHIR\R4B\FHIRDatePrimitive;
use Romeldev\FHIR\R4B\FHIRDateTimePrimitive;
use Romeldev\FHIR\R4B\FHIRElement\FHIRAnnotation;
use Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceCertainty;
use Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic;
use Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariableDefinition;
use Romeldev\FHIR\R4B\FHIRElement\FHIRCode;
use Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail;
use Romeldev\FHIR\R4B\FHIRElement\FHIRDate;
use Romeldev\FHIR\R4B\FHIRElement\FHIRDateTime;
use Romeldev\FHIR\R4B\FHIRElement\FHIRExtension;
use Romeldev\FHIR\R4B\FHIRElement\FHIRIdentifier;
use Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown;
use Romeldev\FHIR\R4B\FHIRElement\FHIRMeta;
use Romeldev\FHIR\R4B\FHIRElement\FHIRNarrative;
use Romeldev\FHIR\R4B\FHIRElement\FHIRPublicationStatus;
use Romeldev\FHIR\R4B\FHIRElement\FHIRReference;
use Romeldev\FHIR\R4B\FHIRElement\FHIRRelatedArtifact;
use Romeldev\FHIR\R4B\FHIRElement\FHIRString;
use Romeldev\FHIR\R4B\FHIRElement\FHIRUri;
use Romeldev\FHIR\R4B\FHIRElement\FHIRUsageContext;
use Romeldev\FHIR\R4B\FHIRMarkdownPrimitive;
use Romeldev\FHIR\R4B\FHIRResource\FHIRDomainResource;
use Romeldev\FHIR\R4B\FHIRStringPrimitive;
use Romeldev\FHIR\R4B\FHIRUriPrimitive;
use Romeldev\FHIR\R4B\PHPFHIRConfig;
use Romeldev\FHIR\R4B\PHPFHIRConfigKeyEnum;
use Romeldev\FHIR\R4B\PHPFHIRConstants;
use Romeldev\FHIR\R4B\PHPFHIRContainedTypeInterface;
use Romeldev\FHIR\R4B\PHPFHIRTypeInterface;
use Romeldev\FHIR\R4B\PHPFHIRTypeMap;
use Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum;
use Romeldev\FHIR\R4B\PHPFHIRXmlWriter;

/**
 * The Evidence Resource provides a machine-interpretable expression of an evidence
 * concept including the evidence variables (eg population,
 * exposures/interventions, comparators, outcomes, measured variables, confounding
 * variables), the statistics, and the certainty of this evidence.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIREvidence
 * @package \Romeldev\FHIR\R4B\FHIRResource\FHIRDomainResource
 */
class FHIREvidence extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EVIDENCE;

    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_CITE_AS_REFERENCE = 'citeAsReference';
    const FIELD_CITE_AS_MARKDOWN = 'citeAsMarkdown';
    const FIELD_CITE_AS_MARKDOWN_EXT = '_citeAsMarkdown';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_APPROVAL_DATE = 'approvalDate';
    const FIELD_APPROVAL_DATE_EXT = '_approvalDate';
    const FIELD_LAST_REVIEW_DATE = 'lastReviewDate';
    const FIELD_LAST_REVIEW_DATE_EXT = '_lastReviewDate';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_CONTACT = 'contact';
    const FIELD_AUTHOR = 'author';
    const FIELD_EDITOR = 'editor';
    const FIELD_REVIEWER = 'reviewer';
    const FIELD_ENDORSER = 'endorser';
    const FIELD_RELATED_ARTIFACT = 'relatedArtifact';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_ASSERTION = 'assertion';
    const FIELD_ASSERTION_EXT = '_assertion';
    const FIELD_NOTE = 'note';
    const FIELD_VARIABLE_DEFINITION = 'variableDefinition';
    const FIELD_SYNTHESIS_TYPE = 'synthesisType';
    const FIELD_STUDY_TYPE = 'studyType';
    const FIELD_STATISTIC = 'statistic';
    const FIELD_CERTAINTY = 'certainty';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this evidence when it is referenced in
     * a specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which at which an authoritative instance of this summary is (or will be)
     * published. This URL can be the target of a canonical reference. It SHALL remain
     * the same when the summary is stored on different servers.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $url = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this summary when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the summary when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the summary author and is not expected to be globally unique.
     * For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not
     * available. There is also no expectation that versions can be placed in a
     * lexicographical sequence.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $version = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the summary.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Citation Resource or display of suggested citation for this evidence.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $citeAsReference = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Citation Resource or display of suggested citation for this evidence.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $citeAsMarkdown = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this summary. Enables tracking the life-cycle of the content.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRPublicationStatus
     */
    protected null|FHIRPublicationStatus $status = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the summary was published. The date must
     * change when the business version changes and it must change if the status code
     * changes. In addition, it should change when the substantive content of the
     * summary changes.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate evidence
     * instances.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRUsageContext[]
     */
    protected null|array $useContext = [];
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $approvalDate = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $lastReviewDate = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the evidence.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $publisher = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    protected null|array $contact = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily involved in the creation and
     * maintenance of the content.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    protected null|array $author = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily responsible for internal
     * coherence of the content.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    protected null|array $editor = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily responsible for review of some
     * aspect of the content.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    protected null|array $reviewer = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device responsible for officially endorsing the
     * content for use in some setting.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    protected null|array $endorser = [];
    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link or citation to artifact associated with the summary.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRRelatedArtifact[]
     */
    protected null|array $relatedArtifact = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the evidence from a consumer's
     * perspective.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Declarative description of the Evidence.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $assertion = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnotes and/or explanatory notes.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Evidence variable such as population, exposure, or outcome.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariableDefinition[]
     */
    protected null|array $variableDefinition = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method to combine studies.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $synthesisType = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of study that produced this evidence.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $studyType = null;
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Values and parameters for a single statistic.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic[]
     */
    protected null|array $statistic = [];
    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Assessment of certainty, confidence in the estimates, or quality of the
     * evidence.
     * @var null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceCertainty[]
     */
    protected null|array $certainty = [];

    /**
     * Validation map for fields in type Evidence
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VARIABLE_DEFINITION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIREvidence Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_URL, $data) || array_key_exists(self::FIELD_URL_EXT, $data)) {
            $value = $data[self::FIELD_URL] ?? null;
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) ? $data[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
            } else {
                $this->setUrl(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_VERSION, $data) || array_key_exists(self::FIELD_VERSION_EXT, $data)) {
            $value = $data[self::FIELD_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) ? $data[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersion($value);
                } else if (is_array($value)) {
                    $this->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersion(new FHIRString($ext));
            } else {
                $this->setVersion(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TITLE, $data) || array_key_exists(self::FIELD_TITLE_EXT, $data)) {
            $value = $data[self::FIELD_TITLE] ?? null;
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) ? $data[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            } else {
                $this->setTitle(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CITE_AS_REFERENCE, $data)) {
            if ($data[self::FIELD_CITE_AS_REFERENCE] instanceof FHIRReference) {
                $this->setCiteAsReference($data[self::FIELD_CITE_AS_REFERENCE]);
            } else {
                $this->setCiteAsReference(new FHIRReference($data[self::FIELD_CITE_AS_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_CITE_AS_MARKDOWN, $data) || array_key_exists(self::FIELD_CITE_AS_MARKDOWN_EXT, $data)) {
            $value = $data[self::FIELD_CITE_AS_MARKDOWN] ?? null;
            $ext = (isset($data[self::FIELD_CITE_AS_MARKDOWN_EXT]) && is_array($data[self::FIELD_CITE_AS_MARKDOWN_EXT])) ? $data[self::FIELD_CITE_AS_MARKDOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setCiteAsMarkdown($value);
                } else if (is_array($value)) {
                    $this->setCiteAsMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setCiteAsMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCiteAsMarkdown(new FHIRMarkdown($ext));
            } else {
                $this->setCiteAsMarkdown(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRPublicationStatus($ext));
            } else {
                $this->setStatus(new FHIRPublicationStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_DATE, $data) || array_key_exists(self::FIELD_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            } else {
                $this->setDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_USE_CONTEXT, $data)) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
                    if ($v instanceof FHIRUsageContext) {
                        $this->addUseContext($v);
                    } else {
                        $this->addUseContext(new FHIRUsageContext($v));
                    }
                }
            } elseif ($data[self::FIELD_USE_CONTEXT] instanceof FHIRUsageContext) {
                $this->addUseContext($data[self::FIELD_USE_CONTEXT]);
            } else {
                $this->addUseContext(new FHIRUsageContext($data[self::FIELD_USE_CONTEXT]));
            }
        }
        if (array_key_exists(self::FIELD_APPROVAL_DATE, $data) || array_key_exists(self::FIELD_APPROVAL_DATE_EXT, $data)) {
            $value = $data[self::FIELD_APPROVAL_DATE] ?? null;
            $ext = (isset($data[self::FIELD_APPROVAL_DATE_EXT]) && is_array($data[self::FIELD_APPROVAL_DATE_EXT])) ? $data[self::FIELD_APPROVAL_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setApprovalDate($value);
                } else if (is_array($value)) {
                    $this->setApprovalDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setApprovalDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setApprovalDate(new FHIRDate($ext));
            } else {
                $this->setApprovalDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_LAST_REVIEW_DATE, $data) || array_key_exists(self::FIELD_LAST_REVIEW_DATE_EXT, $data)) {
            $value = $data[self::FIELD_LAST_REVIEW_DATE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_REVIEW_DATE_EXT]) && is_array($data[self::FIELD_LAST_REVIEW_DATE_EXT])) ? $data[self::FIELD_LAST_REVIEW_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setLastReviewDate($value);
                } else if (is_array($value)) {
                    $this->setLastReviewDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setLastReviewDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastReviewDate(new FHIRDate($ext));
            } else {
                $this->setLastReviewDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_PUBLISHER, $data) || array_key_exists(self::FIELD_PUBLISHER_EXT, $data)) {
            $value = $data[self::FIELD_PUBLISHER] ?? null;
            $ext = (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT])) ? $data[self::FIELD_PUBLISHER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPublisher($value);
                } else if (is_array($value)) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPublisher(new FHIRString($ext));
            } else {
                $this->setPublisher(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CONTACT, $data)) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRContactDetail) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactDetail($data[self::FIELD_CONTACT]));
            }
        }
        if (array_key_exists(self::FIELD_AUTHOR, $data)) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHOR] instanceof FHIRContactDetail) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRContactDetail($data[self::FIELD_AUTHOR]));
            }
        }
        if (array_key_exists(self::FIELD_EDITOR, $data)) {
            if (is_array($data[self::FIELD_EDITOR])) {
                foreach($data[self::FIELD_EDITOR] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $this->addEditor($v);
                    } else {
                        $this->addEditor(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_EDITOR] instanceof FHIRContactDetail) {
                $this->addEditor($data[self::FIELD_EDITOR]);
            } else {
                $this->addEditor(new FHIRContactDetail($data[self::FIELD_EDITOR]));
            }
        }
        if (array_key_exists(self::FIELD_REVIEWER, $data)) {
            if (is_array($data[self::FIELD_REVIEWER])) {
                foreach($data[self::FIELD_REVIEWER] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $this->addReviewer($v);
                    } else {
                        $this->addReviewer(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_REVIEWER] instanceof FHIRContactDetail) {
                $this->addReviewer($data[self::FIELD_REVIEWER]);
            } else {
                $this->addReviewer(new FHIRContactDetail($data[self::FIELD_REVIEWER]));
            }
        }
        if (array_key_exists(self::FIELD_ENDORSER, $data)) {
            if (is_array($data[self::FIELD_ENDORSER])) {
                foreach($data[self::FIELD_ENDORSER] as $v) {
                    if ($v instanceof FHIRContactDetail) {
                        $this->addEndorser($v);
                    } else {
                        $this->addEndorser(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_ENDORSER] instanceof FHIRContactDetail) {
                $this->addEndorser($data[self::FIELD_ENDORSER]);
            } else {
                $this->addEndorser(new FHIRContactDetail($data[self::FIELD_ENDORSER]));
            }
        }
        if (array_key_exists(self::FIELD_RELATED_ARTIFACT, $data)) {
            if (is_array($data[self::FIELD_RELATED_ARTIFACT])) {
                foreach($data[self::FIELD_RELATED_ARTIFACT] as $v) {
                    if ($v instanceof FHIRRelatedArtifact) {
                        $this->addRelatedArtifact($v);
                    } else {
                        $this->addRelatedArtifact(new FHIRRelatedArtifact($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
                $this->addRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]);
            } else {
                $this->addRelatedArtifact(new FHIRRelatedArtifact($data[self::FIELD_RELATED_ARTIFACT]));
            }
        }
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
        if (array_key_exists(self::FIELD_ASSERTION, $data) || array_key_exists(self::FIELD_ASSERTION_EXT, $data)) {
            $value = $data[self::FIELD_ASSERTION] ?? null;
            $ext = (isset($data[self::FIELD_ASSERTION_EXT]) && is_array($data[self::FIELD_ASSERTION_EXT])) ? $data[self::FIELD_ASSERTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setAssertion($value);
                } else if (is_array($value)) {
                    $this->setAssertion(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setAssertion(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAssertion(new FHIRMarkdown($ext));
            } else {
                $this->setAssertion(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (array_key_exists(self::FIELD_VARIABLE_DEFINITION, $data)) {
            if (is_array($data[self::FIELD_VARIABLE_DEFINITION])) {
                foreach($data[self::FIELD_VARIABLE_DEFINITION] as $v) {
                    if ($v instanceof FHIREvidenceVariableDefinition) {
                        $this->addVariableDefinition($v);
                    } else {
                        $this->addVariableDefinition(new FHIREvidenceVariableDefinition($v));
                    }
                }
            } elseif ($data[self::FIELD_VARIABLE_DEFINITION] instanceof FHIREvidenceVariableDefinition) {
                $this->addVariableDefinition($data[self::FIELD_VARIABLE_DEFINITION]);
            } else {
                $this->addVariableDefinition(new FHIREvidenceVariableDefinition($data[self::FIELD_VARIABLE_DEFINITION]));
            }
        }
        if (array_key_exists(self::FIELD_SYNTHESIS_TYPE, $data)) {
            if ($data[self::FIELD_SYNTHESIS_TYPE] instanceof FHIRCodeableConcept) {
                $this->setSynthesisType($data[self::FIELD_SYNTHESIS_TYPE]);
            } else {
                $this->setSynthesisType(new FHIRCodeableConcept($data[self::FIELD_SYNTHESIS_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_STUDY_TYPE, $data)) {
            if ($data[self::FIELD_STUDY_TYPE] instanceof FHIRCodeableConcept) {
                $this->setStudyType($data[self::FIELD_STUDY_TYPE]);
            } else {
                $this->setStudyType(new FHIRCodeableConcept($data[self::FIELD_STUDY_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_STATISTIC, $data)) {
            if (is_array($data[self::FIELD_STATISTIC])) {
                foreach($data[self::FIELD_STATISTIC] as $v) {
                    if ($v instanceof FHIREvidenceStatistic) {
                        $this->addStatistic($v);
                    } else {
                        $this->addStatistic(new FHIREvidenceStatistic($v));
                    }
                }
            } elseif ($data[self::FIELD_STATISTIC] instanceof FHIREvidenceStatistic) {
                $this->addStatistic($data[self::FIELD_STATISTIC]);
            } else {
                $this->addStatistic(new FHIREvidenceStatistic($data[self::FIELD_STATISTIC]));
            }
        }
        if (array_key_exists(self::FIELD_CERTAINTY, $data)) {
            if (is_array($data[self::FIELD_CERTAINTY])) {
                foreach($data[self::FIELD_CERTAINTY] as $v) {
                    if ($v instanceof FHIREvidenceCertainty) {
                        $this->addCertainty($v);
                    } else {
                        $this->addCertainty(new FHIREvidenceCertainty($v));
                    }
                }
            } elseif ($data[self::FIELD_CERTAINTY] instanceof FHIREvidenceCertainty) {
                $this->addCertainty($data[self::FIELD_CERTAINTY]);
            } else {
                $this->addCertainty(new FHIREvidenceCertainty($data[self::FIELD_CERTAINTY]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this evidence when it is referenced in
     * a specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which at which an authoritative instance of this summary is (or will be)
     * published. This URL can be the target of a canonical reference. It SHALL remain
     * the same when the summary is stored on different servers.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this evidence when it is referenced in
     * a specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which at which an authoritative instance of this summary is (or will be)
     * published. This URL can be the target of a canonical reference. It SHALL remain
     * the same when the summary is stored on different servers.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRUriPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRUri $url
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $url && !($url instanceof FHIRUri)) {
            $url = new FHIRUri($url);
        }
        $this->_trackValueSet($this->url, $url);
        if (!isset($this->_xmlLocations[self::FIELD_URL])) {
            $this->_xmlLocations[self::FIELD_URL] = [];
        }
        $this->_xmlLocations[self::FIELD_URL][0] = $xmlLocation;
        $this->url = $url;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this summary when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this summary when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this summary when it is represented
     * in other formats, or referenced in a specification, model, design or an
     * instance.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the summary when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the summary author and is not expected to be globally unique.
     * For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not
     * available. There is also no expectation that versions can be placed in a
     * lexicographical sequence.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the summary when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the summary author and is not expected to be globally unique.
     * For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not
     * available. There is also no expectation that versions can be placed in a
     * lexicographical sequence.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRStringPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRString $version
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $version && !($version instanceof FHIRString)) {
            $version = new FHIRString($version);
        }
        $this->_trackValueSet($this->version, $version);
        if (!isset($this->_xmlLocations[self::FIELD_VERSION])) {
            $this->_xmlLocations[self::FIELD_VERSION] = [];
        }
        $this->_xmlLocations[self::FIELD_VERSION][0] = $xmlLocation;
        $this->version = $version;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the summary.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the summary.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRStringPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRString $title
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $title && !($title instanceof FHIRString)) {
            $title = new FHIRString($title);
        }
        $this->_trackValueSet($this->title, $title);
        if (!isset($this->_xmlLocations[self::FIELD_TITLE])) {
            $this->_xmlLocations[self::FIELD_TITLE] = [];
        }
        $this->_xmlLocations[self::FIELD_TITLE][0] = $xmlLocation;
        $this->title = $title;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Citation Resource or display of suggested citation for this evidence.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getCiteAsReference(): null|FHIRReference
    {
        return $this->citeAsReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Citation Resource or display of suggested citation for this evidence.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRReference $citeAsReference
     * @return static
     */
    public function setCiteAsReference(null|FHIRReference $citeAsReference = null): self
    {
        if (null === $citeAsReference) {
            $citeAsReference = new FHIRReference();
        }
        $this->_trackValueSet($this->citeAsReference, $citeAsReference);
        $this->citeAsReference = $citeAsReference;
        return $this;
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
     * Citation Resource or display of suggested citation for this evidence.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    public function getCiteAsMarkdown(): null|FHIRMarkdown
    {
        return $this->citeAsMarkdown;
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
     * Citation Resource or display of suggested citation for this evidence.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRMarkdownPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown $citeAsMarkdown
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCiteAsMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $citeAsMarkdown = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $citeAsMarkdown && !($citeAsMarkdown instanceof FHIRMarkdown)) {
            $citeAsMarkdown = new FHIRMarkdown($citeAsMarkdown);
        }
        $this->_trackValueSet($this->citeAsMarkdown, $citeAsMarkdown);
        if (!isset($this->_xmlLocations[self::FIELD_CITE_AS_MARKDOWN])) {
            $this->_xmlLocations[self::FIELD_CITE_AS_MARKDOWN] = [];
        }
        $this->_xmlLocations[self::FIELD_CITE_AS_MARKDOWN][0] = $xmlLocation;
        $this->citeAsMarkdown = $citeAsMarkdown;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this summary. Enables tracking the life-cycle of the content.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus(): null|FHIRPublicationStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this summary. Enables tracking the life-cycle of the content.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRPublicationStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRPublicationStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the summary was published. The date must
     * change when the business version changes and it must change if the status code
     * changes. In addition, it should change when the substantive content of the
     * summary changes.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the summary was published. The date must
     * change when the business version changes and it must change if the status code
     * changes. In addition, it should change when the substantive content of the
     * summary changes.
     *
     * @param null|string|\DateTimeInterface|\Romeldev\FHIR\R4B\FHIRDateTimePrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRDateTime $date
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $date && !($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime($date);
        }
        $this->_trackValueSet($this->date, $date);
        if (!isset($this->_xmlLocations[self::FIELD_DATE])) {
            $this->_xmlLocations[self::FIELD_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_DATE][0] = $xmlLocation;
        $this->date = $date;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate evidence
     * instances.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext(): null|array
    {
        return $this->useContext;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate evidence
     * instances.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRUsageContext $useContext
     * @return static
     */
    public function addUseContext(null|FHIRUsageContext $useContext = null): self
    {
        if (null === $useContext) {
            $useContext = new FHIRUsageContext();
        }
        $this->_trackValueAdded();
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate evidence
     * instances.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRUsageContext ...$useContext
     * @return static
     */
    public function setUseContext(FHIRUsageContext ...$useContext): self
    {
        if ([] !== $this->useContext) {
            $this->_trackValuesRemoved(count($this->useContext));
            $this->useContext = [];
        }
        if ([] === $useContext) {
            return $this;
        }
        foreach($useContext as $v) {
            $this->addUseContext($v);
        }
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRDate
     */
    public function getApprovalDate(): null|FHIRDate
    {
        return $this->approvalDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @param null|string|\DateTimeInterface|\Romeldev\FHIR\R4B\FHIRDatePrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRDate $approvalDate
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setApprovalDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $approvalDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $approvalDate && !($approvalDate instanceof FHIRDate)) {
            $approvalDate = new FHIRDate($approvalDate);
        }
        $this->_trackValueSet($this->approvalDate, $approvalDate);
        if (!isset($this->_xmlLocations[self::FIELD_APPROVAL_DATE])) {
            $this->_xmlLocations[self::FIELD_APPROVAL_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_APPROVAL_DATE][0] = $xmlLocation;
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRDate
     */
    public function getLastReviewDate(): null|FHIRDate
    {
        return $this->lastReviewDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @param null|string|\DateTimeInterface|\Romeldev\FHIR\R4B\FHIRDatePrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRDate $lastReviewDate
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLastReviewDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastReviewDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $lastReviewDate && !($lastReviewDate instanceof FHIRDate)) {
            $lastReviewDate = new FHIRDate($lastReviewDate);
        }
        $this->_trackValueSet($this->lastReviewDate, $lastReviewDate);
        if (!isset($this->_xmlLocations[self::FIELD_LAST_REVIEW_DATE])) {
            $this->_xmlLocations[self::FIELD_LAST_REVIEW_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_LAST_REVIEW_DATE][0] = $xmlLocation;
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the evidence.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getPublisher(): null|FHIRString
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the evidence.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRStringPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRString $publisher
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPublisher(null|string|FHIRStringPrimitive|FHIRString $publisher = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $publisher && !($publisher instanceof FHIRString)) {
            $publisher = new FHIRString($publisher);
        }
        $this->_trackValueSet($this->publisher, $publisher);
        if (!isset($this->_xmlLocations[self::FIELD_PUBLISHER])) {
            $this->_xmlLocations[self::FIELD_PUBLISHER] = [];
        }
        $this->_xmlLocations[self::FIELD_PUBLISHER][0] = $xmlLocation;
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    public function getContact(): null|array
    {
        return $this->contact;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail $contact
     * @return static
     */
    public function addContact(null|FHIRContactDetail $contact = null): self
    {
        if (null === $contact) {
            $contact = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail ...$contact
     * @return static
     */
    public function setContact(FHIRContactDetail ...$contact): self
    {
        if ([] !== $this->contact) {
            $this->_trackValuesRemoved(count($this->contact));
            $this->contact = [];
        }
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            $this->addContact($v);
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily involved in the creation and
     * maintenance of the content.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    public function getAuthor(): null|array
    {
        return $this->author;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily involved in the creation and
     * maintenance of the content.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail $author
     * @return static
     */
    public function addAuthor(null|FHIRContactDetail $author = null): self
    {
        if (null === $author) {
            $author = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->author[] = $author;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily involved in the creation and
     * maintenance of the content.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail ...$author
     * @return static
     */
    public function setAuthor(FHIRContactDetail ...$author): self
    {
        if ([] !== $this->author) {
            $this->_trackValuesRemoved(count($this->author));
            $this->author = [];
        }
        if ([] === $author) {
            return $this;
        }
        foreach($author as $v) {
            $this->addAuthor($v);
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily responsible for internal
     * coherence of the content.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    public function getEditor(): null|array
    {
        return $this->editor;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily responsible for internal
     * coherence of the content.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail $editor
     * @return static
     */
    public function addEditor(null|FHIRContactDetail $editor = null): self
    {
        if (null === $editor) {
            $editor = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->editor[] = $editor;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily responsible for internal
     * coherence of the content.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail ...$editor
     * @return static
     */
    public function setEditor(FHIRContactDetail ...$editor): self
    {
        if ([] !== $this->editor) {
            $this->_trackValuesRemoved(count($this->editor));
            $this->editor = [];
        }
        if ([] === $editor) {
            return $this;
        }
        foreach($editor as $v) {
            $this->addEditor($v);
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily responsible for review of some
     * aspect of the content.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    public function getReviewer(): null|array
    {
        return $this->reviewer;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily responsible for review of some
     * aspect of the content.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail $reviewer
     * @return static
     */
    public function addReviewer(null|FHIRContactDetail $reviewer = null): self
    {
        if (null === $reviewer) {
            $reviewer = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device primarily responsible for review of some
     * aspect of the content.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail ...$reviewer
     * @return static
     */
    public function setReviewer(FHIRContactDetail ...$reviewer): self
    {
        if ([] !== $this->reviewer) {
            $this->_trackValuesRemoved(count($this->reviewer));
            $this->reviewer = [];
        }
        if ([] === $reviewer) {
            return $this;
        }
        foreach($reviewer as $v) {
            $this->addReviewer($v);
        }
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device responsible for officially endorsing the
     * content for use in some setting.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail[]
     */
    public function getEndorser(): null|array
    {
        return $this->endorser;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device responsible for officially endorsing the
     * content for use in some setting.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail $endorser
     * @return static
     */
    public function addEndorser(null|FHIRContactDetail $endorser = null): self
    {
        if (null === $endorser) {
            $endorser = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An individiual, organization, or device responsible for officially endorsing the
     * content for use in some setting.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRContactDetail ...$endorser
     * @return static
     */
    public function setEndorser(FHIRContactDetail ...$endorser): self
    {
        if ([] !== $this->endorser) {
            $this->_trackValuesRemoved(count($this->endorser));
            $this->endorser = [];
        }
        if ([] === $endorser) {
            return $this;
        }
        foreach($endorser as $v) {
            $this->addEndorser($v);
        }
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link or citation to artifact associated with the summary.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact(): null|array
    {
        return $this->relatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link or citation to artifact associated with the summary.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return static
     */
    public function addRelatedArtifact(null|FHIRRelatedArtifact $relatedArtifact = null): self
    {
        if (null === $relatedArtifact) {
            $relatedArtifact = new FHIRRelatedArtifact();
        }
        $this->_trackValueAdded();
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or
     * bibliographic references.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link or citation to artifact associated with the summary.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRRelatedArtifact ...$relatedArtifact
     * @return static
     */
    public function setRelatedArtifact(FHIRRelatedArtifact ...$relatedArtifact): self
    {
        if ([] !== $this->relatedArtifact) {
            $this->_trackValuesRemoved(count($this->relatedArtifact));
            $this->relatedArtifact = [];
        }
        if ([] === $relatedArtifact) {
            return $this;
        }
        foreach($relatedArtifact as $v) {
            $this->addRelatedArtifact($v);
        }
        return $this;
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
     * A free text natural language description of the evidence from a consumer's
     * perspective.
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
     * A free text natural language description of the evidence from a consumer's
     * perspective.
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Declarative description of the Evidence.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    public function getAssertion(): null|FHIRMarkdown
    {
        return $this->assertion;
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
     * Declarative description of the Evidence.
     *
     * @param null|string|\Romeldev\FHIR\R4B\FHIRMarkdownPrimitive|\Romeldev\FHIR\R4B\FHIRElement\FHIRMarkdown $assertion
     * @param \Romeldev\FHIR\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAssertion(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $assertion = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $assertion && !($assertion instanceof FHIRMarkdown)) {
            $assertion = new FHIRMarkdown($assertion);
        }
        $this->_trackValueSet($this->assertion, $assertion);
        if (!isset($this->_xmlLocations[self::FIELD_ASSERTION])) {
            $this->_xmlLocations[self::FIELD_ASSERTION] = [];
        }
        $this->_xmlLocations[self::FIELD_ASSERTION][0] = $xmlLocation;
        $this->assertion = $assertion;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnotes and/or explanatory notes.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnotes and/or explanatory notes.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Footnotes and/or explanatory notes.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            $this->addNote($v);
        }
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Evidence variable such as population, exposure, or outcome.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariableDefinition[]
     */
    public function getVariableDefinition(): null|array
    {
        return $this->variableDefinition;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Evidence variable such as population, exposure, or outcome.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariableDefinition $variableDefinition
     * @return static
     */
    public function addVariableDefinition(null|FHIREvidenceVariableDefinition $variableDefinition = null): self
    {
        if (null === $variableDefinition) {
            $variableDefinition = new FHIREvidenceVariableDefinition();
        }
        $this->_trackValueAdded();
        $this->variableDefinition[] = $variableDefinition;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Evidence variable such as population, exposure, or outcome.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariableDefinition ...$variableDefinition
     * @return static
     */
    public function setVariableDefinition(FHIREvidenceVariableDefinition ...$variableDefinition): self
    {
        if ([] !== $this->variableDefinition) {
            $this->_trackValuesRemoved(count($this->variableDefinition));
            $this->variableDefinition = [];
        }
        if ([] === $variableDefinition) {
            return $this;
        }
        foreach($variableDefinition as $v) {
            $this->addVariableDefinition($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method to combine studies.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getSynthesisType(): null|FHIRCodeableConcept
    {
        return $this->synthesisType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method to combine studies.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept $synthesisType
     * @return static
     */
    public function setSynthesisType(null|FHIRCodeableConcept $synthesisType = null): self
    {
        if (null === $synthesisType) {
            $synthesisType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->synthesisType, $synthesisType);
        $this->synthesisType = $synthesisType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of study that produced this evidence.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getStudyType(): null|FHIRCodeableConcept
    {
        return $this->studyType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of study that produced this evidence.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRCodeableConcept $studyType
     * @return static
     */
    public function setStudyType(null|FHIRCodeableConcept $studyType = null): self
    {
        if (null === $studyType) {
            $studyType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->studyType, $studyType);
        $this->studyType = $studyType;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Values and parameters for a single statistic.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic[]
     */
    public function getStatistic(): null|array
    {
        return $this->statistic;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Values and parameters for a single statistic.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic $statistic
     * @return static
     */
    public function addStatistic(null|FHIREvidenceStatistic $statistic = null): self
    {
        if (null === $statistic) {
            $statistic = new FHIREvidenceStatistic();
        }
        $this->_trackValueAdded();
        $this->statistic[] = $statistic;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Values and parameters for a single statistic.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic ...$statistic
     * @return static
     */
    public function setStatistic(FHIREvidenceStatistic ...$statistic): self
    {
        if ([] !== $this->statistic) {
            $this->_trackValuesRemoved(count($this->statistic));
            $this->statistic = [];
        }
        if ([] === $statistic) {
            return $this;
        }
        foreach($statistic as $v) {
            $this->addStatistic($v);
        }
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Assessment of certainty, confidence in the estimates, or quality of the
     * evidence.
     *
     * @return null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceCertainty[]
     */
    public function getCertainty(): null|array
    {
        return $this->certainty;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Assessment of certainty, confidence in the estimates, or quality of the
     * evidence.
     *
     * @param null|\Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceCertainty $certainty
     * @return static
     */
    public function addCertainty(null|FHIREvidenceCertainty $certainty = null): self
    {
        if (null === $certainty) {
            $certainty = new FHIREvidenceCertainty();
        }
        $this->_trackValueAdded();
        $this->certainty[] = $certainty;
        return $this;
    }

    /**
     * The Evidence Resource provides a machine-interpretable expression of an evidence
     * concept including the evidence variables (eg population,
     * exposures/interventions, comparators, outcomes, measured variables, confounding
     * variables), the statistics, and the certainty of this evidence.
     *
     * Assessment of certainty, confidence in the estimates, or quality of the
     * evidence.
     *
     * @param \Romeldev\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceCertainty ...$certainty
     * @return static
     */
    public function setCertainty(FHIREvidenceCertainty ...$certainty): self
    {
        if ([] !== $this->certainty) {
            $this->_trackValuesRemoved(count($this->certainty));
            $this->certainty = [];
        }
        if ([] === $certainty) {
            return $this;
        }
        foreach($certainty as $v) {
            $this->addCertainty($v);
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
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCiteAsReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CITE_AS_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCiteAsMarkdown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CITE_AS_MARKDOWN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USE_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getApprovalDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPROVAL_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_REVIEW_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEditor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EDITOR, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReviewer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REVIEWER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEndorser())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENDORSER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ARTIFACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAssertion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ASSERTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getVariableDefinition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VARIABLE_DEFINITION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSynthesisType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SYNTHESIS_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStatistic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STATISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCertainty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CERTAINTY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CITE_AS_REFERENCE])) {
            $v = $this->getCiteAsReference();
            foreach($validationRules[self::FIELD_CITE_AS_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_CITE_AS_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CITE_AS_REFERENCE])) {
                        $errs[self::FIELD_CITE_AS_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CITE_AS_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CITE_AS_MARKDOWN])) {
            $v = $this->getCiteAsMarkdown();
            foreach($validationRules[self::FIELD_CITE_AS_MARKDOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_CITE_AS_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CITE_AS_MARKDOWN])) {
                        $errs[self::FIELD_CITE_AS_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_CITE_AS_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
            $v = $this->getUseContext();
            foreach($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE_CONTEXT])) {
                        $errs[self::FIELD_USE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_USE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPROVAL_DATE])) {
            $v = $this->getApprovalDate();
            foreach($validationRules[self::FIELD_APPROVAL_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_APPROVAL_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPROVAL_DATE])) {
                        $errs[self::FIELD_APPROVAL_DATE] = [];
                    }
                    $errs[self::FIELD_APPROVAL_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_REVIEW_DATE])) {
            $v = $this->getLastReviewDate();
            foreach($validationRules[self::FIELD_LAST_REVIEW_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_LAST_REVIEW_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_REVIEW_DATE])) {
                        $errs[self::FIELD_LAST_REVIEW_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_REVIEW_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EDITOR])) {
            $v = $this->getEditor();
            foreach($validationRules[self::FIELD_EDITOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_EDITOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EDITOR])) {
                        $errs[self::FIELD_EDITOR] = [];
                    }
                    $errs[self::FIELD_EDITOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REVIEWER])) {
            $v = $this->getReviewer();
            foreach($validationRules[self::FIELD_REVIEWER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_REVIEWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REVIEWER])) {
                        $errs[self::FIELD_REVIEWER] = [];
                    }
                    $errs[self::FIELD_REVIEWER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENDORSER])) {
            $v = $this->getEndorser();
            foreach($validationRules[self::FIELD_ENDORSER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_ENDORSER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDORSER])) {
                        $errs[self::FIELD_ENDORSER] = [];
                    }
                    $errs[self::FIELD_ENDORSER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ARTIFACT])) {
            $v = $this->getRelatedArtifact();
            foreach($validationRules[self::FIELD_RELATED_ARTIFACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_RELATED_ARTIFACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ARTIFACT])) {
                        $errs[self::FIELD_RELATED_ARTIFACT] = [];
                    }
                    $errs[self::FIELD_RELATED_ARTIFACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSERTION])) {
            $v = $this->getAssertion();
            foreach($validationRules[self::FIELD_ASSERTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_ASSERTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSERTION])) {
                        $errs[self::FIELD_ASSERTION] = [];
                    }
                    $errs[self::FIELD_ASSERTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIABLE_DEFINITION])) {
            $v = $this->getVariableDefinition();
            foreach($validationRules[self::FIELD_VARIABLE_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_VARIABLE_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIABLE_DEFINITION])) {
                        $errs[self::FIELD_VARIABLE_DEFINITION] = [];
                    }
                    $errs[self::FIELD_VARIABLE_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SYNTHESIS_TYPE])) {
            $v = $this->getSynthesisType();
            foreach($validationRules[self::FIELD_SYNTHESIS_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_SYNTHESIS_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SYNTHESIS_TYPE])) {
                        $errs[self::FIELD_SYNTHESIS_TYPE] = [];
                    }
                    $errs[self::FIELD_SYNTHESIS_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY_TYPE])) {
            $v = $this->getStudyType();
            foreach($validationRules[self::FIELD_STUDY_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_STUDY_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY_TYPE])) {
                        $errs[self::FIELD_STUDY_TYPE] = [];
                    }
                    $errs[self::FIELD_STUDY_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATISTIC])) {
            $v = $this->getStatistic();
            foreach($validationRules[self::FIELD_STATISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_STATISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATISTIC])) {
                        $errs[self::FIELD_STATISTIC] = [];
                    }
                    $errs[self::FIELD_STATISTIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CERTAINTY])) {
            $v = $this->getCertainty();
            foreach($validationRules[self::FIELD_CERTAINTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE, self::FIELD_CERTAINTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CERTAINTY])) {
                        $errs[self::FIELD_CERTAINTY] = [];
                    }
                    $errs[self::FIELD_CERTAINTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\Romeldev\FHIR\R4B\FHIRResource\FHIRDomainResource\FHIREvidence $type
     * @param null|int|\Romeldev\FHIR\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\Romeldev\FHIR\R4B\FHIRResource\FHIRDomainResource\FHIREvidence
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
        } else if (!($type instanceof FHIREvidence)) {
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
            if (self::FIELD_URL === $childName) {
                $type->setUrl(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERSION === $childName) {
                $type->setVersion(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TITLE === $childName) {
                $type->setTitle(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CITE_AS_REFERENCE === $childName) {
                $type->setCiteAsReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CITE_AS_MARKDOWN === $childName) {
                $type->setCiteAsMarkdown(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE === $childName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_USE_CONTEXT === $childName) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_APPROVAL_DATE === $childName) {
                $type->setApprovalDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LAST_REVIEW_DATE === $childName) {
                $type->setLastReviewDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PUBLISHER === $childName) {
                $type->setPublisher(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONTACT === $childName) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AUTHOR === $childName) {
                $type->addAuthor(FHIRContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EDITOR === $childName) {
                $type->addEditor(FHIRContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REVIEWER === $childName) {
                $type->addReviewer(FHIRContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENDORSER === $childName) {
                $type->addEndorser(FHIRContactDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATED_ARTIFACT === $childName) {
                $type->addRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ASSERTION === $childName) {
                $type->setAssertion(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VARIABLE_DEFINITION === $childName) {
                $type->addVariableDefinition(FHIREvidenceVariableDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SYNTHESIS_TYPE === $childName) {
                $type->setSynthesisType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STUDY_TYPE === $childName) {
                $type->setStudyType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATISTIC === $childName) {
                $type->addStatistic(FHIREvidenceStatistic::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CERTAINTY === $childName) {
                $type->addCertainty(FHIREvidenceCertainty::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl((string)$attributes[self::FIELD_URL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VERSION])) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VERSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setVersion((string)$attributes[self::FIELD_VERSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TITLE])) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTitle((string)$attributes[self::FIELD_TITLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CITE_AS_MARKDOWN])) {
            $pt = $type->getCiteAsMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CITE_AS_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCiteAsMarkdown((string)$attributes[self::FIELD_CITE_AS_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_APPROVAL_DATE])) {
            $pt = $type->getApprovalDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_APPROVAL_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setApprovalDate((string)$attributes[self::FIELD_APPROVAL_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_REVIEW_DATE])) {
            $pt = $type->getLastReviewDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LAST_REVIEW_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastReviewDate((string)$attributes[self::FIELD_LAST_REVIEW_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PUBLISHER])) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PUBLISHER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublisher((string)$attributes[self::FIELD_PUBLISHER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ASSERTION])) {
            $pt = $type->getAssertion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ASSERTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAssertion((string)$attributes[self::FIELD_ASSERTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'Evidence', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->writeAttribute(self::FIELD_URL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_VERSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getVersion())) {
            $xw->writeAttribute(self::FIELD_VERSION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->writeAttribute(self::FIELD_TITLE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CITE_AS_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCiteAsMarkdown())) {
            $xw->writeAttribute(self::FIELD_CITE_AS_MARKDOWN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->writeAttribute(self::FIELD_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_APPROVAL_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getApprovalDate())) {
            $xw->writeAttribute(self::FIELD_APPROVAL_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_REVIEW_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLastReviewDate())) {
            $xw->writeAttribute(self::FIELD_LAST_REVIEW_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PUBLISHER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPublisher())) {
            $xw->writeAttribute(self::FIELD_PUBLISHER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ASSERTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAssertion())) {
            $xw->writeAttribute(self::FIELD_ASSERTION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_URL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUrl())) {
            $xw->startElement(self::FIELD_URL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_VERSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getVersion())) {
            $xw->startElement(self::FIELD_VERSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TITLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTitle())) {
            $xw->startElement(self::FIELD_TITLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCiteAsReference())) {
            $xw->startElement(self::FIELD_CITE_AS_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CITE_AS_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCiteAsMarkdown())) {
            $xw->startElement(self::FIELD_CITE_AS_MARKDOWN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->startElement(self::FIELD_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getUseContext() as $v) {
            $xw->startElement(self::FIELD_USE_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_APPROVAL_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getApprovalDate())) {
            $xw->startElement(self::FIELD_APPROVAL_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_REVIEW_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLastReviewDate())) {
            $xw->startElement(self::FIELD_LAST_REVIEW_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PUBLISHER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPublisher())) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContact() as $v) {
            $xw->startElement(self::FIELD_CONTACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAuthor() as $v) {
            $xw->startElement(self::FIELD_AUTHOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getEditor() as $v) {
            $xw->startElement(self::FIELD_EDITOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReviewer() as $v) {
            $xw->startElement(self::FIELD_REVIEWER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getEndorser() as $v) {
            $xw->startElement(self::FIELD_ENDORSER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRelatedArtifact() as $v) {
            $xw->startElement(self::FIELD_RELATED_ARTIFACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ASSERTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAssertion())) {
            $xw->startElement(self::FIELD_ASSERTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getVariableDefinition() as $v) {
            $xw->startElement(self::FIELD_VARIABLE_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSynthesisType())) {
            $xw->startElement(self::FIELD_SYNTHESIS_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStudyType())) {
            $xw->startElement(self::FIELD_STUDY_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getStatistic() as $v) {
            $xw->startElement(self::FIELD_STATISTIC);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCertainty() as $v) {
            $xw->startElement(self::FIELD_CERTAINTY);
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
        if (null !== ($v = $this->getUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_URL_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TITLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TITLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCiteAsReference())) {
            $out->{self::FIELD_CITE_AS_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getCiteAsMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CITE_AS_MARKDOWN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CITE_AS_MARKDOWN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPublicationStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $out->{self::FIELD_USE_CONTEXT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_USE_CONTEXT}[] = $v;
            }
        }
        if (null !== ($v = $this->getApprovalDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_APPROVAL_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_APPROVAL_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_REVIEW_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_REVIEW_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PUBLISHER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PUBLISHER_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $out->{self::FIELD_CONTACT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTACT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            $out->{self::FIELD_AUTHOR} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_AUTHOR}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getEditor())) {
            $out->{self::FIELD_EDITOR} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_EDITOR}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReviewer())) {
            $out->{self::FIELD_REVIEWER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REVIEWER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getEndorser())) {
            $out->{self::FIELD_ENDORSER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ENDORSER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelatedArtifact())) {
            $out->{self::FIELD_RELATED_ARTIFACT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RELATED_ARTIFACT}[] = $v;
            }
        }
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
        if (null !== ($v = $this->getAssertion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ASSERTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ASSERTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getVariableDefinition())) {
            $out->{self::FIELD_VARIABLE_DEFINITION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_VARIABLE_DEFINITION}[] = $v;
            }
        }
        if (null !== ($v = $this->getSynthesisType())) {
            $out->{self::FIELD_SYNTHESIS_TYPE} = $v;
        }
        if (null !== ($v = $this->getStudyType())) {
            $out->{self::FIELD_STUDY_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getStatistic())) {
            $out->{self::FIELD_STATISTIC} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_STATISTIC}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCertainty())) {
            $out->{self::FIELD_CERTAINTY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CERTAINTY}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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