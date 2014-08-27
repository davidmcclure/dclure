
/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

module.exports = {

  tags: {
    src: [
      'node_modules/jquery/dist/jquery.js',
      'node_modules/lodash/dist/lodash.js',
      'node_modules/sigma/build/sigma.min.js',
      'node_modules/sigma/build/plugins/sigma.layout.forceAtlas2.min.js',
      'node_modules/sigma/build/plugins/sigma.plugins.animate.min.js',
      'node_modules/sigma/build/plugins/sigma.plugins.dragNodes.min.js',
      'assets/javascripts/tags.js'
    ],
    dest: 'dist/tags.js'
  }

};
