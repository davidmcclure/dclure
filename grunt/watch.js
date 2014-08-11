
/**
 * @copyright   2014 David McClure
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @package     dclure
 */

module.exports = {

  options: {
    livereload: true
  },

  dist: {
    files: ['assets/**/*', '**/*.php'],
    tasks: 'less'
  }

};
