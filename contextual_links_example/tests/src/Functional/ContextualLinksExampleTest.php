<?php

namespace Drupal\Tests\contextual_links_example\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the behavior of the contextual links provided by the module.
 *
 * @ingroup contextual_links_example
 *
 * @group contextual_links_example
 * @group examples
 */
class ContextualLinksExampleTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['contextual', 'contextual_links_example'];

  /**
   * The installation profile to use with this test.
   *
   * This test class requires the "Tools" block.
   *
   * @var string
   */
  protected $profile = 'minimal';

  /**
   * Tests contextual_links_example functionality.
   */
  public function testContextualLinksExampleBasic() {
    $assert = $this->assertSession();

    // Create user.
    $web_user = $this->drupalCreateUser([
      'access contextual links',
      'bypass node access',
      'administer blocks',
    ]);
    // Login the admin user.
    $this->drupalLogin($web_user);

    // We check for a link to the contextual example in the Tools menu.
    $this->drupalGet('');
    $this->assertSession()->linkByHrefExists('examples/contextual-links');

    $this->drupalGet('examples/contextual-links');
    $this->assertSession()->statusCodeEquals(200);

    // Create a node and promote it to the front page. Then view the front page
    // and verify that the "Example action" contextual link works.
    $this->drupalCreateNode(['promote' => 1]);

    $this->drupalGet('');
    $assert->linkByHrefExists('/node/1/example-action?destination=node');
    $this->clickLink('Example Action');
    $assert->addressEquals('/node/1/example-action?destination=node');

    // Visit our example overview page and click the third contextual link.
    // This should take us to a page for editing the third object we defined.
    $this->drupalGet('');
    $this->clickLink('Contextual Links Example');
    $this->clickLink('Edit object', 2);
    $assert->addressEquals('/examples/contextual-links/3/edit?destination=examples/contextual-links');

    // Enable our module's block, go back to the front page, and click the
    // "Edit object" contextual link that we expect to be there.
    $this->drupalPlaceBlock('cleblock');
    $this->drupalGet('');
    $this->clickLink('Edit object');
    $assert->addressEquals('examples/contextual-links/42/edit?destination=examples/contextual-links/3/edit');
  }

}
