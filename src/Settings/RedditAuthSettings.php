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
   * The data point to be collected.
   *
   * @var string
   */
  protected $scopes;
  /**
   * User Agent string.
   *
   * @var string
   */
  protected $userAgentString;

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
   * Gets the data Point defined the settings form page.
   *
   * @return string
   *   Comma-separated scopes.
   */
  public function getScopes() {
    if (!$this->scopes) {
      $this->scopes = $this->config->get('scopes');
    }
    return $this->scopes;
  }

  /**
   * Gets the User Agent string input in settings form page.
   *
   * @return string
   *   User agent string.
   */
  public function getUserAgentString() {
    if (!$this->user_agent_string) {
      $this->user_agent_string = $this->config->get('user_agent_string');
    }
    return $this->user_agent_string;
  }

}
