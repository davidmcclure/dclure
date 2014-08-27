
/**
 * @copyright   2014 David McClure
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @package     dclure
 */

$(function() {

  var data = {

    // Register nodes.
    nodes: _.map(window._nodes, function(n) {
      return {
        id: n.term_id,
        radius: (Math.log(n.count)+1) * 10,
        label: n.name
      };
    }),

    // Register edges.
    edges: _.map(window._edges, function(e, i) {
      return {
        from: e[0],
        to: e[1],
        color: '#b8d7e9'
      };
    })

  };

  var network = new vis.Network($('#tags')[0], data, {

    nodes: {
      color: '#e6e6e6',
      shape: 'dot',
      fontFace: 'freight-sans-pro',
      fontSize: 24
    },

    physics: {
      springConstant: 0.2
    },

    stabilizationIterations: 250,
    stabilize: false

  });

});
