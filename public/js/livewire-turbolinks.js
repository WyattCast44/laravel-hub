/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/livewire-turbolinks.js":
/*!*********************************************!*\
  !*** ./resources/js/livewire-turbolinks.js ***!
  \*********************************************/
/***/ ((module, exports, __webpack_require__) => {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;(function (factory) {
   true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
		__WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : 0;
})(function () {
  'use strict';

  if (typeof window.livewire === 'undefined') {
    throw 'Livewire Turbolinks Plugin: window.Livewire is undefined. Make sure @livewireScripts is placed above this script include';
  }

  var firstTime = true;

  function wireTurboAfterFirstVisit() {
    // We only want this handler to run AFTER the first load.
    if (firstTime) {
      firstTime = false;
      return;
    }

    window.Livewire.restart();
  }

  function wireTurboBeforeCache() {
    document.querySelectorAll('[wire\\:id]').forEach(function (el) {
      var component = el.__livewire;
      var dataObject = {
        fingerprint: component.fingerprint,
        serverMemo: component.serverMemo,
        effects: component.effects
      };
      el.setAttribute('wire:initial-data', JSON.stringify(dataObject));
    });
  }

  document.addEventListener("turbo:load", wireTurboAfterFirstVisit);
  document.addEventListener("turbo:before-cache", wireTurboBeforeCache);
  document.addEventListener("turbolinks:load", wireTurboAfterFirstVisit);
  document.addEventListener("turbolinks:before-cache", wireTurboBeforeCache);
  Livewire.hook('beforePushState', function (state) {
    if (!state.turbolinks) state.turbolinks = {};
  });
  Livewire.hook('beforeReplaceState', function (state) {
    if (!state.turbolinks) state.turbolinks = {};
  });
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
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/livewire-turbolinks.js");
/******/ 	// This entry module used 'module' so it can't be inlined
/******/ 	
/******/ })()
;