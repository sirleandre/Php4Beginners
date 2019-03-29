/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Module: TYPO3/CMS/Backend/PageTree/PageTreeDragDrop
 *
 * Provides drag&drop related functionality for the SVG page tree
 */
define([
    'jquery',
    'd3',
    'TYPO3/CMS/Backend/Modal',
    'TYPO3/CMS/Backend/Severity',
  ], function ($, d3, Modal, Severity) {
  'use strict';

  /**
   * PageTreeDragDrop class
   *
   * @constructor
   * @exports TYPO3/CMS/Backend/PageTree/PageTreeDragDrop
   */
  var PageTreeDragDrop;
  PageTreeDragDrop = {

    /**
     * SVG <g> container for deleting drop zone
     *
     * @type {Selection}
     */
    dropZoneDelete: null,

    init: function (svgTree) {
      this.tree = svgTree;
    },

    /**
     * Drag and drop for nodes
     *
     * Returns initialized d3.drag() function
     */
    drag: function () {
      var self = {};
      var _this = this;
      var tree = _this.tree;

      /**
       * Returns deleting drop zone open 'transform' attribute value
       *
       * @param node
       * @returns {string}
       */
      self.getDropZoneOpenTransform = function (node) {
        var svgWidth = parseFloat(tree.svg.style('width')) || 300;

        return 'translate(' + (svgWidth - 58 - node.x) + ', -10)';
      };

      /**
       * Returns deleting drop zone close 'transform' attribute value
       *
       * @param node
       * @returns {string}
       */
      self.getDropZoneCloseTransform = function (node) {
        var svgWidth = parseFloat(tree.svg.style('width')) || 300;

        return 'translate(' + (svgWidth - node.x) + ', -10)';
      };

      self.dragStart = function (node) {
        if (tree.settings.isDragAnDrop !== true || node.depth === 0) {
          return false;
        }

        self.isDragging = false;

        _this.dropZoneDelete = null;

        if ((!tree.settings.allowRecursiveDelete && !node.hasChildren) ||
          tree.settings.allowRecursiveDelete
        ) {
          _this.dropZoneDelete = tree.nodesContainer
            .select('.node[data-state-id="' + node.stateIdentifier + '"]')
            .append('g')
            .attr('class', 'nodes-drop-zone')
            .attr('height', tree.settings.nodeHeight);

          tree.nodeIsOverDelete = false;

          _this.dropZoneDelete.append('rect')
            .attr('height', tree.settings.nodeHeight)
            .attr('width', '50px')
            .attr('x', 0)
            .attr('y', 0)
            .on('mouseover', function () {
              tree.nodeIsOverDelete = true;
            })
            .on('mouseout', function () {
              tree.nodeIsOverDelete = false;
            });

          _this.dropZoneDelete.append('text')
            .text(TYPO3.lang.deleteItem)
            .attr('dx', 5)
            .attr('dy', 15);

          _this.dropZoneDelete
            .attr('transform', self.getDropZoneCloseTransform(node));
        }

        $.extend(self, _this.setDragStart());
      };

      self.dragDragged = function (node) {
        if (_this.isDragNodeDistanceMore(self, 10)) {
          self.startDrag = true;
        } else {
          return false;
        }

        if (tree.settings.isDragAnDrop !== true || node.depth === 0) {
          return false;
        }

        self.isDragging = true;
        tree.settings.nodeDrag = node;

        var $svg = $(this).closest('svg');
        var $nodesBg = $svg.find('.nodes-bg');
        var $nodesWrap = $svg.find('.nodes-wrapper');
        var $nodeBg = $nodesBg.find('.node-bg[data-state-id=' + node.stateIdentifier + ']');
        var $nodeDd = $svg.siblings('.node-dd');

        if ($nodeBg.length && (!node.isDragged)) {
          tree.settings.dragging = true;
          node.isDragged = true;

          $svg.after(_this.template(tree.getIconId(node), node.name));
          $nodeBg.addClass('node-bg--dragging');

          $svg
            .find('.nodes-wrapper')
            .addClass('nodes-wrapper--dragging');
        }

        var left = 18;
        var top = 15;

        if (d3.event.sourceEvent && d3.event.sourceEvent.pageX) {
          left += d3.event.sourceEvent.pageX;
        }

        if (d3.event.sourceEvent && d3.event.sourceEvent.pageY) {
          top += d3.event.sourceEvent.pageY;
        }

        $(document).find('.node-dd').css({
          left: left,
          top: top,
          display: 'block',
        });

        tree.settings.nodeDragPosition = false;

        if (node.isOver
          || (tree.settings.nodeOver.node && tree.settings.nodeOver.node.parentsUid.indexOf(node.stateIdentifier) !== -1)
          || !tree.isOverSvg) {

          _this.addNodeDdClass({ $nodeDd: $nodeDd, $nodesWrap: $nodesWrap, className: 'nodrop' });

          if (!tree.isOverSvg) {
            _this.tree.nodesBgContainer
              .selectAll('.node-bg__border')
              .style('display', 'none');
          }

          if (_this.dropZoneDelete && _this.dropZoneDelete.attr('data-open') !== 'true' && tree.isOverSvg) {
            _this.dropZoneDelete
              .transition(300)
              .attr('transform', self.getDropZoneOpenTransform(node))
              .attr('data-open', 'true');
          }
        } else if (!tree.settings.nodeOver.node) {
          _this.addNodeDdClass({ $nodeDd: $nodeDd, $nodesWrap: $nodesWrap, className: 'nodrop' });
          _this.tree.nodesBgContainer
            .selectAll('.node-bg__border')
            .style('display', 'none');
        } else {
          if (_this.dropZoneDelete && _this.dropZoneDelete.attr('data-open') !== 'false') {
            _this.dropZoneDelete
              .transition(300)
              .attr('transform', self.getDropZoneCloseTransform(node))
              .attr('data-open', 'false');
          }

          _this.changeNodeClasses();
        }
      };

      self.dragEnd = function (node) {
        _this.setDragEnd();

        if (!self.startDrag || tree.settings.isDragAnDrop !== true || node.depth === 0) {
          return false;
        }

        if (_this.dropZoneDelete) {
          _this.dropZoneDelete
            .transition(300)
            .attr('transform', self.getDropZoneCloseTransform(node))
            .remove();
        }

        var $svg = $(this).closest('svg');
        var $nodesBg = $svg.find('.nodes-bg');
        var droppedNode = tree.settings.nodeOver.node;

        node.isDragged = false;

        _this.addNodeDdClass({
          $nodesWrap: $svg.find('.nodes-wrapper'),
          className: '',
          rmClass: 'dragging',
          setCanNodeDrag: false,
        });

        $nodesBg
          .find('.node-bg.node-bg--dragging')
          .removeClass('node-bg--dragging');

        $svg
          .siblings('.node-dd')
          .remove();

        tree
          .nodesBgContainer
          .selectAll('.node-bg__border')
          .style('display', 'none');

        if (
          !(node.isOver
            || (tree.settings.nodeOver.node && tree.settings.nodeOver.node.parentsUid.indexOf(node.stateIdentifier) !== -1)
            || !tree.settings.canNodeDrag
            || !tree.isOverSvg
          )
        ) {
          var options = _this.changeNodePosition({ droppedNode: droppedNode });

          var modalText = options.position === 'in' ? TYPO3.lang['mess.move_into'] : TYPO3.lang['mess.move_after'];
          modalText = modalText.replace('%s', options.node.name).replace('%s', options.target.name);

          Modal.confirm(
            TYPO3.lang.move_page,
            modalText,
            Severity.warning, [
              {
                text: $(this).data('button-close-text') || TYPO3.lang['labels.cancel'] || 'Cancel',
                active: true,
                btnClass: 'btn-default',
                name: 'cancel',
              },
              {
                text: $(this).data('button-ok-text') || TYPO3.lang['cm.copy'] || 'Copy',
                btnClass: 'btn-warning',
                name: 'copy',
              },
              {
                text: $(this).data('button-ok-text') || TYPO3.lang['button.move'] || 'Move',
                btnClass: 'btn-warning',
                name: 'move',
              },
            ])
            .on('button.clicked', function (e) {
              if (e.target.name === 'move') {
                options.command = 'move';
                tree.sendChangeCommand(options);
              } else if (e.target.name === 'copy') {
                options.command = 'copy';
                tree.sendChangeCommand(options);
              }

              Modal.dismiss();
            });
        } else if (tree.nodeIsOverDelete) {
          var options = _this.changeNodePosition({ droppedNode: droppedNode, command: 'delete' });
          if (tree.settings.displayDeleteConfirmation) {
            var $modal = Modal.confirm(
              TYPO3.lang.deleteItem,
              TYPO3.lang['mess.delete'].replace('%s', options.node.name),
              Severity.warning, [
                {
                  text: $(this).data('button-close-text') || TYPO3.lang['labels.cancel'] || 'Cancel',
                  active: true,
                  btnClass: 'btn-default',
                  name: 'cancel',
                },
                {
                  text: $(this).data('button-ok-text') || TYPO3.lang['cm.delete'] || 'Delete',
                  btnClass: 'btn-warning',
                  name: 'delete',
                },
              ]);

            $modal.on('button.clicked', function (e) {
              if (e.target.name === 'delete') {

                tree.sendChangeCommand(options);
              }

              Modal.dismiss();
            });
          } else {
            tree.sendChangeCommand(options);
          }
        }
      };

      return d3.drag()
        .on('start', self.dragStart)
        .on('drag', self.dragDragged)
        .on('end', self.dragEnd);
    },

    changeNodeClasses: function () {
      var elementNodeBg = this.tree.svg.select('.node-over');
      var $svg = $(this.tree.svg.node());
      var $nodesWrap = $svg.find('.nodes-wrapper');
      var $nodeDd = $svg.siblings('.node-dd');
      var nodeBgBorder = this.tree.nodesBgContainer.selectAll('.node-bg__border');

      if (elementNodeBg.size() && this.tree.isOverSvg) {
        //line between nodes
        if (nodeBgBorder.empty()) {
          nodeBgBorder = this.tree.nodesBgContainer
            .append('rect')
            .attr('class', 'node-bg__border')
            .attr('height', '1px')
            .attr('width', '100%');
        }

        var coordinates = d3.mouse(elementNodeBg.node());
        var y = coordinates[1];

        if (y < 3) {
          nodeBgBorder
            .attr('transform', 'translate(-8, ' + (this.tree.settings.nodeOver.node.y - 10) + ')')
            .style('display', 'block');

          if (this.tree.settings.nodeOver.node.depth === 0) {
            this.addNodeDdClass({
              $nodeDd: $nodeDd,
              $nodesWrap: $nodesWrap,
              className: 'nodrop',
            });
          } else if (this.tree.settings.nodeOver.node.firstChild) {
            this.addNodeDdClass({
              $nodeDd: $nodeDd,
              $nodesWrap: $nodesWrap,
              className: 'ok-above',
            });
          } else {
            this.addNodeDdClass({
              $nodeDd: $nodeDd,
              $nodesWrap: $nodesWrap,
              className: 'ok-between',
            });
          }

          this.tree.settings.nodeDragPosition = 'before';
        } else if (y > 17) {
          nodeBgBorder
            .style('display', 'none');

          if (this.tree.settings.nodeOver.node.open && this.tree.settings.nodeOver.node.hasChildren) {
            this.addNodeDdClass({
              $nodeDd: $nodeDd,
              $nodesWrap: $nodesWrap,
              className: 'ok-append',
            });
            this.tree.settings.nodeDragPosition = 'in';
          } else {
            nodeBgBorder
              .attr('transform', 'translate(-8, ' + (this.tree.settings.nodeOver.node.y + 10) + ')')
              .style('display', 'block');

            if (this.tree.settings.nodeOver.node.lastChild) {
              this.addNodeDdClass({
                $nodeDd: $nodeDd,
                $nodesWrap: $nodesWrap,
                className: 'ok-below',
              });

            } else {
              this.addNodeDdClass({
                $nodeDd: $nodeDd,
                $nodesWrap: $nodesWrap,
                className: 'ok-between',
              });
            }

            this.tree.settings.nodeDragPosition = 'after';
          }
        } else {
          nodeBgBorder
            .style('display', 'none');

          this.addNodeDdClass({
            $nodeDd: $nodeDd,
            $nodesWrap: $nodesWrap,
            className: 'ok-append',
          });
          this.tree.settings.nodeDragPosition = 'in';
        }
      } else {
        this.tree.nodesBgContainer
          .selectAll('.node-bg__border')
          .style('display', 'none');

        this.addNodeDdClass({
          $nodeDd: $nodeDd,
          $nodesWrap: $nodesWrap,
          className: 'nodrop',
        });
      }
    },

    addNodeDdClass: function (options) {
      var clearClass = ' #prefix#--nodrop #prefix#--ok-append #prefix#--ok-below #prefix#--ok-between #prefix#--ok-above';
      var rmClass = '';
      var addClass = '';

      if (options.$nodeDd) {
        rmClass = (options.rmClass ? ' node-dd--' + options.rmClass : '');
        addClass = (options.className ? 'node-dd--' + options.className : '');

        options.$nodeDd
          .removeClass(clearClass.replace(new RegExp('#prefix#', 'g'), 'node-dd') + rmClass)
          .addClass(addClass);
      }

      if (options.$nodesWrap) {
        rmClass = (options.rmClass ? ' nodes-wrapper--' + options.rmClass : '');
        addClass = (options.className ? 'nodes-wrapper--' + options.className : '');

        options.$nodesWrap
          .removeClass(clearClass.replace(new RegExp('#prefix#', 'g'), 'nodes-wrapper') + rmClass)
          .addClass(addClass);
      }

      if ((typeof options.setCanNodeDrag === 'undefined') || options.setCanNodeDrag) {
        this.tree.settings.canNodeDrag = !(options.className === 'nodrop');
      }
    },

    /**
     * Check if node is dragged at least @distance
     *
     * @param {Object} data
     * @param {Integer} distance
     * @returns {boolean}
     */
    isDragNodeDistanceMore: function (data, distance) {
      return (data.startDrag ||
         (((data.startPageX - distance) > d3.event.sourceEvent.pageX) ||
          ((data.startPageX + distance) < d3.event.sourceEvent.pageX) ||
          ((data.startPageY - distance) > d3.event.sourceEvent.pageY) ||
          ((data.startPageY + distance) < d3.event.sourceEvent.pageY)));
    },

    /**
     * Sets the same parameters on start for method drag() and dragToolbar()
     *
     * @returns {{startPageX, startPageY, startDrag: boolean}}
     */
    setDragStart: function () {
      $('body iframe').css({ 'pointer-events': 'none' });

      return {
        startPageX: d3.event.sourceEvent.pageX,
        startPageY: d3.event.sourceEvent.pageY,
        startDrag: false,
      };
    },

    /**
     * Sets the same parameters on end for method drag() and dragToolbar()
     */
    setDragEnd: function () {
      $('body iframe').css({ 'pointer-events': '' });
    },

    /**
     * Drag and drop for toolbar new elements
     *
     * Returns method from d3js
     */
    dragToolbar: function () {
      var self = {};
      var _this = this;
      var tree = _this.tree;

      self.dragStart = function () {
        self.id = $(this).data('node-type');
        self.name = $(this).attr('title');
        self.tooltip = $(this).attr('tooltip');
        self.icon = $(this).data('tree-icon');
        self.isDragged = false;
        $.extend(self, _this.setDragStart());
      };

      self.dragDragged = function () {
        if (_this.isDragNodeDistanceMore(self, 10)) {
          self.startDrag = true;
        } else {
          return;
        }

        var $svg = $(_this.tree.svg.node());

        if (self.isDragged === false) {
          _this.tree.settings.dragging = true;
          self.isDragged = true;

          $svg.after(_this.template('#icon-' + self.icon, self.name));

          $svg
            .find('.nodes-wrapper')
            .addClass('nodes-wrapper--dragging');
        }

        var left = 18;
        var top = 15;

        if (d3.event.sourceEvent && d3.event.sourceEvent.pageX) {
          left += d3.event.sourceEvent.pageX;
        }

        if (d3.event.sourceEvent && d3.event.sourceEvent.pageY) {
          top += d3.event.sourceEvent.pageY;
        }

        $(document).find('.node-dd').css({
          left: left,
          top: top,
          display: 'block',
        });

        _this.changeNodeClasses();
      };

      self.dragEnd = function () {
        _this.setDragEnd();

        if (!self.startDrag) {
          return;
        }

        var $svg = $(_this.tree.svg.node());
        var $nodesBg = $svg.find('.nodes-bg');

        $svg
          .siblings('.node-dd')
          .remove();
        $svg
          .find('.nodes-wrapper')
          .removeClass('nodes-wrapper--dragging');

        self.isDragged = false;
        _this.tree.settings.dragging = false;

        _this.addNodeDdClass({
          $nodesWrap: $svg.find('.nodes-wrapper'),
          className: '',
          rmClass: 'dragging',
          setCanNodeDrag: false,
        });

        $nodesBg
          .find('.node-bg.node-bg--dragging')
          .removeClass('node-bg--dragging');

        $svg
          .siblings('.node-dd')
          .remove();

        _this
          .tree
          .nodesBgContainer
          .selectAll('.node-bg__border')
          .style('display', 'none');

        if (_this.tree.settings.isDragAnDrop !== true || !_this.tree.settings.nodeOver.node || !_this.tree.isOverSvg) {
          return false;
        }

        if (_this.tree.settings.canNodeDrag) {
          var data = {
            type: self.id,
            name: self.name,
            tooltip: self.tooltip,
            icon: self.icon,
            position: _this.tree.settings.nodeDragPosition,
            command: 'new',
            target: _this.tree.settings.nodeOver.node,
          };

          _this.addNewNode(data);
        }
      };

      return d3.drag()
        .on('start', self.dragStart)
        .on('drag', self.dragDragged)
        .on('end', self.dragEnd);
    },

    changeNodePosition: function (options) {
      var _this = this;
      var tree = _this.tree;
      var nodes = tree.nodes;
      var uid = tree.settings.nodeDrag.identifier;
      var index = nodes.indexOf(options.droppedNode);
      var position = tree.settings.nodeDragPosition;
      var target = tree.settings.nodeDrag;

      if (options.droppedNode) {
        target = options.droppedNode;
      }

      if ((uid === target.identifier) && options.command !== 'delete') {
        return;
      }

      tree.nodes.indexOf(tree.settings.nodeOver.node);

      if (position === 'before') {
        var positionAndTarget = this.setNodePositionAndTarget(tree.settings.nodeDrag.depth, index);
        position = positionAndTarget[0];
        target = positionAndTarget[1];
      }

      var data = {
        node: tree.settings.nodeDrag,
        uid: uid, //dragged node id
        target: target, //hovered node
        position: position, //before, in, after
        command: options.command, //element is copied or moved
      };

      $.extend(data, options);

      return data;
    },

    /**
     * Returns Array of position and target node
     *
     * @param {Integer} nodeDepth
     * @param {Integer} index
     * @returns {Array} [position, target]
     */
    setNodePositionAndTarget: function (nodeDepth, index) {
      if (index > 0) {
        index--;
      }

      var target = this.tree.nodes[index];

      if (this.tree.nodes[index].depth === nodeDepth) {
        return ['after', target];
      } else if (this.tree.nodes[index].depth < nodeDepth) {
        return ['in', target];
      } else {
        for (var i = index; i >= 0; i--) {
          if (this.tree.nodes[i].depth === nodeDepth) {
            return ['after', this.tree.nodes[i]];
          } else if (this.tree.nodes[i].depth < nodeDepth) {
            return ['in', this.tree.nodes[i]];
          }
        }
      }
    },

    /**
     * Add new node
     *
     * @type {Object} options
     */
    addNewNode: function (options) {
      var _this = this;
      var target = options.target;
      var index = _this.tree.nodes.indexOf(target);
      var newNode = {};
      var removeNode = function (newNode) {
        _this.tree.nodes.splice(_this.tree.nodes.indexOf(newNode), 1);
        _this.tree.setParametersNode(_this.tree.nodes);
        _this.tree.prepareDataForVisibleNodes();
        _this.tree.update();
        _this.tree.removeEditedText();
      };

      newNode.command = 'new';
      newNode.type = options.type;
      newNode.identifier = -1;
      newNode.target = target;
      newNode.parents = target.parents;
      newNode.parentsUid = target.parentsUid;
      newNode.depth =  target.depth;
      newNode.position =  options.position;
      newNode.name = (typeof options.title !== 'undefined') ? options.title : TYPO3.lang['tree.defaultPageTitle'];

      if (options.position === 'in') {
        newNode.depth++;
        _this.tree.nodes[index].open = true;
        _this.tree.nodes[index].hasChildren = true;
      }

      if (options.position === 'in' || options.position === 'after') {
        index++;
      }

      if (options.icon) {
        newNode.icon = options.icon;
      }

      if (newNode.position === 'before') {
        var positionAndTarget = this.setNodePositionAndTarget(this.tree.nodes[index].depth, index);
        newNode.position = positionAndTarget[0];
        newNode.target = positionAndTarget[1];
      }

      _this.tree.nodes.splice(index, 0, newNode);
      _this.tree.setParametersNode(_this.tree.nodes);
      _this.tree.prepareDataForVisibleNodes();
      _this.tree.update();

      _this.tree.removeEditedText();
      _this.tree.nodeIsEdit = true;

      d3.select(_this.tree.svg.node().parentNode)
        .append('input')
        .attr('class', 'node-edit')
        .style('top', function () {
          var top = newNode.y + 15; //svg margin top
          return top + 'px';
        })
        .style('left', (newNode.x + _this.tree.textPosition + 5) + 'px')
        .style('width', _this.tree.settings.width - (newNode.x + _this.tree.textPosition + 20) + 'px')
        .style('height', _this.tree.settings.nodeHeight + 'px')
        .attr('text', 'text')
        .attr('value', newNode.name)
        .on('keydown', function () {
          var code = d3.event.keyCode;

          if (code === 13 || code === 9) { //enter || tab
            _this.tree.nodeIsEdit = false;
            var newName = this.value.trim();

            if (newName.length) {
              newNode.name = newName;
              _this.tree.removeEditedText();
              _this.tree.sendChangeCommand(newNode);
            } else {
              removeNode(newNode);
            }
          } else if (code === 27) { //esc
            _this.tree.nodeIsEdit = false;
            removeNode(newNode);
          }
        })
        .on('blur', function () {
          if (_this.tree.nodeIsEdit && (_this.tree.nodes.indexOf(newNode) > -1)) {
            var newName = this.value.trim();

            if (newName.length) {
              newNode.name = newName;
              _this.tree.removeEditedText();
              _this.tree.sendChangeCommand(newNode);
            } else {
              removeNode(newNode);
            }
          }
        })
        .node()
        .select();
    },

    /**
     * Returns template for dragged node
     *
     * @returns {String}
     */
    template: function (icon, name) {
      return '<div class="node-dd node-dd--nodrop">' +
          '<div class="node-dd__ctrl-icon">' +
          '</div>' +
            '<div class="node-dd__text">' +
              '<span class="node-dd__icon">' +
                '<svg aria-hidden="true" width="16px" height="16px"><use xlink:href="' + icon + '"/></svg>' +
              '</span>' +
              '<span class="node-dd__name">' + name + '</span>' +
          '</div>' +
        '</div>';
    },
  };

  return PageTreeDragDrop;
});
