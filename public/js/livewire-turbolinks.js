/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/livewire-turbolinks.js":
/*!*********************************************!*\
  !*** ./resources/js/livewire-turbolinks.js ***!
  \*********************************************/
/***/ ((module, exports, __webpack_require__) => {

eval("var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;(function (factory) {\n   true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),\n\t\t__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?\n\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :\n\t\t__WEBPACK_AMD_DEFINE_FACTORY__),\n\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : 0;\n})(function () {\n  'use strict';\n\n  if (typeof window.livewire === 'undefined') {\n    throw 'Livewire Turbolinks Plugin: window.Livewire is undefined. Make sure @livewireScripts is placed above this script include';\n  }\n\n  var firstTime = true;\n\n  function wireTurboAfterFirstVisit() {\n    // We only want this handler to run AFTER the first load.\n    if (firstTime) {\n      firstTime = false;\n      return;\n    }\n\n    window.Livewire.restart();\n  }\n\n  function wireTurboBeforeCache() {\n    document.querySelectorAll('[wire\\\\:id]').forEach(function (el) {\n      var component = el.__livewire;\n      var dataObject = {\n        fingerprint: component.fingerprint,\n        serverMemo: component.serverMemo,\n        effects: component.effects\n      };\n      el.setAttribute('wire:initial-data', JSON.stringify(dataObject));\n    });\n  }\n\n  document.addEventListener(\"turbo:load\", wireTurboAfterFirstVisit);\n  document.addEventListener(\"turbo:before-cache\", wireTurboBeforeCache);\n  document.addEventListener(\"turbolinks:load\", wireTurboAfterFirstVisit);\n  document.addEventListener(\"turbolinks:before-cache\", wireTurboBeforeCache);\n  Livewire.hook('beforePushState', function (state) {\n    if (!state.turbolinks) state.turbolinks = {};\n  });\n  Livewire.hook('beforeReplaceState', function (state) {\n    if (!state.turbolinks) state.turbolinks = {};\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbGl2ZXdpcmUtdHVyYm9saW5rcy5qcz83MDQwIl0sIm5hbWVzIjpbImZhY3RvcnkiLCJkZWZpbmUiLCJ3aW5kb3ciLCJsaXZld2lyZSIsImZpcnN0VGltZSIsIndpcmVUdXJib0FmdGVyRmlyc3RWaXNpdCIsIkxpdmV3aXJlIiwicmVzdGFydCIsIndpcmVUdXJib0JlZm9yZUNhY2hlIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImVsIiwiY29tcG9uZW50IiwiX19saXZld2lyZSIsImRhdGFPYmplY3QiLCJmaW5nZXJwcmludCIsInNlcnZlck1lbW8iLCJlZmZlY3RzIiwic2V0QXR0cmlidXRlIiwiSlNPTiIsInN0cmluZ2lmeSIsImFkZEV2ZW50TGlzdGVuZXIiLCJob29rIiwic3RhdGUiLCJ0dXJib2xpbmtzIl0sIm1hcHBpbmdzIjoiQUFBQyw2RUFBVUEsT0FBVixFQUFtQjtBQUNoQixVQUE2Q0Msb0NBQU9ELE9BQUQ7QUFBQTtBQUFBO0FBQUE7QUFBQSxrR0FBbkQsR0FDSUEsQ0FESjtBQUVILENBSEEsRUFHRSxZQUFZO0FBQ1g7O0FBRUEsTUFBSSxPQUFPRSxNQUFNLENBQUNDLFFBQWQsS0FBMkIsV0FBL0IsRUFBNEM7QUFDeEMsVUFBTSwwSEFBTjtBQUNIOztBQUVELE1BQUlDLFNBQVMsR0FBRyxJQUFoQjs7QUFFQSxXQUFTQyx3QkFBVCxHQUFvQztBQUNoQztBQUNBLFFBQUlELFNBQUosRUFBZTtBQUNYQSxlQUFTLEdBQUcsS0FBWjtBQUNBO0FBQ0g7O0FBRURGLFVBQU0sQ0FBQ0ksUUFBUCxDQUFnQkMsT0FBaEI7QUFDSDs7QUFFRCxXQUFTQyxvQkFBVCxHQUFnQztBQUM1QkMsWUFBUSxDQUFDQyxnQkFBVCxDQUEwQixhQUExQixFQUF5Q0MsT0FBekMsQ0FBaUQsVUFBVUMsRUFBVixFQUFjO0FBQzNELFVBQU1DLFNBQVMsR0FBR0QsRUFBRSxDQUFDRSxVQUFyQjtBQUNBLFVBQU1DLFVBQVUsR0FBRztBQUNmQyxtQkFBVyxFQUFFSCxTQUFTLENBQUNHLFdBRFI7QUFFZkMsa0JBQVUsRUFBRUosU0FBUyxDQUFDSSxVQUZQO0FBR2ZDLGVBQU8sRUFBRUwsU0FBUyxDQUFDSztBQUhKLE9BQW5CO0FBS0FOLFFBQUUsQ0FBQ08sWUFBSCxDQUFnQixtQkFBaEIsRUFBcUNDLElBQUksQ0FBQ0MsU0FBTCxDQUFlTixVQUFmLENBQXJDO0FBQ0gsS0FSRDtBQVNIOztBQUVETixVQUFRLENBQUNhLGdCQUFULENBQTBCLFlBQTFCLEVBQXdDakIsd0JBQXhDO0FBQ0FJLFVBQVEsQ0FBQ2EsZ0JBQVQsQ0FBMEIsb0JBQTFCLEVBQWdEZCxvQkFBaEQ7QUFDQUMsVUFBUSxDQUFDYSxnQkFBVCxDQUEwQixpQkFBMUIsRUFBNkNqQix3QkFBN0M7QUFDQUksVUFBUSxDQUFDYSxnQkFBVCxDQUEwQix5QkFBMUIsRUFBcURkLG9CQUFyRDtBQUNBRixVQUFRLENBQUNpQixJQUFULENBQWMsaUJBQWQsRUFBaUMsVUFBQUMsS0FBSyxFQUFJO0FBQ3RDLFFBQUksQ0FBQ0EsS0FBSyxDQUFDQyxVQUFYLEVBQXVCRCxLQUFLLENBQUNDLFVBQU4sR0FBbUIsRUFBbkI7QUFDMUIsR0FGRDtBQUdBbkIsVUFBUSxDQUFDaUIsSUFBVCxDQUFjLG9CQUFkLEVBQW9DLFVBQUFDLEtBQUssRUFBSTtBQUN6QyxRQUFJLENBQUNBLEtBQUssQ0FBQ0MsVUFBWCxFQUF1QkQsS0FBSyxDQUFDQyxVQUFOLEdBQW1CLEVBQW5CO0FBQzFCLEdBRkQ7QUFJSCxDQTdDQSxDQUFEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2xpdmV3aXJlLXR1cmJvbGlua3MuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gKGZhY3RvcnkpIHtcclxuICAgIHR5cGVvZiBkZWZpbmUgPT09ICdmdW5jdGlvbicgJiYgZGVmaW5lLmFtZCA/IGRlZmluZShmYWN0b3J5KSA6XHJcbiAgICAgICAgZmFjdG9yeSgpO1xyXG59KChmdW5jdGlvbiAoKSB7XHJcbiAgICAndXNlIHN0cmljdCc7XHJcblxyXG4gICAgaWYgKHR5cGVvZiB3aW5kb3cubGl2ZXdpcmUgPT09ICd1bmRlZmluZWQnKSB7XHJcbiAgICAgICAgdGhyb3cgJ0xpdmV3aXJlIFR1cmJvbGlua3MgUGx1Z2luOiB3aW5kb3cuTGl2ZXdpcmUgaXMgdW5kZWZpbmVkLiBNYWtlIHN1cmUgQGxpdmV3aXJlU2NyaXB0cyBpcyBwbGFjZWQgYWJvdmUgdGhpcyBzY3JpcHQgaW5jbHVkZSc7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGZpcnN0VGltZSA9IHRydWU7XHJcblxyXG4gICAgZnVuY3Rpb24gd2lyZVR1cmJvQWZ0ZXJGaXJzdFZpc2l0KCkge1xyXG4gICAgICAgIC8vIFdlIG9ubHkgd2FudCB0aGlzIGhhbmRsZXIgdG8gcnVuIEFGVEVSIHRoZSBmaXJzdCBsb2FkLlxyXG4gICAgICAgIGlmIChmaXJzdFRpbWUpIHtcclxuICAgICAgICAgICAgZmlyc3RUaW1lID0gZmFsc2U7XHJcbiAgICAgICAgICAgIHJldHVybjtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIHdpbmRvdy5MaXZld2lyZS5yZXN0YXJ0KCk7XHJcbiAgICB9XHJcblxyXG4gICAgZnVuY3Rpb24gd2lyZVR1cmJvQmVmb3JlQ2FjaGUoKSB7XHJcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW3dpcmVcXFxcOmlkXScpLmZvckVhY2goZnVuY3Rpb24gKGVsKSB7XHJcbiAgICAgICAgICAgIGNvbnN0IGNvbXBvbmVudCA9IGVsLl9fbGl2ZXdpcmU7XHJcbiAgICAgICAgICAgIGNvbnN0IGRhdGFPYmplY3QgPSB7XHJcbiAgICAgICAgICAgICAgICBmaW5nZXJwcmludDogY29tcG9uZW50LmZpbmdlcnByaW50LFxyXG4gICAgICAgICAgICAgICAgc2VydmVyTWVtbzogY29tcG9uZW50LnNlcnZlck1lbW8sXHJcbiAgICAgICAgICAgICAgICBlZmZlY3RzOiBjb21wb25lbnQuZWZmZWN0c1xyXG4gICAgICAgICAgICB9O1xyXG4gICAgICAgICAgICBlbC5zZXRBdHRyaWJ1dGUoJ3dpcmU6aW5pdGlhbC1kYXRhJywgSlNPTi5zdHJpbmdpZnkoZGF0YU9iamVjdCkpO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJ0dXJibzpsb2FkXCIsIHdpcmVUdXJib0FmdGVyRmlyc3RWaXNpdCk7XHJcbiAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwidHVyYm86YmVmb3JlLWNhY2hlXCIsIHdpcmVUdXJib0JlZm9yZUNhY2hlKTtcclxuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJ0dXJib2xpbmtzOmxvYWRcIiwgd2lyZVR1cmJvQWZ0ZXJGaXJzdFZpc2l0KTtcclxuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJ0dXJib2xpbmtzOmJlZm9yZS1jYWNoZVwiLCB3aXJlVHVyYm9CZWZvcmVDYWNoZSk7XHJcbiAgICBMaXZld2lyZS5ob29rKCdiZWZvcmVQdXNoU3RhdGUnLCBzdGF0ZSA9PiB7XHJcbiAgICAgICAgaWYgKCFzdGF0ZS50dXJib2xpbmtzKSBzdGF0ZS50dXJib2xpbmtzID0ge307XHJcbiAgICB9KTtcclxuICAgIExpdmV3aXJlLmhvb2soJ2JlZm9yZVJlcGxhY2VTdGF0ZScsIHN0YXRlID0+IHtcclxuICAgICAgICBpZiAoIXN0YXRlLnR1cmJvbGlua3MpIHN0YXRlLnR1cmJvbGlua3MgPSB7fTtcclxuICAgIH0pO1xyXG5cclxufSkpKTtcclxuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/livewire-turbolinks.js\n");

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
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/livewire-turbolinks.js");
/******/ 	
/******/ })()
;