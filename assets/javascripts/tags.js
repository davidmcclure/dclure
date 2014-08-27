
/**
 * @copyright   2014 David McClure
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @package     dclure
 */

$(function() {

  var s = new sigma('tags');

  // Register nodes.
  _.each(window._nodes, function(n) {
    s.graph.addNode({
      id: n.term_id,
      label: n.name,
      color: '#0067a2',
      size: 1
    });
  });

  // Register edges.
  _.each(window._edges, function(e, i) {
    s.graph.addEdge({
      id: 'e'+i,
      source: e[0],
      target: e[1]
    });
  });

  s.refresh();
  s.startForceAtlas2();

});
