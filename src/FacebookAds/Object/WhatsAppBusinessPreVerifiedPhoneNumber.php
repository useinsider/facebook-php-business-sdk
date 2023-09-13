<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\WhatsAppBusinessPreVerifiedPhoneNumberFields;
use FacebookAds\Object\Values\WhatsAppBusinessPreVerifiedPhoneNumberCodeVerificationStatusValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class WhatsAppBusinessPreVerifiedPhoneNumber extends AbstractCrudObject {

  /**
   * @return WhatsAppBusinessPreVerifiedPhoneNumberFields
   */
  public static function getFieldsEnum() {
    return WhatsAppBusinessPreVerifiedPhoneNumberFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['CodeVerificationStatus'] = WhatsAppBusinessPreVerifiedPhoneNumberCodeVerificationStatusValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function createRequestCode(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'code_method' => 'code_method_enum',
      'language' => 'Object',
    );
    $enums = array(
      'code_method_enum' => array(
        'SMS',
        'VOICE',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/request_code',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVerifyCode(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'code' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/verify_code',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/',
      new AbstractCrudObject(),
      'NODE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new WhatsAppBusinessPreVerifiedPhoneNumber(),
      'NODE',
      WhatsAppBusinessPreVerifiedPhoneNumber::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}