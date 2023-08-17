<?php

namespace Drupal\blog_api\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides list of blogs
 *
 * @RestResource(
 *   id = "blog_list",
 *   label = @Translation("Blog List"),
 *   uri_paths = {
 *     "canonical" = "/blogs/list"
 *   }
 * )
 */
class BlogsResource extends ResourceBase {

  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    $response = ['message' => 'Hello, this is a rest service'];
    return new ResourceResponse($response);
  }
}