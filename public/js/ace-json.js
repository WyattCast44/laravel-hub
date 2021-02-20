/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/webpack/buildin/module.js":
/*!***********************************!*\
  !*** (webpack)/buildin/module.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = function(module) {
	if (!module.webpackPolyfill) {
		module.deprecate = function() {};
		module.paths = [];
		// module.parent = undefined by default
		if (!module.children) module.children = [];
		Object.defineProperty(module, "loaded", {
			enumerable: true,
			get: function() {
				return module.l;
			}
		});
		Object.defineProperty(module, "id", {
			enumerable: true,
			get: function() {
				return module.i;
			}
		});
		module.webpackPolyfill = 1;
	}
	return module;
};


/***/ }),

/***/ "./resources/js/ace-json.js":
/*!**********************************!*\
  !*** ./resources/js/ace-json.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(module) {function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

ace.define("ace/mode/json_highlight_rules", ["require", "exports", "module", "ace/lib/oop", "ace/mode/text_highlight_rules"], function (require, exports, module) {
  "use strict";

  var oop = require("../lib/oop");

  var TextHighlightRules = require("./text_highlight_rules").TextHighlightRules;

  var JsonHighlightRules = function JsonHighlightRules() {
    this.$rules = {
      "start": [{
        token: "variable",
        // single line
        regex: '["](?:(?:\\\\.)|(?:[^"\\\\]))*?["]\\s*(?=:)'
      }, {
        token: "string",
        // single line
        regex: '"',
        next: "string"
      }, {
        token: "constant.numeric",
        // hex
        regex: "0[xX][0-9a-fA-F]+\\b"
      }, {
        token: "constant.numeric",
        // float
        regex: "[+-]?\\d+(?:(?:\\.\\d*)?(?:[eE][+-]?\\d+)?)?\\b"
      }, {
        token: "constant.language.boolean",
        regex: "(?:true|false)\\b"
      }, {
        token: "text",
        // single quoted strings are not allowed
        regex: "['](?:(?:\\\\.)|(?:[^'\\\\]))*?[']"
      }, {
        token: "comment",
        // comments are not allowed, but who cares?
        regex: "\\/\\/.*$"
      }, {
        token: "comment.start",
        // comments are not allowed, but who cares?
        regex: "\\/\\*",
        next: "comment"
      }, {
        token: "paren.lparen",
        regex: "[[({]"
      }, {
        token: "paren.rparen",
        regex: "[\\])}]"
      }, {
        token: "text",
        regex: "\\s+"
      }],
      "string": [{
        token: "constant.language.escape",
        regex: /\\(?:x[0-9a-fA-F]{2}|u[0-9a-fA-F]{4}|["\\\/bfnrt])/
      }, {
        token: "string",
        regex: '"|$',
        next: "start"
      }, {
        defaultToken: "string"
      }],
      "comment": [{
        token: "comment.end",
        // comments are not allowed, but who cares?
        regex: "\\*\\/",
        next: "start"
      }, {
        defaultToken: "comment"
      }]
    };
  };

  oop.inherits(JsonHighlightRules, TextHighlightRules);
  exports.JsonHighlightRules = JsonHighlightRules;
});
ace.define("ace/mode/matching_brace_outdent", ["require", "exports", "module", "ace/range"], function (require, exports, module) {
  "use strict";

  var Range = require("../range").Range;

  var MatchingBraceOutdent = function MatchingBraceOutdent() {};

  (function () {
    this.checkOutdent = function (line, input) {
      if (!/^\s+$/.test(line)) return false;
      return /^\s*\}/.test(input);
    };

    this.autoOutdent = function (doc, row) {
      var line = doc.getLine(row);
      var match = line.match(/^(\s*\})/);
      if (!match) return 0;
      var column = match[1].length;
      var openBracePos = doc.findMatchingBracket({
        row: row,
        column: column
      });
      if (!openBracePos || openBracePos.row == row) return 0;
      var indent = this.$getIndent(doc.getLine(openBracePos.row));
      doc.replace(new Range(row, 0, row, column - 1), indent);
    };

    this.$getIndent = function (line) {
      return line.match(/^\s*/)[0];
    };
  }).call(MatchingBraceOutdent.prototype);
  exports.MatchingBraceOutdent = MatchingBraceOutdent;
});
ace.define("ace/mode/folding/cstyle", ["require", "exports", "module", "ace/lib/oop", "ace/range", "ace/mode/folding/fold_mode"], function (require, exports, module) {
  "use strict";

  var oop = require("../../lib/oop");

  var Range = require("../../range").Range;

  var BaseFoldMode = require("./fold_mode").FoldMode;

  var FoldMode = exports.FoldMode = function (commentRegex) {
    if (commentRegex) {
      this.foldingStartMarker = new RegExp(this.foldingStartMarker.source.replace(/\|[^|]*?$/, "|" + commentRegex.start));
      this.foldingStopMarker = new RegExp(this.foldingStopMarker.source.replace(/\|[^|]*?$/, "|" + commentRegex.end));
    }
  };

  oop.inherits(FoldMode, BaseFoldMode);
  (function () {
    this.foldingStartMarker = /([\{\[\(])[^\}\]\)]*$|^\s*(\/\*)/;
    this.foldingStopMarker = /^[^\[\{\(]*([\}\]\)])|^[\s\*]*(\*\/)/;
    this.singleLineBlockCommentRe = /^\s*(\/\*).*\*\/\s*$/;
    this.tripleStarBlockCommentRe = /^\s*(\/\*\*\*).*\*\/\s*$/;
    this.startRegionRe = /^\s*(\/\*|\/\/)#?region\b/;
    this._getFoldWidgetBase = this.getFoldWidget;

    this.getFoldWidget = function (session, foldStyle, row) {
      var line = session.getLine(row);

      if (this.singleLineBlockCommentRe.test(line)) {
        if (!this.startRegionRe.test(line) && !this.tripleStarBlockCommentRe.test(line)) return "";
      }

      var fw = this._getFoldWidgetBase(session, foldStyle, row);

      if (!fw && this.startRegionRe.test(line)) return "start"; // lineCommentRegionStart

      return fw;
    };

    this.getFoldWidgetRange = function (session, foldStyle, row, forceMultiline) {
      var line = session.getLine(row);
      if (this.startRegionRe.test(line)) return this.getCommentRegionBlock(session, line, row);
      var match = line.match(this.foldingStartMarker);

      if (match) {
        var i = match.index;
        if (match[1]) return this.openingBracketBlock(session, match[1], row, i);
        var range = session.getCommentFoldRange(row, i + match[0].length, 1);

        if (range && !range.isMultiLine()) {
          if (forceMultiline) {
            range = this.getSectionRange(session, row);
          } else if (foldStyle != "all") range = null;
        }

        return range;
      }

      if (foldStyle === "markbegin") return;
      var match = line.match(this.foldingStopMarker);

      if (match) {
        var i = match.index + match[0].length;
        if (match[1]) return this.closingBracketBlock(session, match[1], row, i);
        return session.getCommentFoldRange(row, i, -1);
      }
    };

    this.getSectionRange = function (session, row) {
      var line = session.getLine(row);
      var startIndent = line.search(/\S/);
      var startRow = row;
      var startColumn = line.length;
      row = row + 1;
      var endRow = row;
      var maxRow = session.getLength();

      while (++row < maxRow) {
        line = session.getLine(row);
        var indent = line.search(/\S/);
        if (indent === -1) continue;
        if (startIndent > indent) break;
        var subRange = this.getFoldWidgetRange(session, "all", row);

        if (subRange) {
          if (subRange.start.row <= startRow) {
            break;
          } else if (subRange.isMultiLine()) {
            row = subRange.end.row;
          } else if (startIndent == indent) {
            break;
          }
        }

        endRow = row;
      }

      return new Range(startRow, startColumn, endRow, session.getLine(endRow).length);
    };

    this.getCommentRegionBlock = function (session, line, row) {
      var startColumn = line.search(/\s*$/);
      var maxRow = session.getLength();
      var startRow = row;
      var re = /^\s*(?:\/\*|\/\/|--)#?(end)?region\b/;
      var depth = 1;

      while (++row < maxRow) {
        line = session.getLine(row);
        var m = re.exec(line);
        if (!m) continue;
        if (m[1]) depth--;else depth++;
        if (!depth) break;
      }

      var endRow = row;

      if (endRow > startRow) {
        return new Range(startRow, startColumn, endRow, line.length);
      }
    };
  }).call(FoldMode.prototype);
});
ace.define("ace/mode/json", ["require", "exports", "module", "ace/lib/oop", "ace/mode/text", "ace/mode/json_highlight_rules", "ace/mode/matching_brace_outdent", "ace/mode/behaviour/cstyle", "ace/mode/folding/cstyle", "ace/worker/worker_client"], function (require, exports, module) {
  "use strict";

  var oop = require("../lib/oop");

  var TextMode = require("./text").Mode;

  var HighlightRules = require("./json_highlight_rules").JsonHighlightRules;

  var MatchingBraceOutdent = require("./matching_brace_outdent").MatchingBraceOutdent;

  var CstyleBehaviour = require("./behaviour/cstyle").CstyleBehaviour;

  var CStyleFoldMode = require("./folding/cstyle").FoldMode;

  var WorkerClient = require("../worker/worker_client").WorkerClient;

  var Mode = function Mode() {
    this.HighlightRules = HighlightRules;
    this.$outdent = new MatchingBraceOutdent();
    this.$behaviour = new CstyleBehaviour();
    this.foldingRules = new CStyleFoldMode();
  };

  oop.inherits(Mode, TextMode);
  (function () {
    this.lineCommentStart = "//";
    this.blockComment = {
      start: "/*",
      end: "*/"
    };

    this.getNextLineIndent = function (state, line, tab) {
      var indent = this.$getIndent(line);

      if (state == "start") {
        var match = line.match(/^.*[\{\(\[]\s*$/);

        if (match) {
          indent += tab;
        }
      }

      return indent;
    };

    this.checkOutdent = function (state, line, input) {
      return this.$outdent.checkOutdent(line, input);
    };

    this.autoOutdent = function (state, doc, row) {
      this.$outdent.autoOutdent(doc, row);
    };

    this.createWorker = function (session) {
      var worker = new WorkerClient(["ace"], "ace/mode/json_worker", "JsonWorker");
      worker.attachToDocument(session.getDocument());
      worker.on("annotate", function (e) {
        session.setAnnotations(e.data);
      });
      worker.on("terminate", function () {
        session.clearAnnotations();
      });
      return worker;
    };

    this.$id = "ace/mode/json";
  }).call(Mode.prototype);
  exports.Mode = Mode;
});

(function () {
  ace.require(["ace/mode/json"], function (m) {
    if (( false ? undefined : _typeof(module)) == "object" && ( false ? undefined : _typeof(exports)) == "object" && module) {
      module.exports = m;
    }
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../node_modules/webpack/buildin/module.js */ "./node_modules/webpack/buildin/module.js")(module)))

/***/ }),

/***/ 3:
/*!****************************************!*\
  !*** multi ./resources/js/ace-json.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\laravel-hub\resources\js\ace-json.js */"./resources/js/ace-json.js");


/***/ })

/******/ });