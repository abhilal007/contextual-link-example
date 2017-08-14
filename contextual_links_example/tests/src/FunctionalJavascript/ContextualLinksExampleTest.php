<?php

namespace Drupal\Tests\contextual_links_example\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\JavascriptTestBase;

/**
 * Tests the behavior of the contextual links provided by the module.
 *
 * @ingroup contextual_links_example
 *
 * @group contextual_links_example
 * @group examples
 */
class ContextualLinksExampleTest extends JavascriptTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'system',
    'contextual_links_example',
    'views',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Create and login an admin user.
    $this->drupalLogin($this->createUser([
      'administer blocks',
      'administer nodes',
      'access contextual links',
    ]));

    // Create a content type.
    $this->drupalCreateContentType(['type' => 'page']);

    // Create a node and promote it to the front page.
    $this->drupalCreateNode(['promote' => 1]);

    // Configure 'node' as front page.
    $this->config('system.site')->set('page.front', '/node')->save();

    // Place our custom block in sidebar first.
    $this->placeBlock('cleblock',
      [
        'visibility' => [
          'request_path' => [
            'id' => 'request_path',
            'pages' => '<front>',
            'negate' => FALSE,
            'context_mapping' => [],
          ],
        ],
      ]);
  }

  /**
   * Tests contextual_links_example functionality.
   */
  public function testContextualLinksExampleBasic() {
    $assert = $this->assertSession();

    $this->drupalGet('node');
    // Check the presence of contextual link "Edit object" on our block.
    $contextualLinks = $assert->waitForElement('css', '.contextual-links-exampleconfigure');
    $this->assertNotEmpty($contextualLinks);

    // Check the presence of contextual link "Example Action" on our node.
    $actionContextualLink = $assert->waitForElement('css', '.contextual-links-exampleexample-action');
    $this->assertNotEmpty($actionContextualLink);

    $this->drupalGet('examples/contextual-links');
    $assert->statusCodeEquals(200);

    // Visit our example overview page and check for presence of
    // "Edit Object" contextual links.
    $contextualLinks = $assert->waitForElement('css', '.contextual-links-exampleconfigure');
    $this->assertNotEmpty($contextualLinks);
  }

}
