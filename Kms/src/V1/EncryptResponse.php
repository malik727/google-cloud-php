<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [KeyManagementService.Encrypt][google.cloud.kms.v1.KeyManagementService.Encrypt].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.EncryptResponse</code>
 */
class EncryptResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in encryption. Check
     * this field to verify that the intended resource was used for encryption.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The encrypted data.
     *
     * Generated from protobuf field <code>bytes ciphertext = 2;</code>
     */
    private $ciphertext = '';
    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext]. An integrity check of
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] can be performed by computing the CRC32C
     * checksum of [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 4;</code>
     */
    private $ciphertext_crc32c = null;
    /**
     * Integrity verification field. A flag indicating whether
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used for the integrity verification of the
     * [plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]. A false value of this field
     * indicates either that [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] was left unset or
     * that it was not delivered to [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've set
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] but this field is still false, discard
     * the response and perform a limited number of retries.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>bool verified_plaintext_crc32c = 5;</code>
     */
    private $verified_plaintext_crc32c = false;
    /**
     * Integrity verification field. A flag indicating whether
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used for the integrity verification of the
     * [AAD][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]. A false value of this
     * field indicates either that
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] was left unset or
     * that it was not delivered to [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've set
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] but this field is
     * still false, discard the response and perform a limited number of retries.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>bool verified_additional_authenticated_data_crc32c = 6;</code>
     */
    private $verified_additional_authenticated_data_crc32c = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in encryption. Check
     *           this field to verify that the intended resource was used for encryption.
     *     @type string $ciphertext
     *           The encrypted data.
     *     @type \Google\Protobuf\Int64Value $ciphertext_crc32c
     *           Integrity verification field. A CRC32C checksum of the returned
     *           [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext]. An integrity check of
     *           [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] can be performed by computing the CRC32C
     *           checksum of [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] and comparing your results to
     *           this field. Discard the response in case of non-matching checksum values,
     *           and perform a limited number of retries. A persistent mismatch may indicate
     *           an issue in your computation of the CRC32C checksum.
     *           Note: This field is defined as int64 for reasons of compatibility across
     *           different languages. However, it is a non-negative integer, which will
     *           never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     *           that support this type.
     *           NOTE: This field is in Beta.
     *     @type bool $verified_plaintext_crc32c
     *           Integrity verification field. A flag indicating whether
     *           [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] was received by
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used for the integrity verification of the
     *           [plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]. A false value of this field
     *           indicates either that [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] was left unset or
     *           that it was not delivered to [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've set
     *           [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] but this field is still false, discard
     *           the response and perform a limited number of retries.
     *           NOTE: This field is in Beta.
     *     @type bool $verified_additional_authenticated_data_crc32c
     *           Integrity verification field. A flag indicating whether
     *           [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] was received by
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used for the integrity verification of the
     *           [AAD][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]. A false value of this
     *           field indicates either that
     *           [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] was left unset or
     *           that it was not delivered to [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've set
     *           [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] but this field is
     *           still false, discard the response and perform a limited number of retries.
     *           NOTE: This field is in Beta.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in encryption. Check
     * this field to verify that the intended resource was used for encryption.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in encryption. Check
     * this field to verify that the intended resource was used for encryption.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The encrypted data.
     *
     * Generated from protobuf field <code>bytes ciphertext = 2;</code>
     * @return string
     */
    public function getCiphertext()
    {
        return $this->ciphertext;
    }

    /**
     * The encrypted data.
     *
     * Generated from protobuf field <code>bytes ciphertext = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCiphertext($var)
    {
        GPBUtil::checkString($var, False);
        $this->ciphertext = $var;

        return $this;
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext]. An integrity check of
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] can be performed by computing the CRC32C
     * checksum of [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 4;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCiphertextCrc32C()
    {
        return isset($this->ciphertext_crc32c) ? $this->ciphertext_crc32c : null;
    }

    public function hasCiphertextCrc32C()
    {
        return isset($this->ciphertext_crc32c);
    }

    public function clearCiphertextCrc32C()
    {
        unset($this->ciphertext_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getCiphertextCrc32C()</code>

     * Integrity verification field. A CRC32C checksum of the returned
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext]. An integrity check of
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] can be performed by computing the CRC32C
     * checksum of [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 4;</code>
     * @return int|string|null
     */
    public function getCiphertextCrc32CValue()
    {
        return $this->readWrapperValue("ciphertext_crc32c");
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext]. An integrity check of
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] can be performed by computing the CRC32C
     * checksum of [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 4;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCiphertextCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->ciphertext_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Integrity verification field. A CRC32C checksum of the returned
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext]. An integrity check of
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] can be performed by computing the CRC32C
     * checksum of [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 4;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCiphertextCrc32CValue($var)
    {
        $this->writeWrapperValue("ciphertext_crc32c", $var);
        return $this;}

    /**
     * Integrity verification field. A flag indicating whether
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used for the integrity verification of the
     * [plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]. A false value of this field
     * indicates either that [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] was left unset or
     * that it was not delivered to [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've set
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] but this field is still false, discard
     * the response and perform a limited number of retries.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>bool verified_plaintext_crc32c = 5;</code>
     * @return bool
     */
    public function getVerifiedPlaintextCrc32C()
    {
        return $this->verified_plaintext_crc32c;
    }

    /**
     * Integrity verification field. A flag indicating whether
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used for the integrity verification of the
     * [plaintext][google.cloud.kms.v1.EncryptRequest.plaintext]. A false value of this field
     * indicates either that [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] was left unset or
     * that it was not delivered to [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've set
     * [EncryptRequest.plaintext_crc32c][google.cloud.kms.v1.EncryptRequest.plaintext_crc32c] but this field is still false, discard
     * the response and perform a limited number of retries.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>bool verified_plaintext_crc32c = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerifiedPlaintextCrc32C($var)
    {
        GPBUtil::checkBool($var);
        $this->verified_plaintext_crc32c = $var;

        return $this;
    }

    /**
     * Integrity verification field. A flag indicating whether
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used for the integrity verification of the
     * [AAD][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]. A false value of this
     * field indicates either that
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] was left unset or
     * that it was not delivered to [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've set
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] but this field is
     * still false, discard the response and perform a limited number of retries.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>bool verified_additional_authenticated_data_crc32c = 6;</code>
     * @return bool
     */
    public function getVerifiedAdditionalAuthenticatedDataCrc32C()
    {
        return $this->verified_additional_authenticated_data_crc32c;
    }

    /**
     * Integrity verification field. A flag indicating whether
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] was received by
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] and used for the integrity verification of the
     * [AAD][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data]. A false value of this
     * field indicates either that
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] was left unset or
     * that it was not delivered to [KeyManagementService][google.cloud.kms.v1.KeyManagementService]. If you've set
     * [EncryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data_crc32c] but this field is
     * still false, discard the response and perform a limited number of retries.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>bool verified_additional_authenticated_data_crc32c = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerifiedAdditionalAuthenticatedDataCrc32C($var)
    {
        GPBUtil::checkBool($var);
        $this->verified_additional_authenticated_data_crc32c = $var;

        return $this;
    }

}

