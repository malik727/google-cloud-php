<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateStoredInfoType.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CreateStoredInfoTypeRequest</code>
 */
class CreateStoredInfoTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Configuration of the storedInfoType to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 2;</code>
     */
    private $config = null;
    /**
     * The storedInfoType ID can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\\d-_]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string stored_info_type_id = 3;</code>
     */
    private $stored_info_type_id = '';
    /**
     * The geographic location to store the stored infoType. Reserved for
     * future extensions.
     *
     * Generated from protobuf field <code>string location_id = 4;</code>
     */
    private $location_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name, for example projects/my-project-id or
     *           organizations/my-org-id.
     *     @type \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $config
     *           Configuration of the storedInfoType to create.
     *     @type string $stored_info_type_id
     *           The storedInfoType ID can contain uppercase and lowercase letters,
     *           numbers, and hyphens; that is, it must match the regular
     *           expression: `[a-zA-Z\\d-_]+`. The maximum length is 100
     *           characters. Can be empty to allow the system to generate one.
     *     @type string $location_id
     *           The geographic location to store the stored infoType. Reserved for
     *           future extensions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Configuration of the storedInfoType to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 2;</code>
     * @return \Google\Cloud\Dlp\V2\StoredInfoTypeConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Configuration of the storedInfoType to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 2;</code>
     * @param \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\StoredInfoTypeConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * The storedInfoType ID can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\\d-_]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string stored_info_type_id = 3;</code>
     * @return string
     */
    public function getStoredInfoTypeId()
    {
        return $this->stored_info_type_id;
    }

    /**
     * The storedInfoType ID can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\\d-_]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string stored_info_type_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStoredInfoTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stored_info_type_id = $var;

        return $this;
    }

    /**
     * The geographic location to store the stored infoType. Reserved for
     * future extensions.
     *
     * Generated from protobuf field <code>string location_id = 4;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * The geographic location to store the stored infoType. Reserved for
     * future extensions.
     *
     * Generated from protobuf field <code>string location_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}

