<?php

namespace Drupal\social_auth_reddit\Settings;

use Drupal\social_api\Settings\SettingsBase;

/**
 * Defines methods to get Social Auth Reddit settings.
 */
class RedditAuthSettings extends SettingsBase implements RedditAuthSettingsInterface {
  /**
   * Client ID.
   *
   * @var string
   */
  protected $clientId;
  /**
   * Client secret.
   *
   * @var string
   */
  protected $clientSecret;
  /**
   * Restricted domain.
   *
   * @var string
   */
  protected $restrictedDomain;

  /**
   * {@inheritdoc}
   */
  public function getClientId() {
    if (!$this->clientId) {
      $this->clientId = $this->config->get('client_id');
    }
    return $this->clientId;
  }

  /**
   * {@inheritdoc}
   */
  public function getClientSecret() {
    if (!$this->clientSecret) {
      $this->clientSecret = $this->config->get('client_secret');
    }
    return $this->clientSecret;
  }

  /**
   * {@inheritdoc}
   */
  public function getRestrictedDomain() {
    if (!$this->restrictedDomain) {
      $this->restrictedDomain = $this->config->get('restricted_domain');
    }
    return $this->restrictedDomain;
  }

}
