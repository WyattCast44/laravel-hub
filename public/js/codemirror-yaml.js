/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/codemirror-yaml.js":
/*!*****************************************!*\
  !*** ./resources/js/codemirror-yaml.js ***!
  \*****************************************/
/***/ ((module, exports, __webpack_require__) => {

/* module decorator */ module = __webpack_require__.nmd(module);
var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE
(function (mod) {
  if (( false ? 0 : _typeof(exports)) == "object" && ( false ? 0 : _typeof(module)) == "object") // CommonJS
    mod(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../lib/codemirror'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));else if (true) // AMD
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../lib/codemirror'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())], __WEBPACK_AMD_DEFINE_FACTORY__ = (mod),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));else // Plain browser env
    {}
})(function (CodeMirror) {
  "use strict";

  CodeMirror.defineMode("yaml", function () {
    var cons = ['true', 'false', 'on', 'off', 'yes', 'no'];
    var keywordRegex = new RegExp("\\b((" + cons.join(")|(") + "))$", 'i');
    return {
      token: function token(stream, state) {
        var ch = stream.peek();
        var esc = state.escaped;
        state.escaped = false;
        /* comments */

        if (ch == "#" && (stream.pos == 0 || /\s/.test(stream.string.charAt(stream.pos - 1)))) {
          stream.skipToEnd();
          return "comment";
        }

        if (stream.match(/^('([^']|\\.)*'?|"([^"]|\\.)*"?)/)) return "string";

        if (state.literal && stream.indentation() > state.keyCol) {
          stream.skipToEnd();
          return "string";
        } else if (state.literal) {
          state.literal = false;
        }

        if (stream.sol()) {
          state.keyCol = 0;
          state.pair = false;
          state.pairStart = false;
          /* document start */

          if (stream.match('---')) {
            return "def";
          }
          /* document end */


          if (stream.match('...')) {
            return "def";
          }
          /* array list item */


          if (stream.match(/\s*-\s+/)) {
            return 'meta';
          }
        }
        /* inline pairs/lists */


        if (stream.match(/^(\{|\}|\[|\])/)) {
          if (ch == '{') state.inlinePairs++;else if (ch == '}') state.inlinePairs--;else if (ch == '[') state.inlineList++;else state.inlineList--;
          return 'meta';
        }
        /* list separator */


        if (state.inlineList > 0 && !esc && ch == ',') {
          stream.next();
          return 'meta';
        }
        /* pairs separator */


        if (state.inlinePairs > 0 && !esc && ch == ',') {
          state.keyCol = 0;
          state.pair = false;
          state.pairStart = false;
          stream.next();
          return 'meta';
        }
        /* start of value of a pair */


        if (state.pairStart) {
          /* block literals */
          if (stream.match(/^\s*(\||\>)\s*/)) {
            state.literal = true;
            return 'meta';
          }

          ;
          /* references */

          if (stream.match(/^\s*(\&|\*)[a-z0-9\._-]+\b/i)) {
            return 'variable-2';
          }
          /* numbers */


          if (state.inlinePairs == 0 && stream.match(/^\s*-?[0-9\.\,]+\s?$/)) {
            return 'number';
          }

          if (state.inlinePairs > 0 && stream.match(/^\s*-?[0-9\.\,]+\s?(?=(,|}))/)) {
            return 'number';
          }
          /* keywords */


          if (stream.match(keywordRegex)) {
            return 'keyword';
          }
        }
        /* pairs (associative arrays) -> key */


        if (!state.pair && stream.match(/^\s*(?:[,\[\]{}&*!|>'"%@`][^\s'":]|[^,\[\]{}#&*!|>'"%@`])[^#]*?(?=\s*:($|\s))/)) {
          state.pair = true;
          state.keyCol = stream.indentation();
          return "atom";
        }

        if (state.pair && stream.match(/^:\s*/)) {
          state.pairStart = true;
          return 'meta';
        }
        /* nothing found, continue */


        state.pairStart = false;
        state.escaped = ch == '\\';
        stream.next();
        return null;
      },
      startState: function startState() {
        return {
          pair: false,
          pairStart: false,
          keyCol: 0,
          inlinePairs: 0,
          inlineList: 0,
          literal: false,
          escaped: false
        };
      },
      lineComment: "#",
      fold: "indent"
    };
  });
  CodeMirror.defineMIME("text/x-yaml", "yaml");
  CodeMirror.defineMIME("text/yaml", "yaml");
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			loaded: false,
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/node module decorator */
/******/ 	(() => {
/******/ 		__webpack_require__.nmd = (module) => {
/******/ 			module.paths = [];
/******/ 			if (!module.children) module.children = [];
/******/ 			return module;
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/codemirror-yaml.js");
/******/ 	
/******/ })()
;